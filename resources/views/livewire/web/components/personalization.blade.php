<div class="max-w-screen-xl mx-auto px-4 py-8 lg:py-16 scroll-mt-16 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center"
    id="beneficios">
    <img src="{{ asset('images/personalization.png') }}" alt="Personalização do painel"
        class="w-full h-auto object-cover object-center border shadow-lg rounded-3xl" x-data="{ intersect: false }"
        x-intersect:enter="intersect=true"
        :class="intersect ? 'animate-fade-right animate-ease-out animate-delay-[400ms]' : 'opacity-0'">
    <div class="space-y-4 lg:space-y-8">
        <h1 class="font-bold text-3xl lg:text-5xl" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
            :class="intersect ? 'animate-fade-left animate-ease-out animate-delay-200' : 'opacity-0'">
            Crie, filtre e <br class="max-lg:hidden">
            <span class="text-financialwire-purple">
                personalize seu painel
            </span>
        </h1>

        <p class="xl:text-xl" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
            :class="intersect ? 'animate-fade-left animate-ease-out animate-delay-300' : 'opacity-0'">
            O painel de transações é o coração do seu sistema de gerenciamento financeiro, oferecendo uma maneira fácil
            e flexível de controlar todas as suas movimentações financeiras.
        </p>

        <p class="xl:text-xl" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
            :class="intersect ? 'animate-fade-left animate-ease-out animate-delay-[400ms]' : 'opacity-0'">
            Com ele, você pode criar, editar e personalizar suas transações de acordo com suas necessidades específicas,
            garantindo que suas finanças estejam sempre organizadas e atualizadas.
        </p>
    </div>
</div>
