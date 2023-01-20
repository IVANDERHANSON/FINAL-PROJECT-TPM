<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <h2 style="font-size: 30px; text-align: center;">Group Information</h2>

        <!-- Group Name -->
        <div>
            <x-input-label for="name" :value="__('Group Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        
        <!-- Binusian Validation -->
        <div class="mt-4">
            <input type="radio" name="binusian_validation"
            <?php if (isset($binusian_validation) && $binusian_validation=="Binusian") echo "checked";?>
            value="Binusian">Binusian
            <input type="radio" name="binusian_validation"
            <?php if (isset($binusian_validation) && $binusian_validation=="Non-Binusian") echo "checked";?>
            value="Non-Binusian">Non-Binusian
        </div>

        <br>
        <h2 style="font-size: 30px; text-align: center;">Leader Information</h2>

        <!-- Leader Name -->
        <div>
            <x-input-label for="leader_name" :value="__('Full Name')" />
            <x-text-input id="leader_name" class="block mt-1 w-full" type="text" name="leader_name" :value="old('leader_name')" required autofocus />
            <x-input-error :messages="$errors->get('leader_name')" class="mt-2" />
        </div>
        
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Whatsapp Number -->
        <div>
            <x-input-label for="whatsapp" :value="__('Whatsapp Number')" />
            <x-text-input id="whatsapp" class="block mt-1 w-full" type="text" name="whatsapp" :value="old('whatsapp')" required autofocus />
            <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
        </div>

        <!-- LINE ID -->
        <div>
            <x-input-label for="line" :value="__('LINE ID')" />
            <x-text-input id="line" class="block mt-1 w-full" type="text" name="line" :value="old('line')" required autofocus />
            <x-input-error :messages="$errors->get('line')" class="mt-2" />
        </div>

        <!-- Github/Gitlab ID -->
        <div>
            <x-input-label for="github" :value="__('Github/Gitlab ID')" />
            <x-text-input id="github" class="block mt-1 w-full" type="text" name="github" :value="old('github')" required autofocus />
            <x-input-error :messages="$errors->get('github')" class="mt-2" />
        </div>

        <!-- Birth Place -->
        <div>
            <x-input-label for="birth_place" :value="__('Birth Place')" />
            <x-text-input id="birth_place" class="block mt-1 w-full" type="text" name="birth_place" :value="old('birth_place')" required autofocus />
            <x-input-error :messages="$errors->get('birth_place')" class="mt-2" />
        </div>
        
        <!-- Birth Date -->
        <div>
            <x-input-label for="birth_date" :value="__('Birth Date')" />
            <x-text-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date')" required autofocus />
            <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
        </div>
        
        <!-- Upload CV -->
        <div>
            <x-input-label for="cv" :value="__('Upload CV')" />
            <x-text-input id="cv" class="block mt-1 w-full" type="file" name="cv" :value="old('cv')" required autofocus />
            <x-input-error :messages="$errors->get('cv')" class="mt-2" />
        </div>

        <!-- Upload Flazz Card -->
        <div>
            <x-input-label for="flazz_card" :value="__('Upload Flazz Card')" />
            <x-text-input id="flazz_card" class="block mt-1 w-full" type="file" name="flazz_card" :value="old('flazz_card')" required autofocus />
            <x-input-error :messages="$errors->get('flazz_card')" class="mt-2" />
        </div>

        <!-- Upload ID Card -->
        <div>
            <x-input-label for="id_card" :value="__('Upload ID Card')" />
            <x-text-input id="id_card" class="block mt-1 w-full" type="file" name="id_card" :value="old('id_card')" required autofocus />
            <x-input-error :messages="$errors->get('id_card')" class="mt-2" />
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
