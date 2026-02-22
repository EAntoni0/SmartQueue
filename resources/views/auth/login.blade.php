<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo"></x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-6 relative">
                <x-label for="email" value="{{ __('Correo electrónico') }}" class="font-bold text-gray-700 mb-2 block" />
                <div class="relative">
                    <x-input id="email" 
                             class="block mt-1 w-full pl-4 pr-10 py-3 rounded-full border-2 border-[#8C7EC7] focus:border-[#635294] focus:ring focus:ring-[#635294]/30 placeholder-gray-400" 
                             type="email" name="email" :value="old('email')" required autofocus autocomplete="username" 
                             placeholder="Tu correo electrónico" />
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#8C7EC7]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="mb-6 relative">
                <x-label for="password" value="{{ __('Contraseña') }}" class="font-bold text-gray-700 mb-2 block" />
                <div class="relative">
                    <x-input id="password" 
                             class="block mt-1 w-full pl-4 pr-10 py-3 rounded-full border-2 border-[#8C7EC7] focus:border-[#635294] focus:ring focus:ring-[#635294]/30 placeholder-gray-400" 
                             type="password" name="password" required autocomplete="current-password"
                             placeholder="Tu contraseña" />
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#8C7EC7]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mb-6">
                @if (Route::has('password.request'))
                    <a class="text-sm text-[#635294] hover:text-[#8C7EC7] hover:underline" href="{{ route('password.request') }}">
                        {{ __('Recuperar contraseña') }}
                    </a>
                @endif
            </div>

            <div class="mb-4">
                <x-button class="w-full justify-center py-3 bg-gradient-to-r from-[#8C7EC7] to-[#635294] hover:from-[#7A6DB6] hover:to-[#524383] rounded-full text-white font-bold text-lg transition-all duration-300 transform hover:scale-[1.02]">
                    {{ __('Iniciar Sesión') }}
                </x-button>
            </div>

            <div class="text-center text-gray-600">
                ¿No tienes cuenta? 
                <a href="{{ route('register') }}" class="text-[#635294] font-bold hover:underline">
                    Registrarse
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>