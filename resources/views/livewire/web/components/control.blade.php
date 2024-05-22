<div class="max-w-screen-xl mx-auto px-4 py-8 lg:py-16 scroll-mt-16 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center" id="beneficios">
    <div class="space-y-4 lg:space-y-8 max-lg:order-last">
        <h1 class="font-bold text-3xl lg:text-5xl" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
            :class="intersect ? 'animate-fade-right animate-ease-out animate-delay-200' : 'opacity-0'">
            <span class="text-financialwire-purple">
                Controle, gestão e <br class="max-lg:hidden"> visão
            </span>
            em um só lugar
        </h1>

        <p class="xl:text-xl" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
            :class="intersect ? 'animate-fade-right animate-ease-out animate-delay-300' : 'opacity-0'">
            Nosso painel interativo de gerenciamento financeiro é uma ferramenta poderosa e intuitiva projetada para
            fornecer uma visão completa e detalhada da sua vida financeira.
        </p>

        <p class="xl:text-xl" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
            :class="intersect ? 'animate-fade-right animate-ease-out animate-delay-[400ms]' : 'opacity-0'">
            Com ele, você pode acompanhar todas as suas receitas, despesas, saldos, e muito mais em um só lugar.
        </p>
    </div>
    <img src="{{ asset('images/control.png') }}" alt="Controle e gestão"
        class="aspect-video w-full h-auto object-cover object-center border shadow-lg rounded-3xl" x-data="{ intersect: false }"
        x-intersect:enter="intersect=true"
        :class="intersect ? 'animate-fade-left animate-ease-out animate-delay-[400ms]' : 'opacity-0'">
</div>
