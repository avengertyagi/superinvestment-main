<div class="w-full" x-show="openTab == 3">
    <div class="md:w-3/5 px-4 w-full">
        @if(isset($user->kycData->bank_doc_path))
        <div class="my-4">
            <label class="py-1 my-0 text-base font-semibold">Bank Document</label>
             <img class="cursor-pointer mx-auto h-52 px-3 py-3"
                src="{{Storage::exists($user->kycData->bank_doc_path) ? Storage::url($user->kycData->bank_doc_path) : asset('/Image/kyc/uploadpic.png')}}">
        </div>
        @else
        <div class="my-4">
            <label class="py-1 my-0 text-base font-semibold">Bank Account Number</label>
            <x-input class="px-3 py-3 w-full" placeholder="{{ optional($user->kycData)->bank_account_number? $user->kycData->bank_account_number : 'Complete Your KYC'}}" disabled/>
        </div>
        <div class="my-4">
            <label class="py-1 my-0 text-base font-semibold">IFSC Code</label>
            <x-input class="px-3 py-3 w-full" placeholder="{{ optional($user->kycData)->bank_ifsc_code? $user->kycData->bank_ifsc_code : 'Complete Your KYC'}}" disabled/>
        </div>
        @endif
    </div>
</div>
