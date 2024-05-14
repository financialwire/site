<div class="max-w-screen-xl flex items-center mx-auto min-h-svh px-4 py-16 scroll-mt-16" id="contato">
    <div class="w-full flex flex-col gap-8 xl:gap-32 xl:flex-row">
        <div class="w-full space-y-4">
            <h1 class="font-bold text-3xl lg:text-5xl" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-right animate-ease-out animate-delay-200' : 'opacity-0'">
                Entre em contato diretamente conosco!
            </h1>
            <p class="xl:text-xl" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-right animate-ease-out animate-delay-300' : 'opacity-0'">
                Encontrou algum problema técnico? Gostaria de nos dar um feedback? Entre em contato! Estamos aqui para
                ajudar e receber suas sugestões.
            </p>
        </div>

        <form wire:submit="save" class="w-full space-y-4">
            <div class="flex flex-col space-y-2" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-left animate-ease-out animate-delay-200' : 'opacity-0'">
                <x-input wire:model.lazy="form.name" label="Nome:" placeholder="Seu nome" />
            </div>

            <div class="flex flex-col space-y-2" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-left animate-ease-out animate-delay-200' : 'opacity-0'">
                <x-input wire:model.lazy="form.email" label="Seu melhor email:" placeholder="seu@email.com" />
            </div>

            <div class="flex flex-col space-y-2" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-left animate-ease-out animate-delay-200' : 'opacity-0'">
                <x-input wire:model.lazy="form.subject" label="Assunto:" placeholder="Motivo do contato" />
            </div>

            <div class="flex flex-col space-y-2" x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-left animate-ease-out animate-delay-200' : 'opacity-0'">
                <x-textarea wire:model.lazy="form.message" label="Mensagem:" placeholder="Escreva aqui sua mensagem" />
            </div>

            <button
                class="w-full px-6 lg:px-0 rounded-lg bg-white border border-financialwire-purple text-sm lg:text-lg text-black text-center font-inter font-bold py-3 lg:py-6 uppercase hover:bg-financialwire-purple hover:text-white transition-all ease-in-out duration-300"
                x-data="{ intersect: false }" x-intersect:enter="intersect=true"
                :class="intersect ? 'animate-fade-left animate-ease-out animate-delay-200' : 'opacity-0'">
                Enviar Mensagem
            </button>
        </form>
    </div>
</div>
