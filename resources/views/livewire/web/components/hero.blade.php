<div class="h-svh grid grid-cols-1 md:grid-cols-2 max-md:gap-8 items-center">
    <div class="flex flex-col gap-5">

        <h1 class="font-bold text-4xl lg:text-6xl">
            Sua plataforma de controle financeiro
        </h1>
        <p class="text-lg lg:text-2xl">
            Gerencie suas contas, transações e muito mais com uma plataforma intuitiva e sem complicações.
            <br><br>
            Seu dinheiro, suas regras, sua liberdade.
        </p>

        <a href="#"
            class="w-fit px-6 lg:px-0 lg:w-full rounded-lg bg-financialwire-purple text-sm lg:text-lg text-white text-center font-inter font-bold py-3 lg:py-6 max-w-96 uppercase hover:bg-black transition-all ease-in-out duration-300">
            Comece agora
        </a>

    </div>

    <div class="w-full " x-init="dotLottie = new DotLottie({
        autoplay: true,
        loop: true,
        canvas: $refs.animation,
        src: '{{ asset('animations/hero.json') }}',
    });
    
    dotLottie.setLayout({
        fit: 'contain'
    });">
        <canvas x-ref="animation" class="w-full h-auto aspect-square"></canvas>
    </div>
</div>
