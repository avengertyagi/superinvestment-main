<x-app-layout>
    <x-slot name="header">
        <div class="md:container md:mx-auto">
            <div class="md:-mx-8">
                <div class="bg-no-repeat bg-white" style="background: url('{{ asset('/Image/banner/bannercorner1.svg') }}') left bottom no-repeat , url('{{ asset('/Image/banner/bannercorner2.svg') }}') right top no-repeat; background-size:13rem;">
                <h1 class="font-bold text-center text-gray-900 md:text-7xl text-4xl py-20">Deal Summary</h1>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="md:container md:mx-auto">
        <div class="xl:-mx-8 bg-gray-100">
            <div class="md:w-1/2 bg-white flex flex-col justify-center items-center mx-auto shadow-md">
                <div class="my-2">
                    <img src="{{ asset('/Image/stanplus.png') }}">
                </div>
                <div class="gap-4 grid grid-flow-col w-4/5">
                    <div class="border-2 border-red-400 my-2 rounded-md w-full">
                        <p class="text-center p-3 text-gray-900 font-bold xl:text-2xl text-sm">Investment</p>
                        <p class="text-center p-3 text-gray-400 font-bold xl:text-2xl text-sm">{{ $asset->investment }}</p>
                    </div>
                    <div class="border-2 border-red-400 my-2 rounded-md w-full">
                        <p class="text-center p-3 text-gray-900 font-bold xl:text-2xl text-sm">Post Tax Return</p>
                        <p class="text-center p-3 text-gray-400 font-bold xl:text-2xl text-sm">
                            {{ ($asset->deal->post_tax * $asset->investment) / 100 }}</p>
                    </div>
                </div>
                <div class="w-4/5 py-4 grid grid-flow-col border-2 border-red-400 rounded-md">
                    <div class="w-full">
                        <h2 class="font-semibold p-2 text-lg">Tenure</h2>
                        <h2 class="font-semibold p-2 text-lg">Pre tax IRR</h2>
                        <h2 class="font-semibold p-2 text-lg">Tax Applicable</h2>
                        <h2 class="font-semibold p-2 text-lg">Post tax IRR</h2>
                    </div>
                    <div class="w-full xl:text-right lg:text-right text-right text-gray-500">
                        <h2 class="font-semibold p-2 text-lg">{{ $asset->deal->tenure . ' ' . $asset->deal->tenure_type }}</h2>
                        <h2 class="font-semibold p-2 text-lg">{{ number_format((float) $asset->deal->pre_tax, 2, '.', '') }}%</h2>
                        <h2 class="font-semibold p-2 text-lg">{{ number_format((float) $asset->deal->tax, 2, '.', '') }}%</h2>
                        <h2 class="font-semibold p-2 text-lg">{{ number_format((float) $asset->deal->post_tax, 2, '.', '') }}%</h2>
                    </div>
                </div>
                <a class="p-4 text-center text-sm font-semibold underline text-red-400" href="">View Payment Schedule</a>
                <div class="md:w-4/5 h-16 flex flex-row">
                    <form action="{{route('assets.payment.success')}}" method="POST" class="w-full">
                        @csrf
                        <input type="hidden" name="asset_id" value="{{ $asset->asset_id }}">
                        <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ env('RAZOR_KEY') }}"
                            data-amount="{{ $asset->investment*100 }}" data-buttontext="hidden"
                            data-image="{{ asset('/image/nice.png') }}" data-prefill.name="name"
                            data-notes.shopping_asset_id="{{ $asset->id }}" data-prefill.email="email"
                            data-theme.color="orangemix">
                        </script>
                        <div class="w-full">
                            <input type="submit" value="Proceed to Pay" class="bg-orangemix cursor-pointer p-3 rounded text-white w-full">
                        </div>
                    </form>
                    {{--<button type="submit" class="m_5 bg-orangemix text-white text-center   shadow text-2xl font-medium py-2 px-4 rounded"
                        style="width:100%;">Proceed to Pay
                    </button>--}}
                </div>
                <div class="p-3">
                    <p class="text-sm text-center text-gray-700 font-medium"> By clicking Proceed, I agree to the <b>Terms
                            and Conditions</b>and<b>Risk Involved</b></p>
                    <p class="p-3 text-sm text-center text-gray-700 font-medium">Note: All amounts are post tax and after
                        payment towards super invest fees<br /> of 1.0% of total income. In case of change in applicable tax
                        rates, these<br /> amounts may change without notice.</p>
                </div>
            </div>
        </div>
    </div>
    <!--actual component end-->
    <x-slot name="footer">
        <x-footer>

        </x-footer>
    </x-slot> 
</x-app-layout>
