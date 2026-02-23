<x-guest-layout>
    <style>
        .font-quicksand {
            font-family: 'Quicksand', sans-serif;
        }
        /* Estilo para los inputs del código */
        .code-input:focus {
            border-color: #8673A1;
            box-shadow: 0 0 0 2px rgba(134, 115, 161, 0.2);
        }
    </style>

    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4 md:p-8 font-quicksand">
        
        <div class="w-full max-w-7xl bg-white shadow-xl rounded-[60px] p-4 md:p-10 overflow-hidden">
            
            <div class="w-full min-h-[650px] md:min-h-[750px] bg-gradient-to-br from-[#C3AEDB] via-[#8673A1] to-[#665C96] rounded-[50px] flex items-center justify-center py-16 px-6 md:px-32 relative overflow-hidden">
                
                <div class="w-full max-w-md bg-white rounded-[45px] shadow-2xl p-8 md:p-12 relative z-10 flex flex-col items-center">
                    
                    <div class="mt-[-95px] md:mt-[-115px] mb-6 bg-white rounded-full p-2 shadow-xl">
                        <img src="{{ asset('img/logo vetermid1.png') }}" alt="Logo" class="w-28 h-28 md:w-36 md:h-36 object-contain rounded-full">
                    </div>

                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 text-center mb-4 leading-tight">
                        Código de confirmación
                    </h2>

                    <p class="text-sm md:text-base text-gray-500 text-center mb-8 leading-relaxed">
                        Hemos enviado un código de 4 dígitos a tu correo electrónico.
                    </p>

                    <form method="POST" action="{{ route('password.verify-code') }}" class="w-full flex flex-col items-center">
                        @csrf

                        <div class="flex gap-4 mb-10 justify-center">
                            <input type="text" maxlength="1" class="code-input w-14 h-14 md:w-16 md:h-16 text-center text-2xl font-bold border-2 border-[#B3A1C7] rounded-2xl text-[#8673A1] transition-all focus:outline-none" required>
                            <input type="text" maxlength="1" class="code-input w-14 h-14 md:w-16 md:h-16 text-center text-2xl font-bold border-2 border-[#B3A1C7] rounded-2xl text-[#8673A1] transition-all focus:outline-none" required>
                            <input type="text" maxlength="1" class="code-input w-14 h-14 md:w-16 md:h-16 text-center text-2xl font-bold border-2 border-[#B3A1C7] rounded-2xl text-[#8673A1] transition-all focus:outline-none" required>
                            <input type="text" maxlength="1" class="code-input w-14 h-14 md:w-16 md:h-16 text-center text-2xl font-bold border-2 border-[#B3A1C7] rounded-2xl text-[#8673A1] transition-all focus:outline-none" required>
                        </div>

                        <button style="background: linear-gradient(to right, #7C6CA0, #5E4D7A);" type="submit" 
                            class="w-full text-white font-bold py-4 px-4 rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-[1.02] text-lg mb-6">
                            Verificar código
                        </button>

                        <div class="text-center space-y-2">
                            <a href="#" class="text-xs md:text-sm font-bold text-[#8673A1] hover:underline block">
                                Reenviar código por correo
                            </a>
                            <p class="text-xs text-gray-400">
                                ¿No tienes acceso? <a href="#" class="font-bold text-[#8673A1] hover:underline">Enviar por SMS</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputs = document.querySelectorAll('.code-input');
        inputs.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && input.value.length === 0 && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });
    </script>
</x-guest-layout>