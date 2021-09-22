<div class="md:container lg:container sm:container xl:container mx-auto">
    <div class="md:-mx-8">
        <div class="w-full h-full  bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('/Image/footer/topfooterbg.svg') }}');">
            
            {{ $slot }}
                
            <div style="background-image: url('{{ asset('/Image/footer/bottomfooterbg.svg') }}'); background-size:cover; ">
                <div class="md:pt-32 px-4 md:mx-28 pt-32">
                    <div class="grid md:grid-cols-2 grid-cols-1 sm:grid-flow-col sm:grid-cols-2">
                        <div class="w-full">
                            <img class="md:mx-0 mx-auto" src="{{asset('/Image/download (3).png')}}" width="300" height="300">
                            <p class="text-medium pt-8 text-white lg:w-3/4 text-center lg:pr-16 lg:text-left inline-block">Superinvest is an investment platform that offers asset backed investment opportunities in lease finance with a low investment amount and high fixed returns.</p>
                        </div>
                        <div class="grid grid-flow-col relative w-full">
                            <div class="xl:absolute lg:absolute bottom-0 xl:flex lg:flex pt-8 right-0 xl:w-max lg:w-max w-full">
                                <p class="text-center align-text-bottom xl:mb-0 mb-4 md:mb-0 font-extrabold"><a href="" class="text-white text-xl font-normal mb-4 lg:mb-0 lg:mr-0">hey@superinvest.in</a></p>
                                <ul class="text-center flex w-max mx-auto xl:mx-0 mt-4 md:mx-0 xl:mt-0 px-4">
                                    <li class="px-2"><a href=""><img class="h-8 w-8  mx-auto" src="{{ asset('/Image/socialicon/facebook.4b97abdd.svg') }}"></a></li>
                                    <li class="px-2"><a href=""><img class="h-8 w-8  mx-auto" src="{{ asset('/Image/socialicon/instagram.5d35006b.svg') }}"></a></li>
                                    <li class="px-2"><a href=""><img class="h-8 w-8  mx-auto" src="{{ asset('/Image/socialicon/twitter.b482e970.svg') }}"></a></li>
                                    <li class="px-2"><a href=""><img class="h-8 w-8  mx-auto" src="{{ asset('/Image/socialicon/linkedin.c422b38c.svg') }}"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pt-10 pb-5">
                        <p class="text-lg text-white lg:w-3/4 text-center lg:text-left inline-block">© 2021 • Supercap FInance Technology India Pvt Ltd</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>