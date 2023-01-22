<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $carts = Cart::where('user_id', Auth::user()->id)->first();
            $countCartItems = count($carts->foods);
        } else {
            $countCartItems = 0;
        }

        return view('page.index', [
            'title' => 'Home',
            'active' => 'home',
            'countCartItems' => $countCartItems
        ]);
    }

    public function orders()
    {
        if (Auth::check()) {
            $carts = Cart::where('user_id', Auth::user()->id)->first();
            $countCartItems = count($carts->foods);
        } else {
            $countCartItems = 0;
        }

        return view('page.order', [
            'title' => 'Order',
            'active' => 'order',
            'countCartItems' => $countCartItems
        ]);
    }

    public function about()
    {
        if (Auth::check()) {
            $carts = Cart::where('user_id', Auth::user()->id)->first();
            $countCartItems = count($carts->foods);
        } else {
            $countCartItems = 0;
        }

        return view('page.about', [
            'title' => 'About Us',
            'active' => 'about',
            'countCartItems' => $countCartItems
        ]);
    }
}
