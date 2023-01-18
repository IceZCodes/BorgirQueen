<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard(Request $request) {
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

    public function addFoodPage() {
        $categories = Category::all();
        return view('page.admin.add-food', [
            'title' => 'Add Food',
            'active' => 'addFood',
            'categories' => $categories,
        ]);
    }

    public function createFood(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.required' => 'Name is required',
            'price.required' => 'Price is required',
            'price.numeric' => 'Price is not valid',
            'price.min' => 'Price is not valid',
            'category.required' => 'Category is required',
            'description.required' => 'Description is required',
            'image.required' => 'Image is required',
            'image.image' => 'Image is not valid',
            'image.mimes' => 'Image is not valid',
            'image.max' => 'Image is too large',
        ]);

        $image = $request->file('image');
        $imageName = time().'-'.$image->getClientOriginalName();
        $image->storeAs('public/images', $imageName);

        Food::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category'),
            'description' => $request->input('description'),
            'image' => $imageName,
        ]);

        return redirect()->route('admin')->with('success', 'Food created successfully');
    }

    public function deleteFood($id) {
        $foods = Food::find($id);
        Storage::delete('public/images/'.$foods->image);
        $foods->delete();
        return redirect()->route('admin')->with('success', 'Product deleted successfully');
    }
}
