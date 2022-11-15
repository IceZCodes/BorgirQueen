<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded  bg-red">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="{{ route('index') }}" class="flex items-center">
            <img src="{{ asset('assets/BorgirQueen.png') }}" class="mr-8 h-6 sm:h-9" alt="Borgir Queen Logo">
        </a>
        <div class="flex md:order-2">
            <li class="font-sans block mt-10 lg:inline-block lg:mt-0 lg:mr-6 align-middle text-gray hover:text-gray-700">
                <a href="{{ route('cart') }}" role="button" class="relative flex">
                    <svg class="flex-1 w-8 h-8 fill-current" viewbox="0 0 24 24">
                        <path d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z"/>
                    </svg>
                    <span class="absolute right-0 top-0 rounded-full bg-red-600 w-4 h-4 top right p-0 m-0 text-white font-mono text-sm  leading-tight text-center">4
                    </span>
                </a>
            </li> 
            @auth
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0" type="button">
                    <span class="sr-only">Open user menu</span>
                    <img class="mr-2 w-8 h-8 rounded-full" src="{{ asset('assets/anon.png') }}" alt="user photo">
                    {{ auth()->user()->name }}
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatarName" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 310px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                    <li>
                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    </ul>
                    <div class="py-1">
                        <form action="/logout" method="post">
                            @csrf
                            <a href="/logout" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}">
                    <button type="button" class="bg-[#005BAA] text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">SIGN IN</button>
                    <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-cta" aria-expanded="false">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>   
                    </button>
                </a> 
            @endauth
        </div>

        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white ">
                <li>
                    <a href="{{ route('index') }}" class="{{ ($active === "home") ? 'text-blue-600' : '' }} block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Home</a>
                </li>
                <li>
                    <a href="{{ route('menu') }}" class="{{ ($active === "menu") ? 'text-blue-600' : '' }} block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Menu</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Deals</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="{{ ($active === "about") ? 'text-blue-600' : '' }} block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
  