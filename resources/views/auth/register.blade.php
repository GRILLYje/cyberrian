<x-guest-layout>

    <!-- Logo and Title -->
    <div class="text-center mb-8">
        <img src="{{ asset('images/name.png') }}" alt="Cyber Rian Name" class="w-40 h-auto mx-auto">
        <h2 class="text-3xl font-bold text-white mt-4">Register</h2>
    </div>


    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <x-input-label for="name" :value="__('Name')" class="text-gray-300" />
            <x-text-input id="name" class="block mt-1 w-full bg-gray-700 border-gray-600 text-white rounded-lg focus:border-blue-500 focus:ring-blue-500" type="text" name="name" :value="old('name')" placeholder="Name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" class="text-gray-300" />
            <x-text-input id="email" class="block mt-1 w-full bg-gray-700 border-gray-600 text-white rounded-lg focus:border-blue-500 focus:ring-blue-500" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" class="text-gray-300" />

            <x-text-input id="password" class="block mt-1 w-full bg-gray-700 border-gray-600 text-white rounded-lg focus:border-blue-500 focus:ring-blue-500"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password (keeping for security, not explicitly shown in image) -->
        <div class="mb-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-300" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full bg-gray-700 border-gray-600 text-white rounded-lg focus:border-blue-500 focus:ring-blue-500"
                            type="password"
                            placeholder="Confirm Password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Organization Member ID (Optional) -->
        <div class="mb-4">
            <x-input-label for="organization_id" :value="__('Organization Member ID (Optional)')" class="text-gray-300" />
            <x-text-input id="organization_id" class="block mt-1 w-full bg-gray-700 border-gray-600 text-white rounded-lg focus:border-blue-500 focus:ring-blue-500" type="text" name="organization_id" :value="old('organization_id')" placeholder="Organization Member ID (Optional)" autocomplete="organization_id" />
            <x-input-error :messages="$errors->get('organization_id')" class="mt-2" />
        </div>

        <!-- Terms and Conditions Checkbox -->
        <div class="mb-6 flex items-center">
            <input id="terms" type="checkbox" name="terms" required class="rounded bg-gray-700 border-gray-600 text-blue-600 shadow-sm focus:ring-blue-500">
            <label for="terms" class="ms-2 text-sm text-gray-300">I accept the terms and conditions and the privacy policy</label>
        </div>

        <!-- Register Button -->
        <div class="mb-4">
            <x-primary-button class="w-full justify-center bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:ring-blue-500">
                {{ __('Register') }}
            </x-primary-button>
        </div>

        <!-- Or divider -->
        <div class="text-center text-gray-400 my-6">Or</div>

        <!-- Social Login Buttons -->
        <div class="flex justify-center space-x-4 mb-6">
            <a href="#" class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-gray-700 hover:bg-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                <img src="{{ asset('images/google.png') }}" alt="Google" class="w-6 h-6">
            </a>
            <a href="#" class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-gray-700 hover:bg-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                <img src="{{ asset('images/github.png') }}" alt="GitHub" class="w-6 h-6">
            </a>
            <a href="#" class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-gray-700 hover:bg-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="w-6 h-6">
            </a>
        </div>

        <!-- Sign In Link -->
        <div class="text-center">
            <a class="underline text-sm text-blue-400 hover:text-blue-300 hover:underline" href="{{ route('login') }}" style="color: #76F1FF;">
                {{ __('Already have an account?') }}
            </a>
        </div>
    </form>
</x-guest-layout>

<style>
    *, :before, :after {
    border-style: none;
    }
</style>