<div class="flex items-center min-h-svh max-w-screen-xl mx-auto px-4">

    <div class="h-full grid grid-cols-1 lg:grid-cols-2 items-center">
        <div class="flex flex-col gap-4 sm:gap-6 max-lg:max-w-screen-sm max-lg:mx-auto max-lg:mb-auto">
            <h1 class="font-bold text-4xl lg:text-6xl max-lg:text-center">
                Sua plataforma de controle financeiro
            </h1>
            <p class="text-xl lg:text-2xl max-lg:text-center">
                Gerencie suas contas, transações e muito mais com uma plataforma intuitiva e sem complicações.
                <br><br class="max-lg:hidden">
                Seu dinheiro, suas regras, sua liberdade.
            </p>

            <a href="#"
                class="w-fit px-6 lg:px-0 lg:w-full max-lg:mx-auto rounded-lg bg-financialwire-purple text-sm lg:text-lg text-white text-center font-inter font-bold py-3 lg:py-6 max-w-96 uppercase hover:bg-black transition-all ease-in-out duration-300">
                Comece agora
            </a>
        </div>

        <div class="w-full pt-8 max-w-64 md:max-w-96 lg:max-w-none max-lg:mx-auto max-lg:mt-auto max-lg:order-first" x-init="dotLottie = new DotLottie({
            autoplay: true,
            loop: true,
            canvas: $refs.animation,
            src: '{{ asset('animations/hero.json') }}',
        });
        
        dotLottie.setLayout({
            fit: 'contain'
        });">
            <canvas x-ref="animation" class="w-full h-auto aspect-square mx-auto max-lg:max-w-screen-sm"></canvas>
        </div>
    </div>
</div>
