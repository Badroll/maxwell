@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div class="max-w-8xl mx-auto flex flex-col items-center">
		{{-- countdown timer --}}
		<div x-data="{ countdown: 10 }" x-init="setInterval(() => { if(countdown > 0) countdown = countdown - 1;}, 1000)" class="px-6">
			<div class="mt-8 md:mt-24 mb-24 md:mb-40" x-show="countdown > 0">
				<div class="mb-16 text-lg md:text-2xl font-bold text-center">
					Sedang menghubungkan dengan Dokter...
				</div>
				<div class="flex justify-center">
					<div class="h-40 w-40 rounded-full flex justify-center items-center bg-klinik-primary text-white text-6xl" x-text="countdown">
					</div>
				</div>
			</div>

			{{-- countdown failed --}}
			<div class="mt-8 md:mt-20 mb-20 md:mb-36 max-w-xl mx-auto flex flex-col items-center" x-show="countdown === 0">
				<div class="mb-8">
					<img src="{{ asset('images/not-found.svg') }}" alt="img-not-found" height="200" width="200">
				</div>
				<div class="text-center">
					<div class="text-base md:text-2xl font-bold mb-4">
						Tidak Dapat Terhubung
					</div>
					<div class="text-sm mb-6 md:mb-4">
						Muat ulang untuk menghubungkan dengan Dokter. Apabila masih tidak dapat terhubung, gunakan alternatif dengan konsultasi photo atau video.
					</div>
					<div>
						<button class="px-8 py-3 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary uppercase text-xs md:text-sm">
							MUAT ULANG
						</button>
					</div>
				</div>
			</div>
		</div>


	</div>
</x-layout-app>

@endsection
