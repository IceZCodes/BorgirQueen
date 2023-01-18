@extends('master.master')
@section('content')
    <div class="grid grid-cols-12 bg-[#F9FAFB]">
        <form method="POST" action="/admin/food/add" class="col-start-4 col-end-10 my-4" enctype="multipart/form-data">
            @csrf
            <h1 class="font-semibold text-2xl my-4">Create New Product</h1>
            <div class="p-4 flex flex-col bg-[#F9FAFB] rounded-lg border border-[#E5E7EB] mb-2">
                <label class="text-sm font-semibold" for="name">Name<span class="text-[#F43F5E]">*</span></label>
                <input class="bg-[#F9FAFB]" type="text" id="name" name="name" value="{{old('name')}}" placeholder="Cheeseburger Deluxe" style="outline: none" required>
            </div>
            @error('name')
                <span class="text-red-600">
                    {{ $message }}
                </span>
            @enderror
            <div class="p-4 flex flex-col bg-[#F9FAFB] rounded-lg border border-[#E5E7EB] mb-2">
                <label class="text-sm font-semibold" for="description">Description<span class="text-[#F43F5E]">*</span></label>
                <textarea class="bg-[#F9FAFB]" rows="5" type="text" id="description" name="description" placeholder="the slice of cheese is placed on top of the meat patty" style="outline: none" required>{{old('description')}}</textarea>
            </div>
            @error('description')
                <span class="text-red-600">
                    {{ $message }}
                </span>
            @enderror
            <div class="p-4 flex flex-col bg-[#F9FAFB] rounded-lg border border-[#E5E7EB] mb-2">
                <label class="text-sm font-semibold" for="category">Category<span class="text-[#F43F5E]">*</span></label>
                <select class="bg-[#F9FAFB] mt-2" name="category" id="category" style="outline: none" required>
                    <option selected disabled hidden>Select a category</option>
                    @foreach ($categories as $c)
                        <option class="text-black" value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
            </div>
            @error('category')
                <span class="text-red-600">
                    {{ $message }}
                </span>
            @enderror
            <div class="p-4 flex flex-col bg-[#F9FAFB] rounded-lg border border-[#E5E7EB] mb-2">
                <label class="text-sm font-semibold" for="price">Price<span class="text-[#F43F5E]">*</span></label>
                <input class="bg-[#F9FAFB]" type="number" id="price" name="price" value="{{old('price')}}" placeholder="5" style="outline: none" required>
            </div>
            @error('price')
                <span class="text-red-600">
                    {{ $message }}
                </span>
            @enderror

            <div class="flex flex-col">
                <h2 class="text-lg font-semibold">Image</h2>
                <input class="mt-2" type="file" type="image" name="image" required>
                <button type="submit" class="bg-[#2F80ED] text-[#FFFFFF] rounded-lg self-end px-12 py-1">Save</button>
            </div>
        </form>
    </div>
@endsection
