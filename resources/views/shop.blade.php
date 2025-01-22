<x-app-layout>


    <!-- Jumbotron -->
    <div
        class="relative h-[400px] overflow-hidden rounded-lg bg-[url('C:\Users\janol\source\repos\washmore\public\images\wash.jpg')] bg-cover bg-no-repeat p-12 text-center text-white">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black/60 bg-fixed">
            <div class="flex h-full items-center justify-center">
                <div class="color-textPrimary">
                    <h1 class=" banner mb-4 tracking-tight  text-3xl sm:text-5xl">
                        Welcome to our shop
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

    <!--serachbar-->

    <!--end searchbar-->

    <!-- Product Grid -->
    <div class="container flex justify-center mx-auto px-6 py-12 space-y-6">
        <div class="mb-4 grid gap-3 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4 justify-items-center mt-6">
            @foreach ($products as $product)
                <x-product-frame :product="$product" :key="$product->id" />
            @endforeach
        </div>
    </div>


    <!-- Product Grid end -->



</x-app-layout>
