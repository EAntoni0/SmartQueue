<div class="w-full max-w-5xl bg-white shadow-2xl rounded-[30px] overflow-hidden flex flex-col md:flex-row">
    
    <div class="w-full md:w-1/2 bg-gradient-to-b from-[#665C96] to-[#A690C5] p-8 relative flex flex-col items-center justify-between text-white overflow-hidden min-h-[400px] md:min-h-[600px]">
        <div class="mb-8 z-10">
             <img src="{{ asset('img/logo vetermid1.png') }}" alt="VeterMid Logo" class="w-32 h-32 rounded-full bg-white p-1">
        </div>

        <div class="absolute bottom-0 left-0 w-full">
            <img src="{{ asset('img/perros.png') }}" alt="Mascotas" class="w-full h-auto object-cover object-bottom">
        </div>
    </div>

    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">
            Iniciar Sesión en VeterMid
        </h2>

        {{ $slot }}
    </div>
</div>