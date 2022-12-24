@extends('master.master')

@section('content')
    <div class="px-52 pt-12"></div>
    <div class="flex gap-24 justify-center mt-12 mb-12">
        @forelse ($foods as $food)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="{{ asset('assets/menu/' . $food->image) }}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $food->name }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $food->description }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <form action="{{ route('addCart', $food->id) }}" method="POST">
                        @csrf
                        <button
                            class="inline-block bg-[#005BAA] rounded-xl px-10 py-1 text-base font-semibold text-[#fff] mr-2 mb-2 hover:bg-[#09457a]"
                            type="submit">Order
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <p> isEmpty</p>
        @endforelse
    </div>
@endsection
