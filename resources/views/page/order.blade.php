@extends('master.master')

@section('content')
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="flex shadow-md my-10">
          <div class="w-full bg-white px-10 py-10">
            <div class="flex justify-between border-b pb-8">
                <h1 class="font-semibold text-4xl">My Orders</h1>
            </div>
            <div class="flex pt-6 border-b pb-8">
                <h1 class="font-semibold text-lg ml-10 py-0.5">Status</h1>
                <div class="ml-20 mt-1"> <button type="button" class="text-indigo-600 bg-indigo-200 font-medium rounded-3xl text-xs px-4 py-1 text-center mr-3 md:mr-0 outline-none outline-offset-0 outline-indigo-600">All</button></div>
                <div class="ml-10 mt-1"> <button type="button" class="text-[#949393] bg-transparent hover:text-[#000000] font-medium rounded-3xl text-xs px-4 py-1 text-center mr-3 md:mr-0 outline-none outline-offset-0 outline-[#949393]">Active</button></div>
                <div class="ml-10 mt-1"> <button type="button" class="text-[#949393] bg-transparent hover:text-[#000000] font-medium rounded-3xl text-xs px-4 py-1 text-center mr-3 md:mr-0 outline-none outline-offset-0 outline-[#949393]">Complete</button></div>
                <div class="ml-10 mt-1"> <button type="button" class="text-[#949393] bg-transparent hover:text-[#000000] font-medium rounded-3xl text-xs px-4 py-1 text-center mr-3 md:mr-0 outline-none outline-offset-0 outline-[#949393]">Failed</button></div>
            </div>
            <div class="flex mt-10 mb-5 ml-10">
                <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5">Date</h3>
                <h3 class="font-semibold  text-gray-600 text-xs uppercase w-1/5 ">TransactionID</h3>
                <h3 class="font-semibold  text-gray-600 text-xs uppercase w-1/5 ">Price</h3>
                <h3 class="font-semibold  text-gray-600 text-xs uppercase w-1/5 ">Payment</h3>
              </div>
              <div class="flex mt-10 mb-5 ml-10">
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5">02/06/2022</h3>
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">TR1258126</h3>
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">$ 39.99</h3>
                <img class="h-2.5 w-2.5 rounded-full mt-2" src="{{ asset('assets/yellow.png') }}" alt="">
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">Not Paid</h3>
                    
                
                <button type="button" class="text-white font-medium rounded-3xl text-xs px-4 py-1 text-center mr-3 md:mr-0 outline-none outline-offset-0 w-1/5 bg-[#005BAA] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Transaction Details</button>
              </div>
              <div class="flex mt-10 mb-5 ml-10">
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5">22/10/2022</h3>
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">TR1252345</h3>
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">$ 28.99</h3>
                <img class="h-2.5 w-2.5 rounded-full mt-2" src="{{ asset('assets/green.png') }}" alt="">
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">Paid</h3>
                <button type="button" class="text-white font-medium rounded-3xl text-xs px-4 py-1 text-center mr-3 md:mr-0 outline-none outline-offset-0 w-1/5 bg-[#005BAA] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Transaction Details</button>
              </div>
              <div class="flex mt-10 mb-5 ml-10">
                <h3 class="font-semibold text-black text-lg uppercase w-1/5">05/11/2022</h3>
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">TR1252422</h3>
                <h3 class="font-semibold text-black text-lg uppercase w-1/5 ">$ 18.00</h3>
                <img class="h-2.5 w-2.5 rounded-full mt-2" src="{{ asset('assets/red.svg') }}" alt="">
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">Failed</h3>
                <button type="button" class="text-white font-medium rounded-3xl text-xs px-4 py-1 text-center mr-3 md:mr-0 outline-none outline-offset-0 w-1/5 bg-[#005BAA] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Transaction Details</button>
              </div>
              <div class="flex mt-10 mb-5 ml-10">
                <h3 class="font-semibold text-black text-lg uppercase w-1/5">10/12/2022</h3>
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">TR1252122</h3>
                <h3 class="font-semibold text-black text-lg uppercase w-1/5 ">$ 12.00</h3>
                <img class="h-2.5 w-2.5 rounded-full mt-2" src="{{ asset('assets/Yellow.png') }}" alt="">
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">Not Paid</h3>
                <button type="button" class="text-white font-medium rounded-3xl text-xs px-4 py-1 text-center mr-3 md:mr-0 outline-none outline-offset-0 w-1/5 bg-[#005BAA] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Transaction Details</button>
              </div>
              <div class="flex mt-10 mb-5 ml-10">
                <h3 class="font-semibold text-black text-lg uppercase w-1/5">05/11/2022</h3>
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">TR1252422</h3>
                <h3 class="font-semibold text-black text-lg uppercase w-1/5 ">$ 18.00</h3>
                <img class="h-2.5 w-2.5 rounded-full mt-2" src="{{ asset('assets/green.png') }}" alt="">
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">Paid</h3>
                <button type="button" class="text-white font-medium rounded-3xl text-xs px-4 py-1 text-center mr-3 md:mr-0 outline-none outline-offset-0 w-1/5 bg-[#005BAA] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Transaction Details</button>
              </div>
              <div class="flex mt-10 mb-5 ml-10">
                <h3 class="font-semibold text-black text-lg uppercase w-1/5">08/11/2022</h3>
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">TR1252426</h3>
                <h3 class="font-semibold text-black text-lg uppercase w-1/5 ">$ 23.00</h3>
                <img class="h-2.5 w-2.5 rounded-full mt-2" src="{{ asset('assets/green.png') }}" alt="">
                <h3 class="font-semibold  text-black text-lg uppercase w-1/5 ">Paid</h3>
                <button type="button" class="text-white font-medium rounded-3xl text-xs px-4 py-1 text-center mr-3 md:mr-0 outline-none outline-offset-0 w-1/5 bg-[#005BAA] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Transaction Details</button>
              </div>
          </div>
        </div>
    </div>




@endsection