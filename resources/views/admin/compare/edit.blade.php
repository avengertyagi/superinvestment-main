<x-admin-layout>

    <!-- header from category -->
    <x-slot name="header">

        <h2 class="text-lg leading-6 font-medium text-gray-900">
            @if ($compare->exists)
                {{ __('Update Compare # :id', ['id' => $compare->name]) }}
                <br>
                <br>
                @if (Session::has('status'))
                    {{ Session::get('status') . ' Updated' }}

                @endif
            @else
                {{ __('Create Compare') }}
                <br>
                <br>

                @if (Session::has('status'))
                    {{ Session::get('status') . ' Created' }}

                @endif
            @endif
        </h2>

        <div class="text-right">

            <a href="{{ route('admin.compares.index') }}"
                class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Back</a>
        </div>


    </x-slot>
    <!-- Validation Errors -->
    <x-validation-error class="mb-4" :errors="$errors" />

    <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            @if ($compare->exists)
                <form class="divide-y divide-gray-200 lg:col-span-9" method="POST"
                    action="{{ route('admin.compares.update', $compare) }}">
                    @method('put')
                @else
                    <form class="divide-y divide-gray-200 lg:col-span-9" method="POST"
                        action="{{ route('admin.compares.store') }}">
            @endif
            @csrf

            <!-- Basic section -->
            <div class="py-6 px-4 sm:p-6 lg:pb-8" id="basicform" x-data="basic()">
                <div>
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Compare Details</h2>
                    <p class="mt-1 text-sm text-gray-500">
                        Please enter information.
                    </p>
                </div>

                <div class="mt-6 flex flex-col lg:flex-row">
                    <div class="flex-grow m-2 space-y-6">
                        <!-- Name field -->
                        <div>
                            <label for="username" class="block text-sm font-medium text-gray-700">
                                Name
                            </label>
                            <x-admin.input id="name" class="block mt-1 w-full" type="test" name="name"
                                :value="old('name', $compare->name)" required autofocus />
                            <!--input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm" required value="{{ old('name', $compare->name) }}"-->
                        </div>

                        <!-- IRR field -->
                        <div>
                            <label for="irr" class="block text-sm font-medium text-gray-700">
                                IRR
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <x-admin.input type="text" name="irr" id="irr" :value="old('irr', $compare->irr)"
                                    class="block w-full" placeholder="00.00000" required />
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    %
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="flex-grow m-2 space-y-6">
                        <!-- payout field -->
                        <div>
                            <label for="userpayout" class="block text-sm font-medium text-gray-700">
                                Payout
                            </label>
                            <x-admin.input id="payout" class="block mt-1 w-full" type="text" name="payout"
                                :value="old('payout', $compare->payout)" required autofocus />
                        </div>

                        <!-- factor field -->
                        <div>
                            <label for="factor" class="block text-sm font-medium text-gray-700">
                                Factor
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <x-admin.input type="text" name="factor" id="factor"
                                    :value="old('factor', $compare->factor)" class="block w-full" placeholder="00.00000"
                                    required />
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    %
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @if ($compare->exists)
                    <div class="mt-6 flex flex-col lg:flex-row">


                        <div class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-grow-0 lg:flex-shrink-0">
                            <p class="text-sm font-medium text-gray-700" aria-hidden="true">
                                Logo
                                <input type="hidden" id="logo_path" x-model="logo" name="logo_path" value="">
                            </p>
                            <div class="mt-1 lg:hidden">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 inline-block overflow-hidden h-12 w-12"
                                        aria-hidden="true">
                                        {{-- <img class="h-full w-full" src="https://via.placeholder.com/300x100" alt=""> --}}
                                        <img class="h-full w-full"
                                            src="{{ Storage::disk('public')->exists($compare->logo_path) ? Storage::url($compare->logo_path) : 'https://via.placeholder.com/300x100' }}"
                                            height="100" width="100" alt="">
                                    </div>
                                    <div class="ml-5 shadow-sm">
                                        <div
                                            class="group relative border border-gray-300 py-2 px-3 flex items-center justify-center hover:bg-gray-50 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-light-blue-500">
                                            <label for="user_photo"
                                                class="relative text-sm leading-4 font-medium text-gray-700 pointer-events-none">
                                                <span>Change</span>
                                                <span class="sr-only"> compare logo</span>
                                            </label>
                                            <input id="user_logo_photo" name="user_photo" type="file" accept="image/*"
                                                @change="saveImage(this,'logo')"
                                                class="absolute w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hidden relative overflow-hidden lg:block">
                                {{-- <img class="relative w-80 h-24" src="https://via.placeholder.com/300x100" alt=""> --}}
                                <img class="h-full w-full"
                                    src="{{ Storage::disk('public')->exists($compare->logo_path) ? Storage::url($compare->logo_path) : 'https://via.placeholder.com/300x100' }}"
                                    height="25" width="75" alt="">

                                <label for="user-photo"
                                    class="absolute inset-0 w-full h-full bg-black bg-opacity-75 flex items-center justify-center text-sm font-medium text-white opacity-0 hover:opacity-100 focus-within:opacity-100">
                                    <span>Change</span>
                                    <span class="sr-only"> compare logo</span>
                                    <input type="file" id="user-photo" name="user-photo" accept="image/*"
                                        @change="saveImage(this,'logo')"
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
                        logo: '{{ old('logo_path', $compare->logo_path) }}',
                        type: '',
                        svg: '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>',
                        saveImage(files, type) {
                            this.type = type;
                            this.laoding = true;
                            file = Object.values(event.target.files);
                            const validImageTypes = ['image/gif', 'image/jpeg', 'image/jpg', 'image/png'];
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
                            formData.append('compare_id', @if ($compare->exists){{ $compare->id }} @else 0 @endif);
                            formData.append('type', type);
                            let url = '{{ route('admin.compares.updateLogo') }}';
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

    </div>

</x-admin-layout>
