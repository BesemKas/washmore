<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-xl  leading-tight">
            {{ __('Home') }}
        </h3>
    </x-slot>



    <!-- Jumbotron -->
    <div
        class="relative h-[700px] overflow-hidden rounded-lg bg-[url('C:\Users\janol\source\repos\washmore\public\images\wash.jpg')] bg-cover bg-no-repeat p-12 text-center text-white">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black/60 bg-fixed">
            <div class="flex h-full items-center justify-center">
                <div class="color-textPrimary">
                    <h1 class="banner mb-4 text-4xl ">Experience the Ultimate Shine with Washmore</h1>
                    <h4 class=" banner mb-6 text-xl">Discover Why We're the Top Choice for Car Enthusiasts and
                        Everyday Drivers Alike.</h4>
                    <button type="button"
                        class="btn inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-300 hover:text-neutral-200 focus:border-neutral-300 focus:text-neutral-200 focus:outline-none focus:ring-0 active:border-neutral-300 active:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        Get started today
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <!-- Why Choose Us Section -->
    <section class="py-24 relative">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                <div
                    class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-first order-last">
                    <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                        <img class=" rounded-xl object-cover" src="{{ asset('images/car-polish.jpg') }}"
                            alt="about Us image" />
                    </div>
                    <img class="sm:ml-0 ml-auto rounded-xl object-cover"
                        src="{{ asset('images/service-station-worker-spraying-clay-lubricant-ove-2023-11-27-04-58-15-utc.jpg') }}"
                        alt="about Us image" />
                </div>
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                            <h3 class=" blockTitle text-4xl lg:text-start text-center">
                                Why choose us?</h3>
                            <p class=" font-normal leading-relaxed lg:text-start text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis facilis nulla alias
                                saepe. Commodi deserunt mollitia minima omnis quidem obcaecati, dolorem soluta,
                                excepturi doloribus possimus, asperiores maiores saepe. Molestias, reiciendis.</p>
                        </div>
                        <div class="w-full lg:justify-start justify-center items-center sm:gap-10 gap-5 inline-flex">
                            <div class="flex-col justify-start items-start inline-flex">
                                <h4 class=" text-4xl leading-normal">33+</h4>
                                <h6 class=" text-base font-normal leading-relaxed">Years of Experience
                                </h6>
                            </div>
                            <div class="flex-col justify-start items-start inline-flex">
                                <h4 class=" text-4xl leading-normal">12500+</h4>
                                <h6 class=" text-base leading-relaxed">Successful washes
                                </h6>
                            </div>
                            <div class="flex-col justify-start items-start inline-flex">
                                <h4 class=" text-4xl leading-normal">15000+</h4>
                                <h6 class=" text-base leading-relaxed">Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                    <button
                        class=" btn sm:w-fit w-full px-3.5 py-2  transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                        <span class="btn-text px-1.5  text-sm font-medium leading-6">Read more</span>
                    </button>
                </div>
            </div>
        </div>
    </section>


    {{-- About Section --}}
    <section>
        <div class="relative overflow-hidden pt-16 pb-32 space-y-24">
            <div class="relative">

                <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
                    <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 ">

                        <div>
                            <div>
                                <span class="icon flex h-12 w-12 items-center justify-center rounded-xl">
                                    ICON HERE
                                </span>
                            </div>

                            <div class="mt-6">
                                <h3 class=" blockTitle text-3xl tracking-tight">
                                    Our Membership model:
                                </h3>
                                <p class="mt-4">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. In unde deserunt
                                    repudiandae debitis aut? Eveniet consequatur laboriosam vitae consectetur
                                    repellendus error vero ea, laudantium, est quod asperiores unde velit ut.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="mt-12 sm:mt-16 lg:mt-0">
                        <div class="-mr-48 pl-6 md:-mr-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                            <img loading="lazy" width="647" height="486"
                                class="w-full rounded-xl shadow-2xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                                style="color:transparent"
                                src="{{ asset('images/close-up-of-a-car-wash-worker-using-a-microfiber-c-2024-12-05-17-50-28-utc.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>


            <div class="relative">
                <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
                    <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 lg:col-start-2">
                        <div>
                            <div>
                                <span class="icon flex h-12 w-12 items-center justify-center rounded-xl ">
                                    ICON HERE
                                </span>
                            </div>
                            <div class="mt-6">
                                <h3 class="blockTitle text-3xl tracking-tight ">
                                    Membership Benefits:
                                </h3>
                                <p class="mt-4">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus adipisci eum sint,
                                    eaque aspernatur consectetur corporis odit quibusdam ducimus quis magnam neque
                                    excepturi, minima quod magni quaerat repellendus assumenda quia?
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="mt-12 sm:mt-16 lg:mt-0">
                        <div class="-ml-48 pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                            <img alt="Inbox user interface" loading="lazy" width="647" height="486"
                                class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none"
                                style="color:transparent" src="{{ asset('images/handwash.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>



            <div class="relative">
                <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
                    <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 ">
                        <div>
                            <div>
                                <span class="icon flex h-12 w-12 items-center justify-center rounded-xl">
                                    ICON HERE
                                </span>
                            </div>
                            <div class="mt-6">
                                <h3 class="blockTitle text-3xl  tracking-tight">
                                    Skip the Queue:
                                </h3>
                                <p class="mt-4 ">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero cupiditate quidem
                                    nobis consectetur, quasi magnam quibusdam optio dolorum, asperiores ab sunt quaerat
                                    ut labore tempora libero. Cumque vero quos deserunt.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="mt-12 sm:mt-16 lg:mt-0">
                        <div class="-mr-48 pl-6 md:-mr-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                            <img loading="lazy" width="646" height="485"
                                class="w-full rounded-xl shadow-2xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                                style="color:transparent"
                                src="{{ asset('images/car-polish-wax-and-detailing-young-male-african-w-2024-12-13-02-22-36-utc.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Pricing section --}}
    <section class="py-6 leading-7   sm:py-12 md:py-16">
        <div class="box-border px-4 mx-auto border-solid sm:px-6 md:px-6 lg:px-0 max-w-7xl">

            <div class="flex flex-col items-center leading-7 text-center border-gray-200">
                <h3 id="pricing"
                    class="box-border m-0 text-3xl font-semibold leading-tight tracking-tight border-solid sm:text-4xl md:text-5xl">
                    Membership Plans
                </h3>
                <p class="box-border mt-2 text-xl  border-solid sm:text-2xl">
                </p>
            </div>


            <div id="pricing"
                class="grid grid-cols-1 gap-4 mt-4 leading-7  border-0 border-gray-200 sm:mt-6 sm:gap-6 md:mt-8 md:gap-0 lg:grid-cols-3">
                <!-- Price 1 -->
                <div
                    class="pricing-block relative z-10 flex flex-col items-center max-w-md p-4 mx-auto my-0 border border-solid rounded-lg lg:-mr-3 sm:my-0 sm:p-6 md:my-8 md:p-8">
                    <h3
                        class="m-0 text-2xl font-semibold leading-tight tracking-tight  border-0 border-gray-200 sm:text-3xl md:text-4xl">
                        Silver
                    </h3>
                    <div class="flex items-end mt-6 leading-7  border-0 border-gray-200">
                        <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                            R 1999.99
                        </p>
                        <p class="box-border m-0 border-solid" style="border-image: initial;">
                            / year
                        </p>
                    </div>
                    <ul class="flex-1 p-0 mt-4 ml-5 leading-7  border-0 border-gray-200">
                        <li class="inline-flex items-center  w-full mb-2 ml-5 font-semibold text-left border-solid">
                            <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-logoGreen sm:h-5 sm:w-5 md:h-6 md:w-6"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Unlimited free washes for 1 car
                        </li>

                        <li class="inline-flex items-center  w-full mb-2 ml-5 font-semibold text-left border-solid">
                            <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-logoGreen sm:h-5 sm:w-5 md:h-6 md:w-6"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            10% off all other services
                        </li>

                        <li class="inline-flex items-center  w-full mb-2 ml-5 font-semibold text-left border-solid">
                            <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-logoGreen sm:h-5 sm:w-5 md:h-6 md:w-6"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Priority Service
                        </li>

                    </ul>
                    <a href="#"
                        class=" startBtn inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center no-underline bg-transparent border  rounded-md cursor-pointer   sm:text-base md:text-lg">
                        Get it today!
                    </a>
                </div>
                <!-- Price 2 -->
                <div
                    class=" pricing-block-main relative z-20 flex flex-col items-center max-w-md p-4 mx-auto my-0  border-4 border-blue-600 border-solid rounded-lg sm:p-6 md:px-8 md:py-16">
                    <h3
                        class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                        Gold
                    </h3>
                    <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                        <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                            R3799.99
                        </p>
                        <p class="box-border m-0 border-solid" style="border-image: initial;">
                            / year
                        </p>
                    </div>
                    <ul class="flex-1 p-0 mt-4 ml-5 leading-7 text-gray-900 border-0 border-gray-200">
                        <li class="inline-flex items-center  w-full mb-2 ml-5 font-semibold text-left border-solid">
                            <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-logoGreen sm:h-5 sm:w-5 md:h-6 md:w-6"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Unlimited free washes for 2 cars
                        </li>

                        <li class="inline-flex items-center  w-full mb-2 ml-5 font-semibold text-left border-solid">
                            <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-logoGreen sm:h-5 sm:w-5 md:h-6 md:w-6"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            15% off all other services
                        </li>

                        <li class="inline-flex items-center  w-full mb-2 ml-5 font-semibold text-left border-solid">
                            <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-logoGreen sm:h-5 sm:w-5 md:h-6 md:w-6"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Priority Service
                        </li>

                        <li class="inline-flex items-center  w-full mb-2 ml-5 font-semibold text-left border-solid">
                            <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-logoGreen sm:h-5 sm:w-5 md:h-6 md:w-6"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            ?other benefit here?
                        </li>
                    </ul>

                    <a href="#"
                        class=" startBtn inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center no-underline bg-transparent border  rounded-md cursor-pointer   sm:text-base md:text-lg">
                        Get it today!
                    </a>
                </div>
                <!-- Price 3 -->
                <div
                    class=" pricing-block relative z-10 flex flex-col items-center max-w-md p-4 mx-auto my-0 border border-solid rounded-lg lg:-ml-3 sm:my-0 sm:p-6 md:my-8 md:p-8">
                    <h3
                        class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                        Diamond
                    </h3>
                    <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                        <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                            R4699.99
                        </p>
                        <p class="box-border m-0 border-solid" style="border-image: initial;">
                            / year
                        </p>
                    </div>

                    <ul class="flex-1 p-0 mt-4 leading-7 text-gray-900 border-0 border-gray-200">
                        <li class="inline-flex items-center  w-full mb-2 ml-5 font-semibold text-left border-solid">
                            <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-logoGreen sm:h-5 sm:w-5 md:h-6 md:w-6"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Unlimited free washes for up to 4 cars
                        </li>

                        <li class="inline-flex items-center  w-full mb-2 ml-5 font-semibold text-left border-solid">
                            <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-logoGreen sm:h-5 sm:w-5 md:h-6 md:w-6"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            20% off all other services
                        </li>

                        <li class="inline-flex items-center  w-full mb-2 ml-5 font-semibold text-left border-solid">
                            <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-logoGreen sm:h-5 sm:w-5 md:h-6 md:w-6"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Priority service
                        </li>


                        <li class="inline-flex items-center  w-full mb-2 ml-5 font-semibold text-left border-solid">
                            <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-logoGreen sm:h-5 sm:w-5 md:h-6 md:w-6"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            ?other benefit here?
                        </li>


                        <li class="inline-flex items-center  w-full mb-2 ml-5 font-semibold text-left border-solid">
                            <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-logoGreen sm:h-5 sm:w-5 md:h-6 md:w-6"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            ?other benefit here?
                        </li>

                        <li class="inline-flex items-center w-full mb-2 ml-5 font-semibold text-left border-solid">
                            <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-logoGreen sm:h-5 sm:w-5 md:h-6 md:w-6"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            ?other benefit here?
                        </li>

                    </ul>
                    <a href="#"
                        class=" startBtn inline-flex justify-center w-full px-4 py-3 mt-8 text-sm leading-none text-center no-underline bg-transparent border  rounded-md cursor-pointer   sm:text-base md:text-lg">
                        Get it today!
                    </a>

                </div>
            </div>
        </div>
    </section>

    {{-- location section  --}}
    <section class="">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
            <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
                <h3 class="text-3xl blockTitle ">Visit Our Location</h3>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="mt-16 lg:mt-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="rounded-lg overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.2754686192493!2d18.818605376562545!3d-34.08808293045142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcdb5afa2986a85%3A0x50f7c1bbd71afba9!2sCar%20Wash%20at%20The%20Sanctuary!5e0!3m2!1sen!2sza!4v1710966840246!5m2!1sen!2sza"
                            width="100%" height="480" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <div>
                        <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                            <div class="px-6 py-4">
                                <h3 class="blockTitle ">Our Address</h3>
                                <p class=" mt-1 ">12 wash st</p>
                            </div>
                            <div class="border-t border-gray-200 px-6 py-4">
                                <h3 class="blockTitle ">Hours</h3>
                                <p class=" mt-1 ">Monday - Friday: 9am - 5pm</p>
                                <p class=" mt-1 ">Saturday: 10am - 4pm</p>
                                <p class=" mt-1 ">Sunday: Closed</p>
                            </div>
                            <div class="border-t border-gray-200 px-6 py-4">
                                <h3 class="blockTitle ">Contact</h3>
                                <p class=" mt-1 ">Email: info@example.com</p>
                                <p class=" mt-1 ">Phone: +1 23494 34993</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




</x-app-layout>
