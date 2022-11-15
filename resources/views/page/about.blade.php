@extends('master.master')

@section('content')
    {{-- Vison Mission --}}
    <div class="flex  justify-center  px-53 rounded pb-5">
        <div class="w-44 pt-13"> 
            <div class="font-bold text-center text-gray-500 text-sm mt-4 mb-2">ABOUT US</div>
            <div class=" mt-10">
                <div class="text-center font-bold text-3xl font-mono">Our Vision</div>
                <p class="text-center pt-4 text-xl font-semibold">
                    TO BE
                </p>
                <p class="text-center pt-1 text-xl">
                    THE WORLD'S FAVORITE QUICK-SERVICE
                </p>
                <p class="text-center pt-1 text-xl">
                    RESTAURANT
                </p>
            </div>
            <div class="mt-10">
                <div class="text-center font-bold text-3xl font-mono">Our Mission</div>
                <p class="text-center pt-4 text-xl font-semibold">
                    TO CREATE 
                </p>
                <p class="text-center pt-1 text-xl">
                    POSITIVE MEMORIES FOR ALL WHO TOUCH
                </p>
                <p class="text-center pt-1 text-xl">
                    BORGIR QUEEN™
                </p>
            </div>           
        </div>
        <div class="">
            <img class="w-full" src="{{ asset('assets/BorgirQueen.png') }}" alt="">
        </div>
    </div>

    {{-- company overview --}}
    <div class="shadow-lg bg-white mx-2">
        <div class="flex px-53">
            <div class="m-1">
                <img class="" src="{{ asset('assets/4486939.jpg') }}" alt="">
            </div>
    
            <div class="">
                <div class="text-center pt-13 font-bold text-3xl font-mono">Company Overview</div>
                <p class="pt-3 text-center font-mono font-medium text-xl text-gray-700">
                    International Borgir Queen Inc., (IBQ), based in Minneapolis, Minnesota, is the parent company of American Borgir Queen Corporation and Borgir Queen Canada, Inc. Through its subsidiaries, IBQ develops, licenses and services a system of more than 7,000 locations in the United States, Canada and more than 20 other countries.
                </p>
            </div>           
        </div>
        
        {{-- Our Team --}}
        <div class="text-center font-mono font-bold text-5xl py-8">OUR TEAM</div>
        <div class="flex gap-24 justify-center text-center">
            <div class="max-w-sm rounded overflow-hidden">
                <img class="w-full" src="{{ asset('assets/4486939.jpg') }}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">ALFIAN ZURFI</div>
                    <p class="text-gray-700 text-base">
                        Member
                    </p>
                </div>
            </div>
            <div class="max-w-sm rounded overflow-hidden">
                <img class="w-full" src="{{ asset('assets/4486939.jpg') }}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">BAGUS SAPUTRA</div>
                    <p class="text-gray-700 text-base">
                        Member
                    </p>
                </div>
            </div>
            <div class="max-w-sm rounded overflow-hidden">
                <img class="w-full" src="{{ asset('assets/4486939.jpg') }}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">BENEDIC MATTHEW HALIM</div>
                    <p class="text-gray-700 text-base">
                        Member
                    </p>
                </div>
            </div>
        </div>
        <div class="flex gap-24 justify-center mt-12 pb-6 text-center">
            <div class="max-w-sm rounded overflow-hidden">
                <img class="w-full" src="{{ asset('assets/4486939.jpg') }}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">MICHAEL LIMARAN</div>
                    <p class="text-gray-700 text-base">
                        Member
                    </p>
                </div>
            </div>
            <div class="max-w-sm rounded overflow-hidden">
                <img class="w-full" src="{{ asset('assets/4486939.jpg') }}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">RYAN CHANDRA SASMITA</div>
                    <p class="text-gray-700 text-base">
                        Member
                    </p>
                </div>
            </div>
        </div>
        </div>
        
    </div>
    
@endsection