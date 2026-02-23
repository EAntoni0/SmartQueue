<x-guest-layout>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4 md:p-8">
        
        <div class="w-full max-w-5xl bg-white shadow-2xl rounded-[38px] grid grid-cols-1 lg:grid-cols-2 overflow-hidden min-h-[700px] relative z-10 font-['Quicksand']">
            
            <div class="bg-gradient-to-t from-[#C3AEDB] to-[#665C96] relative hidden lg:flex flex-col items-center pt-12 h-full rounded-r-[38px] shadow-xl z-20">
                <div class="z-30 bg-white rounded-full p-2 mb-4 shadow-lg relative">
                    <img src="{{ asset('img/logo vetermid1.png') }}" alt="Logo" class="w-24 h-24 object-contain rounded-full">
                </div>
                <div class="absolute bottom-0 w-full flex justify-center pointer-events-none">
                    <img src="{{ asset('img/perros.png') }}" class="w-full h-auto object-contain object-bottom transform scale-125 origin-bottom translate-x-6">
                </div>
            </div>

            <div class="flex flex-col justify-center px-8 py-10 md:px-14 h-full bg-white z-10">
                
                <h2 class="text-4xl font-bold text-center text-gray-900 mb-8">Regístrate en VeteriMid</h2>

                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}" class="w-full space-y-4">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Nombre</label>
                            <input type="text" name="name" :value="old('name')" required autofocus
                                class="w-full px-4 py-2 border-2 border-[#B3A1C7] rounded-xl focus:ring-[#8673A1] focus:border-[#8673A1] text-gray-700 placeholder-gray-300" placeholder="Nombre">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Apellido</label>
                            <input type="text" name="lastname" :value="old('lastname')" required
                                class="w-full px-4 py-2 border-2 border-[#B3A1C7] rounded-xl focus:ring-[#8673A1] focus:border-[#8673A1] text-gray-700 placeholder-gray-300" placeholder="Apellido">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-1">Correo electrónico</label>
                        <input type="email" name="email" :value="old('email')" required
                            class="w-full px-4 py-2 border-2 border-[#B3A1C7] rounded-xl focus:ring-[#8673A1] focus:border-[#8673A1] text-gray-700 placeholder-gray-300" placeholder="@gmail.com">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-1">Teléfono</label>
                        <input type="text" name="phone" :value="old('phone')" required
                            class="w-full px-4 py-2 border-2 border-[#B3A1C7] rounded-xl focus:ring-[#8673A1] focus:border-[#8673A1] text-gray-700 placeholder-gray-300" placeholder="+52">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-1">Dirección completa</label>
                        <input type="text" name="address" :value="old('address')" required
                            class="w-full px-4 py-2 border-2 border-[#B3A1C7] rounded-xl focus:ring-[#8673A1] focus:border-[#8673A1] text-gray-700 placeholder-gray-300" placeholder="Ej. Calle 60 #123, Col. Centro, Mérida, Yucatán">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="relative">
                            <label class="block text-sm font-bold text-gray-700 mb-1">Contraseña</label>
                            <input id="password" type="password" name="password" required
                                class="w-full px-4 py-2 border-2 border-[#B3A1C7] rounded-xl focus:ring-[#8673A1] focus:border-[#8673A1] text-gray-700" placeholder="Tu contraseña">
                            <button type="button" onclick="togglePass('password', 'eye1')" class="absolute right-3 top-9 text-[#8673A1]">
                                <svg id="eye1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z" /><path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" /></svg>
                            </button>
                        </div>
                        <div class="relative">
                            <label class="block text-sm font-bold text-gray-700 mb-1">Confirma tu Contraseña</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" required
                                class="w-full px-4 py-2 border-2 border-[#B3A1C7] rounded-xl focus:ring-[#8673A1] focus:border-[#8673A1] text-gray-700" placeholder="Tu contraseña">
                            <button type="button" onclick="togglePass('password_confirmation', 'eye2')" class="absolute right-3 top-9 text-[#8673A1]">
                                <svg id="eye2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z" /><path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" /></svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center mt-4">
                        <input type="checkbox" name="terms" id="terms" class="rounded border-gray-300 text-[#8673A1] shadow-sm focus:ring-[#8673A1]">
                        <label for="terms" class="ml-2 text-sm text-gray-600">Acepto los Términos de Servicio y la Política de Privacidad</label>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full bg-gradient-to-r from-[#B3A1C7] to-[#7C6CA0] hover:from-[#7C6CA0] hover:to-[#5E4D7A] text-white font-bold py-3 px-4 rounded-2xl transition-all duration-300 shadow-lg transform hover:scale-[1.02]">
                            Registrarse
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePass(inputId, eyeId) {
            const input = document.getElementById(inputId);
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>
</x-guest-layout>