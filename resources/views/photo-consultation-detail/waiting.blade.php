@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div class="max-w-8xl mx-auto">
		<div class="pt-6 md:pt-20 mb-6 md:mb-8 px-5 md:px-8 lg:px-16">
			<div class="flex items-center">
				<a href="photo-consultation-list">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
				</a>
				<div class="text-xl md:text-3.5xl font-extrabold ml-3">
					Photo Consultation Detail
				</div>
			</div>
    	</div>
		{{-- menunggu resep --}}
		<div>
      {{-- dekstop --}}
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
					<div class="flex items-center p-6">
						<div class="mr-2">
							<img src="{{ asset('images/photo-consultation/assignment-icon.svg') }}" alt="icon-receipt" class="w-6 h-6">
						</div>
						<div class="uppercase font-bold text-sm">
							RINGKASAN ANAMNESA
						</div>
					</div>

					{{-- ringkasan laki-laki --}}
					{{-- <div class="grid grid-cols-3 lg:grid-cols-7 gap-6 p-6 pt-2">
						<div class="text-sm">
							<div class="mb-2">Jenis Kulit</div>
							<div class="font-bold">Berminyak</div>
						</div>
						<div class="text-sm">
							<div class="mb-2">Memiliki Jerawat</div>
							<div class="font-bold">Ada</div>
						</div>
						<div class="text-sm">
							<div class="mb-2">Memiliki Flek Hitam</div>
							<div class="font-bold">Tidak</div>
						</div>
						<div class="text-sm">
							<div class="mb-2">Memiliki Gastritis</div>
							<div class="font-bold">Tidak</div>
						</div>
						<div class="text-sm">
							<div class="mb-2">Alergi Obat Kulit</div>
							<div class="font-bold">Ada</div>
							<div class="">Alergi dengan obat yang mengandung antibiotik</div>
						</div>
						<div class="text-sm">
							<div class="mb-2">Alergi Obat Minum</div>
							<div class="font-bold">Tidak</div>
							<div class=""></div>
						</div>
						<div class="text-sm">
							<div class="mb-2">Keluhan Kulit</div>
							<div class="">kulit memerah ketika terkena sinar matahari</div>
						</div>
					</div> --}}

					{{-- ringkasan wanita --}}
					<div class="grid grid-cols-5 gap-6 p-6 pt-2">
						<div class="text-sm">
							<div class="mb-2">Jenis Kulit</div>
							<div class="font-bold">Berminyak</div>
						</div>
						<div class="text-sm">
							<div class="mb-2">Memiliki Jerawat</div>
							<div class="font-bold">Ada</div>
						</div>
						<div class="text-sm">
							<div class="mb-2">Memiliki Flek Hitam</div>
							<div class="font-bold">Tidak</div>
						</div>
						<div class="text-sm">
							<div class="mb-2">Memiliki Gastritis</div>
							<div class="font-bold">Tidak</div>
						</div>
						<div class="text-sm">
							<div class="mb-2">Alergi Obat Kulit</div>
							<div class="font-bold">Ada</div>
							<div class="">Alergi dengan obat yang mengandung antibiotik</div>
						</div>
					</div>
					<div class="grid grid-cols-5 gap-6 p-6 pt-2">
						<div class="text-sm">
							<div class="mb-2">Alergi Obat Minum</div>
							<div class="font-bold">Tidak</div>
							<div class=""></div>
						</div>
						<div class="text-sm">
							<div class="mb-2">Sedang Hamil</div>
							<div class="font-bold">Tidak</div>
						</div>
						<div class="text-sm">
							<div class="mb-2">Mestruasi Teratur</div>
							<div class="font-bold">Ya</div>
						</div>
						<div class="text-sm">
							<div class="mb-2">Keluhan Kulit</div>
							<div class="">kulit memerah ketika terkena sinar matahari</div>
						</div>
					</div>
					{{-- end --}}
					<hr>
					<div class="p-8 pb-16">
						<div class="font-bold text-center">Foto Wajah dan Area Lain</div>
						<div class="flex gap-6 justify-center mt-4">
							<div>
								<div class="text-sm mb-2">Tampak Depan</div>
								<div>
									<img src="{{ asset('images/photo-consultation/depan.svg') }}" alt="photo" height="176" width="132">
								</div>
							</div>
							<div>
								<div class="text-sm mb-2">Tampak Kiri</div>
								<div>
									<img src="{{ asset('images/photo-consultation/kiri.svg') }}" alt="photo" height="176" width="132">
								</div>
							</div>
							<div>
								<div class="text-sm mb-2">Tampak Kanan</div>
								<div>
									<img src="{{ asset('images/photo-consultation/kanan.svg') }}" alt="photo" height="176" width="132">
								</div>
							</div>
							<div>
								<div class="text-sm mb-2">Keluhan lain (jika ada)</div>
								<div>
									<img src="{{ asset('images/photo-consultation/keluhan.svg') }}" alt="photo" height="176" width="132">
								</div>
							</div>
						</div>
					</div>
					<div class="p-6 pb-10">
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
							<div class="pl-6 pb-6 pt-3 pr-3 shadow-card-note rounded-lg space-y-3 h-full">
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
					<div class="mt-10 px-5 md:px-8 lg:px-16">
						<div class="font-bold">Ringkasan Anamnesa</div>
						<div class="mt-3 text-sm">
							<div class="flex items-center py-4 border-b border-gray-200">
								<div class="w-1/2">Jenis Kulit</div>
								<div class="font-bold">Berminyak</div>
							</div>
							<div class="flex items-center py-4 border-b border-gray-200">
								<div class="w-1/2">Memiliki Jerawat</div>
								<div class="font-bold">Ada</div>
							</div>
							<div class="flex items-center py-4 border-b border-gray-200">
								<div class="w-1/2">Memiliki Flek Hitam</div>
								<div class="font-bold">Tidak</div>
							</div>
							<div class="flex items-center py-4 border-b border-gray-200">
								<div class="w-1/2">Memiliki Gastritis</div>
								<div class="font-bold">Tidak</div>
							</div>
							<div class="flex py-4 border-b border-gray-200">
								<div class="w-1/2">Memiliki Alergi Obat Kulit</div>
								<div class="w-1/2">
									<div class="font-bold">Ada</div>
									<div class="">Alergi dengan obat yang mengandung antibiotik</div>
								</div>
							</div>
							<div class="flex py-4 border-b border-gray-200">
								<div class="w-1/2">Memiliki Alergi Obat Minum</div>
								<div class="w-1/2">
									<div class="font-bold">Tidak</div>
									<div class=""></div>
								</div>
							</div>
							{{-- khusus wanita --}}
							<div class="flex items-center py-4 border-b border-gray-200">
								<div class="w-1/2">Sedang Hamil</div>
								<div class="font-bold">Tidak</div>
							</div>
							<div class="flex items-center py-4 border-b border-gray-200">
								<div class="w-1/2">Mestruasi Teratur</div>
								<div class="font-bold">Ya</div>
							</div>
							{{-- end khusus wanita --}}
							<div class="flex py-4 border-b border-gray-200">
								<div class="w-1/2">Keluhan Kulit</div>
								<div class="w-1/2">kulit memerah ketika terkena sinar matahari</div>
							</div>
						</div>
					</div>
					<div class="mt-10 px-5 md:px-8 lg:px-16">
						<div class="font-bold">Foto Wajah dan Area Lain</div>
						<div class="grid grid-cols-2 gap-4 mt-6">
							<div>
								<div class="text-sm mb-1 text-center">Tampak Depan</div>
								<div>
									<img src="{{ asset('images/photo-consultation/depan.svg') }}" alt="photo" height="176" width="132" class="mx-auto">
								</div>
							</div>
							<div>
								<div class="text-sm mb-1 text-center">Tampak Kiri</div>
								<div>
									<img src="{{ asset('images/photo-consultation/kiri.svg') }}" alt="photo" height="176" width="132" class="mx-auto">
								</div>
							</div>
							<div>
								<div class="text-sm mb-1 text-center">Tampak Kanan</div>
								<div>
									<img src="{{ asset('images/photo-consultation/kanan.svg') }}" alt="photo" height="176" width="132" class="mx-auto">
								</div>
							</div>
							<div>
								<div class="text-sm mb-1 text-center">Keluhan lain (Jika ada)</div>
								<div>
									<img src="{{ asset('images/photo-consultation/keluhan.svg') }}" alt="photo" height="176" width="132" class="mx-auto">
								</div>
							</div>
						</div>
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
