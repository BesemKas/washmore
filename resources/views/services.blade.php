<x-app-layout>


    <!-- Jumbotron -->
    <div
        class="relative h-[400px] overflow-hidden rounded-lg bg-[url('C:\Users\janol\source\repos\washmore\public\images\wash.jpg')] bg-cover bg-no-repeat p-12 text-center text-white">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black/60 bg-fixed">
            <div class="flex h-full items-center justify-center">
                <div class="color-textPrimary">
                    <h1 class=" banner mb-4 tracking-tight  text-3xl sm:text-5xl">
                        Services
                        </h2>
                        <h4 class="banner mx-auto mt-4 max-w">In hac habitasse platea
                            dictumst
                        </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron end -->

    <!-- Orignal design source: https://github.com/mfg888/Responsive-Tailwind-CSS-Grid/blob/main/index.html -->

    <div class="text-center p-10">
        <h1 class="font-bold text-4xl mb-4">The Washmore Services</h1>

    </div>

    <!-- Grid Section - Starts Here 👇 -->
    <section id="services"
        class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

        <!--   Service card - Starts Here 👇 -->
        <div class="w-[400px] bg-white shadow-md rounded-xl">
            <img src="{{ asset('images/wash.jpg') }}"
                    alt="Service" class="h- w-100 object-cover rounded-t-xl" />
            <div class="px-4 py-7 w-100 h-auto">
                
                <h3 class="blockTitle truncate block capitalize">Service Name</h3>
                <div class="flex items-center">
                    <p class=" cursor-auto my-3">R400</p>
                    <del class="text-pink-700">
                        <p class="text-sm cursor-auto ml-2">R799</p>
                    </del>
                    <a href="#" class="ml-auto">
                        <button
                            class="btn sm:w-fit w-full px-3.5 py-2 transition-all  ease-in-out rounded-lg duration-500 hover:scale-105 hover:shadow-xl justify-center items-center flex ml-auto">
                            <span class="btn-text px-1.5  text-sm font-medium leading-6">Read more</span>
                        </button>
                    </a>
                </div>
            </div>
        
        </div>
        <!--   Service card - Ends Here  -->

        

    </section>

    <!-- Grid Section - Ends Here -->
</x-app-layout>
