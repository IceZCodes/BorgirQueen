@extends('master.master')

@section('content')
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        @if (Session::has('success'))
            {{-- Success --}}
            <div id="modalPopup"
                class="fixed top-10 right-4 w-fit drop-shadow-xl text-black bg-[#F5F3FF] p-3 px-4 rounded-lg border border-2 border-[#7C3AED] mb-4">
                {{ Session::get('success') }}
                <button type="button" class="btn-close float-right text-black ml-8"
                    onclick="getElementById('modalPopup').classList.add('hidden')">X</button>
            </div>
        @endif
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
            <img class="w-15 h-20" src="{{ asset('assets/BorgirQueen.png') }}" alt="logo">
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Sign in to your account
                </h1>
                <form class="space-y-4 md:space-y-6" action="/login" method="POST">
                    @csrf

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="armaniferrante@gmail.com" required autocomplete="email" autofocus>
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>

                        @if (Session::has('error'))
                            <div class="text-red-500 text-sm">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="form-check flex items-center h-5">
                              <input id="remember" aria-describedby="remember" type="checkbox" class="form-check-input w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" {{ old('remember') ? 'checked' : '' }}>
                            </div>
                            <div class="form-check-label ml-3 text-sm">
                              <label for="remember" class="text-gray-500">Remember me</label>
                            </div>
                        </div>
                        {{-- <a href="#" class="text-sm font-medium text-blue-500 hover:underline">Forgot password?</a> --}}
                    </div>

                    <button type="submit" class="w-full text-white bg-[#005BAA] hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>

                    <p class="text-sm font-light text-gray-500">
                        Don’t have an account yet? <a href="/register" class="font-medium text-blue-500 hover:underline">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
