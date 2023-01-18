<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
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

    public function allCustomer(Request $request){
        $search = $request->search;
        if ($search) {
            $customers = User::where('name', 'like', "%$search%")->where('is_admin', 0)->paginate(10);
            $customers->appends(['search' => $search]);
            return view('page.admin.allCustomer', [
                'title' => 'All Customer',
                'active' => 'allCustomer',
                'customers' => $customers,
            ]);
        }

        $customers = User::where('is_admin', 0)->paginate(10);
        return view('page.admin.allCustomer', [
            'title' => 'All Customer',
            'active' => 'allCustomer',
            'customers' => $customers,
        ]);
    }
}
