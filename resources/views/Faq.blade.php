<x-app-layout>
    <x-slot name="header">
        <div class="md:container md:mx-auto">
            <div class="md:-mx-8">
                <div class="bg-no-repeat bg-white"
                    style="background: url('{{ asset('/Image/banner/bannercorner1.svg') }}') left bottom no-repeat , url('{{ asset('/Image/banner/bannercorner2.svg') }}') right top no-repeat; background-size:13rem;">
                    <h1 class="font-bold text-center text-gray-900 md:text-7xl text-2xl py-20">FAQ</h1>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="md:container md:mx-auto">
        <div class="md:-mx-8">
            <section class="bg-white px-4 mx-auto md:w-3/4 sm:px-6 lg:px-8 py-8" x-data="faq()" x-init="accordion()"
                x-cloak>
                <template x-for="(faq_data,index) in faq_list" :key="index">
                    <div class="md:full mx-auto my-4 rounded border-orangemix border-2">
                        <div x-on:click="faq_data.open = ! faq_data.open" class="cursor-pointer p-4 bg-red-200 flex">
                            <h3 class="w-2/3 text-xl font-normal uppercase " x-text="faq_data.title"> </h3>
                        </div>
                        <div class="p-4" x-show="faq_data.open">
                            <template x-for="(faq_datum,i) in (faq_data.faqs)" :key="i">
                                <div class="">
                                    <div class="full flex">
                                        <h3 x-on:click="faq_datum.innertext = ! faq_datum.innertext"
                                            class="cursor-pointer w-2/3 text-xl font-semibold pb-2"
                                            x-text="faq_datum.ques"></h3>
                                    </div>
                                    <p class="text-xl pt-2" x-show="faq_datum.innertext" x-text="faq_datum.ans"></p>
                                </div>
                            </template>

                        </div>
                    </div>
                </template>


            </section>
            <script>
                function faq() {
                    return {
                        faq_list: {!! count($faqs) ? $faqs : '[]' !!},
                        accordion: function() {
                            this.faq_list.forEach(function(faq_data, index) {
                                faq_data.open = index == 0;
                                faq_data.faqs.forEach(function(faq_datum, i) {
                                    faq_datum.innertext = i == 0;
                                });

                            });
                        }

                    };
                }
            </script>
            <script>
                function faqCat(cond, data) {
                    return {
                        faq_data: data,
                        open: cond
                    }
                }
            </script>
        </div>
    </div>
    <x-slot name="footer">
        <x-footer></x-footer>
    </x-slot>
</x-app-layout>
