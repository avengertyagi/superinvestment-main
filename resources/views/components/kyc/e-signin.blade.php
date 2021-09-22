<div class="fixed inset-0 w-full h-full z-20 duration-300 overflow-y-auto flex items-center">
    <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
        <div class="bg-gray-50 relative rounded-md shadow-md text-gray-900 z-20">
            <main class="text-center py-4">
                <!-- Validation Errors -->
                <x-validation-error class="mb-4" :errors="$errors" />

                <h2 class="mx-auto text-center text-lg font-extrabold">Upload Documents</h2>
                @if (session('status'))
                    <div class="mb-4 font-medium text-center text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form id="otp_form" method="GET" action="" x-data="form()">
                    <div class="w-80 p-0 mx-auto grid md:grid-flow-col grid-flow-row" id="otp">
                        <div class="pt-8">
                            <label for="pan"><img class="cursor-pointer mx-auto h-20 w-20"
                                    x-bind:src="pan_front"></label>
                            <input id="pan" class="w-1/5 h-full p-4 my-4 bg-gray-200 border-gray-50 rounded text-center"
                                @change="encodeImageFileAsURL(this,'pan_front')" type="file" value="" hidden />
                            <p class="text-center pt-4 text-gray-300 font-semibold text-xs">Upload PAN FRONT Side</p>
                        </div>
                        <div class="pt-8">
                            <label for="adharfront"><img class="cursor-pointer mx-auto h-20 w-20"
                                    x-bind:src="adhar_front"></label>
                            <input id="adharfront" @change="encodeImageFileAsURL(this,'adhar_front')"
                                class="w-1/5 h-full p-4 my-4 bg-gray-200 border-gray-50 rounded text-center" type="file"
                                value="pan_front" hidden />
                            <p class="text-center pt-4 text-gray-300 font-semibold text-xs">Upload Aadhar FRONT Side</p>
                        </div>
                        <div class="pt-8">
                            <label for="adharback"><img class="cursor-pointer mx-auto h-20 w-20"
                                    x-bind:src="adhar_back"></label>
                            <input id="adharback" @change="encodeImageFileAsURL(this,'adhar_back')"
                                class="w-1/5 h-full p-4 my-4 bg-gray-200 border-gray-50 rounded text-center" type="file"
                                value="pan_front" hidden />
                            <p class="text-center pt-4 text-gray-300 font-semibold text-xs">Upload Aadhar Back Side</p>
                        </div>
                    </div>
                    <p class=" text-xs font-medium text-gray-300 py-8 md:w-3/4 mx-auto">Please Upload non-password
                        protected file only Max file size 3MB</p>
                    <button type="button" id="confirm-e-sign-button"
                        class="bg-red-500 mb-8 font-semibold text-white p-2 w-72 rounded hover:bg-red-600 focus:outline-none focus:ring shadow-md hover:shadow-sm transition-all duration-300">
                        Confirm to E-sign
                    </button>
                </form>
                <script>
                    function form() {
                        return {
                            pan_front: "{{ Storage::exists($user->kycData->pan_front_path) ? Storage::url($user->kycData->pan_front_path) : asset('/Image/kyc/uploadpic.png') }}",
                            adhar_front: "{{ Storage::exists($user->kycData->adhar_front_path) ? Storage::url($user->kycData->adhar_front_path) : asset('/Image/kyc/uploadpic.png') }}",
                            adhar_back: "{{ Storage::exists($user->kycData->adhar_back_path) ? Storage::url($user->kycData->adhar_back_path) : asset('/Image/kyc/uploadpic.png') }}",
                            type: '',
                            loading: false,
                            encodeImageFileAsURL: function(files, type) {
                                this.type = type;
                                var file = Object.values(event.target.files)[0];
                                const validImageTypes = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf'];
                                if (!validImageTypes.includes(file['type'])) {
                                    dispatchEvent(new CustomEvent('notice', {
                                        detail: {
                                            type: 'error',
                                            text: 'Invalid file type! please image or pdf'
                                        }
                                    }));
                                    alert('Invalid file type! please image or pdf');
                                    return;
                                }
                                var reader = new FileReader();
                                reader.onloadend = function() {
                                    let base_snc = reader.result;
                                    document.getElementById('otp_form').__x.$data[document.getElementById('otp_form').__x.$data
                                        .type] = reader.result;
                                }
                                reader.readAsDataURL(file);
                                this.saveImage(file, type);
                                3

                            },
                            saveImage(file, type) {
                                this.laoding = true;
                                let formData = new FormData();
                                formData.append('file', file);
                                formData.append('user_id', @if ($user){{ $user->id }} @else 0 @endif);
                                formData.append('type', type);
                                let url = '{{ route('kyc.uploadFile') }}';
                                let response = fetch(url, {
                                    method: 'POST',
                                    body: formData,
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    },
                                }).then((res) => {
                                    if (!res.ok) {
                                        throw new Error("There was an error processing the request");
                                    }
                                    return res.json();
                                }).then((data) => {
                                    document.getElementById("otp_form").__x.$data.loading = false;
                                }).catch(function(error) {
                                    console.log(error);
                                    document.getElementById("otp_form   ").__x.$data.loading = false;
                                });



                            }
                        };

                    };
                </script>
                <script type='text/javascript' src='https://app.digio.in/sdk/v9/digio.js'></script>

                <script>
                    var options = {
                        environment: 'sandbox',
                        callback: function(digio_res) {
                            if (digio_res.hasOwnProperty('error_code')) {
                                console.log('error occurred in process');
                                return;
                            }

                            updateKyc(digio_res);
                        },
                        logo: '{{ asset('/Image/superinvestlogosvg.svg') }}',
                        is_iframe: true,

                        theme: {
                            primaryColor: '#AB3498',
                            secondaryColor: '#000000'
                        }
                    }
                    document.addEventListener("DOMContentLoaded", function(event) {
                        var id = '{{ $id }}';
                        var signer = '{{ $user->email }}';
                        if (id != '') {
                            var digio = new Digio(options);
                            digio.init();
                            // console.log('init');
                            digio.submit(id, signer);
                        }

                    });

                    function updateKyc(digio_res) {
                        let formData = new FormData();
                        formData.append('digio_doc_id', digio_res.digio_doc_id);
                        formData.append('user_id', @if ($user){{ $user->id }} @else 0 @endif);
                        formData.append('txn_id', digio_res.txn_id);
                        let url = '{{ route('kyc.confirmESign') }}';
                        let fetch_updateKyc = fetch(url, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                        }).then((res) => {
                            if (!res.ok) {
                                throw new Error("There was an error processing the request");
                            }
                            return res.json();
                        }).then((data) => {
                            if(data.data == 'success')
                            location.href = '{{route('kyc.bankInfo')}}';
                            else
                            location.reload();
                        }).catch(function(error) {
                            console.log(error);
                        });


                    }
                </script>

            </main>
        </div>
    </div>
</div>
