<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
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
            return view('page.admin.dashboard', [
                'title' => 'Admin Dashboard',
                'active' => 'dashboard',
                'foods' => $foods,
            ]);
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

        $food = Food::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('admin')->with('success', 'Food created successfully');
    }

    public function editFoodPage($id)
    {
        $categories = Category::all();
        $food = Food::find($id);
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

        return redirect()->route('admin')->with('success', 'Product updated successfully');
    }

    public function deleteFood($id)
    {
        $foods = Food::find($id);
        Storage::delete('public/images/' . $foods->image);
        $foods->delete();
        return redirect()->route('admin')->with('success', 'Product deleted successfully');
    }

    public function allCustomer(Request $request)
    {
        $search = $request->search;
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

    public function customerOrders()
    {
        $order = Order::all();
        dd($order);

        return view('page.admin.customerOrder', [
            'title' => 'Orders',
            'active' => 'orders'
        ]);
    }
}
