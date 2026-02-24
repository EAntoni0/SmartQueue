<x-guest-layout>
    <style>
        .font-quicksand { font-family: 'Quicksand', sans-serif; }
    </style>

    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4 md:px-10 font-quicksand rounded-[38px]">
        <div class="w-full max-w-4xl bg-gradient-to-br from-[#C3AEDB] via-[#8673A1] to-[#665C96] rounded-[38px] p-6 md:p-12 flex flex-col items-center justify-center relative shadow-2xl min-h-[550px]">
            
            <div class="z-30 bg-white rounded-full p-2 shadow-xl mb-[-40px] relative">
                <img src="{{ asset('img/logo vetermid1.png') }}" alt="Logo" class="w-24 h-24 md:w-32 md:h-32 object-contain rounded-full">
            </div>

            <div class="w-full max-w-md bg-white rounded-[35px] pt-16 pb-10 px-8 md:px-12 shadow-lg z-20 text-center">
    
    <h2 class="text-2xl md:text-2xl font-bold text-gray-900 mb-4">
        Código de confirmación
    </h2>

    <p class="text-sm text-gray-600 mb-8 leading-relaxed">
    {{-- Si existe 'phone' en la URL, mostramos mensaje de teléfono --}}
    @if(request()->has('phone') || request()->query('method') == 'sms')
        Hemos enviado un código de 4 dígitos a tu **número de teléfono**.
    @else
        Hemos enviado un código de 4 dígitos a tu **correo electrónico**.
    @endif
</p>

    <form method="POST" action="#" class="space-y-6">
        @csrf
        <div class="flex gap-3 justify-center mb-8">
            @for ($i = 0; $i < 4; $i++)
                <input type="text" maxlength="1" 
                    class="w-12 h-14 md:w-14 md:h-16 text-center text-2xl font-bold border-2 border-[#B3A1C7] rounded-xl focus:ring-[#8673A1] focus:border-[#8673A1] text-gray-700 transition-all">
            @endfor
        </div>

        <button style="background: linear-gradient(to right, #7C6CA0, #5E4D7A);" type="submit" 
            class="w-full text-white font-bold py-3 px-4 rounded-2xl transition-all duration-300 shadow-md hover:opacity-90 transform hover:scale-[1.02]">
            Verificar código
        </button>

        <div class="mt-6 space-y-2">
    <a href="#" class="text-xs font-bold text-[#8673A1] hover:text-[#5E4D7A] transition-colors underline underline-offset-4 block">
        Reenviar código por {{ (request()->has('phone') || request()->query('method') == 'sms') ? 'SMS' : 'correo' }}
    </a>

    <p class="text-[10px] text-gray-400">
        @if(request()->has('phone') || request()->query('method') == 'sms')
            ¿No tienes acceso? <a href="{{ route('password.request') }}" class="font-bold text-[#8673A1] hover:underline">Usar Correo</a>
        @else
            ¿No tienes acceso? <a href="{{ route('password.sms') }}" class="font-bold text-[#8673A1] hover:underline">Enviar por SMS</a>
        @endif
    </p>
</div>
    </form>
</div>
        </div>
    </div>
</x-guest-layout>