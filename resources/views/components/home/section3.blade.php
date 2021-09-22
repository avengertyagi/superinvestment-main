<div class="md:container mx-auto sm:container lg:container">
    <div class="md:-mx-8">
        <div
            style="background-image: url('{{ asset('/Image/footer/topfooterbg.svg') }}'); background-repeat: no-repeat; background-size: cover;">
            <div class="py-8 gap-4 md:mx-28 md:flex">
                <div class="md:w-1/2 pt-14 md:relative">
                    <div class="md:absolute md:inset-y-80 md:inset-x-8 px-4">
                        <h3 class="xl:text-4xl text-3xl font-headings lin text-primary font-normal xl:leading-h2 text-center lg:text-left">Compare with traditional existing investment options</h3>
                        <p class="mt-6 lg:text-xs text-sm text-primary-lighter px-8 lg:px-0 text-center lg:text-left">Returns calculated for a tenure of 36 months. All returns are mentioned on a pre -tax basis</p>
                    </div>
                </div>
                <div class="md:w-1/2 px-4">
                <div x-data="range()" x-init="mintrigger(); maxtrigger()"  class="col-span-12 lg:col-span-6 lg:px-0 my-12">
                        <div>
                            <label for="slider" class="font-bold md:text-2xl pr-16 text-gray-900 text-start">Investment Amount</label>
                            <div class="flex items-center justify-between my-4">
                                <span class="font-normal xl:text-4xl text-3xl text-primary">₹</span>
                                <output maxlength="5" x-on:input="maxtrigger" x-model="maxprice"
                                    class="w-full text-left ml-2 font-normal xl:text-4xl text-3xl text-primary"
                                    readonly></output>

                                <div class="flex">
                                    <div
                                        class="bg-primary px-1 h-6 bg-gray-900 rounded flex items-center mr-4 bg-opacity-100 cursor-pointer">
                                        <p class="text-lg font-medium text-white">+25,000</p>
                                    </div>
                                    <div
                                        class="bg-primary px-1 h-6 bg-gray-900  rounded flex items-center mr-4 bg-opacity-100 cursor-pointer">
                                        <p class="text-lg font-medium text-white">+50,000</p>
                                    </div>
                                </div>
                            </div>
                            <style>
                                input[type=range]::-webkit-slider-thumb {
                                    pointer-events: all;
                                    width: 24px;
                                    height: 24px;
                                    -webkit-appearance: none;
                                    /* @apply w-6 h-6 appearance-none pointer-events-auto; */
                                }

                            </style>
                            <div class="relative max-w-xl w-full">
                                <div>
                                    <input type="range" step="25000" x-bind:min="min" x-bind:max="max"
                                        x-on:input="mintrigger" x-model="minprice"
                                        class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

                                    <input type="range" step="25000" x-bind:min="min" x-bind:max="max"
                                        x-on:input="maxtrigger" x-model="maxprice"
                                        class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

                                    <div class="relative z-10 h-2">

                                        <div
                                            class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-black h-1">
                                        </div>

                                        <div class="absolute z-20 top-0 bottom-0 h-1 rounded-md bg-gray-900"
                                            x-bind:style="'right:'+maxthumb+'%; left:'+minthumb+'%'"></div>

                                        <!--<div class="absolute z-30 w-6 h-6 top-0 left-0 bg-gray-900 border-8 border-gray-600 rounded-full -mt-2 -ml-1" x-bind:style="'left: '+minthumb+'%'"></div>-->

                                        <div class="absolute z-30 w-6 h-6 top-0 right-0 bg-gray-900 rounded-full -mt-2.5 -mr-3  border-gray-500 border-4"
                                            x-bind:style="'right: '+maxthumb+'%'"></div>

                                    </div>

                                </div>
                            </div>

                            <script>
                                function range() {
                                    return {
                                        compares: {!! json_encode($compares ?? []) !!},
                                        minprice: 10000,
                                        maxprice: 20000,
                                        min: 10000,
                                        max: 2000000,
                                        minthumb: 0,
                                        maxthumb: 0,

                                        mintrigger() {
                                            this.minprice = Math.min(this.minprice, this.maxprice - 500);
                                            this.minthumb = ((this.minprice - this.min) / (this.max - this.min)) * 100;

                                        },
                                        maxtrigger() {
                                            this.maxprice = Math.max(this.maxprice, this.minprice + 500);
                                            this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);
                                            this.compares.forEach(compare => {
                                                compare.value = '₹' + Math.round(this.maxprice * compare.factor).toLocaleString();
                                            });

                                        },



                                    }
                                }
                            </script>
                        </div>
                        <template x-for="(compare,index) in compares" :key='index'>
                            <div class=" bg-white border-2 rounded-md lg:py-4 lg:px-6 px-4 grid grid-cols-3 lg:gap-8 mb-4"
                                :class="{['w-fullh-16 border-red-400 shadow gap-3 mt-10 py-4']: index == '0', 'border-gray-400 shadow-md py-2': index != '0' }">
                                <div :class="{ 'flex flex-col justify-between': index != '0' }">
                                    <template x-if="compare.logo_path">
                                        <p x-show='null !== compare.logo_path' class="lg:h-6 h-5 w-auto mb-3"> <img
                                                :src="`storage/${compare.logo_path}`"></p>
                                    </template>

                                    <p class="lg:text-sm text-xs lg:mb-3 mb-1 text-primary-light2 pt-1"
                                        :class="{'underline':index == 0}" x-show='!compare.logo_path'
                                        x-text='compare.name'> </p>
                                    <p class=" text-primary"
                                        :class="{['font-medium lg:text-3xxl text-2xl']: index == '0', 'lg:text-lg text-sm': index != '0' }"
                                        x-text="compare.value">₹ 27,355</p>
                                </div :class="{ 'flex flex-col justify-between': index != '0' }">
                                <div>
                                    <p class="  text-primary-light2  "
                                        :class="{['underline mb-3 lg:pt-1 pt-0 text-sm']: index == '0', 'pt-1 lg:text-sm text-xs lg:mb-3 mb-1 ': index != '0' }">
                                        Payouts</p>
                                    <p class="font-medium  text-primary"
                                        :class="{['lg:text-3xxl text-2xl']: index == '0', 'lg:text-lg text-sm': index != '0' }"
                                        x-text='compare.payout'> </p>
                                </div>
                                <div :class="{ 'flex flex-col justify-between pl-4 lg:pl-0': index != '0' }">
                                    <p class=" text-primary-light2  "
                                        :class="{['underline mb-3 lg:pt-1 pt-0 text-sm']: index == '0', 'pt-1 lg:text-sm text-xs lg:mb-3 mb-1 ': index != '0' }">
                                        IRR</p>
                                    <p class="font-medium  text-primary"
                                        :class="{['lg:text-3xxl text-2xl']: index == '0', 'lg:text-lg text-sm': index != '0' }"
                                        x-text='(parseFloat(compare.irr)).toFixed(2)+"%"'>%</p>
                                </div>
                            </div>
                        </template>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
