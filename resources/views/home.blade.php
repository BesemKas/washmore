<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>


    <!-- Jumbotron Section -->
    <!-- Jumbotron -->
    <div
        class="relative h-[400px] overflow-hidden rounded-lg bg-[url('C:\Users\janol\source\repos\washmore\public\images\wash.jpg')] bg-cover bg-no-repeat p-12 text-center text-white">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black/60 bg-fixed">
            <div class="flex h-full items-center justify-center">
                <div class="text-white">
                    <h2 class="mb-4 text-4xl font-semibold">Experience the Ultimate Shine with Washmore</h2>
                    <h4 class="mb-6 text-xl font-semibold">Discover Why We're the Top Choice for Car Enthusiasts and
                        Everyday Drivers Alike.</h4>
                    <button type="button"
                        class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-300 hover:text-neutral-200 focus:border-neutral-300 focus:text-neutral-200 focus:outline-none focus:ring-0 active:border-neutral-300 active:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        Get started today
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <!-- Why Choose Us Section -->
    <section id="services" class="py-16 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-gray-900 dark:text-white mb-8">Why Choose Us</h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/3 px-4 mb-8 flex">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 flex flex-col">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Unmatched Quality</h3>
                        <p class="mt-4 text-gray-700 dark:text-gray-400 flex-grow">At Washmore, we deliver top-notch
                            carwash
                            services with meticulous attention to detail. Your car will look as good as new with our
                            premium products and state-of-the-art equipment.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8 flex">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 flex flex-col">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Exceptional Experience</h3>
                        <p class="mt-4 text-gray-700 dark:text-gray-400 flex-grow">We prioritize your satisfaction with
                            friendly
                            staff, comfortable waiting areas, and a hassle-free process. Washmore ensures you leave with
                            a smile and a shiny car.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8 flex">
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 flex flex-col">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Eco-Friendly Practices</h3>
                        <p class="mt-4 text-gray-700 dark:text-gray-400 flex-grow">Washmore is committed to using
                            eco-friendly
                            products and water-saving technologies. Choose us for a premium wash that also cares for the
                            environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pb-6">
        <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
            <div class="container mx-auto px-6 p-6 bg-white">


                <div class="mb-16 text-center">
                    <h4 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Features</h4>
                    <p class="mt-2 text-5xl lg:text-7xl font-bold tracking-tight text-gray-900">How we change the game

                    </p>
                </div>


                <div class="flex flex-wrap my-12">


                    <div class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 p-8">
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-6 w-6 text-indigo-500">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            <div class="ml-4 text-xl">Increase sales</div>
                        </div>
                        <p class="leading-loose text-gray-500">Consectetur pariatur irure exercitation sit amet id
                            consectetur consecteturmagna et Lorem labore qui velit.
                        </p>
                    </div>



                    <div class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r p-8">
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-6 w-6 text-indigo-500">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            <div class="ml-4 text-xl">Enterprise-ready</div>
                        </div>
                        <p class="leading-loose text-gray-500">Labore duis pariatur est exercitation laboris cupidatat
                            amet
                            cillum. Amet nisi ullamco.
                        </p>
                    </div>



                    <div class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 lg:border-r-0 p-8">
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-6 w-6 text-indigo-500">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            <div class="ml-4 text-xl">Unlimited growth</div>
                        </div>
                        <p class="leading-loose text-gray-500">Elit deserunt nisi esse duis cupidatat proident sit minim
                            mollit officia pariatur incididunt in tempor.
                        </p>
                    </div>



                    <div class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r lg:border-b-0 p-8">
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-6 w-6 text-indigo-500">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            <div class="ml-4 text-xl">Recommended by experts</div>
                        </div>
                        <p class="leading-loose text-gray-500">Velit sit tempor pariatur quis pariatur incididunt culpa
                            dolor voluptate officia incididunt velit dolore.
                        </p>
                    </div>



                    <div class="w-full border-b md:w-1/2 md:border-r md:border-b-0 lg:w-1/3 lg:border-b-0 p-8">
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-6 w-6 text-indigo-500">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            <div class="ml-4 text-xl">Modern platform</div>
                        </div>
                        <p class="leading-loose text-gray-500">Laboris elit consectetur sint nisi eu mollit proident sit
                            magna velit adipisicing consequat amet reprehenderit.
                        </p>
                    </div>



                    <div class="w-full md:w-1/2 lg:w-1/3 p-8">
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-6 w-6 text-indigo-500">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            <div class="ml-4 text-xl">Integrations</div>
                        </div>
                        <p class="leading-loose text-gray-500">Nostrud excepteur incididunt proident sit nulla ipsum
                            sunt
                            nostrud est esse adipisicing irure officia consectetur.
                        </p>
                    </div>



                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
            <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">Visit Our Location</h2>
                <p class="mt-4 text-lg text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
                                <h3 class="text-lg font-medium text-gray-900">Our Address</h3>
                                <p class="mt-1 text-gray-600">12 wash st</p>
                            </div>
                            <div class="border-t border-gray-200 px-6 py-4">
                                <h3 class="text-lg font-medium text-gray-900">Hours</h3>
                                <p class="mt-1 text-gray-600">Monday - Friday: 9am - 5pm</p>
                                <p class="mt-1 text-gray-600">Saturday: 10am - 4pm</p>
                                <p class="mt-1 text-gray-600">Sunday: Closed</p>
                            </div>
                            <div class="border-t border-gray-200 px-6 py-4">
                                <h3 class="text-lg font-medium text-gray-900">Contact</h3>
                                <p class="mt-1 text-gray-600">Email: info@example.com</p>
                                <p class="mt-1 text-gray-600">Phone: +1 23494 34993</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog Carousel Section -->
    <section class="bg-gray-100 dark:bg-gray-900 py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-gray-900 dark:text-white mb-8">Our Services</h2>
            <div class="swiper-container-wrapper">
                <div class="swiper-container">
                    <div class="swiper-wrapper"> <!-- Service Card 1 -->
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6"> <img
                                    src="path/to/image1.jpg" alt="Service 1"
                                    class="rounded-t-lg w-full h-48 object-cover">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-4">Exterior Wash</h3>
                                <p class="mt-2 text-gray-700 dark:text-gray-400">A thorough exterior clean that leaves
                                    your car shining.</p> <a href="#"
                                    class="text-indigo-600 dark:text-indigo-400 mt-4 inline-block">Learn More</a>
                            </div>
                        </div> <!-- Service Card 2 -->
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6"> <img
                                    src="path/to/image2.jpg" alt="Service 2"
                                    class="rounded-t-lg w-full h-48 object-cover">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-4">Interior Detailing
                                </h3>
                                <p class="mt-2 text-gray-700 dark:text-gray-400">Detailed interior cleaning for a
                                    spotless ride inside.</p> <a href="#"
                                    class="text-indigo-600 dark:text-indigo-400 mt-4 inline-block">Learn More</a>
                            </div>
                        </div> <!-- Service Card 3 -->
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6"> <img
                                    src="path/to/image3.jpg" alt="Service 3"
                                    class="rounded-t-lg w-full h-48 object-cover">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-4">Engine Cleaning</h3>
                                <p class="mt-2 text-gray-700 dark:text-gray-400">Keep your engine clean and running
                                    smoothly.</p> <a href="#"
                                    class="text-indigo-600 dark:text-indigo-400 mt-4 inline-block">Learn More</a>
                            </div>
                        </div> <!-- Service Card 4 -->
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6"> <img
                                    src="path/to/image4.jpg" alt="Service 4"
                                    class="rounded-t-lg w-full h-48 object-cover">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-4">Wax & Polish</h3>
                                <p class="mt-2 text-gray-700 dark:text-gray-400">Enhance your car's shine with our wax
                                    and polish service.</p> <a href="#"
                                    class="text-indigo-600 dark:text-indigo-400 mt-4 inline-block">Learn More</a>
                            </div>
                        </div> <!-- Service Card 5 -->
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6"> <img
                                    src="path/to/image5.jpg" alt="Service 5"
                                    class="rounded-t-lg w-full h-48 object-cover">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-4">Tire & Wheel Cleaning
                                </h3>
                                <p class="mt-2 text-gray-700 dark:text-gray-400">Clean and polish your tires and wheels
                                    for a complete look.</p> <a href="#"
                                    class="text-indigo-600 dark:text-indigo-400 mt-4 inline-block">Learn More</a>
                            </div>
                        </div> <!-- Service Card 6 -->
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6"> <img
                                    src="path/to/image6.jpg" alt="Service 6"
                                    class="rounded-t-lg w-full h-48 object-cover">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-4">Headlight Restoration
                                </h3>
                                <p class="mt-2 text-gray-700 dark:text-gray-400">Restore clarity to your headlights for
                                    better visibility.</p> <a href="#"
                                    class="text-indigo-600 dark:text-indigo-400 mt-4 inline-block">Learn More</a>
                            </div>
                        </div>
                    </div> <!-- Add Pagination -->
                    <div class="swiper-pagination"></div> <!-- Add Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section> <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

</x-app-layout>
