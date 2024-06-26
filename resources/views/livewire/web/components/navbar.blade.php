<div x-data="{ showBar: false }">

    <div class="fixed w-full bg-transparent py-4 text-black transition-all ease-in-out z-40"
        :class="{ '!bg-transparent text-white !bg-zinc-900': showBar }" x-data="{}" x-ref="navbarWrapper"
        @scroll.window="showBar = window.pageYOffset > $refs.navbarWrapper.offsetHeight/50">
        <div class="max-w-screen-xl mx-auto px-4 flex items-center justify-between">
            <div class="w-full">
                <a href="#"
                    class="text-lg xl:text-2xl font-bold hover:text-financialwire-purple transition-all ease-in-out">
                    {{ env('APP_NAME') }}
                </a>
            </div>

            <div class="w-full flex justify-center max-xl:hidden gap-8 text-lg font-bold">
                <a href="#" class="hover:text-financialwire-purple transition-all ease-in-out">
                    Início
                </a>
                <a href="#beneficios" class="hover:text-financialwire-purple transition-all ease-in-out">
                    Benefícios
                </a>
                <a href="#contato" class="hover:text-financialwire-purple transition-all ease-in-out">
                    Contato
                </a>
            </div>

            <div class="w-full flex justify-end gap-4 text-sm max-xl:hidden">
                <a href="{{ env('DASH_LOGIN_URL') }}"
                    class="flex items-center gap-1 rounded-xl border px-6 py-3 transition-all ease-in-out"
                    :class="showBar ? 'border-white text-white hover:bg-white hover:text-black' :
                        'border-zinc-900 text-black hover:bg-zinc-900 hover:text-white'">
                    <x-heroicon-s-arrow-right-end-on-rectangle class="w-5 h-5" />
                    Faça Login
                </a>

                <a href="{{ env('DASH_REGISTRATION_URL') }}"
                    class="bg-financialwire-purple flex items-center gap-1 rounded-xl px-6 py-3 transition-all ease-in-out"
                    :class="showBar ? 'border-white text-white hover:bg-white hover:text-black' : 'text-white hover:bg-zinc-900'">
                    <x-heroicon-s-user-plus class="w-5 h-5" />
                    Cadastre-se
                </a>
            </div>

            <button x-on:click="$slideOpen('nav-slide')" type="button"
                class="xl:hidden ml-auto inline-flex items-center w-6 h-6 justify-center text-sm focus:outline-none focus:ring-0">
                <span class="sr-only">Open main menu</span>
                <x-heroicon-o-bars-3 class="h-8 w-8" />
            </button>
        </div>
    </div>

    <x-slide id="nav-slide" size="full" left>
        <div class="w-full h-full flex items-center">
            <ul class="w-full md:max-w-screen-sm mx-auto text-xl lg:text-2xl font-medium flex flex-col gap-4 md:p-0">
                <li>
                    <a href="#" x-on:click="$slideClose('nav-slide')"
                        class="hover:text-financialwire-purple transition-all ease-in-out">
                        Início
                    </a>
                </li>
                <li>
                    <a href="#beneficios" x-on:click="$slideClose('nav-slide')"
                        class="hover:text-financialwire-purple transition-all ease-in-out">
                        Benefícios
                    </a>
                </li>
                <li>
                    <a href="#contato" x-on:click="$slideClose('nav-slide')"
                        class="hover:text-financialwire-purple transition-all ease-in-out">
                        Contato
                    </a>
                </li>
                <li>
                    <div class="flex gap-2 text-sm">
                        <a href="{{ env('DASH_LOGIN_URL') }}"
                            class="w-full !text-sm justify-center text-white bg-zinc-900 flex items-center gap-1 rounded-xl border px-2 py-3 hover:bg-financialwire-purple hover:border-financialwire-purple transition-all ease-in-out"
                            :class="{ 'backdrop-blur border-0': showBar }">
                            <x-heroicon-s-arrow-right-end-on-rectangle class="w-4 h-4" />
                            Faça Login
                        </a>

                        <a href="{{ env('DASH_REGISTRATION_URL') }}"
                            class="w-full !text-sm justify-center text-white bg-financialwire-purple flex items-center gap-1 rounded-xl px-2 py-3 hover:bg-white hover:!text-black transition-all ease-in-out"
                            :class="{ 'hover:bg-zinc-900 hover:!text-white': showBar }">
                            <x-heroicon-s-user-plus class="w-4 h-4" />
                            Cadastre-se
                        </a>
                    </div>
                </li>
            </ul>
        </div>

    </x-slide>
</div>
