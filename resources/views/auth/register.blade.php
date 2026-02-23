<x-guest-layout>
    <style>
        /* Ocultar el botón de mostrar contraseña nativo en Edge y Chrome */
        input[type="password"]::-ms-reveal,
        input[type="password"]::-ms-clear {
            display: none;
        }

        .font-quicksand {
            font-family: 'Quicksand', sans-serif;
        }
    </style>

    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-2 md:p-8 bg-transparent font-quicksand">
        
        <div class="w-full max-w-5xl bg-white shadow-2xl rounded-[38px] grid grid-cols-1 md:grid-cols-2 overflow-hidden min-h-[650px] relative z-10">
            
            <div class="bg-gradient-to-t from-[#C3AEDB] to-[#665C96] relative hidden md:flex flex-col items-center pt-10 h-full rounded-r-[38px] shadow-xl z-20">
                <div class="z-30 bg-white rounded-full p-2 mb-4 shadow-lg relative">
                    <img src="{{ asset('img/logo vetermid1.png') }}" alt="Logo" class="w-20 h-20 object-contain rounded-full">
                </div>
                
                <div class="absolute bottom-0 w-full flex justify-center pointer-events-none">
                    <img src="{{ asset('img/perros2.png') }}" alt="Mascotas" class="w-full h-auto object-contain object-bottom transform scale-125 lg:scale-[1.11] origin-bottom z-20 translate-x-0">
                </div>
            </div>

            <div class="flex flex-col justify-center px-8 py-6 md:px-14 h-full bg-white z-10">
                
                <h2 class="text-2xl md:text-3xl font-bold text-center text-gray-900 mb-6">
                    Regístrate en VeteriMid
                </h2>

                <x-validation-errors class="mb-3 text-xs" />

                <form method="POST" action="{{ route('register') }}" class="w-full space-y-3">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-0.5">Nombre</label>
                            <input type="text" name="name" :value="old('name')" required autofocus
                                class="w-full px-4 py-2 border-2 border-[#8673A1] rounded-xl focus:ring-[#8673A1] focus:border-[#5E4D7A] text-sm text-gray-700 placeholder-gray-400 shadow-sm transition-all" placeholder="Nombre">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-0.5">Apellido</label>
                            <input type="text" name="lastname" :value="old('lastname')" required
                                class="w-full px-4 py-2 border-2 border-[#8673A1] rounded-xl focus:ring-[#8673A1] focus:border-[#5E4D7A] text-sm text-gray-700 placeholder-gray-400 shadow-sm transition-all" placeholder="Apellido">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-0.5">Correo electrónico</label>
                        <input type="email" name="email" :value="old('email')" required
                            class="w-full px-4 py-2 border-2 border-[#8673A1] rounded-xl focus:ring-[#8673A1] focus:border-[#5E4D7A] text-sm text-gray-700 placeholder-gray-400 shadow-sm transition-all" placeholder="ejemplo@correo.com">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-0.5">Teléfono</label>
                        <input type="text" name="phone" :value="old('phone')" required
                            class="w-full px-4 py-2 border-2 border-[#8673A1] rounded-xl focus:ring-[#8673A1] focus:border-[#5E4D7A] text-sm text-gray-700 placeholder-gray-400 shadow-sm transition-all" placeholder="+52 ...">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-0.5">Dirección completa</label>
                        <input type="text" name="address" :value="old('address')" required
                            class="w-full px-4 py-2 border-2 border-[#8673A1] rounded-xl focus:ring-[#8673A1] focus:border-[#5E4D7A] text-sm text-gray-700 placeholder-gray-400 shadow-sm transition-all" placeholder="Ej. Calle 60 #123, Col. Centro...">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="relative">
                            <label class="block text-xs font-bold text-gray-700 mb-0.5">Contraseña</label>
                            <div class="relative">
                                <input id="password" type="password" name="password" required
                                    class="w-full px-4 py-2 pr-10 border-2 border-[#8673A1] rounded-xl focus:ring-[#5E4D7A] focus:border-[#5E4D7A] text-sm text-gray-700">
                                <button type="button" onclick="togglePass('password')" class="absolute right-3 top-2 text-[#8673A1]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z" /><path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" /></svg>
                                </button>
                            </div>
                        </div>
                        <div class="relative">
                            <label class="block text-xs font-bold text-gray-700 mb-0.5">Confirmar</label>
                            <div class="relative">
                                <input id="password_confirmation" type="password" name="password_confirmation" required
                                    class="w-full px-4 py-2 pr-10 border-2 border-[#8673A1] rounded-xl focus:ring-[#5E4D7A] focus:border-[#5E4D7A] text-sm text-gray-700">
                                <button type="button" onclick="togglePass('password_confirmation')" class="absolute right-3 top-2 text-[#8673A1]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z" /><path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center mt-1">
                        <input type="checkbox" name="terms" id="terms" class="w-3.5 h-3.5 rounded border-2 border-[#8673A1] text-[#7C6CA0] focus:ring-[#7C6CA0]" required>
                        <label for="terms" class="ml-2 text-[11px] text-gray-600 leading-tight ">
                            Acepto los Términos de Servicio y la Política de Privacidad
                        </label>
                    </div>

                    <div class="pt-2">
                        <button style="background: linear-gradient(to right, #7C6CA0, #5E4D7A);" type="submit" 
                            class="w-full text-white font-bold py-2.5 px-4 rounded-2xl transition-all duration-300 shadow-md hover:opacity-90 transform hover:scale-[1.01]">
                            REGISTRARSE
                        </button>
                    </div>

                    <div class="text-center text-xs text-gray-700 mt-2">
                        ¿Ya tienes cuenta? 
                        <a href="{{ route('login') }}" class="font-bold text-gray-900 hover:text-[#8673A1] transition-colors">
                            Inicia Sesión
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePass(inputId) {
            const input = document.getElementById(inputId);
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>
</x-guest-layout>