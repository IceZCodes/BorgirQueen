<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->first();
        $countCartItems = count($carts->foods);

        return view('page.index', [
            'title' => 'Home',
            'active' => 'home',
            'countCartItems' => $countCartItems
        ]);
    }

    public function orders()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->first();
        $countCartItems = count($carts->foods);

        return view('page.order', [
            'title' => 'Order',
            'active' => 'order',
            'countCartItems' => $countCartItems
        ]);
    }

    public function about()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->first();
        $countCartItems = count($carts->foods);

        return view('page.about', [
            'title' => 'About Us',
            'active' => 'about',
            'countCartItems' => $countCartItems
        ]);
    }
}
