@extends('master.master')
@section('content')
    <div class="grid grid-cols-12 bg-[#F9FAFB]">
        <div class="bg-[#FFFFFF] col-span-2 border">
            @include('page.admin.components.sidebarCustomer')
        </div>
        <div class="relative min-h-screen col-start-3 px-8 py-12" style="grid-column-end: 13">
            @if (Session::has('success'))
                {{-- Success --}}
                <div id="modalPopup"
                    class="fixed top-10 right-4 w-fit drop-shadow-xl text-black bg-[#F5F3FF] p-3 px-4 rounded-lg border border-2 border-[#7C3AED] mb-4">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close float-right text-black ml-8"
                        onclick="getElementById('modalPopup').style.display = 'none'">X</button>
                </div>
            @endif
            <div class="overflow-x-auto bg-[#FFFFFF] px-7 py-4 rounded-lg border border-[1px] border-[#E5E7EB]">
                <div class="flex justify-between">
                    <div class="font-semibold text-lg">My Orders</div>
                </div>
                <div class="flex justify-start mr-8 mt-4">
                    <button class="mr-2 text-gray-700" type="button" id="button-addon2">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#d1d5db"
                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                            </path>
                        </svg>
                    </button>
                    <input class="text-sm" type="text" placeholder="Search by name" style="outline: none">
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-col">
                        <div class="sm:-mx-8 lg:-mx-10">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="">
                                    <table class="min-w-full">
                                        <thead class="bg-white border-b">
                                            <tr>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Name
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Address
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Date/Time
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Order
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Total Price
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Notes
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($orders as $order)
                                                <tr
                                                    class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">

                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $order->user->name }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $order->address }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $order->date }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        @foreach ($order->foods as $food)
                                                            {{ $food->name }} {{ $food->pivot->qty }} piece(s)
                                                            <br>
                                                        @endforeach
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $order->total_price }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $order->notes }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap ">
                                                        <div class="flex flex-row gap-2 text-[#F2F2F2]">
                                                            @if ($order->status == 'Unconfirmed')
                                                                <button
                                                                    class="font-semibold bg-[#733338] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2">{{ $order->status }}</button>
                                                            @elseif ($order->status == 'Preparing')
                                                                <button
                                                                    class="font-semibold bg-[#6FCF97] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2">{{ $order->status }}</button>
                                                            @elseif ($order->status == 'OnDelivery')
                                                                <button
                                                                    class="font-semibold bg-[#9B51E0] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2">{{ $order->status }}</button>
                                                            @else
                                                                <button
                                                                    class="font-semibold bg-[#2D9CDB] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2">{{ $order->status }}</button>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        No Orders
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="flex justify-between pt-6">
                                    <div class="text-sm" style="">
                                        @if ($orders->firstItem())
                                            {{ $orders->firstItem() }}
                                            -
                                            {{ $orders->lastItem() }}
                                            of
                                        @endif
                                        {{ $orders->total() }}
                                        results
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="float-right mt-2">
                {{ $orders->links('pagination::default') }}
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
