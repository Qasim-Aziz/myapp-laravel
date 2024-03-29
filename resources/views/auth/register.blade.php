<x-guest-layout>
    <x-slot name="navigation">
        <x-navigation />
    </x-slot>

    <x-slot name="content">
        <x-authentication-card>
            <x-validation-errors class="mb-4" />
    
            <form method="POST" action="{{ route('register') }}">
                @csrf
    
                <div>
                    <x-label value="{{ __('Name') }}" />
                    <x-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
    
                <div class="mt-4">
                    <x-label value="{{ __('Email') }}" />
                    <x-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
    
                <div class="mt-4">
                    <x-label value="{{ __('Password') }}" />
                    <x-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
    
                <div class="mt-4">
                    <x-label value="{{ __('Confirm Password') }}" />
                    <x-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
    
                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>
    </x-slot>
</x-guest-layout>
