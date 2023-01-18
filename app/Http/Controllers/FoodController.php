<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\FoodCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $req)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->first();
        FoodCart::create([
            'food_id' => $id,
            'cart_id' => $cart->id,
            'qty' => $req->foodQty
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->first();
        $carts = $carts->foods;
        return view('page.cart', [
            'title' => 'Cart',
            'active' => 'cart'
        ], compact('carts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
