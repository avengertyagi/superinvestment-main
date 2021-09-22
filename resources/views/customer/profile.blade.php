<x-app-layout>

  <x-slot name="header">
    <div class="md:container md:mx-auto">
      <div class="md:-mx-8">
        <div class="bg-no-repeat bg-white" style="background: url('{{ asset('/Image/banner/bannercorner1.svg') }}') left bottom no-repeat , url('{{ asset('/Image/banner/bannercorner2.svg') }}') right top no-repeat; background-size:13rem;">
          <h1 class="font-bold text-center text-gray-900 md:text-7xl text-4xl py-20">My Profile</h1>
        </div>
      </div>
    </div>
  </x-slot>

  <div class="container mx-auto md:flex my-8" id="profile" x-data="profile()" x-cloak>

      <div class="md:w-2/5">
        <div class="md:w-1/2 md:px-0 px-4 mx-auto">
            <div class="relative">


          <img class="bg-gray-200 w-32 h-32 rounded-full mx-auto" x-bind:src="image"
           src="{{ Storage::disk('public')->exists($user->image_path) ? Storage::url($user->image_path) : asset('/Image/images.jpg') }}" alt="{{$user->name??'User Image'}}">
           <label for="user-photo"
                        class="absolute inset-0 bg-gray-200 w-32 h-32 rounded-full mx-auto bg-black bg-opacity-75 flex items-center justify-center text-sm font-medium text-white opacity-0 hover:opacity-100 focus-within:opacity-100">
                        <span  x-bind:disabled="loading" x-html="loading ? svg +' Saving' : 'Change'">Change</span>
                        <span class="sr-only">Profile Image</span>
                        <input type="file" id="user-banner-photo" name="user-photo" accept="image/*"
                            @change="saveImage(this,'image')"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                    </label>
                </div>

          <div class="text-center">
            <button
            @click="document.getElementById('user-banner-photo').click()"
            class="shadow-lg w-4/5 mx-auto bg-orangemix my-6 py-1 m_5 bg-opacity: 20 text-white text-base font-semibold rounded p-2">Upload / Changes</button>
          </div>
          <div class="my-4">
            <ul aria-label="Tabs">
              <li :class="openTab == 1 ? 'bg-orangemix p-1.5 my-2 w-full rounded-sm text-white font-semibold':'p-1.5 my-2 w-full rounded-sm text-gray-500 font-semibold'" aria-current="page">
                <a @click.prevent="openTab = 1" href="" :class="openTab == 1 ? 'relative block':'relative block'">
                  Profile
                </a>
              </li>
              <li :class="openTab == 2 ? 'bg-orangemix p-1.5 my-2 w-full rounded-sm text-white font-semibold':'p-1.5 my-2 w-full rounded-sm text-gray-500 font-semibold'" aria-current="false">
                <a @click.prevent="openTab = 2" href="" :class="openTab == 2 ? 'relative block':'relative block'">
                    KYC
                    @if ($user->kycData && $user->kycData->kyc_at)
                    <span class="bg-green-500 rounded-md p-0.5 text-right text-white content-end font-light text-xs absolute right-0 mr-2">Completed</span>

                    @else
                    <span class="bg-yellow-500 rounded-md p-0.5 text-right text-white content-end font-light text-xs absolute right-0 mr-2">Pending</span>

                    @endif
                </a>
              </li>
              <li :class="openTab == 3 ? 'bg-orangemix p-1.5 my-2 w-full rounded-sm text-white font-semibold':'p-1.5 my-2 w-full rounded-sm text-gray-500 font-semibold'" aria-current="false">
                <a @click.prevent="openTab = 3" href="" :class="openTab == 3 ? 'relative block':'relative block'">
                  Bank
                </a>
              </li>
              <li :class="openTab == 4 ? 'bg-orangemix p-1.5 my-2 w-full rounded-sm text-white font-semibold':'p-1.5 my-2 w-full rounded-sm text-gray-500 font-semibold'" aria-current="false">
                <a @click.prevent="openTab = 4" href="" :class="openTab == 4 ? 'relative block':'relative block'">
                  Contact Us
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="md:w-3/5">
        <x-profile.main :user="$user"></x-profile.main>

        <x-profile.kyc :user="$user"></x-profile.kyc>

        <x-profile.bank :user="$user"></x-profile.bank>
      </div>
  </div>
  <script>
    function profile() {
        return {
            loading: false,
            openTab: 1,
            activeClasses: 'bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5',
            inactiveClasses: 'bg-transparent absolute inset-x-0 bottom-0 h-0.5',
            type: '',
            image: '{{   Storage::disk('public')->exists($user->image_path) ? Storage::url($user->image_path) : asset('/Image/images.jpg') }}',

            svg: '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>',
            saveImage(files, type) {
                // @click.away;
                this.type = type;
                this.laoding = true;
                file = Object.values(event.target.files);
                const validImageTypes = ['image/gif', 'image/jpeg', 'image/jpg', 'image/png'];
                if (!validImageTypes.includes(file[0]['type'])) {
                    dispatchEvent(new CustomEvent('notice', {
                        detail: {
                            type: 'error',
                            text: 'Invalid Image!'
                        }
                    }))
                    return;
                }
                let formData = new FormData();
                formData.append('file', file[0]);
                formData.append('user_id',{{ $user->id }});
                formData.append('type', type);
                let url = '{{ route('profile.uploadImage') }}';
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
                    document.getElementById("profile").__x.$data.loading = false;
                    document.getElementById("profile").__x.$data[data.type] ='/storage/'+ data.path;

                    dispatchEvent(new CustomEvent('notice', {
                        detail: {
                            type: 'success',
                            text: 'Success!'
                        }
                    }));

                }).catch(function(error) {
                    console.log(error);
                    document.getElementById("profile").__x.$data.loading = false;
                    dispatchEvent(new CustomEvent('notice', {
                        detail: {
                            type: 'error',
                            text: 'Error!'
                        }
                    }));
                });



            }

        };
    }
</script>
  <x-slot name="footer">
    <x-footer></x-footer>
  </x-slot>
</x-app-layout>
