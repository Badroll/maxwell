<div>
    <div class="text-xs">
    <div class="leading-5">{{ $address }}</div>
    <div class="flex items-center flex-wrap mt-1">
        Phone : <x-copy-phone-number id="{{ $phoneId }}">{{ $phone }}</x-copy-phone-number> || <span class="ml-2">Fax : {{ $fax }}</span>
    </div>
	</div>
	<div class="block ss:flex items-center mt-1 text-xs gap-4">
		<div class="flex items-center">
			<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
			WA : <a href="{{ $linkWA }}" class="font-semibold text-klinik-primary ml-1 underline">{{ $whatsapp }}</a>
		</div>
		<div class="flex items-center">
			<img src="{{ asset('images/branches/location.svg') }}" alt="icon location" class="w-4 h-4 mr-2">
			<a href="{{ $location }}" target="_blank" rel="noopener" class="text-sm text-klinik-primary font-bold">Lihat lokasi di maps</a>
		</div>
	</div>
</div>