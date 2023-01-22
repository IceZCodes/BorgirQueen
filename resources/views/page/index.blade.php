@extends('master.master')
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
@section('content')
    <div class="landing grid grid-cols-3 text-[#2B3437] mb-48 px-24 lg:px-36">
        <div class="col-span-3 flex flex-col-reverse md:flex-row items-center md:items-start md:justify-between mt-24">
            <div class="flex flex-col justify-between md:justify-start items-stretch md:items-center ">
                <h1 class="text-[#EE3E42] font-bold text-5xl md:text-7xl whitespace-normal md:whitespace-pre-line">
                    The Tastiest &
                    Mind-Blowing
                    <span class="text-[#F9AA54]">Bites</span>
                </h1>
                <a href="{{ route('menu', 'food') }}"><button
                        class="font-black tracking-wide rounded-full bg-[#005BAA] hover:bg-[#00447f] text-[#FFFFFF] mt-8 px-12 py-2">
                        Order Now
                    </button></a>
            </div>

            <div class="w-3/6 md:h-3/5">
                <img src="{{ asset('assets/landing/burger-landing.png') }}" alt="borgir">
            </div>
        </div>
        <div class="col-span-3 mt-36">
            <div class="flex flex-col items-center">
                <div class="relative flex flex-row justify-between gap-24">
                    <div class="relative bottom-0 md:bottom-48 w-1/2 h-2/5">
                        <img src="{{ asset('assets/landing/sandwich-landing.png') }}" alt="">
                    </div>
                    <div class="relative top-24 w-1/2 flex flex-col items-center">
                        <h2 class="font-black text-8xl text-[#F9AA54] mb-8">
                            About Us
                        </h2>
                        <p class="font-normal text-xl text-center">
                            We are a burger shop that has been established since 1988 that puts forward a
                            unique but delicius concept in each of our dishes, we have used this concept
                            since we first opened in Bandung, every day we have a unique menu according
                            to the schedule, and we provide quality ingredients in each of our dishes
                        </p>
                        <a href="/about"
                            class="font-black tracking-wide rounded-full bg-[#005BAA] hover:bg-[#00447f] text-[#FFFFFF] mt-8 px-8 py-2">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3 mt-36">
            <div class="flex flex-col items-center">
                <h1 class="font-black text-8xl text-[#F5E54D] mb-48">
                    Our Product
                </h1>
                <div class="flex flex-row-reverse justify-between gap-24">
                    <div class="w-1/2 h-2/5">
                        <img src="{{ asset('assets/landing/LoadedA1USDuo.png') }}" alt="">
                    </div>
                    <div class="w-1/2 flex flex-col items-center">
                        <h2 class="font-black text-5xl text-[#F5E54D] mb-6">
                            Loaded Jack’O
                            Signature Stackburger
                        </h2>
                        <p class="text-lg text-[#FFFFFF]">
                            The Loaded A.1.Jack'O double Signature Stackburger features two 100% seasoned
                            real beef burger patties, topped with A.1. Thick & Hearty Steak Sauce, creamy
                            peppercorn sauce, Applewood smoked bacon, perfectly melted Sharp American and
                            crunchy onion rings. Served on a soft and toasted bun.
                        </p>
                        <a href="{{ route('menu', 'food') }}"><button
                                class="font-black tracking-wide rounded-full bg-[#005BAA] hover:bg-[#00447f] text-[#FFFFFF] mt-8 px-8 py-2">
                                Order Now
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3 mt-48">
            <div class="flex flex-col items-center">
                <div class="flex flex-row justify-between gap-24">
                    <div class="w-1/2 h-2/5">
                        <img src="{{ asset('assets/landing/TwoCheeseDuo.png') }}" alt="">
                    </div>
                    <div class="w-1/2 flex flex-col items-center">
                        <h2 class="font-black text-5xl text-[#F5E54D] mb-6">
                            Two Cheese Deluxe
                            Signature Stackburger
                        </h2>
                        <p class="text-lg text-[#FFFFFF]">
                            The Two Cheese Deluxe Signature Stackburger has two 100% seasoned real
                            beef patties, topped with perfectly melted Sharp American and White Cheddar,
                            tomato, onion, lettuce, pickles, ketchup and mayo on a soft and toasted bun.
                        </p>
                        <a href="{{ route('menu', 'food') }}"><button
                                class="font-black tracking-wide rounded-full bg-[#005BAA] hover:bg-[#00447f] text-[#FFFFFF] mt-8 px-8 py-2">
                                Order Now
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3 my-48">
            <div class="flex flex-col items-center">
                <div class="flex flex-row-reverse justify-between gap-24">
                    <div class="w-1/2 h-2/5">
                        <img src="{{ asset('assets/landing/FlamethrowerUSDuo.png') }}" alt="">
                    </div>
                    <div class="w-1/2 flex flex-col items-center">
                        <h2 class="font-black text-5xl text-[#F5E54D] mb-6">
                            FlameThrower
                            Signature Stackburger
                        </h2>
                        <p class="text-lg text-[#FFFFFF]">
                            The FlameThrower double Signature Stackburger is packed with flavor: two 100%
                            seasoned real beef patties, topped with fiery FlameThrower sauce, perfectly melted
                            Pepper Jack, Jalapeno bacon, tomato and lettuce on a soft and toasted bun.
                        </p>
                        <a href="{{ route('menu', 'food') }}"><button
                                class="font-black tracking-wide rounded-full bg-[#005BAA] hover:bg-[#00447f] text-[#FFFFFF] mt-8 px-8 py-2">
                                Order Now
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
