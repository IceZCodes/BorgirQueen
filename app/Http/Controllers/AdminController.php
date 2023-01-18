<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request) {
        $search = $request->input('search');
        $foods = Food::with('category')->paginate(10);
        if ($search) {
            $foods = Food::where('name', 'like', "%$search%")->with('category')->paginate(10);
            $foods->appends(['search' => $search]);
            return view('page.admin.dashboard', [
                'title' => 'Dashboard',
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
}
