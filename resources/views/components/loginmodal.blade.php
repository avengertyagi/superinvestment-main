<div
    class="fixed inset-0 w-full h-full z-20 duration-300 overflow-y-auto flex items-center"
    x-show="showLogin"
    x-transition:enter="transition duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
>
    <div class="fixed inset-0 bg-gray-900 opacity-50"></div>
    <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
        <div
            class="relative bg-white rounded-md text-gray-900 z-20"
            x-show="showLogin"
            x-transition:enter="transition transform duration-300"
            x-transition:enter-start="scale-0"
            x-transition:enter-end="scale-100"
            x-transition:leave="transition transform duration-300"
            x-transition:leave-start="scale-100"
            x-transition:leave-end="scale-0"
        >
            <header class="flex items-center justify-end p-2">
                <button class="focus:outline-none p-2" @click="showLogin = false">
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path
                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
                        ></path>
                    </svg>
                </button>
            </header>
            <main class="p-2 text-center">
                <h2 class="mx-auto text-center text-lg font-extrabold">Let's get you started</h2>
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}"
                      x-data="form()"
                      @submit="submit"
                      >
                    @csrf
                    <input class="w-4/5 my-5 bg-gray-100 border-gray-50 rounded" type="text" name="email" value="" placeholder="Enter Your mobile or Email" required/>
                    <button
                        class="bg-red-500 font-semibold text-white p-2 w-72 rounded hover:bg-red-600 focus:outline-none focus:ring shadow-md hover:shadow-sm transition-all duration-300"
                        @click="showLogin = false"
                    >
                        Continue
                    </button>
                </form>
            </main>
            <footer class="flex justify-center p-2">
                <p class="text-xs text-center my-4">By Signing up , you agree to the Terms& Conditions and Privacy Policy</p>
            </footer>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/gh/mattkingshott/iodine@3/dist/iodine.min.js" defer></script>
<script>
    window.form = () => {
        return {
            email: {errorMessage:'', blurred:false},
            submit: function (event) {
                this.inputElements = [...this.$el.querySelectorAll("input[data-rules]")];
                this.inputElements.map((input) => {
                    if (Iodine.is(input.value, JSON.parse(input.dataset.rules)) !== true) {
                        const error = Iodine.is(input.value, JSON.parse(input.dataset.rules));
                        event.preventDefault();
                        input.classList.add("invalid");
                        this[input.name].errorMessage = Iodine.getErrorMessage(error);
                        console.log(Iodine.getErrorMessage(error));
                    }else{
                        input.classList.remove("invalid");
                        this[input.name].errorMessage = "";
                    }
                });
            }
        }
    }

</script>
