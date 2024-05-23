<div
    class="relative max-sm:flex max-sm:items-center py-8 my-8 xl:py-0 before:absolute before:content-[''] before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-full before:h-full before:xl:h-[90%] before:bg-financialwire-purple">
    <div class="max-w-screen-xl mx-auto px-4">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 xl:gap-16 max-xl:-mt-16 items-center">
            <img src="{{ asset('images/mockup.png') }}" alt="Mockup"
                class="w-full max-w-96 lg:max-w-screen-sm max-xl:mx-auto" x-data="{ intersect: false }"
                x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-right animate-ease-out animate-delay-200' : 'opacity-0'">

            <div class="flex flex-col max-xl:mx-auto max-xl:max-w-screen-sm gap-6 text-white">
                <h2 class="font-bold text-3xl md:text-4xl lg:text-5xl" x-data="{ intersect: false }"
                    x-intersect:enter="intersect=true"
                    :class="intersect ? 'animate-fade-left animate-ease-out animate-delay-100' : 'opacity-0'">
                    Tenha acesso à plataforma em qualquer dispositivo
                </h2>
                <p class="text-lg lg:text-xl" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                    :class="intersect ? 'animate-fade-left animate-ease-out animate-delay-200' : 'opacity-0'">
                    Seja no computador, celular ou tablet com conexão a internet, você pode acessar a nossa plataforma
                    quando e onde quiser.
                </p>

                <a href="{{ env('DASH_REGISTRATION_URL') }}"
                    class="w-full p-6 lg:px-0 max-xl:mx-auto rounded-lg bg-black text-sm lg:text-lg text-white text-center font-inter font-bold max-w-96 uppercase hover:bg-white hover:text-black transition-all ease-in-out duration-300"
                    x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                    :class="intersect ? 'animate-fade-left animate-ease-out animate-delay-300' : 'opacity-0'">
                    Comece agora
                </a>
            </div>
        </div>
    </div>
</div>
