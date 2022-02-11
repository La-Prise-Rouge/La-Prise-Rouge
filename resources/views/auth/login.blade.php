<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
class="
    flex
    w-full h-full">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Connexion</title>

        <link href="{{ asset('css/app.css') }}" rel='stylesheet'>
    </head>

    <body class="
        antialiased
        flex
        justify-center items-center
        w-full h-full">


        <div>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="
                p-6
                rounded-xl
                shadow-lg shadow-red-400">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Adresse e-mail') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Mot de passe') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié?') }}
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Connexion') }}
                    </x-jet-button>
                </div>
            </form>
        </div>

    </body>
</html>
