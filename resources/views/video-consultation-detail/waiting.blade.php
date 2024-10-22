@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div class="max-w-8xl mx-auto">
		<div class="pt-6 md:pt-20 mb-6 md:mb-8 px-5 md:px-8 lg:px-16">
			<div class="flex items-center">
				<a href="video-consultation-list">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
				</a>
				<div class="text-xl md:text-3.5xl font-extrabold ml-3">
					Live Video Consultation Detail
				</div>
			</div>
    </div>
		<div>
			{{-- desktop --}}
			<div class="px-5 md:px-8 lg:px-16">
				<div class="rounded-lg shadow-card-login hidden md:block">
					<div class="bg-klinik-orange-status text-white py-1.5 text-center rounded-t-lg font-semibold text-xs md:text-base" style="background: #CE8107">
						MENUNGGU RESEP
					</div>
					<div class="grid grid-cols-1 md:grid-cols-2 gap-8 py-9 px-6 items-center">
						<div class="flex items-start text-xs md:text-base">
							<div class="mr-3">
								<img src="{{ asset('images/photo-consultation/cal-icon.svg') }}" alt="icon-receipt" class="w-6 h-6">
							</div>
							<div>
								<div class="font-bold text-sm uppercase">Tanggal Konsultasi</div>
								<div class="font-bold">10 Nov 2019 • 21:21</div>
							</div>
						</div>
						<div class="flex items-start text-xs md:text-base">
							<div class="mr-3">
								<img src="{{ asset('images/photo-consultation/ic-pain.svg') }}" alt="icon-receipt" class="w-6 h-6">
							</div>
							<div>
								<div class="font-bold text-sm uppercase">Keluhan pasien</div>
								<div class="font-bold">Jerawat muncul cepat saat terkena sinar matahari langsung</div>
							</div>
						</div>
					</div>
					<div class="p-6 pb-10 mt-14">
						<div class="grid grid-cols-2 items-center gap-8">
							<div class="p-6 shadow-card-note rounded-lg space-y-3 h-full">
								<div class="flex">
									<div class="w-1/12">
										<img src="{{ asset('images/photo-consultation/doc-icon.svg') }}" alt="icon" class="w-6 h-6">
									</div>
									<div class="w-11/12">CATATAN DOKTER</div>
								</div>
								<hr>
								<div class="flex">
									<div class="w-full text-sm font-bold h-32 flex items-center justify-center">
										<div class="text-gray-300">
											BELUM ADA CATATAN
										</div>
									</div>
								</div>
							</div>
							<div class="p-6 shadow-card-note rounded-lg space-y-3 h-full">
								<div class="flex items-center">
									<div class="w-1/12">
										<img src="{{ asset('images/photo-consultation/obat.svg') }}" alt="icon" class="w-6 h-6">
									</div>
									<div class="w-11/12 flex justify-between items-center">
										<div>RESEP PRODUK PERAWATAN</div>
									</div>
								</div>
								<hr>
								<div class="flex">
									<div class="w-full text-sm font-bold h-32 flex items-center justify-center">
										<div class="text-gray-300">
											MENUNGGU RESEP
										</div>
									</div>
								</div>
							</div>
						</div>
            <div class="mt-10 flex justify-end">
              <button disabled class="w-52 py-3 px-4 bg-klinik-primary text-white rounded-full font-bold btn-focus-primary text-sm text-center uppercase cursor-not-allowed opacity-50">
                BELI OBAT
              </button>
            </div>
					</div>
				</div>
			</div>
			{{-- mobile --}}
			<div class="md:hidden">
				<div class="mt-5">
					<div class="flex px-5 md:px-8 lg:px-16">
						<div class="bg-klinik-orange-status rounded-md text-white px-3 py-1.5 text-sm">
							MENUNGGU RESEP
						</div>
					</div>
					<div class="pt-3 px-5 md:px-8 lg:px-16">
						<div class="text-xs mb-1">Tanggal Konsultasi</div>
						<div class="text-sm font-bold">10 Nov 2019 • 21:21</div>
					</div>
					<div class="mt-8 text-sm px-5 md:px-8 lg:px-16">
						<div class="mb-2">Keluhan</div>
						<div class="font-bold">Jerawat muncul cepat saat terkena sinar matahari langsung</div>
					</div>
					<div class="mt-12">
						<div class="p-6 text-sm font-bold bg-klinik-grey-fb space-y-1.5 border-t border-b border-gray-200">
							<div class="mb-2">Resep Produk Perawatan</div>
							<div class="mt-3 h-24 flex justify-center items-center">
								<div class="text-gray-300 font-bold">MENUNGGU RESEP</div>
							</div>
						</div>
					</div>
					<div class="mt-8 text-sm px-5 md:px-8 lg:px-16">
						<div class="pb-3 font-bold">Catatan Dokter</div>
						<hr>
						<div class="mt-3 h-24 flex justify-center items-center">
							<div class="text-gray-300 font-bold">BELUM ADA CATATAN</div>
						</div>
					</div>
					<div class="mt-10 px-5 md:px-8 lg:px-16">
            <button
              disabled
              class="w-full block text-center px-5 py-2 bg-klinik-primary text-white rounded-full font-medium btn-focus-primary text-sm cursor-not-allowed opacity-50"
            >
              BELI OBAT
            </button>
          </div>
				</div>
			</div>
		</div>
	</div>
</x-layout-app>
@endsection
