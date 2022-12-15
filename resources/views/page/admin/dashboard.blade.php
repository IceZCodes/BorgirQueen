@extends('master.master')
@section('content')
    <div class="grid grid-cols-12 bg-[#F9FAFB]">
        <div class="bg-[#FFFFFF] col-span-2 border">
            <div class="mt-8 px-4">
                <div class="flex items-center text-base font-medium rounded-full md:mr-0 mb-4">
                    <img class="mr-2 w-8 h-8 rounded-full" src="{{ asset('assets/anon.png') }}" alt="user photo">
                        {{ auth()->user()->name }}
                </div>
                <a class="flex items-center text-sm font-normal cursor-pointer py-2">
                    Home
                </a>
                <a class="flex items-center text-sm font-normal cursor-pointer py-2">
                    Products
                </a>
                <a class="flex items-center text-sm font-normal cursor-pointer py-2">
                    My Orders
                </a>
                <a class="flex items-center text-sm font-normal cursor-pointer py-2">
                    All Customers
                </a>
                <a class="flex items-center text-sm font-normal cursor-pointer py-2">
                    Customer Orders
                </a>
            </div>
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
                <div class="">
                    <input class="text-sm" type="text" placeholder="Search by products">
                </div>
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
                                            @for ($i = 0; $i < 10; $i++)
                                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><img class="w-12" src="{{ asset('assets/landing/LoadedA1USDuo.png') }}" alt=""></td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                    Loaded Burger
                                                </td>
                                                <td class="max-w-xs text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap overflow-x-hidden">
                                                    Burger yang berisi daging dan saus spesial asli US dengan tambahan daging.
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                    Burger
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                    5
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                    <div class="flex flex-row gap-2 text-[#F2F2F2]">
                                                        <button class="font-semibold bg-[#2D9CDB] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2">Edit</button>
                                                        <button class="font-semibold bg-[#EB5757] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endfor
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
