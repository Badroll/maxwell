<div x-data="{ open: false }">
    <div class="flex justify-between items-center bg-klinik-grey px-4 py-2 rounded border border-gray-200 text-klinik-primary cursor-pointer select-none"  x-on:click="open = !open">
        <div class="font-extrabold text-sm md:text-lg flex">{{ $title }}</div>
        <div x-show="open === false">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </div>
        <div x-show="open === true">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
        </div>
    </div>
    <div class="p-4 prose max-w-full text-xs md:text-base" x-show="open">
        {{ $slot }}
    </div>
</div>