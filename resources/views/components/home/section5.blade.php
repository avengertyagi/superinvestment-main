<div class="md:container lg:container sm:container xl:container mx-auto">
    <div class="md:-mx-8 bg-superinvestgray">
        <div class="py-8 px-4 md:mx-28 md:flex">
            <div class="md:w-3/5">
                <div class="md:relative inset-y-12 md:px-0 px-4">
                    <h2 class="font-normal h-full md:text-4xl my-auto text-gray-900 text-xl xl:text-5xl">Ready to get High returns?</h2>
                </div>
            </div>
            <div class="md:w-2/5 md:my-8 mt-4">
                <form method="POST" action="{{ route('login') }}"
                    x-data="form()"
                    @submit="submit">
                    @csrf
                    <div class="w-full content">
                        <input type="text" name="email" value="" placeholder="Enter your email /mobile no"
                            class="w-full appearance-none rounded bg-white box-sb gp-3 p-4 text-grey-dark focus:outline-none border-0" required>
                    </div>
                    <div class="w-full items-right">
                        <button
                            class="w-full my-6 m_5 bg-opacity:20 bg-orangemix text-white text-base font-semibold rounded-md shadow-md p-4">Become an investor
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>