<x-admin-layout>

    <!-- header from category -->
    <x-slot name="header">

        <h2 class="text-lg leading-6 font-medium text-gray-900">
            @if ($deal->exists)
                {{ __('Update Deal # :id', ['id' => $deal->name]) }}
            @else
                {{ __('Create Deal') }}
            @endif
        </h2>
        @if (Session::has('status'))
            {{ Session::get('status') }}

        @endif
        <div class="text-right">
            @if ($deal->exists)
                <button @if (isset($deal->completed_at)) disabled @endif
                    class="px-4 py-2 bg-green-800 text-green-200 rounded-md disabled:bg-green-100 disabled:hover:bg-green-100 hover:bg-green-700 focus:outline-none focus:bg-green-700"
                    @click="markAsCoompleted()">
                @if (isset($deal->completed_at)) Completed @else Mark as Completed
                    @endif
                </button>
            @endif
            <a href="{{ route('admin.deals.index') }}"
                class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Back</a>
        </div>


    </x-slot>
    <!-- Validation Errors -->
    <x-validation-error class="mb-4" :errors="$errors" />

    <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div x-data="{
                    openTab: 1,
                    activeClasses: 'bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5',
                    inactiveClasses: 'bg-transparent absolute inset-x-0 bottom-0 h-0.5',
                    }" class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
                <aside class="py-6 lg:col-span-3">
                    <nav class="space-y-1" aria-label="Tabs">

                        <a @click.prevent="openTab = 1" href="#"
                            class="bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700 group border-l-4 px-3 py-2 flex items-center text-sm font-medium"
                            x-state:on="Current" x-state:off="Default" aria-current="page"
                            x-state-description="Current: &quot;bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700&quot;, Default: &quot;border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <span class="truncate">Basic Details</span>
                            <span aria-hidden="true"
                                :class="openTab == 1 ? 'bg-charcoal-900 absolute inset-x-0 bottom-0 h-0.5':'bg-transparent absolute inset-x-0 bottom-0 h-0.5'"></span>
                        </a>

                        <a @click.prevent="openTab = 2" href="#"
                            class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium"
                            aria-current="false"
                            x-state-description="undefined: &quot;bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700&quot;, undefined: &quot;border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <span class="truncate">Investment Profile</span>
                            <span aria-hidden="true"
                                :class="openTab == 2 ? 'bg-charcoal-900 absolute inset-x-0 bottom-0 h-0.5':'bg-transparent absolute inset-x-0 bottom-0 h-0.5'"></span>
                        </a>

                        <a @click.prevent="openTab = 3" href="#"
                            class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium"
                            aria-current="false"
                            x-state-description="undefined: &quot;bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700&quot;, undefined: &quot;border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <span class="truncate">About Lessee</span>
                            <span aria-hidden="true"
                                :class="openTab == 3 ? 'bg-charcoal-900 absolute inset-x-0 bottom-0 h-0.5':'bg-transparent absolute inset-x-0 bottom-0 h-0.5'"></span>
                        </a>

                        <a @click.prevent="openTab = 4" href="#"
                            class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium"
                            aria-current="false"
                            x-state-description="undefined: &quot;bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700&quot;, undefined: &quot;border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <span class="truncate">Financials</span>
                            <span aria-hidden="true"
                                :class="openTab == 4 ? 'bg-charcoal-900 absolute inset-x-0 bottom-0 h-0.5':'bg-transparent absolute inset-x-0 bottom-0 h-0.5'"></span>
                        </a>

                        <a @click.prevent="openTab = 5" href="#"
                            class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium"
                            aria-current="false"
                            x-state-description="undefined: &quot;bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700&quot;, undefined: &quot;border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <span class="truncate">Document Checklists</span>
                            <span aria-hidden="true"
                                :class="openTab == 5 ? 'bg-charcoal-900 absolute inset-x-0 bottom-0 h-0.5':'bg-transparent absolute inset-x-0 bottom-0 h-0.5'"></span>
                        </a>

                        <a @click.prevent="openTab = 6" href="#"
                            class="border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium"
                            aria-current="false"
                            x-state-description="undefined: &quot;bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700&quot;, undefined: &quot;border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900&quot;">
                            <span class="truncate">FAQs</span>
                            <span aria-hidden="true"
                                :class="openTab == 6 ? 'bg-charcoal-900 absolute inset-x-0 bottom-0 h-0.5':'bg-transparent absolute inset-x-0 bottom-0 h-0.5'"></span>
                        </a>

                    </nav>
                </aside>
                <x-admin.deals.basicdeal :deal="$deal"></x-admin.deals.basicdeal>

                @if ($deal->exists)
                    <x-admin.deals.investmentprofile :deal="$deal"></x-admin.deals.investmentprofile>
                    <x-admin.deals.leasses :deal="$deal"></x-admin.deals.leasses>
                    <x-admin.deals.financials :deal="$deal"></x-admin.deals.financials>
                    <x-admin.deals.document :deal="$deal"></x-admin.deals.document>
                    <x-admin.deals.faq :deal="$deal"></x-admin.deals.faq>

                @endif

            </div>
        </div>
        <script>
            function markAsCoompleted() {
                let url = '{{ route('admin.deals.updateStatus') }}'
                let response = fetch(url, {
                    method: "POST",
                    body: JSON.stringify({
                        action: 'completed',
                        deal_id: @if ($deal->exists) {{ $deal->id }} @endif
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
        </script>
    </div>

</x-admin-layout>
