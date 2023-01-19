@extends('master.master')

@section('content')
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
            <img class="w-15 h-20" src="{{ asset('assets/BorgirQueen.png') }}" alt="logo">
        </a>
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 ">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                    Create an account
                </h1>
                <form class="space-y-4 md:space-y-6" action="/register" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your Name</label>

                        <input type="text" name="name" id="name"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 @error('name') is-invalid @enderror"
                            placeholder="Armani Ferrante" required autocomplete="name" value="{{ old('name') }}"
                            autofocus>

                        @error('name')
                            <span class="invalid-feedback block mb-2 text-sm font-medium text-red-600">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>

                        <input type="email" name="email" id="email"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 @error('email') is-invalid @enderror"
                            placeholder="armaniferrante@gmail.com" required autocomplete="email"
                            value="{{ old('email') }}">

                        @error('email')
                            <span class="invalid-feedback block mb-2 text-sm font-medium text-red-600">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Your Address</label>

                        <input type="address" name="address" id="address"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 @error('address') is-invalid @enderror"
                            placeholder="Address" required autocomplete="address" value="{{ old('address') }}">

                        @error('address')
                            <span class="invalid-feedback block mb-2 text-sm font-medium text-red-600">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Your Phone</label>

                        <input type="phone" name="phone" id="phone"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 @error('phone') is-invalid @enderror"
                            placeholder="Phone Number" required autocomplete="phone" value="{{ old('phone') }}">

                        @error('phone')
                            <span class="invalid-feedback block mb-2 text-sm font-medium text-red-600">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>

                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 @error('password') is-invalid @enderror"
                            required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback block mb-2 text-sm font-medium text-red-600">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900">Confirm
                            Password</label>

                        <input type="password" name="password_confirmation" id="password-confirm" placeholder="••••••••"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                            required autocomplete="new-password">
                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox"
                                class="form-control w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 "
                                required="">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500">I accept the <a
                                    class="font-medium text-blue-500 hover:underline" href="#">Terms and
                                    Conditions</a></label>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full text-white bg-[#005BAA] hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create
                        an account</button>

                </form>
                <p class="text-sm font-light text-gray-500">
                    Already have an account? <a href="/login" class="font-medium text-blue-500 hover:underline ">Login
                        here</a>
                </p>
            </div>
        </div>
    </div>
@endsection
