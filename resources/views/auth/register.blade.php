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

                <form id="register-form" method="POST" action="{{ route('register') }}" class="w-full space-y-3">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div>
                            <label for="name" class="block text-xs font-bold text-gray-700 mb-0.5">Nombre*</label>
                            <input id="name" type="text" name="name" :value="old('name')" required autofocus
                                class="w-full px-4 py-2 border-2 border-[#8673A1] rounded-xl focus:ring-[#8673A1] focus:border-[#5E4D7A] text-sm text-gray-700 placeholder-gray-400 shadow-sm transition-all" placeholder="Nombre">
                            <p id="error-name" class="text-red-500 text-[10px] mt-1 hidden"></p>
                        </div>
                        <div>
                            <label for="last_name" class="block text-xs font-bold text-gray-700 mb-0.5">Apellido*</label>
                            <input id="last_name" type="text" name="last_name" :value="old('lastname')" required
                                class="w-full px-4 py-2 border-2 border-[#8673A1] rounded-xl focus:ring-[#8673A1] focus:border-[#5E4D7A] text-sm text-gray-700 placeholder-gray-400 shadow-sm transition-all" placeholder="Apellido">
                            <p id="error-last_name" class="text-red-500 text-[10px] mt-1 hidden"></p>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-xs font-bold text-gray-700 mb-0.5">Correo electrónico*</label>
                        <input id="email" type="email" name="email" :value="old('email')" required
                            class="w-full px-4 py-2 border-2 border-[#8673A1] rounded-xl focus:ring-[#8673A1] focus:border-[#5E4D7A] text-sm text-gray-700 placeholder-gray-400 shadow-sm transition-all" placeholder="ejemplo@correo.com">
                        <p id="error-email" class="text-red-500 text-[10px] mt-1 hidden"></p>
                    </div>

                    <div>
                        <label for="telefono" class="block text-xs font-bold text-gray-700 mb-0.5">Teléfono*</label>
                        <input id="telefono" type="text" name="telefono" :value="old('telefono')" required
                            class="w-full px-4 py-2 border-2 border-[#8673A1] rounded-xl focus:ring-[#8673A1] focus:border-[#5E4D7A] text-sm text-gray-700 placeholder-gray-400 shadow-sm transition-all" placeholder="+52 ...">
                        <p id="error-telefono" class="text-red-500 text-[10px] mt-1 hidden"></p>
                    </div>

                    <div>
                        <label for="direccion" class="block text-xs font-bold text-gray-700 mb-0.5">Dirección completa*</label>
                        <input id="direccion" type="text" name="direccion" :value="old('direccion')" required
                            class="w-full px-4 py-2 border-2 border-[#8673A1] rounded-xl focus:ring-[#8673A1] focus:border-[#5E4D7A] text-sm text-gray-700 placeholder-gray-400 shadow-sm transition-all" placeholder="Ej. Calle 60 #123, Col. Centro...">
                        <p id="error-direccion" class="text-red-500 text-[10px] mt-1 hidden"></p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="relative">
                            <label for="password" class="block text-xs font-bold text-gray-700 mb-0.5">Contraseña*</label>
                            <div class="relative">
                                <input id="password" type="password" name="password" required
                                    class="w-full px-4 py-2 pr-10 border-2 border-[#8673A1] rounded-xl focus:ring-[#5E4D7A] focus:border-[#5E4D7A] text-sm text-gray-700 transition-all">
                                <button type="button" onclick="togglePass('password')" class="absolute right-3 top-2 text-[#8673A1]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z" /><path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" /></svg>
                                </button>
                            </div>
                            <p id="error-password" class="text-red-500 text-[10px] mt-1 hidden leading-tight"></p>
                        </div>
                        <div class="relative">
                            <label for="password_confirmation" class="block text-xs font-bold text-gray-700 mb-0.5">Confirmar*</label>
                            <div class="relative">
                                <input id="password_confirmation" type="password" name="password_confirmation" required
                                    class="w-full px-4 py-2 pr-10 border-2 border-[#8673A1] rounded-xl focus:ring-[#5E4D7A] focus:border-[#5E4D7A] text-sm text-gray-700 transition-all">
                                <button type="button" onclick="togglePass('password_confirmation')" class="absolute right-3 top-2 text-[#8673A1]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z" /><path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" /></svg>
                                </button>
                            </div>
                            <p id="error-password_confirmation" class="text-red-500 text-[10px] mt-1 hidden"></p>
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
        // Función para mostrar/ocultar contraseña
        function togglePass(inputId) {
            const input = document.getElementById(inputId);
            input.type = input.type === 'password' ? 'text' : 'password';
        }

        // Lógica de Validación en Tiempo Real
        document.addEventListener('DOMContentLoaded', function () {
            
            function toggleError(inputId, message, show) {
                const inputEl = document.getElementById(inputId);
                const errorEl = document.getElementById('error-' + inputId);
                
                if (!inputEl || !errorEl) return;

                if (show) {
                    errorEl.innerHTML = message;
                    errorEl.classList.remove('hidden');
                    inputEl.classList.remove('border-[#8673A1]', 'focus:border-[#5E4D7A]');
                    inputEl.classList.add('border-red-500', 'focus:border-red-500');
                } else {
                    errorEl.classList.add('hidden');
                    inputEl.classList.remove('border-red-500', 'focus:border-red-500');
                    inputEl.classList.add('border-[#8673A1]', 'focus:border-[#5E4D7A]');
                }
            }

            // Validar campos vacíos (al perder el foco)
            const requiredFields = ['name', 'last_name', 'email', 'telefono', 'direccion'];
            requiredFields.forEach(function (field) {
                const input = document.getElementById(field);
                if (input) {
                    input.addEventListener('blur', function () {
                        if (this.value.trim() === '') {
                            toggleError(field, 'Este campo es obligatorio.', true);
                        } else {
                            toggleError(field, '', false);
                        }
                    });
                    input.addEventListener('input', function () {
                        if (this.value.trim() !== '') {
                            toggleError(field, '', false);
                        }
                    });
                }
            });

            // Validación de Contraseña
            const passwordInput = document.getElementById('password');
            if (passwordInput) {
                passwordInput.addEventListener('input', function () {
                    const val = this.value;
                    let errors = [];

                    if (val.length === 0) {
                        toggleError('password', '', false);
                        return;
                    }

                    if (val.length < 8) errors.push('• Mínimo 8 caracteres.');
                    if (!/^[a-zA-Z0-9]+$/.test(val)) errors.push('• Solo letras y números.');
                    if (!/[A-Z]/.test(val)) errors.push('• Al menos una mayúscula.');

                    if (errors.length > 0) {
                        toggleError('password', errors.join('<br>'), true);
                    } else {
                        toggleError('password', '', false);
                    }

                    // Validar confirmación si ya había texto
                    const confirmInput = document.getElementById('password_confirmation');
                    if (confirmInput && confirmInput.value.length > 0) {
                        confirmInput.dispatchEvent(new Event('input'));
                    }
                });
            }

            // Validación Confirmar Contraseña
            const confirmInput = document.getElementById('password_confirmation');
            if (confirmInput) {
                confirmInput.addEventListener('input', function () {
                    const passVal = document.getElementById('password').value;
                    if (this.value.length === 0) {
                        toggleError('password_confirmation', '', false);
                    } else if (this.value !== passVal) {
                        toggleError('password_confirmation', 'Las contraseñas no coinciden.', true);
                    } else {
                        toggleError('password_confirmation', '', false);
                    }
                });
            }
        });
    </script>
</x-guest-layout>