
<style>
    /* Ocultar el botón de mostrar contraseña en Edge y Chrome */
    input[type="password"]::-ms-reveal,
    input[type="password"]::-ms-clear {
        display: none;
    }
    


</style>

<x-guest-layout>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4 md:p-8 bg-transparent">
        
        <div class="w-full max-w-5xl bg-white shadow-2xl rounded-[38px] grid grid-cols-1 md:grid-cols-2 overflow-hidden min-h-[600px] relative z-10">
            
            <div class="bg-gradient-to-t from-[#C3AEDB] to-[#665C96] relative flex flex-col items-center pt-12 h-full rounded-b-[38px] md:rounded-b-none md:rounded-r-[38px] shadow-xl z-20">
                
                <div class="z-30 bg-white rounded-full p-2 mb-4 shadow-lg relative">
                    <img src="{{ asset('img/logo vetermid1.png') }}" alt="VeterMid Logo" class="w-24 h-24 object-contain rounded-full">
                </div>

                <div class="absolute bottom-0 w-full flex justify-center pointer-events-none">
                    <img src="{{ asset('img/perros.png') }}" alt="Mascotas Veterimid" class="w-full h-auto object-contain object-bottom transform scale-125 md:scale-[1.3] origin-bottom z-20 translate-x-6">
                </div>
            </div>

            <div class="flex flex-col justify-center px-8 py-10 md:px-14 h-full bg-white z-10">
                
                <h2 class="text-3xl md:text-3xl font-semibold text-center text-gray-900 mb-10">
                    Iniciar Sesión en VeteriMid
                </h2>

                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="w-full max-w-sm mx-auto">
                    @csrf

                    <div class="mb-5">
                        <label for="email" class="block text-sm font-medium text-gray-900 mb-1">Correo electrónico</label>
                        <div class="relative">
                            <input id="email" type="email" name="email" :value="old('email')" required autofocus
                                class="w-full px-4 py-3 border border-[#8673A1] rounded-xl focus:ring-[#8673A1] focus:border-[#5E4D7A] text-gray-700 placeholder-gray-400 shadow-sm transition-all" 
                                placeholder="Tu correo electrónico">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-[#8673A1]">
              <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
              <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
            </svg>
                            </div>
                        </div>
                    </div>

        <div class="mb-2">
    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
        <div class="relative">
                <input id="password" type="password" name="password" required
                class="w-full px-4 py-3 pr-12 border-2 border-[#8673A1] rounded-xl focus:ring-[#5E4D7A] focus:border-[#5E4D7A] text-gray-700 placeholder-gray-400 shadow-sm transition-all" 
                placeholder="Tu contraseña">
        
                <div class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer" onclick="togglePassword()">
                    
                    <svg id="eye-open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-[#8673A1] hidden transition-all">
                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                    </svg>
                    
                    <svg id="eye-closed" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-[#8673A1] transition-all">
                    <path d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                    <path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                    <path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
                    </svg>

                </div>
        </div>
</div>

                    <div class="flex justify-end mb-8">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-xs text-gray-900 hover:text-[#8673A1] font-medium transition-colors">
                                Recuperar contraseña
                            </a>
                        @endif
                    </div>

                    <button style="background: linear-gradient(to right, #7C6CA0, #5E4D7A);" type="submit" class="w-full text-white font-bold py-3 px-4 rounded-xl transition duration-300 shadow-md hover:opacity-90">
    INICIAR SESIÓN
</button>

                    <div class="mt-6 text-center text-sm text-gray-700">
                        ¿No tienes cuenta? 
                        <a href="{{ route('register') }}" class="font-bold text-[black] hover:text-[#8673A1] transition-colors">
                            Registrarse
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeOpen = document.getElementById('eye-open');
        const eyeClosed = document.getElementById('eye-closed');

        if (passwordInput.type === 'password') {
            // Mostrar contraseña
            passwordInput.type = 'text';
            eyeOpen.classList.remove('hidden');
            eyeClosed.classList.add('hidden');
        } else {
            // Ocultar contraseña
            passwordInput.type = 'password';
            eyeOpen.classList.add('hidden');
            eyeClosed.classList.remove('hidden');
        }
    }
</script>
</x-guest-layout>