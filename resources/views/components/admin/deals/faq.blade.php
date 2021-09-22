<div class="w-max" x-show="openTab == 6">
    <div class="py-6 px-4 sm:p-6 lg:pb-8" x-cloak  x-data="faq()">
        <div class="space-y-1">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                FAQS
            </h3>
            <div class="mt-3 sm:mt-0 sm:ml-4 flex justify-end">
                <a href="#" @click="addNewField()"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add new FAQ
                </a>
            </div>

        </div>
        <div class="mt-6">
            <dl class="divide-y divide-gray-200">
                <template x-for="(field,index) in fields" :key='index'>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-2 sm:gap-4 sm:pt-5">
                        <div class="text-sm font-medium    w-72 text-gray-500">
                            <x-admin.input   class="block mt-1 w-96" x-model="field.ques"
                                :placeholder="'Enter Question'" type="text"
                                required autofocus />

                        </div><br>
                        <div class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <span class="flex-grow">
                                <x-admin.input x-model="field.ans"  :placeholder="'Enter Answer'"    class="block col-12  w-full" type="text"
                                     required   />
                            </span>
                            <span class="ml-4 flex-shrink-0 flex items-start space-x-4">

                                <button type="button" @@click="removeField(index)"
                                    class="bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                    Remove
                                </button>
                            </span>
                        </dd>
                    </div>
                </template>



            </dl>
            <div class="pt-6 divide-y divide-gray-200">

                <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">

                    <button @click="save()" type="button" class="ml-5 bg-blue-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-light-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function faq() {
            return {
                fields: {!!  (isset($deal->dealDetail->faq) ? ($deal->dealDetail->faq) : '[]') !!},
                addNewField() {
                    this.fields.push({
                        ques: '',
                        ans: '',
                    })
                },
                removeField(index) {
                    this.fields.splice(index, 1);
                },
                save() {
                    let web_api = '{{ route('admin.dealDetails.update') }}';
                    let response = fetch(web_api, {
                        method: "POST",
                        body: JSON.stringify({
                            faq:this.fields,
                            deal_id: @if($deal->exists) {{ $deal->id }} @endif
                        }),
                        headers: {
                            "Content-Type": "application/json",
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                    }).then((res) => {
                        if (!res.ok) {
                            throw new Error("There was an error processing the request");
                        }
                        // if (this.fields[index].id == 0)
                            location.reload();
                    })
                }
            }
        }
    </script>

</div>
