<div class="shadow-card-doctor rounded-xl" style="height:fit-content" x-data="{ show: false }">
    <div class="flex">
        <div class="mr-3">
            <img src="{{ $image }}" alt="dokter" class="h-28 md:h-36 w-28 md:w-36 rounded-xl min-w-112px md:min-w-144px" />
        </div>
        <div class="flex flex-col p-3 pb-2 w-full">
            <div class="flex-grow">
                <div class="md:text-lg text-sm font-semibold">{{ $name }}</div>
                <div class="mt-1 text-xs md:text-base">{{ $title }}</div>
            </div>
            <div class="font-bold flex items-center justify-between cursor-pointer" @click="show = !show">
                <div class="text-xs md:text-base">Jadwal Dokter</div>
                <div>
                    {{-- chevron-down --}}
                    <svg class="w-5 h-5" x-show="show === false" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    {{-- chevron-up --}}
                    <svg class="w-5 h-5" x-show="show === true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4" x-show="show === true">
        {{ $slot }}
    </div>
</div>