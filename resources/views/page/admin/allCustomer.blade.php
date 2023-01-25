@extends('master.master')
@section('content')
    <div class="grid grid-cols-12 min-h-screen bg-[#F9FAFB]">
        <div class="bg-[#FFFFFF] col-span-2 border">
            @include('page.admin.components.sidebar')
        </div>
        <div class="col-start-3 px-8 py-12" style="grid-column-end: 13">
            <div class="overflow-x-auto bg-[#FFFFFF] p-4 rounded-lg border border-[1px] border-[#E5E7EB]">
                <div class="flex justify-between">
                    <div class="font-semibold">All Customers</div>
                </div>
                <div class="flex mt-4 mr-8">
                    <form action={{ route('allCustomer') }}>
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
                    </form>
                </div>
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
                                                    Name
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Email
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Phone Number
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Address
                                                </th>
                                                <th scope="col"
                                                    class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Member Since
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @for ($i = 0; $i < 10; $i++)
                                            @endfor --}}
                                            @foreach ($customers as $customer)
                                                <tr
                                                    class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">

                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $customer->name }}
                                                    </td>
                                                    <td
                                                        class="max-w-xs text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap overflow-x-hidden">
                                                        {{ $customer->email }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $customer->phone }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $customer->address }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-normal px-6 py-4 whitespace-nowrap">
                                                        {{ $customer->created_at->format('M d Y') }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="flex justify-between pt-6">
                                    <div class="text-sm" style="">
                                        @if ($customers->firstItem())
                                            {{ $customers->firstItem() }}
                                            -
                                            {{ $customers->lastItem() }}
                                            of
                                        @endif
                                        {{ $customers->total() }}
                                        results
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="float-right mt-2">
                {{ $customers->links('pagination::default') }}
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
