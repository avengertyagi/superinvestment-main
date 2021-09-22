<div class="bg-gray-50 relative rounded-md shadow-md text-gray-900 z-20">
    <main class="text-center py-4">
        <!-- Validation Errors -->
        <x-validation-error class="mb-4" :errors="$errors" />
        
        <h2 class="mx-auto text-center text-xl font-medium">Other Details</h2>
        @if (session('status'))
            <div class="mb-4 font-medium text-center text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form id="bank_form" method="POST" action=""
                x-data="form()"
        >
        @csrf
            <div class="w-80 pt-4 mx-auto grid grid-flow-row" id="bank" x-data="{ director: false }">
                <x-input id="residential state" class="p-3 my-3" type="text" name="" value="" placeholder="Residential Status"/>
                <x-input id="currently residing in" class="p-3 my-3" type="text" name="" value="" placeholder="Current Residing In"/>
                <x-input id="occupation" class="p-3 my-3" type="text" name="" value="" placeholder="Occupation"/>
                <p class="w-full text-justify py-2 font-semibold text-sm">Do You Have Director Identification Number</p>
                <div class="flex">
                    <div class="flex">
                        <input x-on:click="director = true" type="radio" name="director" id="yes" class="my-0.5 bg-gray-50"/>
                        <label for="yes" class="px-1 text-sm">Yes</label>
                    </div>
                    <div class="flex px-4">
                        <input x-on:click="director = false" type="radio" name="director" checked id="no" class="my-0.5 bg-gray-50"/>
                        <label for="no" class="px-1 text-sm">No</label>
                    </div>
                </div>
                <x-input x-show="director" id="director" class="p-3 my-3" type="text" name="" value="" placeholder="Nominee Name"/>
            </div>
            <div class="w-80 pt-4 mx-auto grid grid-flow-row">
                <button
                    class="bg-orangemix font-semibold text-white p-2 w-full rounded hover:bg-orangemix focus:outline-none focus:ring shadow-md hover:shadow-sm transition-all duration-300"
                >
                    Submit
                </button>
            </div>
        </form>
    </main>
</div>