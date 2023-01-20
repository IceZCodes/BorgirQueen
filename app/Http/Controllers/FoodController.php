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

    public function item($slug)
    {
        $item = Food::where('slug', $slug)->first();
        return view('page.menu.item', [
            'title' => $item->name,
            'active' => 'menu',
        ], compact('item'));
    }

    public function store(Request $req)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->first();

        $itemsPrice = Food::findOrFail($req->id)->price * $req->foodQty;
        $checkIfExist = FoodCart::where('cart_id', $cart->id)->where('food_id', $req->id)->first();

        $req->validate([
            'foodQty' => ['required', 'integer'],
        ]);

        if ($checkIfExist) {
            $checkIfExist->update([
                'qty' => $checkIfExist->qty + $req->foodQty,
                'price' => $checkIfExist->price + $itemsPrice,
            ]);
        } else {
            FoodCart::create([
                'food_id' => $req->id,
                'cart_id' => $cart->id,
                'qty' => $req->foodQty,
                'price' => $itemsPrice,
            ]);
        }
        return redirect()->back()->with('success', 'Item added successfully');
    }

    public function update($id, Request $req)
    {
        $req->validate([
            'foodQty' => ['required', 'integer'],
        ]);

        $cart = Cart::where('user_id', Auth::user()->id)->first();

        $itemsPrice = Food::findOrFail($id)->price * $req->foodQty;
        FoodCart::where('cart_id', $cart->id)->where('food_id', $id)->update([
            'qty' => $req->foodQty,
            'price' => $itemsPrice,
        ]);

        return redirect()->route('cart')->with('success', 'Item updated successfully');
    }

    public function delete($id)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->first();
        FoodCart::where('cart_id', $cart->id)->where('food_id', $id)->delete();

        return redirect()->route('cart')->with('success', 'Item deleted successfully');
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

        $req->validate([
            'address' => ['required', 'string', 'min:10'],
            'shipping' => ['required'],
        ]);

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
        FoodCart::where('cart_id', $carts->id)->delete();

        return redirect()->route('menu')->with('success', 'Order successful');
    }
}
