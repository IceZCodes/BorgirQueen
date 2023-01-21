@extends('master.master')

@section('content')
    <div class="flex flex-col">
        <div class="flex justify-center items-center"
            style="background-image: url({{ asset('assets/menu/hero.png') }}); background-size: cover; height:461px;">
            <p class="text-8xl font-black text-white">Our Menu</p>
        </div>
        <div class="flex justify-center items-center bg-[#9ED4D4] gap-40" style="height:92px">
            <a href="{{ route('menu', 'food') }}">
                <p class="{{ $food === 'food' ? 'font-bold' : '' }} text-white text-4xl hover:font-bold">Food</p>
            </a>
            <a href="{{ route('menu', 'drink') }}">
                <p class="{{ $food === 'drink' ? 'font-bold' : '' }} text-white text-4xl hover:font-bold">Drinks</p>
            </a>
            <a href="{{ route('menu', 'extra') }}">
                <p class="{{ $food === 'extra' ? 'font-bold' : '' }} text-white text-4xl hover:font-bold">Extra</p>
            </a>
        </div>
        <div class="ml-44 mr-44 gap-24 justify-center mt-12 mb-12 grid grid-cols-4">
            @forelse ($foods as $food)
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    @if (str_contains($food->image, 'placeholder'))
                        <img class="w-full" src="{{ asset('assets/placeholder/' . $food->image) }}" alt="BorgirQueen Item">
                    @else
                        <img class="w-full h-[200px]" src="{{ asset('storage/images/' . $food->image) }}"
                            alt="BorgirQueen Item">
                    @endif
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $food->name }}</div>
                        <p class="text-gray-700 text-base">
                            {{ Str::limit($food->description, 100) }}
                        </p>
                    </div>
                    <div class="flex px-6 pb-4 justify-between items-center">
                        <p class="text-2xl text-[#FF8906]">${{ $food->price }}</p>
                        <a href="{{ route('item', [$food->category->slug, $food->slug]) }}"><button
                                class="inline-block bg-[#D72300] rounded-xl px-3 py-1 text-base mr-2" type="submit"><img
                                    src="{{ asset('assets/menu/cartMenu.png') }}" alt="" srcset="">
                            </button></a>
                    </div>
                </div>
            @empty
                <p> isEmpty</p>
            @endforelse
        </div>
        <div class="flex mt-2 mr-44 mb-10 justify-end">
            {{ $foods->links('pagination::default') }}
        </div>
    </div>
@endsection

<style>
    .pagination {
        display: flex;
    }

    .pagination li {
        background: #F9FAFB;
        list-style: none;
        padding: 0.5rem;
    }

    .pagination li a {
        text-decoration: none;
        color: #6B7280;
    }

    .pagination li.active a {
        color: #2D9CDB;
    }

    .pagination li.active span {
        color: #2D9CDB;
    }

    .pagination li a:hover {
        color: #2D9CDB;
    }
</style>
