<x-admin-layout>

    <!-- header from category -->
    <x-slot name="header">

        <h2 class="text-lg leading-6 font-medium text-gray-900">
            @if ($faq->exists)
                {{ __('Update Faq # :id', ['id' => $faq->title]) }}
            @else
                {{ __('Create Faq') }}
            @endif
        </h2>
        @if (Session::has('status'))
            {{ Session::get('status') }}

        @endif
        <div class="text-right">
            <a href="{{ route('admin.faqs.index') }}"
                class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Back</a>
        </div>


    </x-slot>
    <!-- Validation Errors -->
    <x-validation-error class="mb-4" :errors="$errors" />

    <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
        <div class="bg-white rounded-lg shadow overflow-hidden" x-cloak x-data="faq()">
            <div class="divide-y divide-gray-200  lg:divide-x">

                <div class="m-2">
                    <label for="username" class="block text-sm font-medium text-gray-700">
                        Title
                    </label>
                    <x-admin.input id="name" class="block mt-1   " type="text" name="title" x-model="title"
                          required autofocus />
                    <!--input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm" required value="{{ old('name', $faq->name) }}"-->

                    <div class="py-6 px-4 sm:p-6 lg:pb-8" >
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
                                        <div class="mt-1  text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-admin.input    class="block mt-1 w-full" x-model="field.ques"
                                                :placeholder="'Enter Question'" type="text" required autofocus />

                                        </div><br>
                                        <div class="mt-1 flex text-sm text-gray-900  sm:mt-0 sm:col-span-2">
                                            <span class="flex-grow">
                                                <textarea x-model="field.ans" :placeholder="'Enter Answer'"
                                                    class="block col-12 border-gray-300 rounded w-full" type="text"
                                                    required></textarea>
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

                                    <button @click="save()" type="button"
                                        class="ml-5 bg-blue-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-light-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function faq() {
                        return {
                            title:'{{old('title', $faq->title)}}',
                            fields: {!! isset($faq->faqs) ? json_encode($faq->faqs) : '[]' !!},
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
                                let web_api = '{{ route('admin.faqs.store') }}';
                                let response = fetch(web_api, {
                                    method: "POST",
                                    body: JSON.stringify({
                                        faqs: this.fields,
                                        faq_id: @if ($faq->exists) {{ $faq->id }} @else 0 @endif,
                                        title:this.title
                                    }),
                                    headers: {
                                        "Content-Type": "application/json",
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    },
                                }).then((res) => {
                                    if (!res.ok) {
                                        throw new Error("There was an error processing the request");
                                    }
                                    return res.json();
                                }).then((data) => {
                                    if (data.data == 'success')
                                    dispatchEvent(new CustomEvent('notice', {detail: {type: 'success', text:  data.message}}))
                                    else
                                    dispatchEvent(new CustomEvent('notice', {detail: {type: 'error', text: data.message}}))
                                }).catch((error) => {
                                    console.log(error);
                                    dispatchEvent(new CustomEvent('notice', {detail: {type: 'error', text: 'error!'}}))
                                });
                            }

                        }
                    }
                </script>
            </div>
        </div>
        <script>

        </script>
    </div>

</x-admin-layout>
