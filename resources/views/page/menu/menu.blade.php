@extends('master.master')

@section('content')
    <div class="flex justify-center items-center"
        style="background-image: url({{ asset('assets/menu/hero.png') }}); background-size: cover; height:461px;">
        <p class="text-8xl font-black text-white">Our Menu</p>
    </div>
    <div class="flex justify-center items-center bg-[#9ED4D4] gap-40" style="height:92px">
        <a href="{{ route('menu') }}">
            <p class="{{ $food === 'food' ? 'font-bold' : '' }} text-white text-4xl hover:font-bold">Food</p>
        </a>
        <a href="{{ route('drink') }}">
            <p class="{{ $food === 'drink' ? 'font-bold' : '' }} text-white text-4xl hover:font-bold">Drinks</p>
        </a>
        <a href="{{ route('extra') }}">
            <p class="{{ $food === 'extra' ? 'font-bold' : '' }} text-white text-4xl hover:font-bold">Extra</p>
        </a>
    </div>
    <div class="ml-44 mr-44 gap-24 justify-center mt-12 mb-12 grid grid-cols-4">
        @forelse ($foods as $food)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="{{ asset('assets/menu/' . $food->image) }}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $food->name }}</div>
                    <p class="text-gray-700 text-base">
                        {{ Str::limit($food->description, 100) }}
                    </p>
                </div>
                <div class="flex px-6 pb-4 justify-between items-center">
                    <p class="text-2xl text-[#FF8906]">${{ $food->price }}</p>
                    {{-- <form action="{{ route('addCart', $food->id) }}" method="POST">
                        @csrf
                        <button class="inline-block bg-[#D72300] rounded-xl px-3 py-1 text-base mr-2" type="submit"><img
                                src="{{ asset('assets/menu/cartMenu.png') }}" alt="" srcset="">
                        </button>
                    </form> --}}
                    <a href="{{ route('item', $food->id) }}"><button
                            class="inline-block bg-[#D72300] rounded-xl px-3 py-1 text-base mr-2" type="submit"><img
                                src="{{ asset('assets/menu/cartMenu.png') }}" alt="" srcset="">
                        </button></a>
                </div>
            </div>
        @empty
            <p> isEmpty</p>
        @endforelse
    </div>
@endsection
