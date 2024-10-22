<div
    class="p-2.5 md:p-5 rounded-2xl h-full w-full flex flex-col shadow-card-login"
    x-data="{ open: false }"
>
    <div class="relative cursor-pointer" @mouseover="open = true" @mouseover.away = "open = false">
        <div class="aspect-w-1 aspect-h-1">
            <img
            src="{{ $image }}"
            class="w-full h-full"
            />
        </div>
        <div x-show="open" class="text-white bg-klinik-primary font-bold py-1.5 md:py-2.5 w-full absolute bottom-0 text-center rounded-full md:rounded-lg text-xs md:text-sm opacity-80">
            MORE DETAILS
        </div>
        @if( $isRecomended == 'true' )
            <span class="px-2 py-1 bg-green-600  absolute top-0 left-0 rounded-lg text-white text-10px md:text-xs">RECOMMENDED</span>
        @endif
    </div>
    <div class="flex-grow">
        <div class="uppercase font-bold pt-5 text-xs md:text-base cursor-pointer">
            {{ $title }}
        </div>
    </div>
    <div class="flex-grow-0">
        <div class="text-10px md:text-xs pt-4 pb-1">Mulai dari</div>
        <div class="text-10px md:text-base font-bold pb-3 md:pb-6">
            {{ $price }}
        </div>
        <div class="text-center">
            <button
                class="text-sm font-semibold border-2 border-klinik-primary text-klinik-primary py-1.5 px-8 md:px-12 rounded-full hover:text-white hover:bg-klinik-primary"
            >
                BUY NOW
            </button>
        </div>
    </div>
</div>
