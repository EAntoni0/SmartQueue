<x-guest-layout>
    <style>
        .font-quicksand {
            font-family: 'Quicksand', sans-serif;
        }
    </style>

    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4 md:px-10 font-quicksand rounded-[38px] ">
        
        <div class="w-full max-w-7xl bg-gradient-to-br from-[#C3AEDB] via-[#8673A1] to-[#665C96] rounded-[38px] p-6 md:p-12 flex flex-col items-center justify-center relative shadow-2xl min-h-[550px]">
            
            <div class="z-30 bg-white rounded-full p-2 shadow-xl mb-[-40px] relative">
                <img src="{{ asset('img/logo vetermid1.png') }}" alt="Logo" class="w-24 h-24 md:w-32 md:h-32 object-contain rounded-full">
            </div>

            <div class="w-full max-w-md bg-white rounded-[35px] pt-16 pb-10 px-8 md:px-12 shadow-lg z-20 text-center">
                
                <h2 class="text-2xl md:text-2xl font-bold text-gray-900 mb-4">
                    Recuperación de Contraseña
                </h2>

                <p class="text-sm text-gray-600 mb-8 leading-relaxed">
                    Ingresa tu correo electrónico y te enviaremos un código de 4 dígitos para restablecer tu contraseña.
                </p>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <x-validation-errors class="mb-4 text-xs" />

                <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                    @csrf

                    <div class="text-left">
                        <label for="email" class="block text-xs font-bold text-gray-700 mb-1 ml-1">Correo electrónico</label>
                        <div class="relative">
                            <input id="email" type="email" name="email" :value="old('email')" required autofocus
                                class="w-full px-4 py-3 border-2 border-[#B3A1C7] rounded-xl focus:ring-[#8673A1] focus:border-[#8673A1] text-sm text-gray-700 placeholder-gray-400 shadow-sm transition-all" 
                                placeholder="Tu correo electrónico">
                            
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-[#8673A1]">
                                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <button style="background: linear-gradient(to right, #7C6CA0, #5E4D7A);" type="submit" 
                        class="w-full text-white font-bold py-3 px-4 rounded-2xl transition-all duration-300 shadow-md hover:opacity-90 transform hover:scale-[1.02]">
                        Enviar código
                    </button>

                    <div class="mt-4">
                        <a href="{{ route('login') }}" class="text-sm font-bold text-[#8673A1] hover:text-[#5E4D7A] transition-colors underline underline-offset-4">
                            Volver a iniciar sesión
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>