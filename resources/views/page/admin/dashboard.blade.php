@extends('master.master')
@section('content')
    <div class="grid grid-cols-12 min-h-screen bg-[#F9FAFB]">
        <div class="bg-[#FFFFFF] col-span-2 border">
            @include('page.admin.components.sidebar')
        </div>
        <div class="col-start-3 px-8 py-12" style="grid-column-end: 13">
            @if (Session::has('success'))
                {{-- Success --}}
                <div id="modalPopup"
                    class="w-3/5 text-green-600 bg-green-100 p-4 rounded-lg border border-2 border-green-600 mb-4"
                    role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close float-right text-black"
                        onclick="getElementById('modalPopup').style.display = 'none'">X</button>
                </div>
            @endif
            <div class="bg-[#FFFFFF] p-4 rounded-lg border border-[1px] border-[#E5E7EB]">
                <div class="flex justify-between">
                    <div class="font-semibold">All Products</div>
                    <a href="{{ route('addFood') }}"
                        class="font-semibold bg-[#6FCF97] hover:bg-[#277748] ease-in-out duration-300 text-[#F2F2F2] flex flex-row items-center rounded-lg border border-[1px] border-[#E5E7EB] py-1 px-3">
                        <span class="text-3xl">
                            <svg class="svg-icon mr-2"
                                style="width: 1.25rem; height: 1em;vertical-align: middle;fill: #F2F2F2;overflow: hidden;"
                                viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M836 476H548V188c0-19.8-16.2-36-36-36s-36 16.2-36 36v288H188c-19.8 0-36 16.2-36 36s16.2 36 36 36h288v288c0 19.8 16.2 36 36 36s36-16.2 36-36V548h288c19.8 0 36-16.2 36-36s-16.2-36-36-36z" />
                            </svg>
                        </span>
                        New product
                    </a>
                </div>
                <form class="w-fit flex flex-row align-content-center items-center rounded-xl ">
                    <img type="submit" src="{{ asset('assets/admin/search.png') }}" alt="">
                    <input class="text-sm font-normal p-2 rounded-xl" id="search" name="search" type="search"
                        placeholder="Search by products" value="{{ request('search') }}" style="outline: none">
                </form>
                <div class="flex flex-col">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="">
                                    <table class="min-w-full">
                                        <thead class="bg-white border-b">
                                            <tr>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Image
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Product Name
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Description
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Category
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Price ($)
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($foods as $food)
                                                <tr
                                                    class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                            @if(str_contains($food->image, 'placeholder'))
                                                            <img class="w-12"
                                                            src="{{ asset('assets/placeholder/'. $food->image) }}"
                                                            alt="">
                                                            @else
                                                            <img class="w-12"
                                                            src="{{ asset('storage/images/' . $food->image) }}"
                                                            alt="">
                                                            @endif
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $food->name }}
                                                    </td>
                                                    <td
                                                        class="max-w-xs text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap overflow-x-hidden">
                                                        {{ $food->description }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $food->category->name }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $food->price }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        <form id="deleteFood"
                                                            action="/admin/food/delete/{{ $food->id }}" method="POST"
                                                            class="flex flex-row gap-2 text-[#F2F2F2]">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="admin/food/edit/{{ $food->id }}"
                                                                class="font-semibold bg-[#2D9CDB] hover:bg-[#134e70] ease-in-out duration-300 border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2">Edit</a>
                                                            <button onclick="deleteFood({{ $food->id }})"
                                                                class="font-semibold bg-[#EB5757] hover:bg-[#8f1111] ease-in-out duration-300 border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="flex justify-between pt-6">
                                    <div class="text-sm" style="">
                                        @if ($foods->firstItem())
                                        {{$foods->firstItem()}}
                                        -
                                        {{$foods->lastItem()}}
                                        of
                                        @endif
                                        {{$foods->total()}}
                                        results
                                    </div>
                                    <div class="flex text-sm">
                                        <div class="mr-10">
                                            {{$foods->currentPage()}}
                                            of
                                            {{$foods->lastPage()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="float-right mt-2">
                {{ $foods->links('pagination::default') }}
            </div>
        </div>
    </div>

    <script>
        function deleteFood(id) {
            var deleteFood = document.getElementById('deleteFood');
            if (confirm('Are you sure you want to delete this food?')) {
                deleteFood.action = '/admin/food/delete/' + id;
            }
        }
    </script>
@endsection

<style>
    .pagination {
        display: flex;
    }

    .pagination li {
        background: #FFFFFF;
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
