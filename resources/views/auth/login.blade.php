<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Logo and Title -->
    <div class="text-center mb-8">
        <img src="{{ asset('images/PIC.png') }}" alt="Cyber Rian Logo" class="w-20 h-20 mx-auto mb-4">
        <h1 class="text-2xl font-bold text-white">CYBER RIAN</h1>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Username')" class="text-gray-300" />
            <x-text-input id="email" class="block mt-1 w-full bg-gray-700 border-gray-600 text-white rounded-lg focus:border-blue-500 focus:ring-blue-500" type="email" name="email" :value="old('email')" placeholder="Username" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" class="text-gray-300" />
            <x-text-input id="password" class="block mt-1 w-full bg-gray-700 border-gray-600 text-white rounded-lg focus:border-blue-500 focus:ring-blue-500"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me and Forgot Password -->
        <div class="flex items-center justify-between mb-6">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded bg-gray-700 border-gray-600 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                <span class="ms-2 text-sm text-gray-300">{{ __('Remember Me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-blue-400 hover:text-blue-300 hover:underline" href="{{ route('password.request') }}">
                    {{ __('Forgot Password?') }}
                </a>
            @endif
        </div>

        <!-- Sign In Button -->
        <div class="mb-4">
            <x-primary-button class="w-full justify-center bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:ring-blue-500">
                {{ __('Sign in') }}
            </x-primary-button>
        </div>

        <!-- Sign Up Link -->
        <div class="text-center">
            <span class="text-gray-400 text-sm">Don't have an account? </span>
            <a href="{{ route('register') }}" class="text-blue-400 hover:text-blue-300 text-sm hover:underline">Sign up</a>
        </div>
    </form>
</x-guest-layout>
