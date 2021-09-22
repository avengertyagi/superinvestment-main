@include('header')
<div class="w-full h-40 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('/Image/MaskGroup14.png') }}'); background-size: contain;">
    <div class="w-full h-screen  flex justify-center items-center">
        <div class="mx-4 text-center text-white">
            <h1 class="font-bold text-6xl mb-96 text-gray-900">Want lease finance?</h1>
        </div>
    </div>
</div>
<hr class="border-gray-500" />
 <section class="text-black">
            <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
                <div class="text-center lg:w-2/3 w-full">
                    <p class="leading-relaxed mb-8 font-semibold text-xl">We would be happy to call you back once we receive the below details<br>
                           The name and photo associated with your Google Account will<br>
                                be recorded when you upload files and submit this form<br>
                                       Not Superinvest@gmail.com?<h class="text-red-400">Switch account</h>
                    </p>
                </div>
            </div>
</section>
        <div class="flex items-center justify-center">
        <div class="w-full max-w-md">
          <form class="bg-white px-12 pt-6 pb-8 mb-4">
            <!-- @csrf -->
            <div class="mb-4">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for="username"
              >
                Your Name
              </label>
              <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="email"
                v-model="form.email"
                type="email"
                required
                autofocus
                placeholder="Enter Your Name"
              />
            </div>
            <div class="mb-6">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for="password"
              >
                Company Name
              </label>
              <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                v-model="form.password"
                type="password"
                placeholder="Enter Company Name"
                name="password"
                required
                autocomplete="current-password"
              />
            </div>
            <div class="mb-6">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for="password"
              >
                Email Id
              </label>
              <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                v-model="form.password"
                type="password"
                placeholder="Enter Email Id"
                name="password"
                required
                autocomplete="current-password"
              />
            </div>
            <div class="mb-6">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for="password"
              >
                Contact Number 
              </label>
              <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                v-model="form.password"
                type="password"
                placeholder="Add Contact Number"
                name="password"
                required
                autocomplete="current-password"
              />
            </div>
            <div class="mb-6">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for="password"
              >
                What is the asset you are seeking funding for?
              </label>
              <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                v-model="form.password"
                type="password"
                placeholder="What is the asset you are seeking funding for?"
                name="password"
                required
                autocomplete="current-password"
              />
            </div>
            <div class="mb-6">
              <label
                class="block text-gray-700 text-sm font-normal mb-2"
                for="password"
              >
                About the Company (Deck/PPT/anything else)
                <label class="w-32 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-red-300 cursor-pointer">
        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="mt-2 text-base leading-normal">Addfile</span>
        <input type='file' class="hidden" />
    </label>
              </label>
            </div>
            <div class="flex items-center justify-between">
              <button class="px-4 py-2 rounded text-white inline-block shadow-lg bg-red-500 hover:bg-red-600 focus:bg-blue-700" type="submit">Submit</button>
            </div>
          </form>
          <p class="text-center text-gray-500 text-xs">
            &copy;2020 Gau Corp. All rights reserved.
          </p>
        </div>
      </div>
@include('footer')