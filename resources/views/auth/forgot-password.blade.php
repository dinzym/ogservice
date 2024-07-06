<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
            <a href="{{ route('login') }}">
                <img src="https://o.remove.bg/downloads/3d896ba7-ee85-4f82-bf42-5515aa937a89/desktop-wallpaper-game-boy-advance-rig-model-remake-rigs-mine-imator-forums-removebg-preview.png"  alt="Image" class="img-fluid"
                     style="width: 200px; height: 125px;">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
