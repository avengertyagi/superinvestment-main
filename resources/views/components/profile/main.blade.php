<div class="w-full" x-show="openTab == 1">
    <div class="md:w-3/5 px-4 w-full">
        @if ($errors->any())
            <div class="text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session::has('success'))
            <div class="text-green-600">
                {{ Session::get('success') }}
            </div>
        @endif
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            <x-input class="my-4 py-3 px-3 w-full" type="text" name="first_name"
                value="{{ old('first_name', $user->first_name) }}" placeholder="First Name" />
            <x-input class="my-4 py-3 px-3 w-full" type="text" name="last_name"
                value="{{ old('last_name', $user->last_name) }}" placeholder="Last Name" />
            <x-input class="my-4 py-3 px-3 w-full" type="email" name="email" readonly required
                value="{{ old('email', $user->email) }}" />
            <x-input class="my-4 py-3 px-3 w-full" type="tel" name="phone"
                value="{{ old('phone', $user->phone) }}" placeholder="Phone No." />
            <select
                class="my-4 bg-gray-200 input appearance-none rounded w-full px-3 py-3 focus focus:outline-none active:outline-none border-2 border-gray-200"
                name="occupation" id="occupation"  value="{{ old('occupation', $user->occupation) }}" required>
                <option value="">Occupation</option>
                <option value="1" @if ($user->occupation == 1) selected @endif>Salary</option>
                <option value="2" @if ($user->occupation == 2) selected @endif>Owner</option>
            </select>
            <x-input class="my-4 py-3 px-3 w-full" type="text" name="din_no" value="{{ $user->din_no }}"
                placeholder="Enter Director identification Number" />
            <x-button class="bg-orangemix text-white">Save</x-button>
        </form>
    </div>
</div>
