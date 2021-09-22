<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto">
            <div class="md:-mx-8">
                <div class="bg-no-repeat bg-white"
                    style="background: url('{{ asset('/Image/banner/bannercorner1.svg') }}') left bottom no-repeat , url('{{ asset('/Image/banner/bannercorner2.svg') }}') right top no-repeat; background-size:13rem;">
                    <h1 class="md:font-bold font-semibold text-center text-gray-900 md:text-7xl py-20">Deals</h1>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="md:container md:mx-auto">
        <div class="md:w-11/12 md:px-20 px-4 md:my-8 md:mx-auto">
            <div class="breadcrumb flex space-x-2">
                <a class="text-gray-300 text-sm" href="{{ url('/deal') }}">Deals</a>
                <span class="breadlink p-0 text-gray-300"></span>
                <span class="text-gray-800 text-sm">Deal Details</span>
            </div>
            <div class="col-span-2 border-b-2 border-gray-600">
                <img
                    src="{{ Storage::disk('public')->exists($deal->logo_path) ? Storage::url($deal->logo_path) : asset('/Image/stanplus.png') }}">
            </div>
            <div class="md:flex md:flex-grow md:space-x-4">
                <div class="md:w-2/3">
                    <div class="md:grid grid-rows-2 space-x-4 md:grid-rows-1 py-6">
                        <div class="buttons my-auto flex m_5 px-4 py-2 w-full bg-orangemix rounded">
                            <span class="w-1/3 p-2 text-center text-gray-100 font-medium bg-orangemix">IRR
                                {{ number_format((float) $deal->irr, 2, '.', '') }}%</span>
                            <span
                                class="w-1/3 p-2 text-center text-gray-100 font-medium border-r border-l border-white bg-orangemix">Tenure
                                {{ $deal->tenure }} {{ $deal->tenure_type }}</span>
                            <span class="w-1/3 p-2 text-center text-gray-100 font-medium bg-orangemix">Min. Investment
                                ₹{{ $deal->min_investment }}</span>
                        </div>
                    </div>
                    <div class="-my-4">
                        <img class="rounded-md"
                            src="{{ Storage::disk('public')->exists($deal->banner_path) ? Storage::url($deal->banner_path) : asset('/Image/bigspoo.jpg') }}">
                    </div>
                    <div x-data="setup()" class="md:flex mt-16">
                        <ul class="md:w-1/3 bg-superinvestgray md:bg-white pr-1 justify-start items-center my-4 md:border-r border-gray-300"
                            style="height:fit-content;">
                            <template x-for="(tab, index) in tabs" :key="index">
                                <div class="md:py-4 md:pt-0">
                                    <li class="md:pt-0 md:p-0 p-4"
                                        :class="activeTab===index ? 'md:bg-white bg-orangemix' : ''">
                                        <a class="cursor-pointer py-1 px-0 text-sm  font-semibold"
                                            :class="activeTab===index ? 'text-orangemix md:border-b-2 border-orangemix' : 'text-gray-500'"
                                            @click="activeTab = index" x-text="tab"></a>
                                    </li>
                                </div>
                            </template>
                        </ul>
                        <div class="md:w-2/3 p-4 bg-superinvestgray md:bg-white bg-white text-center mx-auto">
                            <div x-show="activeTab===0">
                                <div class="p-3 pt-0">
                                    {!! $deal->dealDetail->profile ?? '' !!}
                                </div>
                            </div>

                            <div x-show="activeTab===1">
                                <div class="p-3 flex flex-col">
                                    {!! $deal->dealDetail->about ?? '' !!}
                                </div>
                            </div>

                            <div x-show="activeTab===2">
                                <div class="p-3 flex flex-col">
                                    {!! $deal->dealDetail->financials ?? '' !!}
                                </div>
                            </div>
                            <div x-show="activeTab===3">
                                <div class="grid grid-cols-2">
                                    <a href=""
                                        class="my-4 text-sm bg-white border-2 border-gray-400 rounded-md font-thin text-gray-900 font-medium px-4 py-3 transition duration-300 ease-in-out mr-6">
                                        <i class="fa fa-file-text" style="width:50px; height:5opx;"></i>Returns
                                        Calculator
                                    </a>
                                    <a href=""
                                        class="my-4 text-sm bg-white border-2 border-gray-400 rounded-md font-thin text-gray-900 font-medium px-4 py-3 transition duration-300 ease-in-out mr-6">
                                        <i class="fa fa-file-text" style="width:50px; height:5opx;"></i>LPP AGREEMENT
                                    </a>
                                    <a href=""
                                        class="my-4 text-sm bg-white border-2 border-gray-400 rounded-md font-thin text-gray-900 font-medium px-4 py-3 transition duration-300 ease-in-out mr-6">
                                        <i class="fa fa-file-text" style="width:50px; height:5opx;"></i>Lease Agreement
                                    </a>
                                    <a href=""
                                        class="my-4 text-sm bg-white border-2 border-gray-400 rounded-md font-thin text-gray-900 font-medium px-4 py-3 transition duration-300 ease-in-out mr-6">
                                        <i class="fa fa-file-text" style="width:50px; height:5opx;"></i>StanPlus Profile
                                    </a>
                                    <a href=""
                                        class="my-4 text-sm bg-white border-2 border-gray-400 rounded-md font-thin text-gray-900 font-medium px-4 py-3 transition duration-300 ease-in-out mr-6">
                                        <i class="fa fa-file-text" style="width:50px; height:5opx;"></i>BigSpoon Profile
                                    </a>
                                </div>
                            </div>
                            <div x-show="activeTab===4">
                                <div class="md:w-full flex flex-col">
                                    <div class="my-4">
                                        <h3 class="text-left text-sm text-gray-900 font-semibold"><span
                                                class="buletdot text-black"></span> What do you mean by the sale value
                                            of the asset - is it pre-decided?</h3>
                                        <p class="py-2 text-sm text-gray-400 font-medium text-justify pl-2">Lorem ipsum
                                            dolor sit amet, consectetur adipiscing elit. Maurisquam<br />sit amet metus
                                            sit amet, rhoncus ultrices</p>
                                    </div>
                                    <div class="my-4">
                                        <h3 class="text-left text-sm text-gray-900 font-semibold"><span
                                                class="buletdot text-black"></span> When would my returns start?</p>
                                            <p class="py-2 text-sm text-gray-400 font-medium text-justify pl-2">Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit. Maurisquam<br />sit
                                                amet metus sit amet, rhoncus ultrices
                                        </h3>
                                    </div>
                                    <div class="my-4">
                                        <h3 class="text-left text-sm text-gray-900 font-semibold"><span
                                                class="buletdot text-black"></span> Is IRR different from ROI?</h3>
                                        <p class="py-2 text-sm text-gray-400 font-medium text-justify pl-2">Lorem ipsum
                                            dolor sit amet, consectetur adipiscing elit. Maurisquam<br />sit amet metus
                                            sit amet, rhoncus ultrices</p>
                                    </div>
                                    <div class="my-4">
                                        <h3 class="text-left text-sm text-gray-900 font-semibold"><span
                                                class="buletdot text-black"></span> What is the difference between
                                            pre-tax and post-tax returns?</h3>
                                        <p class="py-2 text-sm text-gray-400 font-medium text-justify pl-2">Lorem ipsum
                                            dolor sit amet, consectetur adipiscing elit. Maurisquam<br />sit amet metus
                                            sit amet, rhoncus ultrices</p>
                                    </div>
                                    <div class="my-4">
                                        <h3 class="text-left text-sm text-gray-900 font-semibold"><span
                                                class="buletdot text-black"></span> How does my ITR filing process
                                            change?</h3>
                                        <p class="py-2 text-sm text-gray-400 font-medium text-justify pl-2">Lorem ipsum
                                            dolor sit amet, consectetur adipiscing elit. Maurisquam<br />sit amet metus
                                            sit amet, rhoncus ultrices</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        function setup() {
                            return {
                                activeTab: 0,
                                tabs: [
                                    "INVESTMENT PROFILE",
                                    "ABOUT LESSEE",
                                    "FINANCIALS",
                                    "DOCUMENTS CHECKLIST",
                                    "FAQ’s",
                                ]
                            };
                        };
                    </script>
                </div>
                <div class="md:w-1/3 py-6" x-data="investment()">
                    <div class="bg-white  rounded-sm border-gray-400" style="box-shadow: 0px 0px 2px 0px #000;">
                        <div class="px-8 mb-4 text-center">
                        <svg viewBox="0 0 36 36" class="xl:w-2/3 md:w-2/3 w-1/2 pt-4 circular-chart orangemix">
                            <path
                            class="circle-bg"
                            d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <path
                            class="circle"
                            stroke-dasharray="{{'70'}}, 100"
                            d="M18 2.0845
                                a 15.9155 15.9155 0 0 1 0 31.831
                                a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <text x="18" y="21" class="percentage">
                            {{'70'}}%
                            </text>
                        </svg>
                            <h2 class="text-center pt-4 mb-2 text-2xl text-red-400 font-bold">₹
                                {{ $deal->investment }} Lacs</h2>
                            <span class="mb-4 text-sm text-center font-semibold  text-gray-500">
                                of ₹ {{ $deal->total_investment }} Lacs Investment Raised
                            </span>
                        </div>
                        <div class="p-4">
                            <div class="w-full flex">
                                <div class="w-1/2 text-left">
                                    <a href="#"
                                        class="w-full text-xl font-semibold text-gray-900 py-4 block transition duration-150">IRR</a>
                                </div>
                                <div class="w-1/2 text-right">
                                    <p class="font-semibold py-4 text-xl text-right text-gray-900">
                                        {{ number_format((float) $deal->irr, 2, '.', '') }}%</p>
                                </div>
                            </div>

                            <input @change="calculateReturn()" x-on:keyup="calculateReturn()" x-model="invest_amount"
                                class="my-4 bg-gray-200 input appearance-none rounded w-full px-3 py-3 focus focus:outline-none active:outline-none border-2 border-gray-200"
                                id="text" type="text" autofocus name="amount" value=""
                                placeholder="Enter amount to calculate return">

                            <div class="w-full flex mt-4">
                                <div class="w-1/2 text-left">
                                    <p href="#"
                                        class="w-full text-xl font-medium text-gray-900 block transition duration-150">
                                        Pre Tax Return</p>
                                </div>
                                <div class="w-1/2 text-right">
                                    <p class="font-medium text-lg text-right text-gray-900" x-text='"₹"+pre_tax_return'>
                                    </p>
                                </div>
                            </div>

                            <div class="w-full flex">
                                <div class="w-1/2 text-left">
                                    <p href="#"
                                        class="w-full pl-2 text-sm font-semibold text-gray-500 block transition duration-150">
                                        Taxes Applicable</p>
                                </div>
                                <div class="w-1/2 text-right">
                                    <p class="font-semibold text-sm text-right text-gray-500">
                                        {{ number_format((float) $deal->tax, 2, '.', '') }}%</p>
                                </div>
                            </div>

                            <div class="w-full flex">
                                <div class="w-1/2 text-left">
                                    <p href="#"
                                        class="w-full text-lg font-semibold text-gray-900 py-4 block transition duration-150">
                                        Post Tax Return</p>
                                </div>
                                <div class="w-1/2 text-right">
                                    <p class="font-semibold py-4 text-xl text-right text-gray-900">₹0</p>
                                </div>
                            </div>

                            <div class="w-full flex py-2">
                                <div class="w-1/2 text-left">
                                    <p href="#"
                                        class="w-full text-sm font-sm text-gray-500 block transition duration-150">
                                        Average Monthly Return</p>
                                </div>
                                <div class="w-1/2 text-right">
                                    <p class="font-sm text-sm text-right text-gray-400">₹0</p>
                                </div>
                            </div>

                            <div class="w-full flex">
                                <div class="w-1/2 text-left">
                                    <p href="#"
                                        class="w-full text-sm font-sm text-gray-500 block transition duration-150"> Sale
                                        Value of Asset</p>
                                </div>
                                <div class="w-1/2 text-right">
                                    <p class="font-sm text-sm text-right text-gray-400">₹0</p>
                                </div>
                            </div>
                            <div class="w-full">
                                <button @click="investNow()"  class="bg-orangemix block mt-4 p-1.5 rounded text-center text-white w-full">Invest
                                Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function investment() {
                        return {
                            pre_tax: {{ (float) $deal->pre_tax ?? 0 }},
                            pre_tax_return: 0,
                            invest_amount: '',
                            calculateReturn: function() {
                                this.pre_tax_return = parseFloat(this.invest_amount) * this.pre_tax / 100
                            },
                            investNow: function() {
                                let formData = new FormData();

                                let deal_id = {{$deal->exists?$deal->id:0}};
                                let user_id = {{auth()->user()->id??0}};
                                formData.append('deal_id', deal_id );
                                formData.append('user_id', user_id);
                                formData.append('invest_amount', this.invest_amount);
                                let url = '{{ route('assets.store') }}';
                                let fetch_updateKyc = fetch(url, {
                                    method: 'POST',
                                    body: formData,
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    },
                                }).then((res) => {
                                    if (!res.ok) {
                                        throw new Error("There was an error processing the request");
                                    }
                                    return res.json();
                                }).then((data) => {
                                    if(data.data == 'success')
                                    {
                                     location.href = '/dealsummary/'+data.asset_id;
                                    }
                                    else
                                    {
                                        console.log(data.message);
                                    }
                                }).catch(function(error) {
                                    console.log(error);
                                });
                            }



                        }
                    }
                </script>
            </div>
        </div>
    </div>
    </div>
    <x-slot name="footer">
        <x-footer x-data="{ showContact: false }">
            <div class="md:container lg:container sm:container xl:container mx-auto">
                <div class="md:w-3/4 md:mx-28 mx-4 py-8 pb-20 md:px-0 pt-16 bg-opacity-50  flex justify-base items-center">
                    <div class="text-white grid xl:grid-flow-col lg:grid-flow-col mx-auto">
                        <h2 class="font-normal mb-6 md:text-3xl md:text-left text-3xl text-center px-4 xl:font-medium text-gray-900 xl:text-3xl">HAVE MORE QUESTIONS ?</h2>
                        <p class="mx-auto w-max"><x-button class="xl:p-1 p-1 xl:m-0 w-max capitalize xl:tracking-normal lg:tracking-normal md:tracking-normal" @click="showContact = true">Schedule a Call/Mail Us</x-button></p>
                    </div>
                </div>
            </div>
        </x-footer>
    </x-slot>
    
</x-app-layout>
