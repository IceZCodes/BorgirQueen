<?php

namespace App\Http\Controllers;

use App\Mail\CustomerOrder;
use App\Mail\OrderStatus;
use App\Models\Category;
use App\Models\Food;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $search = $request->input('search');
        $foods = Food::with('category')->paginate(10);
        if ($search) {
            $foods = Food::where('name', 'like', "%$search%")->with('category')->paginate(10);
            $foods->appends(['search' => $search]);
        }

        return view('page.admin.dashboard', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'foods' => $foods,
        ]);
    }

    public function addFoodPage()
    {
        $categories = Category::all();
        return view('page.admin.add-food', [
            'title' => 'Add Food',
            'active' => 'addFood',
            'categories' => $categories,
        ]);
    }

    public function createFood(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:0|max:99999999',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10000',
        ], [
            'name.required' => 'Name is required',
            'price.required' => 'Price is required',
            'price.numeric' => 'Price is not valid',
            'price.min' => 'Price is not valid',
            'price.max' => 'Price exceeded price limit',
            'category.required' => 'Category is required',
            'description.required' => 'Description is required',
            'image.required' => 'Image is required',
            'image.image' => 'Image is not valid',
            'image.mimes' => 'Image is not valid',
            'image.max' => 'Image is too large',
        ]);

        $image = $request->file('image');
        $imageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('public/images', $imageName);

        Food::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('admin')->with('success', 'Food created successfully');
    }

    public function editFoodPage($slug)
    {
        $categories = Category::all();
        $food = Food::where('slug', $slug)->first();
        return view('page.admin.edit-food', [
            'title' => 'Edit Food',
            'active' => 'editFood',
            'food' => $food,
            'categories' => $categories,
        ]);
    }

    public function updateFood(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:0|max:99999999',
            'category' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:10000',
        ], [
            'name.required' => 'Name is required',
            'price.required' => 'Price is required',
            'price.numeric' => 'Price is not valid',
            'price.min' => 'Price is not valid',
            'category.required' => 'Category is required',
            'description.required' => 'Description is required',
            'image.image' => 'Image is not valid',
            'image.mimes' => 'Image is not valid',
            'image.max' => 'Image is too large',
        ]);

        $food = Food::find($id);
        if ($request->file('image')) {
            Storage::delete('public/images/' . $food->image);
            $image = $request->file('image');
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);

            $food->update([
                'name' => $request->name,
                'price' => $request->price,
                'category_id' => $request->category,
                'description' => $request->description,
                'image' => $imageName,
            ]);
        } else {
            $food->update([
                'name' => $request->name,
                'price' => $request->price,
                'category_id' => $request->category,
                'description' => $request->description,
            ]);
        }

        return redirect()->back()->with('success', 'Product updated successfully');
    }

    public function deleteFood($id)
    {
        $food = Food::FindorFail($id);
        Storage::delete('public/images/' . $food->image);
        $food->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }

    public function allCustomer(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $customers = User::where('name', 'like', "%$search%")->where('is_admin', 0)->paginate(10);
            $customers->appends(['search' => $search]);
            return view('page.admin.allCustomer', [
                'title' => 'Customers',
                'active' => 'customers',
                'customers' => $customers,
            ]);
        }

        $customers = User::where('is_admin', 0)->paginate(10);
        return view('page.admin.allCustomer', [
            'title' => 'Customers',
            'active' => 'customers',
            'customers' => $customers,
        ]);
    }

    public function customerOrders(Request $req)
    {
        $search = $req->input('search');
        if ($search) {
            $orders = Order::join('users', 'users.id', '=', 'orders.user_id')->where('users.name', 'like', "%$search%")->where('is_admin', 0)->paginate(10);
            $orders->appends(['search' => $search]);
            return view('page.admin.customerOrder', [
                'title' => 'Orders',
                'active' => 'orders',
                'filter' => 'priority'
            ], compact('orders'));
        }

        $orders1 = Order::where('status', 'Preparing')->orderBy('updated_at', 'DESC');
        $orders2 = Order::where('status', 'Unconfirmed')->orderBy('updated_at', 'DESC');
        $orders = $orders2->union($orders1)->paginate(10);

        return view('page.admin.customerOrder', [
            'title' => 'Orders',
            'active' => 'orders',
            'filter' => 'priority'
        ], compact('orders'));
    }

    public function customerOrdersFilter(Request $req)
    {
        $status = $req->status;

        if ($status == 'complete') {
            $orders = Order::where('status', 'Completed')->orderBy('updated_at', 'DESC')->paginate(10);
            $filter = 'complete';
        } else if ($status == 'delivery') {
            $orders = Order::where('status', 'OnDelivery')->orderBy('updated_at', 'DESC')->paginate(10);
            $filter = 'delivery';
        }

        $search = $req->input('search');
        if ($search) {
            if ($status == 'complete') {
                $orders = Order::join('users', 'users.id', '=', 'orders.user_id')->where('users.name', 'like', "%$search%")->where('is_admin', 0)->where('status', 'Completed')->paginate(10);
            } else if ($status == 'delivery') {
                $orders = Order::join('users', 'users.id', '=', 'orders.user_id')->where('users.name', 'like', "%$search%")->where('is_admin', 0)->where('status', 'OnDelivery')->paginate(10);
            }

            $orders->appends(['search' => $search]);
            return view('page.admin.customerOrder', [
                'title' => 'Orders',
                'active' => 'orders',
                'filter' => $filter
            ], compact('orders'));
        }

        return view('page.admin.customerOrder', [
            'title' => 'Orders',
            'active' => 'orders',
            'filter' => $filter
        ], compact('orders'));
    }

    public function editOrder($id, Request $req)
    {
        $order = Order::findOrFail($id);
        if ($req->action == 'accept') {
            $order->update([
                'status' => 'Preparing',
                'updated_at' => Carbon::now(),
            ]);
        } elseif ($req->action == 'onDelivery') {
            $order->update([
                'status' => 'OnDelivery',
                'updated_at' => Carbon::now(),
            ]);
        } else {
            $order->update([
                'status' => 'Completed',
                'updated_at' => Carbon::now(),
            ]);
        }
        Mail::to($order->user->email)->send(new OrderStatus($order));
        return redirect()->route('customerOrder')->with('success', 'Order updated successfully');
    }
}
