<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
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
            $orders = Order::where('user_id', Auth::user()->id)->with('foods')->orderBy('updated_at', 'DESC')->paginate(10);
            $countCartItems = count($carts->foods);
        } else {
            $countCartItems = 0;
        }

        return view('page.order', [
            'title' => 'Order',
            'active' => 'orders',
            'countCartItems' => $countCartItems
        ], compact('orders'));
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
