@props(['deal'])

<div class="w-max" x-show="openTab == 2">


    <form class="profile"
          name="invest-profile"
          id="invest_profile"
          x-data="data()"
          x-init="initQuill()"
          x-cloak>

    @csrf

    <!-- Invest section -->

        <div class="py-6 px-4 sm:p-6 lg:pb-8">
            <div>
                <h2 class="text-lg leading-6 font-medium text-gray-900">Investment Profile</h2>
                <p class="mt-1 text-sm text-gray-500">
                    Please enter investment Profile.
                </p>
            </div>


            <div class="bg-white max-w-2xl mt-2" >
                <div id="toolbar-toolbar" class="toolbar">
                  <span class="ql-formats">
                  <select class="ql-font">
                    <option selected=""></option>
                    <option value="serif"></option>
                    <option value="monospace"></option>
                  </select>
                  <select class="ql-size">
                    <option value="small"></option>
                    <option selected=""></option>
                    <option value="large"></option>
                    <option value="huge"></option>
                  </select>
                </span>
                    <span class="ql-formats">
                  <button class="ql-bold"></button>
                  <button class="ql-italic"></button>
                  <button class="ql-underline"></button>
                  <button class="ql-strike"></button>
                </span>
                    <span class="ql-formats">
                  <select class="ql-color"></select>
                  <select class="ql-background"></select>
                </span>
                    <span class="ql-formats">
                  <button class="ql-list" value="ordered"></button>
                  <button class="ql-list" value="bullet"></button>
                  <select class="ql-align">
                    <option selected=""></option>
                    <option value="center"></option>
                    <option value="right"></option>
                    <option value="justify"></option>
                  </select>
                </span>
                    <span class="ql-formats">
                  <button class="ql-link"></button>
                  <button class="ql-image"></button>
                </span>
                </div>
                <div
                    class="h-11"
                    x-ref="quillEditor"

                >
                    {!! $deal->dealDetail->profile ?? '' !!}
                </div>

            </div>

            <input x-ref="ed1value" type="hidden" name="profile">
        </div>

        <div class="pt-6 divide-y divide-gray-200">

            <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">

                <button x-on:click="submit()"
                        type="button"
                        class="ml-5 bg-blue-500 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-light-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500"
                        x-bind:disabled="loading"
                        x-html="loading ? svg +' Saving' : 'Save'"
                >


                </button>
            </div>
        </div>

    </form>



    <script>

        function data(){
            return {
                loading: false,
                svg: '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>',
                initQuill() {
                    quillP = new Quill(this.$refs.quillEditor, {
                        theme: 'snow',
                        modules: {
                            toolbar: { container: '#toolbar-toolbar' }
                        },
                    });
                },
                submit() {

                    this.loading = true;

                    axios.post('{{ route('admin.dealDetails.update') }}', {
                        //_token: '{{ csrf_token() }}',
                        profile: quillP.root.innerHTML,
                        deal_id: @if($deal->exists) {{ $deal->id }} @endif
                    })
                        .then(function (response) {
                            document.getElementById("invest_profile").__x.$data.loading = false;

                            dispatchEvent(new CustomEvent('notice', {detail: {type: 'success', text: 'Success!'}}))
                        })
                        .catch(function (error) {
                            console.log(error);
                            document.getElementById("invest_profile").__x.$data.loading = false;
                            dispatchEvent(new CustomEvent('notice', {detail: {type: 'error', text: 'Error!'}}))
                        });

                }

            }
        }
    </script>
</div>
