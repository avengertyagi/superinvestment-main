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
    <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
        <div
            class="relative bg-gray-50 rounded-md text-gray-900 z-20"
            x-show="showLogin"
            x-transition:enter="transition transform duration-300"
            x-transition:enter-start="scale-0"
            x-transition:enter-end="scale-100"
            x-transition:leave="transition transform duration-300"
            x-transition:leave-start="scale-100"
            x-transition:leave-end="scale-0"
        >
            <main class=" px-5 text-center py-16">
                <!-- Validation Errors -->
                <x-validation-error class="mb-4" :errors="$errors" />
                
                <h2 class="mx-auto text-center text-lg font-extrabold">Enter OTP to verify</h2>
                @if (session('status'))
                    <div class="mb-4 font-medium text-center text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <p class="text-xs my-3">Enter 4 digit OTP sent to you at mail</p>
                <form id="otp_form" method="POST" action="{{ route('otp.verify') }}"
                      x-data="form()"
                      @submit="submit"
                >
                @csrf
                    <div class="w-72 p-0 mx-auto" id="otp">
                        <input id="pin1" class="w-1/5 h-full p-4 my-4 bg-gray-200 border-gray-50 rounded text-center" type="text" name="" value="" maxlength="1" />
                        <input id="pin2" class="w-1/5 h-full p-4 my-4 bg-gray-200 border-gray-50 rounded text-center" type="text" name="" value="" maxlength="1"/>
                        <input id="pin3" class="w-1/5 h-full p-4 my-4 bg-gray-200 border-gray-50 rounded text-center" type="text" name="" value="" maxlength="1"/>
                        <input id="pin4" class="w-1/5 h-full p-4 my-4 bg-gray-200 border-gray-50 rounded text-center" @keyup="submitPin()" type="text" name="" value="" maxlength="1"/>
                    </div>
                    <input id="code" type="hidden" name="code">
                    <input id="user" type="hidden" name="user" value="{{$token}}">
                    <button
                        class="bg-red-500 font-semibold text-white p-2 w-72 rounded hover:bg-red-600 focus:outline-none focus:ring shadow-md hover:shadow-sm transition-all duration-300"
                        @click="showLogin = false"
                    >
                        Verify
                    </button>
                </form>
            </main>
        </div>
    </div>
</div>
<script>
    const otpfields= document.querySelectorAll('#otp input');
    otpfields.forEach((input, index) => {
        input.addEventListener('keyup' ,function(){
            if(index<3){
                otpfields[index+1].focus();
            }
        });
    })

    function submitPin(e){
        if( document.getElementById('pin1').value.length === 1 &&
            document.getElementById('pin2').value.length === 1 &&
            document.getElementById('pin3').value.length === 1 &&
            document.getElementById('pin4').value.length === 1)
        {
            // submit the pin
            document.getElementById("code").value = document.getElementById('pin1').value +
                document.getElementById('pin2').value +
                document.getElementById('pin3').value +
                document.getElementById('pin4').value;
            document.getElementById("otp_form").submit();
            return;
        }
    }

    window.form = () => {
        return {}
    }
</script>
