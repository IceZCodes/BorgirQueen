@extends('master.master')
@section('content')
    <div class="grid grid-cols-12 bg-[#F9FAFB]">
        <div class="bg-[#FFFFFF] col-span-2 border">
            @include('page.admin.components.sidebarCustomer')
        </div>
        <div class="col-start-3 px-8 py-12" style="grid-column-end: 13">
            <div class="bg-[#FFFFFF] p-4 rounded-lg border border-[1px] border-[#E5E7EB]">
                <div class="flex justify-between">
                    <div class="font-semibold text-lg">My Orders</div>
                </div>
                <div class="flex justify-end mr-8">
                    <button class="mr-2 text-gray-700" type="button" id="button-addon2">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="#d1d5db"  d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                    </button>
                    <input class="text-sm" type="text" placeholder="Search by name" style="outline: none">
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-8 lg:-mx-10">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="">
                                    <table class="min-w-full">
                                        <thead class="bg-white border-b">
                                            <tr>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Name
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Email
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Phone Number
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Address
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Date/Time
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                  Order
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                  Total Price
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                  Notes
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                  Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for ($i = 0; $i < 20; $i++)
                                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">

                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                  David Martinez
                                                </td>
                                                <td class="max-w-xs text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap overflow-x-hidden">
                                                  davidmartinez@gmail.com
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                  +62817882677
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                  Jl. Sunter Indah XII 4 Blok A No.5
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                  2022-10-12/10.20
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                  The Great Chicken Burger 1x, Fries 2x
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                  $ 24.59
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                  No mayo
                                                </td>
                                                <td class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                  Completed
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