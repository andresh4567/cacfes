<head>
   <title>{{ config('app.name') }} - Olvide mi Contraseña</title>
</head>

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <a href="{{route('welcome')}}">
                <img src="{{ asset('img/icono.png') }}" alt="Cacfe's Logo" class="w-24 rounded-full border border-blue-200">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-900 text-center pt-2">
            {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace para restablecer la contraseña que le permitirá elegir una nueva') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Correo') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Enlace para restablecer contraseña') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
