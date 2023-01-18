@extends('master.master')
<link href="{{ asset('css/cart&order.css') }}" rel="stylesheet">
@section('content')

    <body class="bg-gray-100">
        <div class="container mx-auto mt-10">
            <div class="flex shadow-md my-10">
                <div class="w-full bg-white px-10 py-10">
                    <div  class="flex justify-between border-b pb-8">
                        <h1 class="font-semibold text-4xl">My Cart</h1>
                        <h2 class="font-extralight text-xl mt-5"></h2>
                        <div class="hidden">{{ $sumPrice = 0, $sumQty = 0 }}</div>
                    </div>
                    @foreach ($carts as $food)
                        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                            <div class="flex w-full">
                                <div class="w-48">
                                    <img class="h-27" src="{{ asset('assets/menu/' . $food->image) }}" alt="">
                                </div>
                                <div class="flex flex-col justify-between ml-4 flex-grow">
                                    <span class="font-semibold text-4xl">{{ $food->name }}</span>
                                    <span
                                        class="text-black font-semibold text-sm">{{ Str::limit($food->description, 100) }}</span>

                                        <form action="{{ route('addCart', $food->id) }}" method="POST">
                                            @csrf
                                            <a href="#"
                                            class="font-semibold hover:text-red-500 text-gray-800 text-xs mt-2">Remove</a>
                                        </form>


                                </div>
                            </div>
                            <a href=""></a>
                            <div class="flex justify-center w-1/5">
                                {{-- <img class="fill-current text-gray-600 w-3" src="{{ asset('assets/MinusLogo.svg') }}"
                                    alt=""> --}}

                                <input class="mx-2 border text-center w-8" type="text" value="1">

                                {{-- <img class="fill-current text-gray-600 w-4" src="{{ asset('assets/PlusLogo.svg') }}"
                                    alt=""> --}}
                            </div>
                            <div class="hidden">{{ $sumPrice += $food->price }}</div>
                            <span class="text-center w-1/5 font-semibold text-lg">${{ $food->price }}</span>
                        </div>
                    @endforeach

                    <a href="{{ route('menu') }}" class="flex font-semibold text-indigo-600 text-sm mt-10">
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
                    <h1 class="sticky font-semibold text-2xl border-b pb-8">Order Summary</h1>
                    <div class="flex justify-between mt-10 mb-5">
                    </div>
                    <div>
                        <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
                        <select class="block p-2 text-gray-600 w-full text-sm">
                            <option>Gojek - $3.99</option>
                            <option>Grab - $2.99</option>
                            <option>Pick Up</option>
                        </select>
                    </div>
                    <div class="py-5">
                        <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Address</label>
                        <input type="text" id="promo" placeholder="Enter your address...." class="p-2 text-sm w-full">
                    </div>
                    <div class="mb-5">
                        <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Notes</label>
                        <input type="text" id="promo" placeholder="Enter your notes...." class="p-2 text-sm w-full">
                    </div>
                    <button type="button"
                        class="text-white bg-[#005BAA] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">Apply</button>
                    <div class="border-t mt-8">
                        <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                            <span>Total cost</span>
                            <span>${{ $sumPrice }}</span>
                        </div>
                        <button
                            class=" bg-[#005BAA] font-bold hover:bg-blue-800 py-3 text-xl text-white uppercase w-full rounded-lg ">Checkout</button>
                    </div>
                </div>

            </div>
        </div>
    @endsection
