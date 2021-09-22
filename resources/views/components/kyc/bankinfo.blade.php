<div class="bg-gray-50 relative rounded-md shadow-md text-gray-900 z-20">
    <main class="text-center py-4">
        <!-- Validation Errors -->
        <x-validation-error class="mb-4" :errors="$errors" />

        <h2 class="mx-auto text-center text-xl font-medium">Bank Accounts Details</h2>
        @if (session('status'))
            <div class="mb-4 font-medium text-center text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form id="bank_info_form" method="POST" action="{{route('kyc.bankInfo')}}"
                >
        @csrf
            <div class="w-80 pt-4 mx-auto grid grid-flow-row" id="bank">
                <input id="pan" class="w-full p-3 my-2 bg-gray-200 border-gray-50 rounded" type="text" name="bank_account_number" value="{{old('bank_account_number',$user->kycData->bank_account_number)}}" placeholder="Enter Your Bank Number"/>
                <input id="adharfront" class="w-full p-3 my-2 bg-gray-200 border-gray-50 rounded" type="text" name="bank_ifsc_code" value="{{old('bank_ifsc_code',$user->kycData->bank_ifsc_code)}}" placeholder="Enter Your Bank IFSC Code"/>
            </div>
            <div class="w-80 pt-4 mx-auto grid grid-flow-row">
                <p class=" text-xs font-medium text-gray-300 pb-4 md:w-3/4 mx-auto">We will send ₹1 to your account to verify</p>
                <button
                    class="bg-orangemix font-semibold text-white p-2 w-full rounded hover:bg-orangemix focus:outline-none focus:ring shadow-md hover:shadow-sm transition-all duration-300"
                >
                    Verify
                </button>
                <div class="relative w-full mx-auto py-6">
                    <span class="w-full rounded-lg absolute left-0 right-0 h-1 bg-gray-400"></span>
                    <span class="bg-gray-50 text-gray-400 top-3 left-28 w-20 text-base font-medium mx-auto absolute">Or</span>
                </div>
            </div>
        </form>
        <a href="{{route('kyc.bankDocs')}}" class="w-full text-center font-semibold text-orangemix text-lg py-8">Upload Bank Documents</a>
    </main>
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
