<x-app-layout>
    <x-slot name="header">
        <div class="md:container md:mx-auto">
            <div class="md:-mx-8">
                <div class="bg-no-repeat bg-white" style="background: url('{{ asset('/Image/banner/bannercorner1.svg') }}') left bottom no-repeat , url('{{ asset('/Image/banner/bannercorner2.svg') }}') right top no-repeat; background-size:13rem;">
                <h1 class="font-bold text-center text-gray-900 md:text-7xl text-2xl py-20">About Us</h1>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="md:container md:mx-auto my-4">
        <div class="bg-white  grid grid-rows-1 grid-flow-col gap-4">
            <div class="w-full bg-white text-center my-20">
                <div class="text-center md:w-2/5 px-4 mx-auto justify">
                    <p class="leading-8 text-justify font-medium justify-around text-gray-800 text-2xl py-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris quam tellus, volutpat sit amet metus sit amet, rhoncus ultrices odio. Nulla facilisi. Aenean id purus</p>
                </div>
            </div>
        </div>
    </div>
    <div class="md:container md:mx-auto">
        <div class="md:-mx-8 bg-white py-8">
            <div class="md:w-8/12 w-full px-4 md:px-0 mx-auto md:flex md:space-x-8">
                <div class="md:w-2/3 px-4 mx-auto text-center relative items-center">
                    <h2 class="text-orangemix items-center text-5xl text-center font-bold py-4">Management</h2>
                    <p class="md:text-left leading-8 text-justify font-medium justify-around text-gray-800 text-xl py-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris quam tellus, volutpat sit amet metus sit amet,rhoncus ultrices odio. Nulla facilisi. Aenean id purus</p>
                </div>
                <div class="md:w-1/3 mx-auto text-center relative items-center">
                    <img class="mx-auto" src="{{asset('/Image/Rectangle 123.png')}}" alt="" class="">
                </div>
            </div>
        </div>
    </div>
    <div class="md:container md:mx-auto">
        <div class="md:-mx-8 bg-gray-200 py-8">
            <div class="md:w-8/12 mx-auto w-full px-4 md:px-0 md:flex md:space-x-4">
                <div class="md:w-1/3 mx-auto text-center relative items-center">
                    <img class="mx-auto" class="mx-auto" src="{{asset('/Image/Rectangle 123.png')}}" alt="" class="">
                </div>
                <div class="md:w-2/3 px-4 mx-auto text-center relative items-center">
                    <h2 class="text-orangemix items-center text-5xl text-center font-bold py-4">Management</h2>
                    <p class="md:text-right leading-8 text-justify font-medium justify-around text-gray-800 text-xl py-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris quam tellus, volutpat sit amet metus sit amet,rhoncus ultrices odio. Nulla facilisi. Aenean id purus</p>
                </div>
            </div>
        </div>
    </div>
    <div class="md:container md:mx-auto">
        <div class="md:-mx-8 bg-white py-8">
            <div class="md:w-8/12 mx-auto w-full px-4 md:px-0 md:flex md:space-x-4">
                <div class="md:w-2/3 px-4 mx-auto text-center relative items-center">
                    <h2 class="text-orangemix items-center text-5xl text-center font-bold py-4">Management</h2>
                    <p class="md:text-left leading-8 text-justify font-medium justify-around text-gray-800 text-xl py-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris quam tellus, volutpat sit amet metus sit amet,rhoncus ultrices odio. Nulla facilisi. Aenean id purus</p>
                </div>
                <div class="md:w-1/3 mx-auto text-center relative items-center">
                    <img class="mx-auto" src="{{asset('/Image/Rectangle 123.png')}}" alt="" class="">
                </div>
            </div>
        </div>
    </div>
    <div class="md:container md:mx-auto">
        <div class="md:-mx-8 bg-gray-200 py-8">
            <div class="md:w-8/12 mx-auto w-full px-4 md:px-0 md:flex md:space-x-4">
                <div class="md:w-1/3 mx-auto text-center relative items-center">
                    <img class="mx-auto" src="{{asset('/Image/Rectangle 123.png')}}" alt="" class="">
                </div>
                <div class="md:w-2/3 mx-auto px-4 text-center relative items-center">
                    <h2 class="text-orangemix items-center text-5xl text-center font-bold py-4">Management</h2>
                    <p class="md:text-right leading-8 text-justify font-medium justify-around text-gray-800 text-xl py-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Mauris quam tellus, volutpat sit amet metus sit amet,rhoncus ultrices odio. Nulla facilisi. Aenean id purus</p>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="footer">
        <x-footer></x-footer>
    </x-slot>
</x-app-layout>