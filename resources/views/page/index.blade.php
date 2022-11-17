@extends('master.master')
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
@section('content')
<div class="grid grid-cols-3 text-[#2B3437] px-24 lg:px-52">
    <div class="col-span-3 flex flex-row justify-between mt-24">
        <div>
            <h1 class="text-[#EE3E42] font-bold text-7xl whitespace-pre-line">
                The Tastiest &
                Mind-Blowing
                <span class="text-[#F9AA54]">Bites</span>
            </h1>
            <button class="font-black tracking-wide rounded-full bg-[#005BAA] text-[#FFFFFF] mt-8 px-12 py-2">
                Order Now
            </button>
        </div>

        <div class="w-2/5 h-2/5">
            <img  src="{{ asset('assets/landing/borgir-hasbulla.png') }}" alt="borgir">
        </div>
    </div>
    <div class="col-span-3 mt-36">
        <div class="flex flex-col items-center">
            <h1 class="font-black text-6xl text-[#F9AA54] mb-8">
                About Us
            </h1>
            <div class="mb-8">
                <img src="{{ asset('assets/landing/burger-banner.png') }}" alt="">
            </div>
            <p class="font-normal text-xl text-center px-20">
                We are a burger shop that has been established since 1988 that puts forward a
                unique but delicius concept in each of our dishes, we have used this concept
                since we first opened in Bandung, every day we have a unique menu according
                to the schedule, and we provide quality ingredients in each of our dishes
            </p>
            <button class="font-black tracking-wide rounded-full bg-[#005BAA] text-[#FFFFFF] mt-12 px-8 py-2">
                Read More
            </button>
        </div>
    </div>
    <div class="col-span-3 mt-36">
        <div class="flex flex-col items-center">
            <h1 class="font-black text-6xl text-[#EE3E42] mb-16">
                Our Product
            </h1>
            <div class="flex flex-row justify-between gap-24">
                <div class="w-1/2 h-2/5">
                    <img src="{{ asset('assets/landing/TwoCheeseDuo.png') }}" alt="">
                </div>
                <div class="w-1/2 flex flex-col items-center">
                    <h2 class="font-black text-4xl mb-6">
                        Two Cheese Deluxe
                        Signature Stackburger
                    </h2>
                    <p class="text-lg">
                        The Two Cheese Deluxe Signature Stackburger has two 100% seasoned real
                        beef patties, topped with perfectly melted Sharp American and White Cheddar,
                        tomato, onion, lettuce, pickles, ketchup and mayo on a soft and toasted bun.
                    </p>
                    <button class="font-black tracking-wide rounded-full bg-[#005BAA] text-[#FFFFFF] mt-8 px-8 py-2">
                        Order Now
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-span-3 mt-36">
        <div class="flex flex-col items-center">
            <div class="flex flex-row justify-between gap-24">
                <div class="w-1/2 flex flex-col items-center">
                    <h2 class="font-black text-4xl mb-6">
                        Loaded Jack’O
                        Signature Stackburger
                    </h2>
                    <p class="text-lg">
                        The Loaded A.1.Jack'O double Signature Stackburger features two 100% seasoned
                        real beef burger patties, topped with A.1. Thick & Hearty Steak Sauce, creamy
                        peppercorn sauce, Applewood smoked bacon, perfectly melted Sharp American and
                        crunchy onion rings. Served on a soft and toasted bun.
                    </p>
                    <button class="font-black tracking-wide rounded-full bg-[#005BAA] text-[#FFFFFF] mt-8 px-8 py-2">
                        Order Now
                    </button>
                </div>
                <div class="w-1/2 h-2/5">
                    <img src="{{ asset('assets/landing/LoadedA1USDuo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="col-span-3 my-36">
        <div class="flex flex-col items-center">
            <div class="flex flex-row justify-between gap-24">
                <div class="w-1/2 h-2/5">
                    <img src="{{ asset('assets/landing/FlamethrowerUSDuo.png') }}" alt="">
                </div>
                <div class="w-1/2 flex flex-col items-center">
                    <h2 class="font-black text-4xl mb-6">
                        FlameThrower
                        Signature Stackburger
                    </h2>
                    <p class="text-lg">
                        The FlameThrower double Signature Stackburger is packed with flavor: two 100%
                        seasoned real beef patties, topped with fiery FlameThrower sauce, perfectly melted
                        Pepper Jack, Jalapeno bacon, tomato and lettuce on a soft and toasted bun.
                    </p>
                    <button class="font-black tracking-wide rounded-full bg-[#005BAA] text-[#FFFFFF] mt-8 px-8 py-2">
                        Order Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
