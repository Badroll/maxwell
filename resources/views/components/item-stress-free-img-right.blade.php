<div x-data="{ count: 20, string: `{!! $desc !!}` }" class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16 py-8 md:py-16 grid grid-cols-1 md:grid-cols-2">
    <div>
        <div class="font-extrabold text-xl md:text-4.5xl mb-4 md:mb-5 pr-3 leading-normal">{{ $title }}</div>
        <div class="hidden md:block text-xs md:text-base prose max-w-full">
            <div x-unsafe-html="$truncate(string, { words: count, ellipsis: '...' })">
            </div>
            <div @click="count = 0" x-show="count === 20" class="text-klinik-primary cursor-pointer">Read more</div>
            <div @click="count = 20" x-show="count === 0" class="text-klinik-primary cursor-pointer">Show less</div>
        </div>
        
        <div class="relative md:hidden my-8 flex w-full justify-center">
            <div class="relative">
                <img src="{{ asset('images/service/dot.svg') }}" alt="shape" class="absolute -bottom-4 -right-2 sm:-right-6">
                <img src="{{ $image }}" alt="klinik-solution" height="410" width="310" class="relative mx-auto rounded-xl">
            </div>
        </div>
    </div>
    <div class="hidden md:flex justify-end">
        <div class="relative flex" style="height: fit-content">
            <img src="{{ asset('images/service/dot.svg') }}" alt="shape" class="absolute -bottom-5 -left-14">
            <img src="{{ $image }}" alt="klinik-solution" height="414" width="311" class="relative rounded-xl">
        </div>
    </div>
    <div class="md:hidden text-xs md:text-base prose max-w-full" x-unsafe-html="string"></div>
</div>