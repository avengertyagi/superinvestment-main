<x-app-layout>
  <x-slot name="header">
    <div class="md:container md:mx-auto">
      <div class="md:-mx-8">
        <div class="bg-no-repeat bg-white" style="background: url('{{ asset('/Image/banner/bannercorner1.svg') }}') left bottom no-repeat , url('{{ asset('/Image/banner/bannercorner2.svg') }}') right top no-repeat; background-size:13rem;">
          <h1 class="font-bold text-center text-gray-900 md:text-7xl text-4xl py-20">How To Invest</h1>
        </div>
      </div>
    </div>
  </x-slot>
  <div class="md:container md:mx-auto">
    <div class="md:-mx-8">
      <section class="bg-white px-4 mx-auto md:w-3/4 sm:px-6 lg:px-8 py-8">
        <div class="relative w-full">
          <ul role="list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
            <li class="relative">
              <div class="text-center bg-white block overflow-hidden w-full group aspect-w-10 aspect-h-7">
                <div class="bg-white justify-center items-center mx-auto">
                  <img src="{{ asset('/Image/1.png') }}" width="170" height="170" class="object-cover pointer-events-none group-hover:opacity-75 mx-auto">
                </div>
                <P class="text-center text-xl font-bold text-gray-900">Explore</P>
                <P class="text-center text-xl font-bold text-gray-900">Active Deals</P>
                <div class="rounded-full z-10 md:my-4 my-8 bg-white w-8 h-8 mx-auto text-lg font-black flex justify-center items-center shadow-lg underline border-2 border-orangemix">1</div>
              </div>
            </li>
            <li class="relative">
              <div class="text-center bg-white block overflow-hidden w-full group aspect-w-10 aspect-h-7">
                <div class="bg-white justify-center items-center mx-auto">
                  <img src="{{ asset('/Image/2.png') }}" width="170" height="170" class="object-cover pointer-events-none group-hover:opacity-75 mx-auto">
                </div>
                <P class="text-center text-xl font-bold text-gray-900">Complete KYC and</P>
                <P class="text-center text-xl font-bold text-gray-900">Make Payment</P>
                <div class="rounded-full z-10 md:my-4 my-8 bg-white w-8 h-8 mx-auto text-lg font-black flex justify-center items-center shadow-lg underline border-2 border-orangemix">2</div>
              </div>
            </li>
            <li class="relative">
              <div class="text-center bg-white block overflow-hidden w-full group aspect-w-10 aspect-h-7">
                <div class="bg-white justify-center items-center mx-auto">
                  <img src="{{ asset('/Image/3.png') }}" width="170" height="170" class="object-cover pointer-events-none group-hover:opacity-75 mx-auto">
                </div>
                <P class="text-center text-xl font-bold text-gray-900">Review & Digitally</P>
                <P class="text-center text-xl font-bold text-gray-900">Sign the Agreement</P>
                <div class="rounded-full z-10 md:my-4 my-8 bg-white w-8 h-8 mx-auto text-lg font-black flex justify-center items-center shadow-lg underline border-2 border-orangemix">3</div>
              </div>
            </li>
            <li class="relative">
              <div class="text-center bg-white block overflow-hidden w-full group aspect-w-10 aspect-h-7">
                <div class="bg-white justify-center items-center mx-auto">
                  <img src="{{ asset('/Image/4.png') }}" width="170" height="170" class="object-cover pointer-events-none group-hover:opacity-75 mx-auto">
                </div>
                <P class="text-center text-xl font-bold text-gray-900">Get Monthly fixed</P>
                <P class="text-center text-xl font-bold text-gray-900">returns</P>
                <div class="rounded-full z-10 md:my-4 my-8 bg-white w-8 h-8 mx-auto text-lg font-black flex justify-center items-center shadow-lg underline border-2 border-orangemix">4</div>
              </div>
            </li>
          </ul>
          
          <div class="w-full absolute left-0 right-0 md:block hidden" style="bottom: 1.9rem;">
            <ul class="flex w-9/12 mx-auto">
              <li class="relative h-0.5 w-1/3 mx-5 bg-orangemix text-center block"></li>
              <li class="relative h-0.5 w-1/3 mx-5 bg-orangemix text-center block"></li>
              <li class="relative h-0.5 w-1/3 mx-5 bg-orangemix text-center block"></li>
            </ul>
          </div>
        </div>
      </section>
      <div class="bg-white">
        <section class="mx-auto md:w-3/4 relative">
          <div class="w-2 h-2 absolute top-0 rounded-full bg-orangemix" style="left:-0.16rem;"></div>
          <div class="md:flex border-l-2 border-orangemix py-8">
            <div class="w-full md:flex">
              <div class="relative">
                <div class="rounded-full relative z-10 md:my-0 my-8 bg-white w-9 h-9 md:mx-6 mx-auto text-lg font-black flex justify-center items-center shadow-lg underline border-2 border-orangemix">1</div>
                <div class="h-0.5 w-full z-0 absolute top-4 bg-orangemix"></div>
              </div>
              <div class="relative">
                <h2 class="text-3xl px-8 pb-4 font-bold">Explore Active Deals</h2>
                <p class="px-8 text-base font-normal">Explore & analyze available deals on our website - access key deal & company documents related to risk-return profile, lease terms, financial performance and management summaries. Calculate the potential returns on your investment through in-built return calculator and accordingly choose the deal that suits your requirements the most.</p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="bg-superinvestgray">
        <section class="mx-auto md:w-3/4">
          <div class="md:flex grid border-l-2 border-orangemix py-8">
            <div class="w-full md:flex">
              <div class="relative">
                <div class="rounded-full relative z-10 md:my-0 my-8 bg-white w-9 h-9 md:mx-6 mx-auto text-lg font-black flex justify-center items-center shadow-lg underline border-2 border-orangemix">2</div>
                <div class="h-0.5 w-full z-0 absolute top-4 bg-orangemix"></div></div>
              <div class="">
                <h2 class="text-3xl px-8 pb-4 font-bold">Complete KYC and Make Payment</h2>
                <p class="px-8 text-base font-normal text-black">Set up your profile with basic KYC documents in as little as 10 minutes through Digio (trusted E-KYC
                  platform with 10M+ customers); Transfer funds into your account via various payment gateways powered by RazorPay (India's leading payments solution) & start your investing journey on the same day.</p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="bg-white">
        <section class="mx-auto md:w-3/4">
          <div class="md:flex border-l-2 border-orangemix py-8">
            <div class="w-full md:flex">
              <div class="relative">
                <div class="rounded-full relative z-10 md:my-0 my-8 bg-white w-9 h-9 md:mx-6 mx-auto text-lg font-black flex justify-center items-center shadow-lg underline border-2 border-orangemix">3</div>
                <div class="h-0.5 w-full z-0 absolute top-4 bg-orangemix"></div>
              </div>
              <div class="">
                <h2 class="text-3xl px-8 pb-4 font-bold">Review & Digitally Sign the Agreement</h2>
                <p class="px-8 text-base font-normal">Review the investment contract for your chosen deal & digitally sign it with Hello Sign (Global leader
                  in legally binding electronic signatures).All capital investments in the asset to be leased in the deal are
                  executed through a Limited Liability Partnership (LLP), of which you and your co-investors will become
                  partners. Executing investments through LLP route offers two major tax advantages -<br />
                  a) Depreciation charged on the asset is tax deductible against leasing income<br />
                  b) GST paid on asset purchase can be claimed as input tax credit & adjusted against GST liability on
                  lease income in subsequent years</p>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="bg-superinvestgray">
        <section class="mx-auto md:w-3/4 relative">
          <div class="md:flex border-l-2 border-orangemix py-8">
            <div class="w-full md:flex">
              <div class="relative">
                <div class="rounded-full relative z-10 md:my-0 my-8 bg-white w-9 h-9 md:mx-6 mx-auto text-lg font-black flex justify-center items-center shadow-lg underline border-2 border-orangemix">4</div>
                <div class="h-0.5 w-full z-0 absolute top-4 bg-orangemix"></div>
              </div>
              <div class="">
                <h2 class="text-3xl px-8 pb-4 font-bold">Get Monthly fixed returns</h2>
                <p class="px-8 text-base font-normal">Start receiving monthly fixed returns in your bank account as per the agreed payout schedule. Returns
                  will be distributed to you through the LLP created for your specific deal. Taxes on this lease income
                  would have already been paid by the LLP as per Indianlaw (with significant tax savings), and to avoid
                  double taxation, this income will be completely tax free in your hands.</p>
              </div>
            </div>
          </div>
          <div class="w-2 h-2 absolute bottom-0 rounded-full bg-orangemix" style="left:-0.16rem;"></div>
        </section>
      </div>
      
      <section class="bg-white mx-auto md:w-3/4 py-8">
        <div class="h-64 md:w-3/4 grid grid-rows-1 grid-flow-col gap-4">
          <div class="mx-4 text-left">
            <h1 class="font-bold md:text-4xl text-3xl mb-4 pr-16 text-gray-900">Still Curious?</h1>
            <p class="text-base font-normal">We are a friendly bunch. Reach out to us at<b> lease@superinvest.in</b>. Our<br />expert investment advisors would be happy to provide you one-on one<br /> personal assistance for your queries . </p>
            <p class="pt-6 text-l text-gray-900 font-bold">Have any questions?<h class="text-red-400">Explore FAQs</h>
            </p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <x-slot name="footer">
    <x-footer>
      <section class="mx-auto md:w-3/4">
        <div class="md:flex py-8 md:px-0 px-4">
          <div class="md:w-3/5 md:pr-8">
            <h2 class="text-4xl pb-4 font-bold">Ready to get High return?</h2>
          </div>
          <div class="md:w-2/5 pt-4 md:pl-8">
            <a href="{{url('/deals')}}" class="font-bold bg-white block border-2 border-orangemix content-center py-2 relative rounded rounded-sm text-black text-center w-full">View Deals</a>
          </div>
        </div>
      </section>
    </x-footer>
  </x-slot>
</x-app-layout>