@extends('master.master')
<link href="{{ asset('css/cart&order.css') }}" rel="stylesheet">
@section('content')

    <body class="bg-gray-100">
        <div class="container mx-auto mt-10  min-h-screen">
            <div class="flex shadow-md my-10">
                <div class="w-full bg-white px-10 py-10">
                    <div class="flex justify-between border-b pb-8">
                        <h1 class="font-semibold text-4xl">My Cart</h1>
                        <h2 class="font-extralight text-xl mt-5"></h2>
                        <div class="hidden">{{ $sumPrice = 0 }}</div>
                    </div>
                    @forelse ($cartItems as $food)
                        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                            <div class="flex w-full">
                                <div class="w-48">
                                    @if (str_contains($food->image, 'placeholder'))
                                        <img class="h-27" src="{{ asset('assets/placeholder/' . $food->image) }}"
                                            alt="">
                                    @else
                                        <img class="h-27" src="{{ asset('storage/images/' . $food->image) }}"
                                            alt="">
                                    @endif
                                </div>
                                <div class="flex flex-col justify-between ml-4 flex-grow">
                                    <span class="font-semibold text-4xl">{{ $food->name }}</span>
                                    <span
                                        class="text-black font-semibold text-sm">{{ Str::limit($food->description, 100) }}</span>

                                    <form action="{{ route('deleteCart', $food->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="font-semibold hover:text-red-500 text-gray-800 text-xs mt-2">Remove</button>
                                    </form>
                                </div>
                            </div>
                            <a href=""></a>
                            <form action="{{ route('updateCart', $food->id) }}" method="POST">
                                @csrf
                                <div class="flex justify-center w-1/5">
                                    <input class="mx-2 border text-center w-8" name="foodQty" type="text"
                                        value="{{ $food->pivot->qty }}">
                                </div>
                            </form>
                            <div class="hidden">{{ $sumPrice += $food->pivot->price }}</div>
                            <span class="text-center w-1/5 font-semibold text-lg">${{ $food->pivot->price }}</span>
                        </div>
                    @empty
                        <h1 class="mt-2 font-black text-3xl"> No item(s) in Cart</h1>
                    @endforelse

                    <a href="{{ route('menu', 'food') }}" class="flex font-semibold text-indigo-600 text-sm mt-10">
                        <button data-collapse-toggle="navbar-cta" type="button"
                            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                            aria-controls="navbar-cta" aria-expanded="false">
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                    </a>
                </div>

                <div class="sticky w-1/4 px-8 py-10">
                    <form method="POST" action="{{ route('orderCart') }}">
                        @csrf

                        <h1 class="sticky font-semibold text-2xl border-b pb-8">Order Summary</h1>
                        <div class="flex justify-between mt-10 mb-5">
                        </div>
                        <div>
                            <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
                            <select name="shipping" class="block p-2 text-gray-600 w-full text-sm">
                                <option value="3.99">Gojek - $3.99</option>
                                <option value="2.99">Grab - $2.99</option>
                                <option value="0">Pick Up</option>
                            </select>
                        </div>
                        <div class="py-5">
                            <label for="address" class="font-semibold inline-block mb-3 text-sm uppercase">Address</label>
                            <input type="text" id="address" name="address" placeholder="Enter your address...."
                                class="p-2 text-sm w-full" value="{{$address}}">
                        </div>
                        <div class="mb-5">
                            <label for="notes" class="font-semibold inline-block mb-3 text-sm uppercase">Notes</label>
                            <input type="text" id="notes" name="notes" placeholder="Enter your notes...."
                                class="p-2 text-sm w-full">
                        </div>
                        <div class="border-t mt-8">
                            <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                                <span>Total cost</span>
                                <span name="sumPrice">${{ $sumPrice }}</span>
                            </div>
                            <button
                                class=" bg-[#005BAA] font-bold hover:bg-blue-800 py-3 text-xl text-white uppercase w-full rounded-lg"
                                type="submit">Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
