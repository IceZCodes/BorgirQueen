@extends('master.master')

@section('content')
    <div class="flex flex-row py-20 bg-[#F3F0E7] justify-center items-center gap-16 px-8">
        <div class="flex flex-col w-[680px] gap-4">
            <p class="font-black text-4xl">{{ $item->name }}</p>
            <p class="text-2xl text-[#FF8906]">${{ $item->price }}</p>
            <p class="text-xl">{{ $item->description }}</p>
            <form action="{{ route('addCart', $item->id) }}" method="POST">
                @csrf
                <div class="flex flex-col gap-9">
                    <input type="number" name="foodQty" class="rounded-xl py-1 w-36 text-2xl justify-center text-center"
                        placeholder="Quantity" min="1" style="outline: none">
                    <button class="bg-[#005BAA] rounded-3xl py-3 text-white px-16 w-60" type="submit">Add to Cart</button>
                    {{-- onclick="alert('Added ' + $item->name)" --}}
                </div>
            </form>
        </div>
        @if ($item->image == 'cheeseBurger.jpg')
            <img class=" w-[800px]" src="{{ asset('assets/menu/' . $item->image) }}">

        @else
            <img class="w-[800px] h-[400px]"
            src="{{ asset('storage/images/' . $item->image) }}"
            alt="">
        @endif
    </div>
@endsection