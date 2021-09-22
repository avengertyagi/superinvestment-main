<x-app-layout>
    <x-slot name="header">
    <div class="mx-auto">
        <div class="md:container lg:container sm:container xl:container mx-auto">
            <div class="md:-mx-8" style="background: url('{{ asset('/Image/banner/bannercorner1.svg') }}') left bottom no-repeat , url('{{ asset('/Image/banner/bannercorner2.svg') }}') right top no-repeat; background-size:16rem;">
                <div class="py-8 px-4 md:mx-28 md:flex">
                    <div class="md:space-x-14 mx-auto md:py-14 pb-52 pt-32 md:flex">
                        <div class="md:w-1/2 xl:w-full px-2 md:pt-8 md:pr-10 md:pl-14">
                            <h1 class="font-headings font-normal lg:text-left md:text-4xl xl:text-6xl xl:text-h1">
                                <p>High Returns?</p>
                                <p class="pt-2">Think<span class="font-bold">Super</span>Invest.</p>
                            </h1>
                            <div class="lg:w-3/4 pt-8">
                                <p class="font-normal lg:px-0 lg:text-left mb-4 text-primary-light text-md">
                                    Earn high fixed returns with a small investment in physical <br>assets that are leased to top-tier corporate clients.
                                </p>
                                <div class="lg:grid lg:grid-cols-7">
                                    <div class="col-span-12 lg:px-0 mb-4 lg:mb-0">
                                        @auth
                                            <div class="mx-auto flex items-center">
                                                <a href="{{url('/deals')}}" class="text-center shadow-lg bg-orangemix w-full my-6 p-4 m_5 bg-opacity: 20 text-white text-base font-semibold rounded-md">View Deals</a>
                                            </div>
                                        @endauth
                                        @guest
                                            <form method="POST" action="{{ route('login') }}"
                                                x-data="form()"
                                                @submit="submit">
                                                @csrf
                                                <div class="mx-auto flex items-center">
                                                    <input class="input appearance-none rounded w-full px-3 py-3 focus focus:outline-none active:outline-none border-2 border-orangemix" type="text" name="email" value="" placeholder="Enter your email /mobile no" required>
                                                </div>
                                                <div class="mx-auto flex items-center">
                                                    <button class="shadow-lg bg-orangemix w-full my-6 p-4 m_5 bg-opacity: 20 text-white text-base font-semibold rounded-md">Become an investor
                                                    </button>
                                                </div>
                                            </form>
                                        @endguest

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-1/2 pt-4 md:pr-12">
                            <img class="md:mr-4 md:ml-auto mx-auto md:w-96 sm:w-72 w-18rem" src="{{ asset('/Image/Group 396.png')}}" width="400" height="400">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-slot>

    <x-home.section1></x-home.section1>


    <x-home.section2></x-home.section2>

    @include('components.home.section3')

    <x-home.section4></x-home.section4>
    @guest
    <x-home.section5></x-home.section5>
    @endguest
    <x-slot name="footer">
        <x-footer>
        <div class="md:container lg:container sm:container xl:container mx-auto">
            <div class="md:w-3/4 md:mx-28 mx-4 py-8 pb-20 md:px-0 pt-16 bg-opacity-50  flex justify-base items-center">
                <div class="text-white">
                    <h2 class="font-normal mb-6 md:text-4xl md:text-left text-4xl text-center text-gray-900 xl:text-5xl">Want lease finance?</h2>
                    <p class="font-medium md:w-3/5 text-gray-900">Please fill the form below and we will reach out to you. For further queries mail us at <a href="mailto:lease@superinvest.in"><b class="font-semibold text-lg mb-4 lg:mb-0 lg:mr-0">lease@superinvest.in</b></a></p>
                    <p class="md:w-96 my-4"><button class="w-full text-center text-gray-900 bg-white p-2.5 rounded drop-shadow-md shadow-xl" @click="">Want lease finance?</button></p>
                </div>
            </div>
        </div>
        </x-footer>
    </x-slot>
</x-app-layout>
