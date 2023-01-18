@extends('master.master')
@section('content')
    <div class="grid grid-cols-12 bg-[#F9FAFB]">
        <div class="bg-[#FFFFFF] col-span-2 border">
            @include('page.admin.components.sidebar')
        </div>
        <div class="col-start-3 px-8 py-12" style="grid-column-end: 13">
            <div class="bg-[#FFFFFF] p-4 rounded-lg border border-[1px] border-[#E5E7EB]">
                <div class="flex justify-between">
                    <div class="font-semibold">All Products</div>
                    <button class="font-semibold bg-[#6FCF97] text-[#F2F2F2] flex flex-row items-center rounded-lg border border-[1px] border-[#E5E7EB] py-1 px-3">
                        <span class="text-3xl">
                            <svg class="svg-icon mr-2" style="width: 1.25rem; height: 1em;vertical-align: middle;fill: #F2F2F2;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M836 476H548V188c0-19.8-16.2-36-36-36s-36 16.2-36 36v288H188c-19.8 0-36 16.2-36 36s16.2 36 36 36h288v288c0 19.8 16.2 36 36 36s36-16.2 36-36V548h288c19.8 0 36-16.2 36-36s-16.2-36-36-36z"  />
                            </svg>
                        </span>
                        New product
                    </button>
                </div>
                <form class="w-fit flex flex-row align-content-center items-center rounded-xl ">
                    <img type="submit" src="{{ asset('assets/admin/search.png')}}" alt="">
                    <input class="text-sm font-normal p-2 rounded-xl" id="search" name="search" type="search" placeholder="Search by products" value="{{request('search')}}" style="outline: none">
                </form>
                <div class="flex flex-col">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="">
                                    <table class="min-w-full">
                                        <thead class="bg-white border-b">
                                            <tr>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Image
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Product Name
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Description
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Category
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Price ($)
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($foods as $food)
                                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><img class="w-12" src="{{ asset('assets/landing/LoadedA1USDuo.png') }}" alt=""></td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                    {{$food->name}}
                                                </td>
                                                <td class="max-w-xs text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap overflow-x-hidden">
                                                    {{$food->description}}
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                    {{$food->category->name}}
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                    {{$food->price}}
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                    <div class="flex flex-row gap-2 text-[#F2F2F2]">
                                                        <button class="font-semibold bg-[#2D9CDB] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2">Edit</button>
                                                        <button class="font-semibold bg-[#EB5757] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="float-right mt-2">
                {{$foods->links('pagination::default')}}
            </div>
        </div>
    </div>
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
