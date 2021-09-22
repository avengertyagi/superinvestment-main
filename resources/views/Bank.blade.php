@include('header')
  <div class="w-full h-80 bg-white bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('/Image/MaskGroup14.png') }}');background-size: contain;">
    <div class="w-full h-screen  flex justify-center items-center">
        <div class="mx-4 text-center text-white">
            <h1 class="font-bold text-gray-900 text-7xl mb-64">My Profile</h1>
        </div>
    </div>
</div>
      <div class=" bg-white container mx-auto flex flex-col md:flex-row items-center my-2 md:my-2">
    <!--Left Col-->
    <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pb-24 px-6">
     <div class="flex items-center h-screen w-full justify-center">

<div class="md:w-1/2">
    <div class="bg-white rounded-lg py-3">
        <div class="photo-wrapper p-2">
            <img class="bg-gray-200 w-32 h-32 rounded-full mx-auto" src="{{asset('/Image/images.jpg')}}" alt="John Doe">
            <div class="p-3">
            <button class="mx-2 w-32 h-8 m_5 text-white text-sm font-thin py-2 px-4 rounded-sm" style="width:90%;">Upload/change</button>
            </div>
        </div>
        <div class="p-2">
           <div class="p-3">
                    <p class="px-2 py-2 text-lg text-gray-400 font-semibold">Profile</p>
             
            </div>
            <table class="text-xs my-3">
                <tbody><tr>
                   <button class="h-10 m_5 text-white text-left text-lg font-medium uppercase py-2 px-4 rounded-sm" style="width:100%;">Bank</button>

                    <td class="px-2 py-2"></td>
                </tr>
                <tr>
                    <td class="px-2 py-2 text-lg text-gray-400 font-semibold">KYC</td>
                    <td class="px-2 py-2"></td>
                </tr>
                <tr>
                    <td class="px-2 py-2 text-lg text-gray-400 font-semibold">Contact us</td>
                    <td class="px-2 py-2"></td>
                </tr>
            </tbody></table>
        </div>
    </div>
</div>

</div>
    </div>
    <!--Right Col-->
    <div class="w-full lg:w-1/2  text-center">
      <div class="leading-loose">
  <form class="md:w-3/4 m-4 p-10 bg-white rounded">
    <div class="mt-6 text-left">
        <label class="py-3 w-full  text-md text-gray-900 font-bold">Bank Account Number</label>
      <input class="w-full px-5  py-3 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Enter your Bank Account Number
" aria-label="Email">
    </div>
    <div class="mt-6 text-left">
        <label class="py-3 w-full  text-md text-gray-900 font-bold">IFSC Code</label>
      <input class="w-full px-5  py-3 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Enter your Bank IFSC Code" aria-label="Email">
    </div>
    <div class="mt-6">
      <button class="px-32 py-3 text-white text-xl font-medium font-light tracking-wider m_5 rounded" type="submit" style="width:100% ;">Submit</button>
    </div>
  </form>
</div>
    </div>
  </div>
  @include('footer')
