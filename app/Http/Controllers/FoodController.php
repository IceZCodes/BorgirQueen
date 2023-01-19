<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\FoodCart;
use App\Models\FoodOrder;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{

    public function index()
    {
        $foods = Food::where('category_id', '=', 1)->paginate(12);
        return view('page.menu.menu', [
            'title' => 'Menu',
            'active' => 'menu',
            'food' => 'food'
        ], compact('foods'));
    }

    public function drink()
    {
        $foods = Food::where('category_id', '=', 2)->paginate(12);
        return view('page.menu.menu', [
            'title' => 'Menu',
            'active' => 'menu',
            'food' => 'drink'
        ], compact('foods'));
    }

    public function extra()
    {
        $foods = Food::where('category_id', '=', 3)->paginate(12);
        return view('page.menu.menu', [
            'title' => 'Menu',
            'active' => 'menu',
            'food' => 'extra'
        ], compact('foods'));
    }

    public function item($id)
    {
        $item = Food::findOrFail($id);
        return view('page.menu.item', [
            'title' => $item->name,
            'active' => 'menu',
        ], compact('item'));
    }

    public function store($id, Request $req)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->first();

        $itemsPrice = Food::findOrFail($id)->price * $req->foodQty;
        $checkIfExist = FoodCart::where('cart_id', $cart->id)->where('food_id', $id)->first();

        if ($checkIfExist) {
            $checkIfExist->update([
                'qty' => $checkIfExist->qty + $req->foodQty,
                'price' => $checkIfExist->price + $itemsPrice,
            ]);
        } else {
            FoodCart::create([
                'food_id' => $id,
                'cart_id' => $cart->id,
                'qty' => $req->foodQty,
                'price' => $itemsPrice,
            ]);
        }
        return back();
    }

    public function update($id, Request $req)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->first();

        $itemsPrice = Food::findOrFail($id)->price * $req->foodQty;
        FoodCart::where('cart_id', $cart->id)->where('food_id', $id)->update([
            'qty' => $req->foodQty,
            'price' => $itemsPrice,
        ]);
        return back();
    }

    public function delete($id)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->first();
        FoodCart::where('cart_id', $cart->id)->where('food_id', $id)->delete();
        return back();
    }

    public function show()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->first();
        $cartItems = $carts->foods;

        return view('page.cart', [
            'title' => 'Cart',
            'active' => 'cart'
        ], compact('cartItems'));
    }

    public function orderUser(Request $req)
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', Auth::user()->id)->first();
        $cartItems = $carts->foods;

        $sumPrice = 0;

        foreach ($cartItems as $item) {
            $sumPrice = $sumPrice + $item->pivot->price + $req->shipping;
        }

        $order = Order::create([
            'user_id' => $user->id,
            'date' => Carbon::today()->toDateString(),
            'time' => Carbon::now(),
            'address' => $req->address,
            'shipping' => $req->shipping,
            'status' => 'Preparing',
            'total_price' => $sumPrice,
        ]);

        foreach ($cartItems as $item) {
            FoodOrder::create([
                'food_id' => $item->id,
                'order_id' => $order->id,
                'qty' => $item->pivot->qty,
                'price' => $item->pivot->price
            ]);
        }
        return back();
    }
}
