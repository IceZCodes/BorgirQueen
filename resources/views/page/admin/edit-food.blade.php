@extends('master.master')
@section('content')
    <div class="grid grid-cols-12 bg-[#FFFFFF]">
        <form method="POST" action="/admin/food/edit/{{$food->id}}" class="col-start-4 col-end-10 min-h-screen my-4" enctype="multipart/form-data">
            @csrf
            <h1 class="font-semibold text-2xl my-4">Edit Product</h1>
            <div class="mb-2">
                <div class="p-4 flex flex-col bg-[#F9FAFB] rounded-lg border border-[#E5E7EB]">
                    <label class="text-sm font-semibold text-[#6B7280]" for="name">Name<span class="text-[#F43F5E]">*</span></label>
                    <input class="bg-[#F9FAFB]" type="text" id="name" name="name" value="{{$food->name}}" placeholder="Cheeseburger Deluxe" style="outline: none" required>
                </div>
                @error('name')
                <span class="text-red-600">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="mb-2">
                <div class="p-4 flex flex-col bg-[#F9FAFB] rounded-lg border border-[#E5E7EB]">
                    <label class="text-sm font-semibold text-[#6B7280]" for="slug">Slug<span class="text-[#F43F5E]">*</span></label>
                    <input class="bg-[#F9FAFB] text-[#6B7280]" type="text" id="slug" name="slug" value="{{$food->slug}}" placeholder="Cheeseburger Deluxe" style="outline: none" disabled>
                </div>
            </div>
            <div class="mb-2">
                <div class="p-4 flex flex-col bg-[#F9FAFB] rounded-lg border border-[#E5E7EB]">
                    <label class="text-sm font-semibold text-[#6B7280]" for="description">Description<span class="text-[#F43F5E]">*</span></label>
                    <textarea class="bg-[#F9FAFB]" rows="5" type="text" id="description" name="description" placeholder="the slice of cheese is placed on top of the meat patty" style="outline: none" required>{{$food->description}}</textarea>
                </div>
                @error('description')
                    <span class="text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-2">
                <div class="p-4 flex flex-col bg-[#F9FAFB] rounded-lg border border-[#E5E7EB]">
                    <label class="text-sm font-semibold text-[#6B7280]" for="category">Category<span class="text-[#F43F5E]">*</span></label>
                    <select class="bg-[#F9FAFB] mt-2" name="category" id="category" style="outline: none" required>
                        <option value="{{$food->category->id}}" selected hidden>{{$food->category->name}}</option>
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
            </div>
            <div class="mb-2">
                <div class="p-4 flex flex-col bg-[#F9FAFB] rounded-lg border border-[#E5E7EB] mb-2">
                    <label class="text-sm font-semibold text-[#6B7280]" for="price">Price<span class="text-[#F43F5E]">*</span></label>
                    <input class="bg-[#F9FAFB]" type="number" id="price" name="price" value="{{$food->price}}" step="any" placeholder="5" style="outline: none" required>
                </div>
                @error('price')
                    <span class="text-red-600">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-2">
                <div class="flex flex-col">
                    <h2 class="text-lg font-semibold">Image</h2>
                    <label id="label_image" for="image" class="font-semibold text-center border border-[#E5E7EB] cursor-pointer py-2 rounded-lg">{{$food->image}}</label>
                    <input id="image" class="mt-2 hidden"type="file" type="image" name="image" onchange="getImage(this);">
                    @error('image')
                        <span class="text-red-600">
                            {{ $message }}
                        </span>
                    @enderror
                    @if(str_contains($food->image, 'placeholder'))
                    <img id="preview_image" class="w-2/3 h-2/3 mt-2" src="{{ asset('assets/placeholder/'.$food->image) }}" alt="preview_image">
                    @else
                    <img id="preview_image" class="w-2/3 h-2/3 mt-2" src="{{ asset('storage/images/' . $food->image) }}" alt="preview_image">
                    @endif
                    <button type="submit" class="bg-[#2F80ED] hover:bg-[#0b3e82] ease-in-out duration-300 text-[#FFFFFF] rounded-lg self-end px-12 py-1 mt-4">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection

<script>
    function getImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload
            let preview = document.getElementById("preview_image");
            let label = document.getElementById("label_image");
            reader.onload = function (e) {
                preview.src = e.target.result;
                label.innerHTML = input.files[0].name;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
