<div class="mt-8 px-4">
    <div class="flex items-center text-base font-medium rounded-full md:mr-0 mb-4">
        <img class="mr-2 w-8 h-8 rounded-full" src="{{ asset('assets/anon.png') }}" alt="user photo">
            {{ auth()->user()->name }}
    </div>
    <a href="/" class="flex items-center text-sm font-normal cursor-pointer py-2 px-2 rounded-lg hover:bg-[#F5F3FF] hover:text-[#7C3AED] mb-1">
        <span class="pr-2"><img src="{{ asset('assets/admin/home.png') }}" alt=""></span>
        Home
    </a>
    @if ($active == 'dashboard')
    <a href="/admin" class="flex items-center text-sm font-normal py-2 px-2 rounded-lg bg-[#F5F3FF] text-[#7C3AED] mb-1">
        <span class="pr-2"><img src="{{ asset('assets/admin/burger.png') }}" alt=""></span>
        Products
    </a>
    @else
    <a href="" class="flex items-center text-sm font-normal cursor-pointer py-2 px-2 rounded-lg hover:bg-[#F5F3FF] hover:text-[#7C3AED] mb-1">
        <span class="pr-2"><img src="{{ asset('assets/admin/burger.png') }}" alt=""></span>
        Products
    </a>
    @endif

    @if ($active == 'orders')
    <a href="" class="flex items-center text-sm font-normal py-2 px-2 rounded-lg bg-[#F5F3FF] text-[#7C3AED] mb-1">
        <span class="pr-2"><img src="{{ asset('assets/admin/cart.png') }}" alt=""></span>
        My Orders
    </a>
    @else
    <a href="" class="flex items-center text-sm font-normal cursor-pointer py-2 px-2 rounded-lg hover:bg-[#F5F3FF] hover:text-[#7C3AED] mb-1">
        <span class="pr-2"><img src="{{ asset('assets/admin/cart.png') }}" alt=""></span>
        My Orders
    </a>
    @endif

    @if ($active == 'customers')
    <a href="" class="flex items-center text-sm font-normal py-2 px-2 rounded-lg bg-[#F5F3FF] text-[#7C3AED] mb-1">
        <span class="pr-2"><img src="{{ asset('assets/admin/users.png') }}" alt=""></span>
        All Customers
    </a>
    @else
    <a href="" class="flex items-center text-sm font-normal cursor-pointer py-2 px-2 rounded-lg hover:bg-[#F5F3FF] hover:text-[#7C3AED] mb-1">
        <span class="pr-2"><img src="{{ asset('assets/admin/users.png') }}" alt=""></span>
        All Customers
    </a>
    @endif

    @if ($active == 'customersOrders')
    <a href="" class="flex items-center text-sm font-normal py-2 px-2 rounded-lg bg-[#F5F3FF] text-[#7C3AED] mb-1">
        <span class="pr-2"><img src="{{ asset('assets/admin/cash.png') }}" alt=""></span>
        Customer Orders
    </a>
    @else
    <a href="" class="flex items-center text-sm font-normal cursor-pointer py-2 px-2 rounded-lg hover:bg-[#F5F3FF] hover:text-[#7C3AED] mb-1">
        <span class="pr-2"><img src="{{ asset('assets/admin/cash.png') }}" alt=""></span>
        Customer Orders
    </a>
    @endif
</div>
