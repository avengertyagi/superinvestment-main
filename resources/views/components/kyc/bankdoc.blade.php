<div class="bg-gray-50 relative rounded-md shadow-md text-gray-900 z-20">
    <main class="text-center py-4">
        <!-- Validation Errors -->
        <x-validation-error class="mb-4" :errors="$errors" />

        <h2 class="mx-auto text-center text-xl text-black font-semibold">Bank Accounts Details</h2>
        <p class="xxs pt-2">Please upload a photo of a cancelled cheque of<br>your <strong>Bank
                Passbook</strong> with account details <br> clearly visible</p>
        @if (session('status'))
            <div class="mb-4 font-medium text-center text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form id="bank_doc_form" method="POST" action="{{ route('kyc.bankDocs') }}" x-data="bankDocForm()">
            @csrf
            <div class="w-80 p-0 mx-auto" id="bankdoc">
                <div class="">
                    <label for="bank_doc"><img class="cursor-pointer mx-auto h-28 w-28"
                            x-bind:src="bank_doc"></label>
                    <input id="bank_doc"
                        class="w-1/5 h-full p-4 my-4 bg-gray-200 border-gray-50 rounded text-center"
                        @change="encodeImageFileAsURL(this,'bank_doc')" type="file" value="" hidden />
                    <p class="text-center pt-4 text-black font-semibold xxs">Upload here</p>
                </div>
            </div>
            <div class="w-80 pt-4 mx-auto grid grid-flow-row">
                <button x-bind:disabled="loading" x-html="loading ? svg +' Saving' : 'Save'"
                    class="bg-orangemix font-semibold text-white p-2 w-full rounded hover:bg-orangemix focus:outline-none focus:ring shadow-md hover:shadow-sm transition-all duration-300">
                    Next
                </button>
                <div class="relative w-full mx-auto py-6">
                    <span class="w-full rounded-lg absolute left-0 right-0 h-1 bg-gray-400"></span>
                    <span
                        class="bg-gray-50 text-gray-400 top-3 left-28 w-20 text-base font-medium mx-auto absolute">Or</span>
                </div>
            </div>
        </form>

        <a href="{{ route('kyc.bankInfo') }}"
            class="w-full text-center font-medium text-orangemix text-lg py-8">Enter Bank Details</a>
        <script>
            function bankDocForm() {
                return {
                    bank_doc: "{{ Storage::exists($user->kycData->bank_doc_path) ? Storage::url($user->kycData->bank_doc_path) : asset('/Image/kyc/uploadpic.png') }}",
                    type: '',
                    svg: '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>',

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
                            document.getElementById('bank_doc_form').__x.$data[document.getElementById('bank_doc_form')
                                .__x.$data
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
                            document.getElementById("bank_doc_form").__x.$data.loading = false;
                            if(data.data == 'success')
                            location.href = '{{route('profile')}}'
                            else
                            console.log(data.message);


                        }).catch(function(error) {
                            console.log(error);
                            document.getElementById("bank_doc_form   ").__x.$data.loading = false;

                        });



                    }
                };

            }
        </script>
    </main>
</div>
