<x-app-layout>
    <x-slot name="header">
        <div class="md:container md:mx-auto">
        <div class="md:-mx-8">
            <div class="bg-no-repeat bg-white" style="background: url('{{ asset('/Image/banner/bannercorner1.svg') }}') left bottom no-repeat , url('{{ asset('/Image/banner/bannercorner2.svg') }}') right top no-repeat; background-size:13rem;">
            <h1 class="font-bold text-center text-gray-900 md:text-7xl text-2xl py-20">Deals</h1>
            </div>
        </div>
        </div>
    </x-slot>
    <!-- Container -->
    <div class="container mx-auto">
        <div class="w-11/12 md:px-24 my-8 mx-auto">
            <ul class="flex items-center my-4 border-b-2 border-gray-500 mb-14">
                <div class="border-t-4 border-orangemix">
                    <div class="border-b-2 border-white -mb-1 bg-white md:flex">
                        <li class="cursor-pointer py-0 px-4 text-2xl font-basic text-gray-800 border-l-2 border-r-2 border-gray-500"><a href="{{ route('deals')}}">Active</a></li>
                    </div>
                </div>
                <li class="cursor-pointer py-0 px-4 text-2xl font-basic text-gray-800 "><a href="{{ route('deals.complete')}}">Completed</a></li>
            </ul>

            <x-deals.activedeal :deals="$deals"></x-deals.activedeal>

        </div>
    </div>
    <div class="md:container md:mx-auto">
        <div class="md:-mx-8 bg-superinvestgray">
            <section class="px-4 mx-auto md:w-3/4 sm:px-6 lg:px-8 py-8">
                <x-deals.testimonial></x-deals.testimonial>
            </section>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="md:-mx-8">
            
            <section class="bg-white px-4 mx-auto md:w-3/4 sm:px-6 lg:px-8 py-8"> 
                <div class="my-20">
                    <div class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide px-4" >
                                    <div class="mx-auto">
                                        <img class="h-46 w-46 rounded-0" src="{{asset('/Image/blog-1.png')}}">
                                        <h4 class="py-8 justify-evenly text-justify font-semibold text-base">Lorem ipsum dolor sitamet consectetur</h4>
                                    </div>
                                </li>
                                <li class="splide__slide px-4">
                                    <div class="mx-auto">
                                        <img class="h-46 w-46 rounded-0" src="{{asset('/Image/blog-2.png')}}">
                                        <h4 class="py-8 justify-evenly text-justify font-semibold text-base">Lorem ipsum dolor sitamet consectetur</h4>
                                    </div>
                                </li>
                                <li class="splide__slide px-4">
                                    <div class="mx-auto">
                                        <img class="h-46 w-46 rounded-0" src="{{asset('/Image/blog-3.png')}}">
                                        <h4 class="py-8 justify-evenly text-justify font-semibold text-base">Lorem ipsum dolor sitamet consectetur</h4>
                                    </div> 
                                </li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </section>
        </div>
        <!--actual component end-->
        <x-slot name="footer">
            <x-footer>

            </x-footer>
        </x-slot>
    </div>
</x-app-layout>
