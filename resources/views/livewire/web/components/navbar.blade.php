<div x-data="{ showBar: false }">

    <div class="fixed w-full bg-zinc-900 py-4 xl:py-8 text-white transition-all ease-in-out"
        :class="{ '!py-4 !bg-transparent !text-black backdrop-blur-lg': showBar }" x-ref="navbarWrapper"
        @scroll.window="showBar = window.pageYOffset > $refs.navbarWrapper.offsetHeight/50">
        <div class="max-w-screen-2xl mx-auto max-xl:px-4 flex items-center justify-between">
            <a href="#"
                class="text-2xl font-bold py-2 px-4 hover:text-financialwire-purple transition-all ease-in-out">
                {{ env('APP_NAME') }}
            </a>

            <div class="flex max-xl:hidden gap-8 text-lg font-bold">
                <a href="#" class="hover:text-financialwire-purple transition-all ease-in-out">
                    Início
                </a>
                <a href="#" class="hover:text-financialwire-purple transition-all ease-in-out">
                    Benefícios
                </a>
                <a href="#" class="hover:text-financialwire-purple transition-all ease-in-out">
                    Contato
                </a>
            </div>

            <div class="flex gap-4 text-sm max-xl:hidden">
                <a href="#"
                    class="text-white bg-zinc-900 flex items-center gap-1 rounded-xl border px-6 py-3 hover:bg-financialwire-purple hover:border-financialwire-purple transition-all ease-in-out"
                    :class="{ 'backdrop-blur border-0': showBar }">
                    <x-heroicon-s-arrow-right-end-on-rectangle class="w-5 h-5" />
                    Faça Login
                </a>
                <a href="#"
                    class="!text-white bg-financialwire-purple flex items-center gap-1 rounded-xl px-6 py-3 hover:bg-white hover:!text-black transition-all ease-in-out"
                    :class="{ 'hover:bg-zinc-900 hover:!text-white': showBar }">
                    <x-heroicon-s-user-plus class="w-5 h-5" />
                    Cadastre-se
                </a>
            </div>

            <button x-on:click="$slideOpen('nav-slide')" type="button"
                class="xl:hidden ml-auto inline-flex items-center p-2 w-10 h-10 justify-center text-sm focus:outline-none focus:ring-0">
                <span class="sr-only">Open main menu</span>
                <x-heroicon-o-bars-3 class="h-8 w-8" />
            </button>
        </div>
    </div>

    <x-slide id="nav-slide" size="full" left>
        <div class="w-full h-full flex items-center">
            <ul class="w-full md:max-w-screen-sm mx-auto text-xl lg:text-2xl font-medium flex flex-col gap-4 md:p-0">
                <li>
                    <a href="#" class="hover:text-financialwire-purple transition-all ease-in-out">
                        Início
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:text-financialwire-purple transition-all ease-in-out">
                        Benefícios
                    </a>
                </li>
                <li>
                    <a href="#" class="hover:text-financialwire-purple transition-all ease-in-out">
                        Contato
                    </a>
                </li>
                <li>
                    <div class="flex gap-2 text-sm">
                        <a href="#"
                            class="w-full text-white bg-zinc-900 flex items-center gap-1 rounded-xl border px-6 py-3 hover:bg-financialwire-purple hover:border-financialwire-purple transition-all ease-in-out"
                            :class="{ 'backdrop-blur border-0': showBar }">
                            <x-heroicon-s-arrow-right-end-on-rectangle class="w-5 h-5" />
                            Faça Login
                        </a>
                        <a href="#"
                            class="!w-full text-white bg-financialwire-purple flex items-center gap-1 rounded-xl px-6 py-3 hover:bg-white hover:!text-black transition-all ease-in-out"
                            :class="{ 'hover:bg-zinc-900 hover:!text-white': showBar }">
                            <x-heroicon-s-user-plus class="w-5 h-5" />
                            Cadastre-se
                        </a>
                    </div>
                </li>
            </ul>
        </div>

    </x-slide>
</div>
