@extends('master.master')
@section('content')
    <div class="grid grid-cols-12 bg-[#F9FAFB]">
        <div class="bg-[#FFFFFF] col-span-2 border">
            @include('page.admin.components.sidebar')
        </div>
        <div class="col-start-3 px-8 py-12" style="grid-column-end: 13">
            <div class="bg-[#FFFFFF] p-4 rounded-lg border border-[1px] border-[#E5E7EB]">
                <div class="flex justify-between">
                    <div class="font-semibold">All Product</div>
                </div>
                <div class="flex justify-end mr-8">
                    <button class="mr-2 text-gray-700" type="button" id="button-addon2">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="#d1d5db"  d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                    </button>
                    <input class="text-sm" type="text" placeholder="Search by transaction ID" style="outline: none">
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
                                                    Date
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Transaction ID
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Price
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Payment
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Status
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Transaction Details
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for ($i = 0; $i < 10; $i++)
                                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">

                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                    02/06/2022
                                                </td>
                                                <td class="max-w-xs text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap overflow-x-hidden">
                                                    TR123456
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                    $ 39
                                                </td>
                                                <td class="text-sm text-[#4ADE80] font-normal px-6 py-4 whitespace-nowrap" style="list-style-type: disc;">
                                                    <li><span class="text-gray-900">PAID</span></li>
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                    Completed
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap ">
                                                    <div class="flex flex-row gap-2 text-[#F2F2F2] ">
                                                        <button class="font-semibold bg-[#9B51E0] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2" data-modal-target="staticModal" data-modal-toggle="staticModal">Transaction Details</button>
                                                    </div>
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap ">
                                                    <div class="flex flex-row gap-2 text-[#F2F2F2]">
                                                        <button class="font-semibold bg-[#2D9CDB] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2">Accepted</button>
                                                        <button class="font-semibold bg-[#EB5757] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2">Rejected</button>
                                                        <button class="font-semibold bg-[#6FCF97] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2">Completed</button>
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
