@include('header')
<!-- This is an example component -->
<div class="h-auto  bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('/Image/1800x896.jpg') }}');" style="width:1100px">
    <div class="w-auto h-screen bg-opacity-50  flex justify-center items-center mb-32">
        <div class="text-center text-white" style="margin-left:0px;">
            <h1 class="font-bold md:text-5xl mb-6  mr-24 text-gray-900">High Returns?</h1>
            <h2 class="font-bold md:text-5xl mb-12  text-gray-900">Think SuperInvest</h2>
            <p class="text-gray-600 font-semibold text-lg mr-18">Earn high fixed returns with a small investment in</p>
            <p class="text-gray-600 font-semibold text-lg"style="margin-right: 62px;">physical assets that are leased to top-tier</p>
             <p class="text-gray-600 font-semibold text-lg"style="margin-right:260px;">corporate clients.</p>
              <div class="w-full text-center">
                            <form action="#">
                                <div class="max-w-xl mx-auto p-1 pr-0 flex items-center">
                                    <input class="input border border-gray-400 appearance-none rounded w-full px-3 py-3 pt-5 pb-2 focus focus:outline-none active:outline-none border-2 border-red-400" id="email" type="text" autofocus placeholder="Enter your email /mobile no">
                                </div>
                                <button type="submit"
                                        class="shadow-lg w-full my-6 m_5 bg-opacity: 20 text-white text-base font-semibold rounded-md shadow-md p-2">Become an investor

                                     </button>
                            </form>
                        </div>
        </div>
        <div class="flex flex-col bg-white ml-12 mt-16" style="margin-left:100px ;">
                        <img src="{{ asset('/Image/Group 396.png')}}" width="400" height="400">
                    </div>
    </div>
</div>
<div class="grid grid-cols-12 mx-32">
    <div class="lg:col-span-4 col-span-12 px-8 lg:px-0 mb-4 lg:mb-0">
        <div class="bg-white shadow-md border-2 border-red-400 rounded-lg py-7 px-6 flex items-center justify-between font-text"style="width: 299px;
    height: 110px;">
             <div class="flex items-center">
                        <div class="icon w-20 p-3.5  text-gray-900 rounded-full mr-3">
                            <img src="{{ asset('/Image/profits.png')}}" width="200" height="200">
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-2xl text-gray-900 font-medium">₹ 75,000</div>
                            <div class="text-lg text-gray-900 font-medium">Average Investment</div>
                        </div>
                    </div>
        </div>
    </div>
    <div class="lg:col-span-4 col-span-12 px-8 lg:px-0 mb-4 lg:mb-0">
        <div class="bg-white shadow-md border-2 border-red-400 rounded-lg py-7 px-6 flex items-center justify-between font-text"style="width: 299px;
    height: 110px;">
            <div class="flex items-center">
                        <div class="icon w-24 p-3.5  text-gray-900 rounded-full mr-3">
                            <img src="{{ asset('/Image/003-percentage.png')}}" width="200" height="200">
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-2xl text-gray-900 font-medium">21.0%</div>
                            <div class="text-xl text-gray-900 font-medium">Average IRR</div>
                        </div>
                    </div>
        </div>
    </div>
    <div class="lg:col-span-4 col-span-12 px-8 lg:px-0 mb-4 lg:mb-0">
        <div class="bg-white  shadow-md border-2 border-red-400 rounded-lg py-7 px-6 flex items-center justify-between font-text"style="width: 299px;
    height: 110px;">
            <div class="flex items-center">
                        <div class="icon w-20  p-3.5  text-gray-900 rounded-full mr-3">
                            <img src="{{ asset('/Image/Component 44 – 1.png')}}" width="200" height="200">
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-2xl text-gray-900 font-medium">Monthly</div>
                            <div class="text-xl text-gray-900 font-medium">Fixed Payouts</div>
                        </div>
                    </div>
        </div>
    </div>
</div>
<main class="w-full flex justify-center m_13">
    <div class="flex flex-col md:w-full p-3 space-y-5 text-gray-900 bg-white">
        <section class="text-center mx-4 text-6xl font-semibold">
            How we make your investments Super?
        </section>
        <section class="text-center mx-4 font-medium text-xl text-gray-900">
           SuperInvest manages the end to end journey for<br/>
            your investments, leasing and returns.
        </section>
    </div>
</main>
<div class="max-w-5xl mx-auto my-4"> 
    <div class="flex pb-3">
        <div class="flex-1">
            <div class="w-32 h-32  mx-auto rounded-full flex items-center border-2 border-red-400" style=" background-size: 60% 60% ;background-position: center;;background-repeat: no-repeat; ;background-image: url('{{ asset('/Image/86.png') }}');">
            </div>
            <p class="text-center text-lg font-bold underline">1</p>
              <p class="text-center font-bold text-sm" style="width:200px;">Enlisting Leasing Partner</p>
              <p style="" class="text-center text-gray-900 text-xs font-semibold overflow-hidden">Enlist leasing partner after due diligence; craft optimal investment opportunity & list it on our platform</p>

        </div>


        <div class="w-1/6 align-center items-center align-middle content-center flex my-24">
            <div class="w-full bg-grey-light  items-center align-middle align-center flex-1">
                <div class="bg-red-400 m_6 text-xs leading-2 py-1 text-center text-grey-darkest rounded " style="width: 130%; margin-top:-20px; margin-left: -10px;"></div>
            </div>
        </div>
    
        
        <div class="flex-1">
             <div class="w-32 h-32  mx-auto rounded-full flex items-center border-2 border-red-400" style=" background-size: 60% 60% ;background-position: center;;background-repeat: no-repeat; ;background-image: url('{{ asset('/Image/87.png') }}');">
            </div>
             <p class="text-center font-bold underline">2</p>
             <p class="text-center font-bold text-sm" style="width:200px;">Invite Multiple Investors</p>
              <p style=" word-wrap: break-word;" class="text-center text-gray-900 text-xs font-semibold">Pool capital contributions from several
              investors, thereby meeting asset
               acquisition costs.
                 </p>


        </div>
    
        <div class="w-1/6 align-center items-center align-middle content-center flex">
            <div class="w-full bg-grey-light rounded items-center align-middle align-center flex-1">
                <div class="bg-red-400 m_6 text-xs leading-none py-1 text-center text-grey-darkest rounded " style="width: 130%; margin-top:-20px; margin-left: -10px;"></div>
            </div>
        </div>
    
        <div class="flex-1">
             <div class="w-32 h-32  mx-auto rounded-full flex items-center border-2 border-red-400" style=" background-size: 60% 60% ;background-position: center;;background-repeat: no-repeat; ;background-image: url('{{ asset('/Image/88.png') }}');">
            </div>
             <p class="text-center font-bold underline">3</p>
             <p class="text-center font-bold text-sm" style="width:200px;">Purchase & Lease Asset</p>
              <p style=" word-wrap: break-word;" class="text-center text-gray-900 text-xs font-semibold">Purchase quality asset from
             category-leading suppliers; lease
              asset to partner under contract</p>

        </div>
    
    
        <div class="w-1/6 align-center items-center align-middle content-center flex">
            <div class="w-full bg-grey-light rounded items-center align-middle align-center flex-1">
                <div class="bg-red-400 m_6 text-xs leading-none py-1 text-center text-grey-darkest rounded " style="width: 130%; margin-top:-20px; margin-left: -10px;"></div>
            </div>
        </div>


        <div class="flex-1">
             <div class="w-32 h-32  mx-auto rounded-full flex items-center border-2 border-red-400" style=" background-size: 60% 60% ;background-position: center;;background-repeat: no-repeat; ;background-image: url('{{ asset('/Image/89.png') }}');">
            </div>
             <p class="text-center font-bold underline">4</p>
             <p class="text-center font-bold text-xs" style="width:200px;">Fixed Monthly Return</p>
              <p style=" word-wrap: break-word;" class="text-center text-gray-900 text-xs font-semibold">Get hassle free monthly returns
              on your investment directly in
              your bank account.</p>

        </div>
    </div>
</div>
<div class="bg-gray-100 mx-auto mt-30 mb-20 font-text grid grid-cols-12 gap-8 py-30">
    <div class="sm:order-1 order-2 sm:col-span-7 col-span-12">
        <div class="sm:flex m_14">
            <div class="bg-white py-8 px-16 shadow-lg rounded-xl sm:w-1/2 lg:mr-6 mx-4 flex flex-col justify-center items-center lg:items-center border-2 border-red-500" style="width: 240px;
    padding: 10px; height:250px;
">
                <img src="{{asset('/Image/90.png')}}" alt="High fixed monthly return" class="w-20 h-20 pr-6">
                <h5 class="text-center mt-2 text-sm font-bold">High Fixed Monthly Return</h5>
                <p class="font-semibold text-sm p-6 text-center">Payout amount, timing and duration is pre-agreed and contractually governed, ensuring complete transparency</p>
            </div>
                <div class="bg-white py-6 px-16 shadow-lg  rounded-xl sm:w-1/2 lg:mr-6 mx-4 flex flex-col justify-center items-center lg:items-center border-2 border-red-500" style="width: 240px;
    padding: 10px;height:250px;
">
                <img src="{{asset('/Image/91.png')}}" alt="High fixed monthly return" class="w-20 h-20 pr-2">
                <h5 class="text-center text-sm font-bold">Strong collateral & Low Risk</h5>
                <p class="font-semibold text-sm p-4 text-center">Strong collateral, sizable security
                 deposit requirements and legal
                  right to re-lease or sell assets
                  help us protect investors' capital</p>
            </div>
            </div>
            <div class="lg:flex mt-6 m_14">
                <div class="bg-white py-8 px-16 shadow-lg  rounded-xl sm:w-1/2 lg:mr-6 mx-4 flex flex-col justify-center items-center lg:items-center border-2 border-red-500" style="width: 240px;
    padding: 10px;height:250px;
">
                <img src="{{asset('/Image/92.png')}}" alt="High fixed monthly return" class="w-20 h-20 pr-6">
                <h5 class="text-center mt-2  text-sm font-bold">Tax Saving Benefits</h5>
                <p class="font-semibold text-sm p-6 text-center">Tax benefits linked to asset depreciation & expenses are passed off to investors-over and above the secure return offered.</p>
            </div>
                <div class="bg-white py-8 px-16 shadow-lg  rounded-xl sm:w-1/2 lg:mr-6 mx-4 flex flex-col justify-center items-center lg:items-center border-2 border-red-500" style="width: 240px;
    padding: 10px;height:250px;
">
                <img src="{{asset('/Image/90.png')}}" alt="High fixed monthly return" class="w-20 h-20 pr-2">
                <h5 class="text-center text-sm font-bold">In Depth Analysis</h5>
                <p class="font-semibold text-sm p-6 text-center">Leasing Partners are thoroughly scrutinized & judiciously chosen post in-depth analysis</p>
            </div>
            </div>
        </div>
        <div class="lg:col-span-4 col-span-12  flex flex-col justify-center lg:items-start items-center lg:order-2 order-1">
            <h2 class="text-4xl font-semibold 4xl:w-3/4  text-center">Why SuperInvest?</h2>
            <p class="mt-6 text-left lg:text-left text-xl font-semibold text-gray-800">Superinvest facilitates a contractual leasing arrangement where the Lessee (Leasing partner) pays the Lessor (Investor) regular lease rentals in exchange for use of an asset over an agreed period of time.</p>
        </div>
    </div>
<div class="flex items-stretch w-full h-auto bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('/Image/MaskGroup13.png') }}');">
    <div class="mx-16 w-auto h-screen bg-opacity-50  flex justify-start items-center mb-52">
        <div class="mx-4 text-center text-white">
            <h1 class="font-bold md:text-5xl mb-6 pr-16 text-gray-900">Compare with</h1>
            <h1 class="font-bold md:text-5xl mb-6 text-gray-900">traditional existing</h1>
            <h1 class="font-bold md:text-5xl mb-6 text-gray-900">investment options</h1>
            <p class="text-gray-900 ">Returns calculated for a tenure of 36 months. All returns are<br/>mentioned on a pre -tax basis</p>
        </div>
    </div>
      <div class="lg:w-1/2 w-full flex-wrap items-base  md:px-16 px-0 z-0">
           <div class="lg:col-span-6 col-span-12 px-4 lg:px-0 my-12">
        <div>
            <label for="slider" class="font-bold md:text-2xl pr-16 text-gray-900 text-start">Investment Amount</label><div class="flex items-center justify-between my-4">
                <p class="font-normal xl:text-4xl text-3xl text-primary">₹ 20,000</p>
                <div class="flex">
                    <div class="bg-primary px-1 h-6 bg-gray-900 rounded flex items-center mr-4 bg-opacity-100 cursor-pointer">
                        <p class="text-lg font-medium text-white">+25,000</p>
                    </div>
                    <div class="bg-primary px-1 h-6 bg-gray-900  rounded flex items-center mr-4 bg-opacity-100 cursor-pointer">
                        <p class="text-lg font-medium text-white">+50,000</p>
                    </div>
                </div>
            </div>
            <style>
  input[type=range]::-webkit-slider-thumb {
    pointer-events: all;
    width: 24px;
    height: 24px;
    -webkit-appearance: none;
  /* @apply w-6 h-6 appearance-none pointer-events-auto; */
  }
</style> 
  <div x-data="range()" x-init="mintrigger(); maxtrigger()" class="relative max-w-xl w-full">
    <div>
      <input type="range"
             step="100"
             x-bind:min="min" x-bind:max="max"
             x-on:input="mintrigger"
             x-model="minprice"
             class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

      <input type="range" 
             step="100"
             x-bind:min="min" x-bind:max="max"
             x-on:input="maxtrigger"
             x-model="maxprice"
             class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

      <div class="relative z-10 h-2">

        <div class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-gray-900"></div>

        <div class="absolute z-20 top-0 bottom-0 rounded-md bg-gray-900" x-bind:style="'right:'+maxthumb+'%; left:'+minthumb+'%'"></div>

        <div class="absolute z-30 w-6 h-6 top-0 left-0 bg-gray-900 border-8 border-gray-600 rounded-full -mt-2 -ml-1" x-bind:style="'left: '+minthumb+'%'"></div>

        <!--<div class="absolute z-30 w-6 h-6 top-0 right-0 bg-gray-900 rounded-full -mt-2 -mr-3" x-bind:style="'right: '+maxthumb+'%'"></div>-->
 
      </div>

    </div>
  </div>

<script>
    function range() {
        return {
          minprice: 1000, 
          maxprice: 7000,
          min: 100, 
          max: 10000,
          minthumb: 0,
          maxthumb: 0, 
          
          mintrigger() {   
            this.minprice = Math.min(this.minprice, this.maxprice - 500);      
            this.minthumb = ((this.minprice - this.min) / (this.max - this.min)) * 100;
          },
           
          maxtrigger() {
            this.maxprice = Math.max(this.maxprice, this.minprice + 500); 
            this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);    
          }, 
        }
    }
</script>
            <!--<input type="range" min="20000" max="1000000" id="slider" class="slider" step="20000" value="40000">-->
        </div>
        <div class="w-fullh-16 bg-white border-2 border-red-400 shadow-md rounded-md lg:py-4 py-2 lg:px-6 px-4 grid grid-cols-3 lg:gap-8 gap-3 mt-10 mb-4">
            <div>
               <p class="bg-center bg-no-repeat bg-cover p-2"><img src="{{asset('/Image/superinvest.png')}}" width="150" height="150"></p>
      <p class="text-center text-xl text-gray-900 font-semibold">₹ 27,355</p>
            </div>
            <div>
                 <p class="text-center text-xl text-gray-900 font-semibold">Payouts
      </p>
      <p class="text-center mt-2 text-xl text-gray-900 font-semibold">Monthly</p>
            </div>
            <div>
                <p class="text-center text-2xl text-gray-900 font-semibold">IRR
      <p class="text-center mt-2 text-xl text-gray-900 font-semibold">21.0%</p>
            </div>
        </div>
        <div class="bg-white border-2 border-gray-400 shadow-md rounded-md  lg:py-4 py-2 lg:px-6 px-4 grid grid-cols-3 lg:gap-8 mb-4">
            <div class="flex flex-col justify-between">
               <p class="text-center text-xl text-gray-900 font-semibold">Corp Bonds</p>
      <p class="text-center text-xl text-gray-900 font-semibold">₹ 25,546</p>
            </div>
            <div class="flex flex-col justify-between">
               <p class="text-center text-xl text-gray-900 font-semibold">Payouts
      </p>
      <p class="text-center mt-2 text-xl text-gray-900 font-semibold">End of tenure</p>
            </div>
            <div class="flex flex-col justify-between pl-4 lg:pl-0">
                <p class="text-center text-xl text-gray-900 font-semibold">IRR
      <p class="text-center mt-2 text-xl text-gray-900 font-semibold">8.5%</p>
            </div>
        </div>
        <div class="bg-white  border-2 border-gray-400 shadow-md rounded-md  lg:py-4 py-2 lg:px-6 px-4 grid grid-cols-3 lg:gap-8 mb-4">
            <div class="flex flex-col justify-between">
                <p class="text-center text-xl text-gray-900 font-semibold">PPF</p>
      <p class="text-center text-xl text-gray-900 font-semibold">₹ 24,570</p>
            </div>
            <div class="flex flex-col justify-between">
                <p class="text-center text-xl text-gray-900 font-semibold">Payouts
      <p class="text-center mt-2 text-xl text-gray-900 font-semibold">End of tenure</p>
            </div>
            <div class="flex flex-col justify-between pl-4 lg:pl-0">
               <p class="text-center text-xl text-gray-900 font-semibold">IRR
      <p class="text-center mt-2 text-xl text-gray-900 font-semibold">7.1%</p>
            </div>
        </div>
        <div class="bg-white border-2 border-gray-400 shadow-md rounded-md  lg:py-4 py-2 lg:px-6 px-4 grid grid-cols-3 lg:gap-8 mb-4">
            <div class="flex flex-col justify-between">
               <p class="text-center text-xl text-gray-900 font-semibold">Fixed Deposit
      <p class="text-center mt-2 text-xl text-gray-900 font-semibold">₹ 23,485</p>
            </div>
            <div class="flex flex-col justify-between">
                  <p class="text-center text-xl text-gray-900 font-semibold">Payout
      <p class="text-center mt-2 text-xl text-gray-900 font-semibold">End of tenure</p>
            </div>
            <div class="flex flex-col justify-between pl-4 lg:pl-0">
                <p class="text-center text-xl text-gray-900 font-semibold">IRR
      <p class="text-center mt-2 text-xl text-gray-900 font-semibold">5.5%</p>
            </div>
        </div>
    </div>
  </div>
</div>
<!-- This is an example component -->
<div>
  <div class="bg-white relative items-center justify-center">
    <!-- All Cards Container -->
     <h1 class="py-6 title-font mb-2 text-4xl font-semibold leading-10 tracking-tight text-center sm:text-5xl sm:leading-none md:text-5xl">Recent Deals</h1>
          
    <div class="lg:flex items-center container mx-16 my-auto">
      <div class="lg:m-4 border border-red-300 rounded-lg bg-white my-12 mx-8">
        <div class="p-4">
        <img src="{{asset('/Image/rent.jpg')}}" alt=""class="overflow-hidden" width="300" height="300">
        </div>
        <!-- Card Content -->
        <div class="p-4">
         <div class="w-full">
                            <a href="#" class="w-full  font-medium text-gray-900 py-4 px-4 w-full block transition duration-150">
                                    Laptop
                                    <div>
                         <p class="font-medium -my-4 text-right text-sm text-gray-900"></p>
                                    </div>
                            </a>

                             <a href="#" class="w-full  font-medium text-gray-900 py-4 px-4 w-full block transition duration-150">
                                    Investment Raised
                                    <div>
                         <p class="font-medium -my-4 text-right text-sm text-gray-900">50 lacs</p>
                                    </div>
                            </a>

                             <a href="#" class="w-full  font-medium text-gray-900 py-4 px-4 w-full block transition duration-150">
                                   IRR
                                    <div>
                         <p class="font-medium -my-4 text-right text-sm text-gray-900">20.6%</p>
                                    </div>
                            </a>
                            <a href="#" class="w-full  font-medium text-gray-900 py-4 px-4 w-full block transition duration-150">
                                   Day Taken
                                    <div>
                         <p class="font-medium -my-4 text-right text-sm text-gray-900">18 Days</p>
                                    </div>
                            </a>
                        </div>
        </div>
      </div>
     
       <div class="lg:m-4 border border-red-300 rounded-lg bg-white my-12 mx-8">
        <div class="p-4">
        <img src="{{asset('/Image/rent.jpg')}}" alt=""class="overflow-hidden" width="300" height="300">
        </div>
        <!-- Card Content -->
        <div class="p-4">
         <div class="w-full">
                            <a href="#" class="w-full  font-medium text-gray-900 py-4 px-4 w-full block transition duration-150">
                                    Laptop
                                    <div>
                         <p class="font-medium -my-4 text-right text-sm text-gray-900"></p>
                                    </div>
                            </a>

                             <a href="#" class="w-full  font-medium text-gray-900 py-4 px-4 w-full block transition duration-150">
                                    Investment Raised
                                    <div>
                         <p class="font-medium -my-4 text-right text-sm text-gray-900">50 lacs</p>
                                    </div>
                            </a>

                             <a href="#" class="w-full  font-medium text-gray-900 py-4 px-4 w-full block transition duration-150">
                                   IRR
                                    <div>
                         <p class="font-medium -my-4 text-right text-sm text-gray-900">20.6%</p>
                                    </div>
                            </a>
                            <a href="#" class="w-full  font-medium text-gray-900 py-4 px-4 w-full block transition duration-150">
                                   Day Taken
                                    <div>
                         <p class="font-medium -my-4 text-right text-sm text-gray-900">18 Days</p>
                                    </div>
                            </a>
                        </div>
        </div>
      </div>
      <div class="lg:m-4 border border-red-300 rounded-lg bg-white my-12 mx-8">
        <div class="p-4">
        <img src="{{asset('/Image/rent.jpg')}}" alt=""class="overflow-hidden" width="300" height="300">
        </div>
        <!-- Card Content -->
        <div class="p-4">
         <div class="w-full">
                            <a href="#" class="w-full  font-medium text-gray-900 py-4 px-4 w-full block transition duration-150">
                                    Laptop
                                    <div>
                         <p class="font-medium -my-4 text-right text-sm text-gray-900"></p>
                                    </div>
                            </a>

                             <a href="#" class="w-full  font-medium text-gray-900 py-4 px-4 w-full block transition duration-150">
                                    Investment Raised
                                    <div>
                         <p class="font-medium -my-4 text-right text-sm text-gray-900">50 lacs</p>
                                    </div>
                            </a>

                             <a href="#" class="w-full  font-medium text-gray-900 py-4 px-4 w-full block transition duration-150">
                                   IRR
                                    <div>
                         <p class="font-medium -my-4 text-right text-sm text-gray-900">20.6%</p>
                                    </div>
                            </a>
                            <a href="#" class="w-full  font-medium text-gray-900 py-4 px-4 w-full block transition duration-150">
                                   Day Taken
                                    <div>
                         <p class="font-medium -my-4 text-right text-sm text-gray-900">18 Days</p>
                                    </div>
                            </a>
                        </div>
        </div>
      </div>
     
    </div>
    <div  class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-gray-100  border border-gray-600 rounded-full w-4 pb-2"></button>
    <button id="sButton2" onclick="sliderButton2() " class="m_5 rounded-full w-4 p-2"></button>
     <button id="sButton2" onclick="sliderButton3() " class="bg-gray-100  border border-gray-600 rounded-full w-4 p-2"></button>
  </div>
  </div>
</div>
<div class="bg-white mx-16 w-auto h-auto  bg-opacity-50  flex justify-start items-center my-6">
        <div class="w-full mx-4 text-center text-white">
            <h1 class="font-bold md:text-4xl mb-6 text-gray-900">Ready to get High returns?</h1>
            <p class="text-gray-900 ">Be among the selected few to start investing on SuperInvest when it's ready </p>
        </div>
        <div class="w-full text-center">
                            <form action="#">
                                <div class="w-2/3 mx-auto p-1 pr-0 flex items-center">
                                    <input type="email" placeholder="Enter your email /mobile no"
                                        class="flex-1 appearance-none rounded shadow p-3 text-grey-dark mr-2 focus:outline-none border-2 border-red-500">
                                </div>
                                <button type="submit"
                                        class="w-2/3 my-6 m_5 bg-opacity: 20 text-white text-base font-semibold rounded-md shadow-md p-2"><a href="message">Become an investor</a>

                                     </button>
                            </form>
                        </div>
</div>
<div class="w-full h-full  bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('/Image/818.jpg') }}');">
    <div class="md:w-3/4 h-auto  bg-opacity-50  flex justify-base items-center" style="padding-top: 10px;">
        <div class="mx-4 text-center text-white">
            <h1 class="font-semibold md:text-5xl mb-6  text-gray-900">Want lease finance?</h1>
            <p class="text-gray-900 font-semibold" style="margin-left:100px;">please fill out the form below for a callback and our team would be happy</p>
            <p class="text-gray-900 font-semibold" style="margin-left:60px;">to provide you assistance for your queries at <b>lease@superinvest.in</b></p>
            <p class="md:w-2/3 mx-auto text-center justify-center items-center text-gray-900 font bg-white rounded-md shadow-2xl  font-semibold py-1.5 my-6">Want lease finance?</p>
        </div>
    </div>
    <div class="w-full m_17 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('/Image/Group818.png') }}');">
<div class="grid grid-rows-2 md:grid-rows-1 ...">
     <div class="w-1/2 h-auto  bg-opacity-50  flex justify-base items-center" style="padding-top: 100px;">
        <div class="mx-4 text-center text-white">
            <img class="mx-28"src="{{asset('/Image/download (3).png')}}" width="300" height="300">
            <p class="text-gray-200 text-xl font-medium">Superinvest is an investment </p>
            <p class="text-gray-200 mx-8 text-xl font-medium" style="margin-left:10.5566%">platform that offers asset backed </p>
             <p class="text-gray-200 mx-8 text-xl font-medium" style="margin-left:10.888%">investment opportunities in lease  </p>
              <p class="text-gray-200 mx-8 text-xl font-medium">finance with a low investment </p>
               <p class="text-gray-200 mx-8 text-xl font-medium">amount and high fixed returns. </p>
        </div>
    </div>

    <p class="text-center text-gray-200 text-xl font-medium">hey@superinvest.in</p>
</div>
    <div class="my-10">
    <p class="text-gray-200 text-xl font-medium mx-32">© 2021 • Supercap FInance Technology India Pvt Ltd</p>
     </div>
 </div>
 </div>