<div class="max-w-screen-xl mx-auto px-4 pb-4 pt-8 xl:py-12 border-t flex max-xl:flex-col max-xl:gap-8 xl:items-center justify-between">
    <a href="#" class="text-lg xl:text-2xl font-bold hover:text-financialwire-purple transition-all ease-in-out">
        {{ env('APP_NAME') }}
    </a>

    <span class="text-gray-400 max-xl:text-center max-xl:text-xs max-xl:order-last">
        © {{ date('Y') }} {{ env('APP_NAME') }}™. Todos direitos reservados.
    </span>

    <div class="flex max-xl:flex-col gap-4 xl:gap-8 xl:text-lg font-bold">
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
</div>
