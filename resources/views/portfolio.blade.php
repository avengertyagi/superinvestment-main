<x-app-layout>
  <x-slot name="header">
    <div class="md:container md:mx-auto">
      <div class="md:-mx-8">
        <div class="bg-no-repeat bg-white" style="background: url('{{ asset('/Image/banner/bannercorner1.svg') }}') left bottom no-repeat , url('{{ asset('/Image/banner/bannercorner2.svg') }}') right top no-repeat; background-size:13rem;">
          <h1 class="font-bold text-center text-gray-900 md:text-7xl text-2xl py-20">My Portfolio</h1>
        </div>
      </div>
    </div>
  </x-slot>


  <div class="md:container md:mx-auto">
    <div class="md:-mx-8">
      <section class="bg-white px-4 mx-auto md:w-3/4 sm:px-6 lg:px-8 pt-16">
        <div class="w-full md:flex">
          <div class="md:w-1/4 py-4 px-4">
            <h2 class="text-center text-gray-400 text-lg font-semibold pb-2">Active Transactions</h2>
            <p class="text-center text-black text-xl font-medium pt-2">{{$user->assets->where('status',1)->count()}}</p>
          </div>
          <div class="md:w-1/4 py-4 px-4">
            <h2 class="text-center text-gray-400 text-lg font-semibold pb-2">Total Active Investment</h2>
            <p class="text-center text-black text-xl font-medium pt-2"><span>₹</span>{{$user->assets->sum('investment')}}</p>
          </div>
          <div class="md:w-1/4 py-4 px-4">
            <h2 class="text-center text-gray-400 text-lg font-semibold pb-2">Total Expected Returns</h2>
            <p class="text-center text-black text-xl font-medium pt-2"><span>₹</span>48,986</p>
          </div>
          <div class="md:w-1/4 py-4 px-4">
            <h2 class="text-center text-gray-400 text-lg font-semibold pb-2">Return Till Date</h2>
            <p class="text-center text-black text-xl font-medium pt-2"><span>₹</span>0</p>
          </div>
        </div>
      </section>
    </div>
  </div>

  <div class="md:container md:mx-auto">
    <div class="md:-mx-8">
      <section class="bg-white px-4 mx-auto md:w-3/4 sm:px-6 lg:px-8">
        @foreach($user->assets as $asset)
        <div class="border-2 border-orangemix px-1 rounded-md my-8">
            <div class="md:w-full md:flex">
              <div class="md:w-2/3 md:flex">
                <div class="md:w-1/3 py-4 px-4">
                  <h2 class="font-semibold lg:text-left pb-2 text-black text-center text-lg">Investment</h2>
                  <p class="font-medium lg:text-left pt-2 text-black text-center text-xl"><span>₹</span>{{$asset->investment}}</p>
                </div>
                <div class="md:w-1/3 py-4 px-4">
                  <h2 class="font-semibold lg:text-left pb-2 text-black text-center text-lg">Expected Returns</h2>
                  <p class="font-medium lg:text-left pt-2 text-black text-center text-xl"><span>₹</span>24,498</p>
                </div>
                <div class="md:w-1/3 py-4 px-4">
                  <h2 class="font-semibold lg:text-left pb-2 text-black text-center text-lg">Returns</h2>
                  <p class="font-medium lg:text-left pt-2 text-black text-center text-xl"><span>₹</span>0/36</p>
                </div>
              </div>
              <div class="md:w-1/3">
                <img class="bg-right bg-no-repeat bg-cover md:w-2/3 px-4 float-right" src="{{ Storage::disk('public')->exists($asset->deal->logo_path) ? Storage::url($asset->deal->logo_path) : asset('/Image/stanplus.png') }}">
              </div>
            </div>
            <div class="md:w-full md:flex">
              <div class="md:w-2/3 md:flex">
                <div class="md:w-1/3 py-4 px-4">
                  <h2 class="font-semibold lg:text-left pb-2 text-black text-center text-lg">Next Returns</h2>
                  <p class="font-medium lg:text-left pt-2 text-black text-center text-xl"><span>₹</span>320</p>
                </div>
                <div class="md:w-1/3 py-4 px-4">
                  <h2 class="font-semibold lg:text-left pb-2 text-black text-center text-lg">Tentative Due Date</h2>
                  <p class="font-medium lg:text-left pt-2 text-black text-center text-xl">10 Jun 2021</p>
                </div>
                <div class="md:w-1/3 py-4 px-4">
                  <h2 class="font-semibold lg:text-left pb-2 text-black text-center text-lg">Asset ID</h2>
                  <p class="font-medium lg:text-left pt-2 text-black text-center text-xl">{{$asset->asset_id}}</p>
                </div>
              </div>
              <div class="md:w-1/3">
                <img class="bg-right bg-no-repeat bg-cover md:w-2/3 px-4 float-right" src="{{ Storage::disk('public')->exists($asset->deal->logo_path) ? Storage::url($asset->deal->logo_path) : asset('/Image/stanplus.png') }}">
              </div>
            </div>
            <div class="lg:flex">
              <div class="md:w-3/4 py-4 md:flex">
                <button class="bg-orangemix md:mx-4 md:my-0 md:w-1/3 my-4 p-0.5 px-2 rounded text-white w-full">Payment Schedule</button>
                <button class="bg-orangemix md:mx-4 md:my-0 md:w-1/3 my-4 p-0.5 px-2 rounded text-white w-full">Transection Details</button>
                <button class="bg-orangemix md:mx-4 md:my-0 md:w-1/3 my-4 p-0.5 px-2 rounded text-white w-full">Download</button>
              </div>
              <div class="md:w-1/4">
                <p class="text-center lg:font-extrabold py-4 lg:text-right lg:text-xl">status<span class="bg-green-500 font-bold mx-2 p-0.5 px-1 rounded text-lg text-white">{{$asset->getStatus()  }}</span></p>
              </div>
            </div>
          </div>
        @endforeach

      </section>
    </div>
  </div>

  <x-slot name="footer">
    <x-footer></x-footer>
  </x-slot>
</x-app-layout>
