@props(['deal'])
<div class="w-max" x-show="openTab == 1">
    @if ($deal->exists)
        <form class="divide-y divide-gray-200 lg:col-span-9" method="POST"
            action="{{ route('admin.deals.update', $deal) }}">
            @method('put')
        @else
            <form class="divide-y divide-gray-200 lg:col-span-9" method="POST"
                action="{{ route('admin.deals.store') }}">
    @endif
    @csrf

    <!-- Basic section -->
    <div class="py-6 px-4 sm:p-6 lg:pb-8" id="basicform" x-data="basic()">
        <div>
            <h2 class="text-lg leading-6 font-medium text-gray-900">Basic Details</h2>
            <p class="mt-1 text-sm text-gray-500">
                Please enter basic information.
            </p>
        </div>

        <div class="mt-6 flex flex-col lg:flex-row">
            <div class="flex-grow space-y-6">
                <!-- Name field -->
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">
                        Name
                    </label>
                    <x-admin.input id="name" class="block mt-1 w-full" type="test" name="name"
                        :value="old('name', $deal->name)" required autofocus />
                    <!--input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm" required value="{{ old('name', $deal->name) }}"-->
                </div>

                <!-- IRR field -->
                <div>
                    <label for="irr" class="block text-sm font-medium text-gray-700">
                        IRR
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <x-admin.input type="text" name="irr" id="irr" :value="old('irr', $deal->irr)"
                            class="block w-full" placeholder="00.00000" required />
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            %
                        </div>
                    </div>
                </div>

                <!-- Tenure field -->
                <div>
                    <label for="tenure" class="block text-sm font-medium text-gray-700">
                        Tenure
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">

                        <x-admin.input type="text" name="tenure" id="tenure" :value="old('tenure', $deal->tenure)"
                            class="block w-full mt-1" placeholder="2" required />
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <label for="tenure_type" class="sr-only">Tenure Type</label>
                            <select id="tenure_type" name="tenure_type"
                                class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                <option>Months</option>
                                <option>Year</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- min_investment field -->
                <div>
                    <label for="min_investment" class="block text-sm font-medium text-gray-700">
                        Minimum Investment
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            ₹
                        </div>
                        <x-admin.input type="text" name="min_investment" id="min_investment"
                            :value="old('min_investment', $deal->min_investment)" class="mt-1 pl-10 block w-full"
                            placeholder="1000000" required />
                    </div>
                </div>

                <!-- investment field -->
                <div>
                    <label for="investment" class="block text-sm font-medium text-gray-700">
                        Investment till now
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            ₹
                        </div>
                        <x-admin.input type="text" name="investment" id="investment"
                            :value="old('investment', $deal->investment)" class="mt-1 block w-full pl-10"
                            placeholder="1000000" />
                    </div>
                </div>

                <!-- total_investment field -->
                <div>
                    <label for="total_investment" class="block text-sm font-medium text-gray-700">
                        Total Investment
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            ₹
                        </div>
                        <x-admin.input type="text" name="total_investment" id="total_investment"
                            :value="old('total_investment', $deal->total_investment)" class="pl-10 mt-1 block w-full"
                            placeholder="1000000" required />
                    </div>
                </div>

            </div>
            @if ($deal->exists)

            <div class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-grow-0 lg:flex-shrink-0">
                <p class="text-sm font-medium text-gray-700" aria-hidden="true">
                    Logo
                    <input type="hidden" id="logo_path" x-model="logo" name="logo_path" value="">
                </p>
                <div class="mt-1 lg:hidden">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 inline-block overflow-hidden h-12 w-12" aria-hidden="true">
                            {{-- <img class="h-full w-full" src="https://via.placeholder.com/300x100" alt=""> --}}
                            <img class="h-full w-full" src="{{Storage::disk('public')->exists($deal->logo_path)? Storage::url($deal->logo_path):"https://via.placeholder.com/300x100"}}" height="100" width="300" alt="">
                        </div>
                        <div class="ml-5 shadow-sm">
                            <div
                                class="group relative border border-gray-300 py-2 px-3 flex items-center justify-center hover:bg-gray-50 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-light-blue-500">
                                <label for="user_photo"
                                    class="relative text-sm leading-4 font-medium text-gray-700 pointer-events-none">
                                    <span>Change</span>
                                    <span class="sr-only"> deal logo</span>
                                </label>
                                <input id="user_logo_photo" name="user_photo" type="file" accept="image/*" @change="saveImage(this,'logo')"
                                    class="absolute w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden relative overflow-hidden lg:block">
                    {{-- <img class="relative w-80 h-24" src="https://via.placeholder.com/300x100" alt=""> --}}
                    <img class="h-full w-full" src="{{Storage::disk('public')->exists($deal->logo_path)? Storage::url($deal->logo_path):"https://via.placeholder.com/300x100"}}" height="100" width="300" alt="">

                    <label for="user-photo"
                        class="absolute inset-0 w-full h-full bg-black bg-opacity-75 flex items-center justify-center text-sm font-medium text-white opacity-0 hover:opacity-100 focus-within:opacity-100">
                        <span>Change</span>
                        <span class="sr-only"> deal logo</span>
                        <input type="file" id="user-photo" name="user-photo" accept="image/*" @change="saveImage(this,'logo')"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                    </label>
                </div>
            </div>
            @endif
        </div>

        <div class="mt-6 grid grid-cols-12 gap-6">
            <div class="col-span-12 sm:col-span-6">
                <!-- pre_tax field -->
                <label for="pre_tax" class="block text-sm font-medium text-gray-700">
                    Pre Tax
                </label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <x-admin.input type="text" name="pre_tax" id="pre_tax" :value="old('pre_tax', $deal->pre_tax)"
                        class="block w-full" placeholder="00.00000" />
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        %
                    </div>
                </div>

            </div>

            <div class="col-span-12 sm:col-span-6">
                <!-- post_tax field -->
                <label for="post_tax" class="block text-sm font-medium text-gray-700">
                    Post Tax
                </label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <x-admin.input type="text" name="post_tax" id="post_tax" :value="old('post_tax', $deal->post_tax)"
                        class=" block w-full" placeholder="00.00000" />
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        %
                    </div>
                </div>
            </div>

            <div class="col-span-12 sm:col-span-6">
                <!-- tax field -->
                <label for="tax" class="block text-sm font-medium text-gray-700">
                    Tax
                </label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <x-admin.input type="text" name="tax" id="tax" :value="old('tax', $deal->tax)" class="block w-full"
                        placeholder="00.00000" />
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        %
                    </div>
                </div>
            </div>



        </div>
    @if ($deal->exists)

        <div class="pt-6 divide-y divide-gray-200">

            <div class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-grow-0 lg:flex-shrink-0">
                <p class="text-sm font-medium text-gray-700" aria-hidden="true">
                    Banner
                    <input type="hidden" id="banner_path" x-model="banner" name="banner_path" value="">
                </p>
                <div class="mt-1 lg:hidden">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 inline-block overflow-hidden h-12 w-12" aria-hidden="true">
                            {{-- <img class="h-full w-full" src="https://via.placeholder.com/300x100" alt=""> --}}
                            <img class="h-full w-full" src="{{Storage::disk('public')->exists($deal->banner_path)? Storage::url($deal->banner_path):"https://via.placeholder.com/300x100"}}" height="100" width="300" alt="">
                        </div>
                        <div class="ml-5 shadow-sm">
                            <div
                                class="group relative border border-gray-300 py-2 px-3 flex items-center justify-center hover:bg-gray-50 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-light-blue-500">
                                <label for="user_photo"
                                    class="relative text-sm leading-4 font-medium text-gray-700 pointer-events-none">
                                    <span>Change</span>
                                    <span class="sr-only"> deal banner</span>
                                </label>
                                <input id="user_banner_photo" name="user_photo" accept="image/*" type="file" @change="saveImage(this,'banner')"
                                    class="absolute w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden relative overflow-hidden lg:block">
                    {{-- <img class="relative w-80 h-24" src="https://via.placeholder.com/300x100" alt=""> --}}
                    <img class="h-full w-full" src="{{Storage::disk('public')->exists($deal->banner_path)? Storage::url($deal->banner_path):"https://via.placeholder.com/300x100"}}" height="100" width="300" alt="">

                    <label for="user-photo"
                        class="absolute inset-0 w-full h-full bg-black bg-opacity-75 flex items-center justify-center text-sm font-medium text-white opacity-0 hover:opacity-100 focus-within:opacity-100">
                        <span>Change</span>
                        <span class="sr-only"> deal banner</span>
                        <input type="file" id="user-banner-photo" name="user-photo" accept="image/*" @change="saveImage(this,'banner')"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                    </label>
                </div>
            </div>
        </div>
        @endif

        <!-- Privacy section -->
        <div class="pt-6 divide-y divide-gray-200">

            <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
                <button type="button"
                    class="bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                    Cancel
                </button>
                <button type="submit"
                    class="ml-5 bg-blue-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-light-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                    Save
                </button>
            </div>
        </div>

    </div>

    </form>
    <script>
        function basic() {
            return {
                laoding: false,
                logo: '{{ old('logo_path', $deal->logo_path) }}',
                banner: '{{ old('banner_path', $deal->banner_path) }}',
                type:'',
                svg: '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>',
                saveImage(files, type) {
                    this.type = type;
                    this.laoding = true;
                    file = Object.values(event.target.files);
                    const validImageTypes = ['image/gif', 'image/jpeg','image/jpg', 'image/png'];
                    if (!validImageTypes.includes(file[0]['type'])) {
                        dispatchEvent(new CustomEvent('notice', {
                            detail: {
                                type: 'error',
                                text: 'Invalid Image!'
                            }
                        }))
                        return;
                    }
                    let formData = new FormData();
                    formData.append('file', file[0]);
                    formData.append('deal_id', @if ($deal->exists){{ $deal->id }} @else 0 @endif);
                    formData.append('type', type);
                    let url = '{{ route('admin.dealDetails.uploadFile') }}';
                    let response = fetch(url, {
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
                        document.getElementById("basicform").__x.$data.loading = false;
                         document.getElementById("basicform").__x.$data[data.type] = data.path;

                        dispatchEvent(new CustomEvent('notice', {
                            detail: {
                                type: 'success',
                                text: 'Success!'
                            }
                        }));

                    }).catch(function(error) {
                        console.log(error);
                        document.getElementById("basicform").__x.$data.loading = false;
                        dispatchEvent(new CustomEvent('notice', {
                            detail: {
                                type: 'error',
                                text: 'Error!'
                            }
                        }));
                    });



                }

            };
        }
    </script>


</div>
