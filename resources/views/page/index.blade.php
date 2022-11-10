@extends('master.master')
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
@section('content')
    <div class="px-52 relative landing h-screen text-[#2B3437] opacity-100">
        <div class="tagline absolute bg-[#FFFFFFE5]  rounded-tl-[4rem] rounded-br-[4rem] p-10">
            <div class="font-bold text-5xl">
                Super Borgir Queen™
            </div>
            <div class="mt-4 font-light text-xl">
                The best borgir for all
            </div>
            <button class="mt-8 bg-[#005BAA] font-bold text-[#FEFDFB] text-3xl p-4 rounded-xl">
                Order Now
            </button>
        </div>
        <div class="right">

        </div>
    </div>
    <div class="px-52 py-12">
        <div class="promo grid grid-cols-4 lg:grid-cols-6 grid-flow-row gap-8">
            @for ($i = 0; $i < 6; $i++)
            <div class="card col-span-2 rounded-xl shadow-lg px-8 py-4">
                <h3 class="font-semibold text-xl">Free Borgir</h3>
                <p>Use this promo card to get free cheese borgir*</p>
                <img class="w-64 mt-4" src="{{asset('assets/promo-cheeseburger.jpg')}}" alt="">
                <div class="font-light text-xs mt-2">*Terms and conditions may apply</div>
                <button class="bg-[#005BAA] font-bold text-[#FEFDFB] text-lg p-2 rounded-xl mt-4">Use Promo</button>
            </div>
            @endfor
        </div>
    </div>
@endsection
