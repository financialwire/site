<div class="flex items-center min-h-svh max-w-screen-xl mx-auto px-4 relative">
    <div class="h-full grid grid-cols-1 lg:grid-cols-2 items-center">
        <div class="flex flex-col gap-4 sm:gap-6 max-lg:max-w-screen-sm max-lg:mx-auto max-lg:mb-auto">
            <h1 class="max-xl:text-center font-bold text-4xl lg:text-[4rem] leading-none" x-data="{ intersect: false }"
                x-intersect:enter="intersect=true" x-intersect:leave="intersect=false"
                :class="intersect ? 'animate-fade-right animate-ease-out animate-delay-100' : 'opacity-0'">
                Sua plataforma de controle financeiro
            </h1>
            <p class="max-xl:text-center text-xl lg:text-2xl" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                x-intersect:leave="intersect=false"
                :class="intersect ? 'animate-fade-right animate-ease-out animate-delay-200' : 'opacity-0'">
                Gerencie suas contas, transações e muito mais com uma plataforma intuitiva e sem complicações.
            </p>

            <a href="{{ env('DASH_REGISTRATION_URL') }}"
                class="px-6 lg:px-0 w-full max-lg:mx-auto rounded-lg bg-financialwire-purple text-lg text-white text-center font-inter font-bold py-6 max-w-96 uppercase hover:bg-black transition-all ease-in-out duration-300"
                x-data="{ intersect: false }" x-intersect:enter="intersect=true" x-intersect:leave="intersect=false"
                :class="intersect ? 'animate-fade-right animate-ease-out animate-delay-300' : 'opacity-0'">
                Comece agora
            </a>
        </div>

        <div class="w-full pt-8 max-w-64 md:max-w-96 lg:max-w-none max-lg:mx-auto max-lg:mt-auto max-lg:order-first"
            x-init="dotLottie = new DotLottie({
                autoplay: true,
                loop: true,
                canvas: $refs.animation,
                src: '{{ asset('animations/hero.json') }}',
            });
            
            dotLottie.setLayout({
                fit: 'contain'
            });" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
            x-intersect:leave="intersect=false"
            :class="intersect ? 'animate-fade-left animate-ease-out animate-delay-200' : 'opacity-0'">
            <canvas x-ref="animation" class="w-full h-auto aspect-square mx-auto max-lg:max-w-screen-sm"></canvas>
        </div>
    </div>
</div>
