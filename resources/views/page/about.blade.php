@extends('master.master')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- Our Story --}}
    <div class="flex bg-[#FEFAF5]">
        <div class="" style="padding-bottom: 8rem;" style="width: 50rem;">
            <div class="mt-24" style="margin-left: 7rem; margin-right: 8rem;">
                <div class="text-[#E47500] font-bold">
                    About Us
                </div>
                <div class="font-bold mt-2 text-4xl">
                    Our Story
                </div>
                <div class="pr-5 mt-2">
                    <p class="pt-4">
                        Once upon a time, there were two sisters traveling through many countries and cities, in
                        search of a secret burger recipe. They traveled far and wide to find the perfect set of flavours
                        that would make the best burger.
                    </p>
                    <p class="pt-4">
                        Till they finally arrived in Ohio. After making thousands of burgers to find the right way to really
                        satisfy the people. One day they served this one burger to a group of people. They ate it silently
                        and once they finished, they shouted “THIS IS AWESOME”. After all this time, it is that simple to
                        satisfy them. It is all about the TASTE. The combination of soft buns, juicy patties, fresh veggies,
                        mouthwatering sauces made with love with a rich fusion of flavours to make one AWESOME burger.
                    </p>
                </div>
                <div class="mt-16 flex text-white font-bold">
                    <a href="/menu/food" class="bg-[#FA8305] hover:bg-[#d46f04] rounded-3xl px-5 py-2">
                        <div class="flex">
                            <div>
                                View Menu
                            </div>
                            <div class="ml-3" style="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 15 10">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                    </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div style="position: relative;">
            <div class="flex slider bg-gray-50" style="width: 50rem;">
                <img class="" src="{{ asset('assets/about/about-burger-1.png') }}" alt="">
                <img class="" src="{{ asset('assets/about/about-burger-2.png') }}" alt="">
            </div>
            <div style="position: absolute; bottom: 0;">
                <div class=>
                    <button class="fa fa-arrow-left top-prev px-4 py-4" style="color: white; background-color: #333333">
                    </button>
                    <button class="fa fa-arrow-right top-next px-4 py-4" style="color: white; background-color: #333333">
                    </button>
                </div>
            </div>
        </div>

    </div>

    {{-- Our Philosophy --}}
    <div class="flex" style="background-image: url('../assets/about/about-bg1.png'); background-size: contain; background-position: bottom; background-repeat: no-repeat;">
        <div class=" mt-36" style="margin-left: 7rem;" >
            <img class="" src="{{ asset('assets/about/about-burger-3.png') }}" alt="" style="width: 54rem;">
        </div>

        <div class="w-full mt-48">
            <div class="px-10 mt-16 mr-11" style="margin-left: 3rem; margin-right: 13rem;">
                <div class="font-bold text-4xl text-[#E47500]">
                    Our Philosophy
                </div>

                <p class="pt-4 text-xl">
                    The combination of simple and flavorful creates AWESOME products. We do not live a bland life, and this
                    is what our customers will get from our products. Every bite of Borgir Queen will brighten your day up
                    because it’s
                </p>

                <div class="text-red-600 font-bold" style="font-size: 5vw; margin-top: -1rem">
                    SIMPLY TASTY!
                </div>
            </div>
        </div>
    </div>

    {{-- Happy Customer --}}
    <div style="background-image: url('../assets/about/about-bg2.png'); background-size: contain; background-position: top; background-repeat: no-repeat;">
        <div class=" text-center font-bold text-4xl" style="margin-left: 35rem; margin-right: 35rem; padding-top: 4rem;">
            Trusted by Thousands of Happy Customer
        </div>
        <div class="mt-24" style="margin-bottom: 5rem;">
            <div class="flex slider-bottom" style=" width: 84%; margin: 0px 9rem;">
                <div class="border border-[#DC7000] rounded-lg" style="width: 24rem; height: 12rem; font-size: 0.7rem; margin-right: 3rem;">
                    <div style="margin-top: 2rem; margin-left: 2rem; margin-right: 2rem; margin-bottom: 2rem;">
                        <div class="flex justify-between">
                            <div class="flex">
                                <div style="width: 15%;">
                                    <img class="" src="{{ asset('assets/about/about-pp1.png') }}">
                                </div>
                                <div class="ml-4">
                                    <p class="font-bold">Borgir Boi</p>
                                    <p>Ohio, United States</p>
                                </div>
                            </div>
                            <div class="flex">
                                <p>4.8</p>
                                <p class="ml-4">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                </p>
                            </div>
                        </div>
                        <div style="margin-top: 1.5rem;">
                            Their burgers and french fries are super delicious that I can’t even resist them cause of it taste/smell. I admire their workers and how hard they work. I love it. I wish to come back someday to buy more of their fabulous, delicious, tasty food.
                        </div>
                    </div>
                </div>


                <div class="border border-[#DC7000] rounded-lg" style="width: 24rem; height: 12rem; font-size: 0.7rem; margin-right: 3rem;">
                    <div style="margin-top: 2rem; margin-left: 2rem; margin-right: 2rem; margin-bottom: 2rem;">
                        <div class="flex justify-between">
                            <div class="flex">
                                <div style="width: 15%;">
                                    <img class="" src="{{ asset('assets/about/about-pp2.png') }}">
                                </div>
                                <div class="ml-4">
                                    <p class="font-bold">Hasbulla</p>
                                    <p>Domrémy-la-Pucelle, France</p>
                                </div>
                            </div>
                            <div class="flex">
                                <p>4.5</p>
                                <p class="ml-4">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                </p>
                            </div>
                        </div>
                        <div style="margin-top: 1.5rem;">
                            I am writing Review for store# 3549. Centreville RD, Manassas VA. Jose was on the first window and he was so pleasant with a big smile and professional! Sandra gave us our food very pleasant! We will return Borgir Queen!
                        </div>
                    </div>
                </div>

                <div class="border border-[#DC7000] rounded-lg" style="width: 24rem; height: 12rem; font-size: 0.7rem; margin-right: 3rem;">
                    <div style="margin-top: 2rem; margin-left: 2rem; margin-right: 2rem; margin-bottom: 2rem;">
                        <div class="flex justify-between">
                            <div class="flex">
                                <div style="width: 15%;">
                                    <img class="" src="{{ asset('assets/about/about-pp3.png') }}">
                                </div>
                                <div class="ml-4">
                                    <p class="font-bold">Darren Watkins Jr.</p>
                                    <p>North Carolina, United States</p>
                                </div>
                            </div>
                            <div class="flex">
                                <p>4.4</p>
                                <p class="ml-4">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                </p>
                            </div>
                        </div>
                        <div style="margin-top: 1.5rem;">
                            The french fries I'm so glad I'm not gonna get all my gosh put the kids meal with those toys they're so fun to play with that's a wrap.
                        </div>
                    </div>
                </div>

                <div class="border border-[#DC7000] rounded-lg" style="width: 24rem; height: 12rem; font-size: 0.7rem; margin-right: 3rem;">
                    <div style="margin-top: 2rem; margin-left: 2rem; margin-right: 2rem; margin-bottom: 2rem;">
                        <div class="flex justify-between">
                            <div class="flex">
                                <div style="width: 15%;">
                                    <img class="" src="{{ asset('assets/about/emptyPP1.png') }}">
                                </div>
                                <div class="ml-4">
                                    <p class="font-bold">Borgir Boi</p>
                                    <p>Ohio, United States</p>
                                </div>
                            </div>
                            <div class="flex">
                                <p>4.8</p>
                                <p class="ml-4">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                </p>
                            </div>
                        </div>
                        <div style="margin-top: 1.5rem;">
                            Their burgers and french fries are super delicious that I can’t even resist them cause of it taste/smell. I admire their workers and how hard they work. I love it. I wish to come back someday to buy more of their fabulous, delicious, tasty food.
                        </div>
                    </div>
                </div>


                <div class="border border-[#DC7000] rounded-lg" style="width: 24rem; height: 12rem; font-size: 0.7rem; margin-right: 3rem;">
                    <div style="margin-top: 2rem; margin-left: 2rem; margin-right: 2rem; margin-bottom: 2rem;">
                        <div class="flex justify-between">
                            <div class="flex">
                                <div style="width: 15%;">
                                    <img class="" src="{{ asset('assets/about/emptyPP1.png') }}">
                                </div>
                                <div class="ml-4">
                                    <p class="font-bold">Hasbulla</p>
                                    <p>Domrémy-la-Pucelle, France</p>
                                </div>
                            </div>
                            <div class="flex">
                                <p>4.5</p>
                                <p class="ml-4">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                </p>
                            </div>
                        </div>
                        <div style="margin-top: 1.5rem;">
                            I am writing Review for store# 3549. Centreville RD, Manassas VA. Jose was on the first window and he was so pleasant with a big smile and professional! Sandra gave us our food very pleasant! We will return Borgir Queen!
                        </div>
                    </div>
                </div>

                <div class="border border-[#DC7000] rounded-lg" style="width: 24rem; height: 12rem; font-size: 0.7rem; margin-right: 3rem;">
                    <div style="margin-top: 2rem; margin-left: 2rem; margin-right: 2rem; margin-bottom: 2rem;">
                        <div class="flex justify-between">
                            <div class="flex">
                                <div style="width: 15%;">
                                    <img class="" src="{{ asset('assets/about/emptyPP1.png') }}">
                                </div>
                                <div class="ml-4">
                                    <p class="font-bold">Darren Watkins Jr.</p>
                                    <p>North Carolina, United States</p>
                                </div>
                            </div>
                            <div class="flex">
                                <p>4.4</p>
                                <p class="ml-4">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                </p>
                            </div>
                        </div>
                        <div style="margin-top: 1.5rem;">
                            The french fries I'm so glad I'm not gonna get all my gosh put the kids meal with those toys they're so fun to play with that's a wrap.
                        </div>
                    </div>
                </div>

                <div class="border border-[#DC7000] rounded-lg" style="width: 24rem; height: 12rem; font-size: 0.7rem; margin-right: 3rem;">
                    <div style="margin-top: 2rem; margin-left: 2rem; margin-right: 2rem; margin-bottom: 2rem;">
                        <div class="flex justify-between">
                            <div class="flex">
                                <div style="width: 15%;">
                                    <img class="" src="{{ asset('assets/about/emptyPP2.png') }}">
                                </div>
                                <div class="ml-4">
                                    <p class="font-bold">Darren Watkins Jr.</p>
                                    <p>North Carolina, United States</p>
                                </div>
                            </div>
                            <div class="flex">
                                <p>4.4</p>
                                <p class="ml-4">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                </p>
                            </div>
                        </div>
                        <div style="margin-top: 1.5rem;">
                            The french fries I'm so glad I'm not gonna get all my gosh put the kids meal with those toys they're so fun to play with that's a wrap.
                        </div>
                    </div>
                </div>

                <div class="border border-[#DC7000] rounded-lg" style="width: 24rem; height: 12rem; font-size: 0.7rem; margin-right: 3rem;">
                    <div style="margin-top: 2rem; margin-left: 2rem; margin-right: 2rem; margin-bottom: 2rem;">
                        <div class="flex justify-between">
                            <div class="flex">
                                <div style="width: 15%;">
                                    <img class="" src="{{ asset('assets/about/emptyPP2.png') }}">
                                </div>
                                <div class="ml-4">
                                    <p class="font-bold">Darren Watkins Jr.</p>
                                    <p>North Carolina, United States</p>
                                </div>
                            </div>
                            <div class="flex">
                                <p>4.4</p>
                                <p class="ml-4">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                </p>
                            </div>
                        </div>
                        <div style="margin-top: 1.5rem;">
                            The french fries I'm so glad I'm not gonna get all my gosh put the kids meal with those toys they're so fun to play with that's a wrap.
                        </div>
                    </div>
                </div>

                <div class="border border-[#DC7000] rounded-lg" style="width: 24rem; height: 12rem; font-size: 0.7rem; margin-right: 3rem;">
                    <div style="margin-top: 2rem; margin-left: 2rem; margin-right: 2rem; margin-bottom: 2rem;">
                        <div class="flex justify-between">
                            <div class="flex">
                                <div style="width: 15%;">
                                    <img class="" src="{{ asset('assets/about/emptyPP2.png') }}">
                                </div>
                                <div class="ml-4">
                                    <p class="font-bold">Darren Watkins Jr.</p>
                                    <p>North Carolina, United States</p>
                                </div>
                            </div>
                            <div class="flex">
                                <p>4.4</p>
                                <p class="ml-4">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                </p>
                            </div>
                        </div>
                        <div style="margin-top: 1.5rem;">
                            The french fries I'm so glad I'm not gonna get all my gosh put the kids meal with those toys they're so fun to play with that's a wrap.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end" style="width: 84%; margin: 0px 9rem; margin-bottom: 5rem; margin-right:">
            <div class="flex " style="margin-right: 2.5rem;">
                <button>
                    <i class="button-bottom fa fa-arrow-left bottom-prev border rounded-full px-4 py-4"></i>
                </button>
                <button>
                    <i class="button-bottom fa fa-arrow-right bottom-next border rounded-full px-4 py-4" style="margin-left: 1rem;"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.slider').slick({
                prevArrow: $('.top-prev'),
                nextArrow: $('.top-next'),
            });

            $('.slider-bottom').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                prevArrow: $('.bottom-prev'),
                nextArrow: $('.bottom-next'),
            });
        });
    </script>

    <style>
        .button-bottom{
            border-color: orange;
            color: orange;
        }

        .button-bottom:hover{
            background-color: orange;
            color: white;
        }
    </style>

@endsection


