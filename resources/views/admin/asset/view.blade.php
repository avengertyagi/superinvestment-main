<x-admin-layout>

    <!-- header from category -->
    <x-slot name="header">

        <h2 class="text-lg leading-6 font-medium text-gray-900">

            {{ __('Asset -> ') . $asset->asset_id }}


        </h2>

        <div class="text-right">

            <a href="{{ route('admin.assets') }}"
                class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Back</a>
        </div>



    </x-slot>
    <!-- Validation Errors -->
    <x-validation-error class="mb-4" :errors="$errors" />

    <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">

        <div class="bg-white rounded-lg shadow overflow-hidden">



                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                           Assets
                        </h3>

                    </div>

                    <div class="border-t border-gray-200 lg:flex">
                        <dl>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                   User Name
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                   {{$asset->user->name??'N/A'}}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                   User Email
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                   {{$asset->user->email??'N/A'}}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                   Deal
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                   {{$asset->deal->name??'N/A'}}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                   Investment
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    ₹ {{$asset->investment??'N/A'}}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                   Invested Date
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                   {{$asset->created_at->format('Y/m/d')??'N/A'}}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                   status
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                   {{$asset->status == 1 ? 'confirmed' : ($asset->status == 2 ? 'completed' : 'N/A')}}
                                </dd>
                            </div>

                        </dl>

                    </div>
                </div>




        </div>

    </div>

</x-admin-layout>
