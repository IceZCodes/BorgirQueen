@extends('master.master')
<link href="{{ asset('css/cart&order.css') }}" rel="stylesheet">
@section('content')

    <body class="bg-gray-100">
        <div class="container mx-auto mt-10  min-h-screen">
            <div class="flex shadow-md my-10">
                <div class="w-full bg-white px-10 py-10">
                    <div class="flex justify-between border-b pb-8">
                        <h1 class="font-semibold text-4xl">My Cart</h1>
                        <h2 class="font-extralight text-xl mt-5"></h2>
                        <div class="hidden">{{ $sumPrice = 0 }}</div>
                    </div>
                    @forelse ($cartItems as $food)
                        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                            <div class="flex w-full">
                                <div class="w-48">
                                    @if (str_contains($food->image, 'placeholder'))
                                        <img class="h-27" src="{{ asset('assets/placeholder/' . $food->image) }}"
                                            alt="">
                                    @else
                                        <img class="h-27" src="{{ asset('storage/images/' . $food->image) }}"
                                            alt="">
                                    @endif
                                </div>
                                <div class="flex flex-col justify-between ml-4 flex-grow mr-3">
                                    <span class="font-semibold text-4xl">{{ $food->name }}</span>
                                    <span
                                        class="text-black font-semibold text-sm mt-2">{{ Str::limit($food->description, 100) }}</span>

                                    <form action="{{ route('deleteCart', $food->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="font-semibold hover:text-red-500 text-gray-800 text-xs mt-2">Remove</button>
                                    </form>
                                </div>
                            </div>
                            <a href=""></a>
                            <form action="{{ route('updateCart', $food->id) }}" method="POST">
                                @csrf
                                <div class="flex justify-center w-1/5">
                                    <input class="mx-2 border text-center w-8" name="foodQty" type="text"
                                        value="{{ $food->pivot->qty }}">
                                </div>
                            </form>
                            <div class="hidden">{{ $sumPrice += $food->pivot->price }}</div>
                            <span class="text-center w-1/5 font-semibold text-lg">${{ $food->pivot->price }}</span>
                        </div>
                    @empty
                        <h1 class="mt-2 font-black text-3xl"> No item(s) in Cart</h1>
                    @endforelse

                    <a href="{{ route('menu', 'food') }}" class="flex font-semibold text-indigo-600 text-sm mt-10">
                        <button data-collapse-toggle="navbar-cta" type="button"
                            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                            aria-controls="navbar-cta" aria-expanded="false">
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                    </a>
                </div>

                <div class="sticky w-2/5 px-8 py-10 bg-blue-200">
                    <h1 class="sticky font-semibold text-2xl border-b border-black pb-8 text-center">Billing Details</h1>
                    <div class="flex justify-between mt-10">
                    </div>
                    <form method="POST" action="{{ route('orderCart') }}" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label class="font-medium inline-block mb-3 text-sm uppercase">Notes</label>
                            <input type="text" id="notes" name="notes" placeholder="Enter your notes...."
                                class="p-2 text-sm w-full" style="outline: none">
                        </div>
                        <div>
                            <label class="font-medium inline-block mb-3 mt-3 text-sm uppercase">Deliver To</label>
                            <input type="text" id="address" name="address" placeholder="Enter your address...."
                                class="p-2 text-sm w-full" value="{{ $address }}" style="outline: none">
                        </div>
                        <div>
                            <label class="font-medium inline-block mb-3 mt-3 text-sm uppercase">Shipping</label>
                            <select name="shipping_type" class="block p-2 w-full text-sm" style="outline: none">
                                <option value="Gojek">Gojek - $3.99</option>
                                <option value="Grab">Grab - $2.99</option>
                                <option value="Pick Up">Pick Up</option>
                            </select>
                        </div>
                        <div class="border-t mt-8 border-black">
                            <div class="flex flex-col font-semibold justify-between py-6 text-sm uppercase">
                                <span>Pay With</span>
                                <input type="hidden" name="payment_type" id="payment_type">
                                <div class="flex flex-row mt-5">
                                    <a class="pay mr-3 hover:bg-indigo-600" href="#"><img style="width: 650px;" src="/assets/OVO.png" alt="" data-value="OVO"></a>
                                    <a class="pay mr-3 hover:bg-indigo-600" href="#"><img style="width: 650px;" src="/assets/Dana.jpg" alt="" data-value="DANA"></a>
                                    <a class="pay mr-3 hover:bg-indigo-600" href="#"><img style="width: 650px;" src="/assets/GOPAY.png" alt="" data-value="GOPAY"></a>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <h2 class="font-medium inline-block mb-3 mt-3 text-sm uppercase">Upload Transfer Proof</h2>
                                <label id="label_image" for="image" class="font-semibold text-center bg-white py-2 rounded-lg">+ Choose Image</label>
                                <input id="image" class="mt-2 hidden"type="file" type="image" name="image" onchange="getImage(this);" required>
                                @error('image')
                                    <span class="text-red-600">
                                        {{ $message }}
                                    </span>
                                @enderror
                                <img id="preview_image" class="w-2/3 h-2/3 mt-2 hidden" src="#" alt="preview_image">
                            </div>
                            <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                                <span>Total cost</span>
                                <span>${{ $sumPrice }}</span>
                            </div>
                            <button id="checkout-button" type="button"
                                class=" bg-[#005BAA] font-bold hover:bg-blue-800 py-3 text-xl text-white uppercase w-full rounded-lg ">Checkout</button>
                        </div>
                        <dialog class="popup" id="popup"
                            style="position: absolute; top: 50%; left: 30%; transform: translate(-50%, -50%); width: 600px; padding: 20px; background: white; border-radius: 10px; box-shadow: 0px 2px 2px 2px; margin-top: -25px; padding-top: 50px; padding-bottom: 75px; ">
                            <div class="text-3xl font-bold text-center mb-5">Your Payment is Sucessful!!</div>
                            <div class="text-xl text-gray-500 text-center ">Thank You for your payment.</div>
                            <div class="text-xl text-gray-500 text-center ">Amount Paid</div>
                            <div class="text-xl text-gray-500 text-center ">${{ $sumPrice }}</div>
                            <button type="submit" id="backHomeButton"
                                class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800"
                                style="position: absolute; bottom: 10px; right: 220px;">Back to Home</button>
                        </dialog>
                    </form>
                </div>
            </div>
        </div>

        <script>
            const modal = document.querySelector("#popup");
            const openModal = document.querySelector("#checkout-button");
            const closeModal = document.querySelector("#backHomeButton");

            openModal.addEventListener("click", () => {
                modal.showModal();
            })
            closeModal.addEventListener("click", () => {
                modal.close();
            })

            const payment = document.querySelectorAll(".pay");
            payment.forEach(element => {
                element.addEventListener("click", function() {
                    let payment_type = this.querySelector("img").getAttribute("data-value");
                    // console.log(payment_type);
                    document.getElementById("payment_type").value = payment_type;
                });
            });

            /* Onclick add Border */
            payment.forEach(e => {
                e.addEventListener("click", () => {
                    payment.forEach(e => {
                        e.classList.remove("outline-1");
                        e.classList.remove("ring-4");
                    })
                    e.classList.add("outline-1");
                    e.classList.add("ring-4");
                })
            });

            function getImage(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload
                    let preview = document.getElementById("preview_image");
                    let label = document.getElementById("label_image");
                    reader.onload = function (e) {
                        preview.src = e.target.result;
                        preview.classList.remove("hidden");
                        label.innerHTML = input.files[0].name;
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </body>
@endsection
