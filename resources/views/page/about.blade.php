@extends('master.master')

@section('content')
    {{-- Our Story --}}
    <div class="flex bg-[#FEFAF5]">
        <div class="w-full">
            <img class="w-full h-full" src="{{ asset('assets/about/about-burger-1.png') }}" alt="">
        </div>

        <div class="w-full">
            <div class="mt-8 ml-9 mr-10">
                <div class="pl-2 font-bold text-4xl">
                    <span class="text-red-600">OUR</span>
                    <span class="text-[#F9AB55]">STORY</span>
                </div>
                <div class="pl-2 pr-5">
                    <p class="pt-4">
                        Once upon a time, there were two sisters a you traveling through many countries and cities, in search of a secret burger recipe. They traveled far and wide to find the perfect set of flavours that would make the best burger.
                    </p>    
                    <p class="pt-4">
                        Till they finally arrived in Ohio. After making thousands of burgers to find the right way to really satisfy the people. One day they served this one burger to a group of people. They ate it silently and once they finished, they shouted “THIS IS AWESOME”. After all this time, it is that simple to satisfy them. It is all about the TASTE. The combination of soft buns, juicy patties, fresh veggies, mouthwatering sauces made with love with a rich fusion of flavours to make one AWESOME burger.
                     </p> 
                </div>
            </div>
        </div>           
    </div>

    {{-- Our Philosophy --}}
    <div class="flex">
        <div class="w-full">
            <div class="mt-16 ml-21 mr-11">
                <div class="font-bold text-4xl">
                    <span class="text-[#F9AB55]">OUR</span>
                    <span class="text-red-600">PHILOSOPHY</span>
                </div>

                <p class="pt-4 text-xl">
                    The combination of simple and flavorful creates AWESOME products. We do not live a bland life, and this is what our customers will get from our products. Every bite of Borgir Queen will brighten your day up because it’s
                </p>

                <div class="pt-2 text-red-600 font-bold text-center text-10xl" >
                    SIMPLY TASTY!
                </div>
                
                <div class="pt-6 flex text-white font-bold justify-center">
                    <form action={{ route('menu') }}>
                        @csrf
                        <button class="bg-[#F9AB55] rounded-3xl px-5 py-2" >
                            View Menu
                        </button>
                    </form>
                </div>  
            </div>
        </div>  
        
        <div class="w-full">
            <img class="w-full h-full" src="{{ asset('assets/about/about-burger-2.png') }}" alt="">
        </div>
    </div>

    
@endsection