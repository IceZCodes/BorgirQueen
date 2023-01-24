@extends('master.master')
@section('content')
    <div class="grid grid-cols-12 min-h-screen bg-[#F9FAFB]">
        <div class="bg-[#FFFFFF] col-span-2 border">
            @include('page.admin.components.sidebar')
        </div>
        <div class="col-start-3 px-8 py-12" style="grid-column-end: 13">
            <div class="overflow-x-auto bg-[#FFFFFF] p-4 rounded-lg border border-[1px] border-[#E5E7EB]">
                @if (Session::has('success'))
                    {{-- Success --}}
                    <div id="modalPopup"
                        class="fixed top-10 right-4 w-fit drop-shadow-xl text-black bg-[#F5F3FF] p-3 px-4 rounded-lg border border-2 border-[#7C3AED] mb-4">
                        {{ Session::get('success') }}
                        <button type="button" class="btn-close float-right text-black ml-8"
                            onclick="getElementById('modalPopup').classList.add('hidden')">X</button>
                    </div>
                @endif
                <div class="flex justify-between">
                    <div class="font-semibold">All Product</div>
                </div>
                <form action="{{ route('customerOrder') }}">
                    <div class="flex justify-end mr-8">
                        <button class="mr-2 text-gray-700" type="button" id="button-addon2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="#d1d5db"
                                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                </path>
                            </svg>
                        </button>
                        <input class="text-sm" id="search" name="search" type="search" placeholder="Search by name"
                            style="outline: none;" value="{{ request('search') }}">
                    </div>
                </form>
                <div class="flex flex-col">
                    <div class="flex flex-col">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="">
                                    <table class="min-w-full">
                                        <thead class="bg-white border-b">
                                            <tr>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Date
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    User
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Items
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Shipping Type
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Payment Type
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Price
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Status
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Notes
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Address
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($orders as $order)
                                                <tr
                                                    class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">

                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $order->date }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $order->user->name }}
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
                                                        {{ $order->shipping_type }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $order->payment_type }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        ${{ $order->total_price }}
                                                    </td>
                                                    <td class="text-sm {{ $order->status == 'Unconfirmed' ? 'text-[#733338]' : '' }} {{ $order->status == 'Preparing' ? 'text-[#6FCF97]' : '' }} {{ $order->status == 'OnDelivery' ? 'text-[#9B51E0]' : '' }} {{ $order->status == 'Completed' ? 'text-[#2D9CDB]' : '' }} font-normal px-6 py-4 whitespace-nowrap"
                                                        style="list-style-type: disc;">
                                                        <li><span class="text-gray-900">{{ $order->status }}</span></li>
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $order->notes }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $order->address }}
                                                    </td>
                                                    {{-- <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap ">
                                                        <div class="flex flex-row gap-2 text-[#F2F2F2] ">
                                                            <button
                                                                class="font-semibold bg-[#9B51E0] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2"
                                                                data-modal-target="staticModal"
                                                                data-modal-toggle="staticModal">{{ $item->address }}</button>
                                                        </div>
                                                    </td> --}}
                                                    <td
                                                        class="flex flex-row text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap ">
                                                        <form action="{{ route('editOrder', $order->id) }}" method="post">
                                                            @csrf
                                                            <div class="flex flex-row gap-2 text-[#F2F2F2]">
                                                                <button
                                                                    class="font-semibold bg-[#6FCF97] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2"
                                                                    name="action" value="accept">Accept</button>
                                                                <button
                                                                    class="font-semibold bg-[#9B51E0] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2"
                                                                    name="action" value="onDelivery">OnDelivery</button>
                                                                <button
                                                                    class="font-semibold bg-[#2D9CDB] border border-[1px] border-[#E5E7EB] rounded-lg px-3 py-2"
                                                                    name="action" value="complete">Complete</button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr
                                                    class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">

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
