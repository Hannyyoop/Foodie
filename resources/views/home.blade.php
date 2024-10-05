@extends('layouts.app')
@section('content')
    <section id="main-content" class="px-20 py-10 bg-[#ff7b00] text-white mx-auto">
        <div class="grid grid-cols-4 gap-3">
            <div class="text-center">
                <img src="{{ asset('images/fries.jpg') }}" class="h-32 w-32 rounded-full mx-auto" alt="">
                <h3 class="text-xl pt-sans-bold my-3">Veg Treat</h3>
                <p>Made with fresh vegetables and olive oil, this dish is crispy, flavorful, and perfect for veggie lovers.
                </p>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/nuggets.jpg') }}" class="h-32 w-32 rounded-full mx-auto" alt="">
                <h3 class="text-xl pt-sans-bold my-3">Non Veg Treat</h3>
                <p>Enjoy crispy, golden chicken nuggets made from tender, juicy chicken. Perfectly seasoned and fried to
                    perfection, they offer a delicious bite every time. A must-have snack for chicken lovers! </p>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/wrap.jpg') }}" class="h-32 w-32 rounded-full mx-auto" alt="">
                <h3 class="text-xl pt-sans-bold my-3">Veg Grilled Wrap</h3>
                <p>A wholesome delight packed with fresh veggies, grilled to perfection and wrapped in a soft tortilla.
                    Bursting with flavors and a hint of smokiness, it's the perfect light and tasty meal for veggie lovers
                    on the go! </p>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/burrito.jpg') }}" class="h-32 w-32 rounded-full mx-auto" alt="">
                <h3 class="text-xl pt-sans-bold my-3">Non Veg Grilled Wrap</h3>
                <p>Juicy grilled chicken paired with fresh veggies, all wrapped in a warm tortilla. A perfect balance of
                    flavors and textures, offering a satisfying and tasty option for non-veg lovers. </p>
            </div>

        </div>
    </section>
    <section id="menu" class="px-20 py-10">
        <h1 class="text-center text-4xl uppercase mb-3">we serve</h1>
        <p class="text-center">(Yummy Burgers, Delicious Grilled Wraps, Italian Pastas, BBQ & Kebabs and more)</p>

        <div>
            <div class="flex flex-row text-center">
                <div>
                    <img src="{{ asset('images/burger.png') }}" class="h-48 w-48 mx-auto" alt="">
                    <h3 class="text-2xl pt-sans-bold my-3">Yummy Burgers</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, molestiae!</p>
                </div>
                <div>
                    <img src="{{ asset('images/sandwich.png') }}" class="h-48 w-48 mx-auto" alt="">
                    <h3 class="text-2xl pt-sans-bold my-3">Yummy Sandwiches</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, molestiae!</p>
                </div>
                <div>
                    <img src="{{ asset('images/pasta.png') }}" class="h-48 w-48 mx-auto" alt="">
                    <h3 class="text-2xl pt-sans-bold my-3">Italian Pastas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, molestiae!</p>
                </div>

            </div>
            <div class="flex flex-row my-5 text-center">
                <div>
                    <img src="{{ asset('images/chicken.png') }}" class="h-48 w-48 mx-auto" alt="">
                    <h3 class="text-2xl pt-sans-bold my-3">Crispy Fried Chicken Corner</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, molestiae!</p>
                </div>
                <div>
                    <img src="{{ asset('images/salad.png') }}" class="h-48 w-48 mx-auto" alt="">
                    <h3 class="text-2xl pt-sans-bold my-3">Healthy Box</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, molestiae!</p>
                </div>
                <div>
                    <img src="{{ asset('images/bbq.png') }}" class="h-48 w-48 mx-auto" alt="">
                    <h3 class="text-2xl pt-sans-bold my-3">Grilled BBQ Chicken</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, molestiae!</p>
                </div>

            </div>
        </div>
        <div class="flex justify-center">
            <button class="btn btn-outline bg-[#fff] text-[#9ef01a] border-[#333] hover:bg-[#5c7b2a]">View More</button>
        </div>
    </section>

    <section id="about-us" class="px-3">
        <div class="flex flex-row gap-3">
            <div class="relative">
                <img src="{{ asset('images/onion.jpg') }}" class="w-full brightness-50 " alt="">
                <div class="absolute top-44 left-28 text-white">
                    <h1 class="text-4xl mb-3">About Us</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Aliquam beatae dolor perspiciatis, quas
                        minima suscipit<br> atque nisi autem quam veniam.</p>
                        <button class="btn btn-outline border-[#fff] mt-4 text-white hover:bg-[#fff] hover:text-black">View More</button>
                </div>
            </div>
            <div class="relative">
                <img src="{{ asset('images/friedChick.jpg') }}" class=" w-full brightness-50 relative" alt="">
                <div class="absolute top-44 left-28 text-white">
                    <h1 class="text-4xl mb-3">Non Veg Treat</h1>
                    <p>Chicken Popcorn, Chicken Nuggets, Fish Finger, Fried Chicken Strips... </p>
                    <p class="mt-3 text-3xl">₹ 69 to ₹ 129</p>
                    <button class="btn btn-outline border-[#fff] mt-4 text-white hover:bg-[#fff] hover:text-black">View More</button>
                </div>
            </div>
        </div>
    </section>

    <section id="newsletter">
        <div class="bg-[#ff7b00] flex justify-center py-10 gap-5 items-center">
            <p class="text-4xl uppercase text-white">News Letter</p>
            <div
                class="relative flex"
                data-twe-input-wrapper-init
                data-twe-input-group-ref>
                <input
                    type="search"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-white px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                    placeholder="Search"
                    aria-label="Search"
                    id="search-input"
                    aria-describedby="search-button" />
                <label
                    for="search-input"
                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500"
                    >Search
                </label>
                <button
                    class="relative z-[2] -ms-0.5 flex items-center rounded-e bg-[#411514] px-5  text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                    type="button"
                    id="search-button"
                    data-twe-ripple-init
                    data-twe-ripple-color="light">
                    <span class="[&>svg]:h-5 [&>svg]:w-5">
                    Subscribe
                    </span>
                </button>
            </div>

        </div>
    </section>
@endsection
