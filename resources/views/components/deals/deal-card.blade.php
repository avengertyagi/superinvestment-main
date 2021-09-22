<div class="w-full md:px-0 py-4">
    <a href="{{ route('deals.show', [$deal->slug]) }}" class="font-semibold text-gray-900 py-4 w-full block transition duration-150">
        <div class="w-full bg-white  rounded-lg lg:rounded-4-none border-2 border-red-400">
            <div class="mb-4 bg-superinvestgray text-center border-b grid md:grid-flow-col md:grid-cols-2  grid-flow-row border-red-400">
                <img class="mt-8 mx-auto" src="{{Storage::disk('public')->exists($deal->logo_path)? Storage::url($deal->logo_path):asset('/Image/stanplus.png')}}" width="200" height="200">
                <div class="text-center">
                    <svg viewBox="0 0 36 36" class="xl:w-2/3 md:w-2/3 w-1/2 circular-chart orangemix">
                        <path
                        class="circle-bg"
                        d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <path
                        class="circle"
                        stroke-dasharray="{{'70'}}, 100"
                        d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <text x="18" y="21" class="percentage">
                        {{'70'}}%
                        </text>
                    </svg>
                    <p class="font-bold mb-2 text-center text-orangemix text-xl xl:text-xl">₹ {{ $deal->investment }} Lacs</p>
                    <p class="font-semibold mb-4 px-2 text-center text-gray-400 text-xs">
                        of ₹ {{ $deal->total_investment }} Lacs Investment Raised
                    </p>
                </div>
            </div>
            <div class="p-4">
                <div class="w-full">
                    <h3 class="font-bold text-gray-500 text-left">{{$deal->name}}</h3>
                    <h3 class="font-bold py-4 text-gray-500 text-left">Monthly Fixed Returns l Multiple Assets </h3>
                </div>
                <div class="w-full">
                    <div class="grid md:grid-cols-2 grid-row py-4">
                        <h3 class="text-base font-normal text-black">Pre Tax Return (IRR)</h3>
                        <p class="text-base font-normal text-black text-right">{{ number_format((float)$deal->irr, 2, '.', '') }}%</p>
                    </div>

                    <div class="grid md:grid-cols-2 grid-row py-4">
                        <h3 class="text-base font-normal text-black">Tenure</h3>
                        <p class="text-base font-normal text-black text-right">{{ $deal->tenure }} {{ $deal->tenure_type }}</p>
                    </div>

                    <div class="grid md:grid-cols-2 grid-row py-4">
                        <h3 class="text-base font-normal text-black">Minimum Investment</h3>
                        <p class="text-base font-normal text-black text-right">₹{{ $deal->min_investment }}</p>
                    </div>
                </div>
            </div>
            <div class="block w-full p-8 bg-orangemix"></div>
        </div>
    </a>
</div>
