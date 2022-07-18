{{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
       <div class="containerRegister">
        <div class="formEnregistemrnt">
         <h2 class="formulaireinscription">Formulaire d'inscription</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                {{-- <x-label for="name" :value="__('Name')" /> --}}

                <x-input id="name" class="block mt-1 w-full inputEnregistrement" type="text" name="name" :value="old('nom')" required autofocus placeholder="Entrez votre nom" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                {{-- <x-label for="email" :value="__('Email')" /> --}}

                <x-input id="email" class="block mt-1 w-full inputEnregistrement" type="email" name="email" :value="old('email')" required placeholder="Entrez votre email" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                {{-- <x-label for="password" :value="__('Password')" /> --}}

                <x-input id="password" class="block mt-1 w-full inputEnregistrement"
                                type="password"
                                name="password"
                                required autocomplete="new-password" placeholder="Entrez votre mot de passe"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                {{-- <x-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

                <x-input id="password_confirmation" class="block mt-1 w-full inputEnregistrement"
                                type="password"
                                name="password_confirmation" required placeholder="confirmer le mot de passe"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà enregistré?') }}
                </a>

                <x-button class="ml-4 boutonEnregistrement">
                  <div class="enregistrer">
                    {{ __('Enregistré') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
