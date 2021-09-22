<x-admin-layout>

    <div class="py-6">
        <x-slot name="header">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <h1 class="text-2xl font-semibold text-gray-900">Settings</h1>
            </div>
        </x-slot>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <div class="py-4">
                <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200" x-data="data()">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Factor of Multipliaction
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        <template x-for="(item, index) in items">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center" x-text="item.name">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a @click.prevent
                                                       @dblclick="toggleEditingState(item)"
                                                       @click.away="disableEditing(item)"
                                                       x-show="!item.edit"
                                                       x-text="item.item"
                                                       class="select-none cursor-pointer font-lg text-blue-500"></a>
                                                    <input
                                                        type="text"
                                                        x-model="item.item"
                                                        x-show="item.edit"
                                                        @click.away="item.edit = false"
                                                        @keydown.enter="item.edit = false"
                                                        @keydown.window.escape="item.edit = false"
                                                        x-bind:name="item.name"
                                                        class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal w-128"
                                                        :x-ref="item.id"
                                                    />
                                                    <button type="button" x-show="item.edit" class="p-2 ml-2" title="Cancel" @click="cancel">ⓧ</button>
                                                    <button type="submit" x-show="item.edit" class="p-2 ml-2" title="Save" @click="save(item.name,item.item)">✅</button>
                                                </td>
                                                <td></td>

                                            </tr>
                                        </template>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </div>

    <!-- End Template -->
    <script>
        function data() {
            return {

                toggleEditingState(item) {
                    item.edit = true;

                    if (item.edit == true) {
                        this.$nextTick(() => {
                            this.$refs[item.id].focus();
                        });
                    }
                },
                disableEditing(item) {
                    item.edit = false;
                },
                cancel() {

                },
                save(name,item) {
                    console.log(name,item)
                    const obj = {
                        name: item
                    }

                    console.log(obj)

                    axios.post('{{ route('admin.update.settings') }}', {
                        [name]:item,

                    })
                        .then(function (response) {
                            document.getElementById("invest_profile").__x.$data.loading = false;

                            dispatchEvent(new CustomEvent('notice', {detail: {type: 'success', text: 'Success!'}}))
                        })
                        .catch(function (error) {
                            console.log(error);
                            document.getElementById("invest_profile").__x.$data.loading = false;
                            dispatchEvent(new CustomEvent('notice', {detail: {type: 'error', text: 'Error!'}}))
                        });
                },
                items: [
                    { id: 1, name: 'superinvest', item: {{ $superinvest }}, edit: false },
                    { id: 2, name: 'cbonds', item: {{ $cbonds }}, edit: false },
                    { id: 3, name: 'ppfs', item: {{ $ppfs }}, edit: false },
                    { id: 4, name: 'fds', item: {{ $fds }}, edit: false },
                ]
            };
        }
    </script>
</x-admin-layout>
