<div class="w-full" x-show="openTab == 2">
	<div class="md:w-3/5 px-4">
        <div class="my-8">
            @if ($user->email && $user->name)
                @if (!isset($user->kycData->kyc_at))
                    <div class="my-8">
                        <img class="w-full" src="/Image/profile/completekyc.svg" alt="">
                    </div>
                    <a href="{{ route('kyc.start') }}"
                        class=" block text-center p-4 shadow-lg bg-orangemix text-white text-base font-semibold rounded-md">Complete
                        KYC</a>
                
                @else
                    <lable class="font-semibold text-sm">Aadhaar Name</lable>
                    <x-input class="p-4 w-full mb-4" placeholder="{{ $user->adharname ? $user->adharname : 'KYC Required' }}" disabled/>
                    <lable class="font-semibold text-sm">Aadhaar Number</lable>
                    <x-input class="p-4 w-full mb-4" placeholder="{{ $user->adharnumber ? $user->adharnumber : 'KYC Required' }}" disabled/>
                    <lable class="font-semibold text-sm">Aadhaar Address</lable>
                    <x-input class="p-4 w-full mb-4" placeholder="{{ $user->email ? $user->email : 'KYC Required' }}" disabled/>
                    <div class="grid lg:grid-flow-col">
                    <lable class="font-semibold text-sm">Pan Card</lable>
                    <img class="mr-0 mx-auto w-1/2" src="{{ Storage::disk('public')->exists($user->kycData->adhar_front_path) ? Storage::url($user->kycDate->adhar_front_path) : asset('/Image/kyc/adhaarfront.jpg') }}" alt="">
                    </div>
                    <lable class="font-semibold text-sm">Pan Name</lable>
                    <x-input class="p-4 w-full mb-4" placeholder="{{ $user->panname ? $user->panname : 'KYC Required' }}" disabled/>
                    <lable class="font-semibold text-sm">Pan Number</lable>
                    <x-input class="p-4 w-full mb-4" placeholder="{{ $user->pannumber ? $user->pannumber : 'KYC Required' }}" disabled/>
                    <lable class="font-semibold text-sm">D.O.B</lable>
                    <x-input class="p-4 w-full mb-4" placeholder="{{ $user->dob ? $user->dob : 'KYC Required' }}" disabled/>
                    <div class="grid lg:grid-flow-col">
                    <lable class="font-semibold text-sm">Pan Card</lable>
                    <img class="mr-0 mx-auto w-1/2" src="{{ Storage::disk('public')->exists($user->kycData->pan_front_path) ? Storage::url($user->kycDate->pan_front_path) : asset('/Image/kyc/pancard.jpg') }}" alt="{{$user->name??'Pancard Image'}}" alt="">
                    </div>
                @endif
            @else
                <div class="my-8">
                    <img class="w-full" src="/Image/profile/completekyc.svg" alt="">
                </div>
                <a class=" block text-center p-4 shadow-lg bg-orangemix text-white text-base font-semibold rounded-md">Complete
                        Your Profile First</a>
            @endif
        </div>
    </div>
</div>
