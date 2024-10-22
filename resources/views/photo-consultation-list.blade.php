@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div x-data="{ isEmpty: true, openModal: false }">
		<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
			<div class="pt-6 md:pt-24 block md:flex items-center">
				<div class="text-lg md:text-3.5xl font-extrabold mr-8" @click="isEmpty = !isEmpty">
					Photo Consultation
				</div>
				<div class="mt-4 md:mt-0">
					<button @click="openModal = true" class="w-full md:w-auto py-2 px-4 bg-klinik-primary text-white rounded-full font-bold btn-focus-primary text-sm text-center block">
						BUAT KONSULTASI BARU
					</button>
				</div>
			</div>
			{{-- halaman ketika konsultasi kosong --}}
			<div class="text-center" x-show="isEmpty === true">
				<div class="mt-11 mb-4">
					<img src="{{ asset('images/empty.svg') }}" alt="empty" class="h-52 w-52 mx-auto">
				</div>
				<div class="font-bold mb-4">
					Belum Ada Riwayat
				</div>
				<div class="text-sm max-w-xs mx-auto mb-20">
					Yuk buat konsultasi baru terlebih dahulu untuk mendapatkan solusi masalah kulitmu.
				</div>
			</div>
			{{-- halaman ketika konsultasi tersedia --}}
			<div class="mt-6 mb-20" x-show="isEmpty === false">
				<div class="text-sm my-6 w-full md:w-72">
					<div class="relative flex">
						<label for="tabs" class="sr-only">pilih sesi</label>
						<select id="tabs" name="tabs" class="block focus:ring-klinik-primary focus:border-klinik-primary font-semibold appearance-none focus:outline-none p-2.5 w-full border-gray-200 border rounded-md">
							<option selected class="">Semua Konsultasi</option>
							<option class="">Menunggu Resep</option>
							<option class="">Resep Tersedia</option>
							<option class="">Konsultasi Selesai</option>
						</select>
						<div class="flex items-center text-gray-600 absolute right-2 top-3">
							<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
						</div>
					</div>
				</div>
				{{-- tampilan desktop --}}
				<table class="table-auto w-full hidden md:table">
					<thead>
						<tr class="border-t border-b border-gray-200">
							<th class="text-left py-5 px-2">Tanggal Konsultasi</th>
							<th class="py-5 px-2 text-left">Foto Wajah</th>
							<th class="py-5 px-2 text-left">Status Konsultasi</th>
							<th class="py-5 px-2"></th>
						</tr>
					</thead>
					<tbody>
						<tr class="border-b border-gray-200">
							<td class="text-left py-3 px-2 text-sm font-bold">20 Juli 2020 - 13:15</td>
							<td class="py-3 px-2">
								<div class="flex items-center space-x-3">
									<img src="{{ asset('images/pc-1.svg') }}" alt="pc" class="w-10 h-10">
									<img src="{{ asset('images/pc-2.svg') }}" alt="pc" class="w-10 h-10">
									<img src="{{ asset('images/pc-3.svg') }}" alt="pc" class="w-10 h-10">
									<img src="{{ asset('images/pc-4.svg') }}" alt="pc" class="w-10 h-10">
								</div>
							</td>
							<td class="py-3 px-2 text-klinik-green-light font-bold text-sm">RESEP TERSEDIA</td>
							<td class="py-3 px-2">
								<div class="grid grid-cols-2 gap-4">
									<div class="w-full">
										<a href="/photo-consultation-detail-ready" class="border-2 border-klinik-primary text-sm text-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none block text-center">
											DETAIL
										</a>
									</div>
									<div class="w-full">
										<a href="/shopping-details" class="block text-center text-white border-2 border-klinik-primary text-sm bg-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none">
											BELI OBAT
										</a>
									</div>
								</div>
							</td>
						</tr>
						<tr class="border-b border-gray-200">
							<td class="text-left py-3 px-2 text-sm font-bold">20 Juli 2020 - 13:15</td>
							<td class="py-3 px-2">
								<div class="flex items-center space-x-3">
									<img src="{{ asset('images/pc-1.svg') }}" alt="pc" class="w-10 h-10">
									<img src="{{ asset('images/pc-2.svg') }}" alt="pc" class="w-10 h-10">
									<img src="{{ asset('images/pc-3.svg') }}" alt="pc" class="w-10 h-10">
									<img src="{{ asset('images/pc-4.svg') }}" alt="pc" class="w-10 h-10">
								</div>
							</td>
							<td class="py-3 px-2 text-klinik-orange font-bold text-sm">MENUNGGU RESEP</td>
							<td class="py-3 px-2">
								<div class="grid grid-cols-2 gap-4">
									<div class="w-full">
										<a href="/photo-consultation-detail-waiting" class="border-2 border-klinik-primary text-sm text-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none block text-center">
											DETAIL
										</a>
									</div>
									<div></div>
								</div>
							</td>
						</tr>
						<tr class="border-b border-gray-200">
							<td class="text-left py-3 px-2 text-sm font-bold">20 Juli 2020 - 13:15</td>
							<td class="py-3 px-2">
								<div class="flex items-center space-x-3">
									<img src="{{ asset('images/pc-1.svg') }}" alt="pc" class="w-10 h-10">
									<img src="{{ asset('images/pc-2.svg') }}" alt="pc" class="w-10 h-10">
									<img src="{{ asset('images/pc-3.svg') }}" alt="pc" class="w-10 h-10">
									<img src="{{ asset('images/pc-4.svg') }}" alt="pc" class="w-10 h-10">
								</div>
							</td>
							<td class="py-3 px-2 text-gray-400 font-bold text-sm">KONSULTASI SELESAI</td>
							<td class="py-3 px-2">
								<div class="grid grid-cols-2 gap-4">
									<div class="w-full">
										<a href="/photo-consultation-detail-done" class="border-2 border-klinik-primary text-sm text-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none block text-center">
											DETAIL
										</a>
									</div>
									<div class="w-full">
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				{{-- tampilan mobile --}}
				<div class="block md:hidden shadow-card-pc rounded-lg divide-y">
					{{-- card item --}}
					<div class="px-6 py-8">
						<div class="font-bold text-sm mb-4">
							20 Juli 2020 - 13:15
						</div>
						<div class="flex items-center space-x-3">
							<img src="{{ asset('images/pc-1.svg') }}" alt="pc" class="w-10 h-10">
							<img src="{{ asset('images/pc-2.svg') }}" alt="pc" class="w-10 h-10">
							<img src="{{ asset('images/pc-3.svg') }}" alt="pc" class="w-10 h-10">
							<img src="{{ asset('images/pc-4.svg') }}" alt="pc" class="w-10 h-10">
						</div>
						<div class="flex items-center mt-4">
							<div class="mr-2">
								<img src="{{ asset('images/pc-already-icon.svg') }}" alt="icon" class="w-6 h-6">
							</div>
							<div class="text-klinik-green-light text-sm uppercase">
								Resep tersedia
							</div>
						</div>
						<div class="grid grid-cols-2 gap-4 mt-4">
							<div class="w-full">
								<a href="/photo-consultation-detail-ready" class="border-2 block text-center border-klinik-primary text-sm text-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none">
									DETAIL
								</a>
							</div>
							<div class="w-full">
								<a href="/shopping-details" class="text-white border-2 block text-center border-klinik-primary text-sm bg-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none">
									BELI OBAT
								</a>
							</div>
						</div>
					</div>
					{{-- card item --}}
					<div class="px-6 py-8">
						<div class="font-bold text-sm mb-4">
							20 Juli 2020 - 13:15
						</div>
						<div class="flex items-center space-x-3">
							<img src="{{ asset('images/pc-1.svg') }}" alt="pc" class="w-10 h-10">
							<img src="{{ asset('images/pc-2.svg') }}" alt="pc" class="w-10 h-10">
							<img src="{{ asset('images/pc-3.svg') }}" alt="pc" class="w-10 h-10">
							<img src="{{ asset('images/pc-4.svg') }}" alt="pc" class="w-10 h-10">
						</div>
						<div class="flex items-center mt-4">
							<div class="mr-2">
								<img src="{{ asset('images/pc-waiting-icon.svg') }}" alt="icon" class="w-6 h-6">
							</div>
							<div class="text-klinik-orange text-sm uppercase">
								Menunggu Resep
							</div>
						</div>
						<div class="grid grid-cols-2 gap-4 mt-4">
							<div class="w-full col-span-2">
								<a href="/photo-consultation-detail-waiting" class="border-2 block text-center border-klinik-primary text-sm text-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none">
									DETAIL
								</a>
							</div>
						</div>
					</div>
					{{-- card item --}}
					<div class="px-6 py-8">
						<div class="font-bold text-sm mb-4">
							20 Juli 2020 - 13:15
						</div>
						<div class="flex items-center space-x-3">
							<img src="{{ asset('images/pc-1.svg') }}" alt="pc" class="w-10 h-10">
							<img src="{{ asset('images/pc-2.svg') }}" alt="pc" class="w-10 h-10">
							<img src="{{ asset('images/pc-3.svg') }}" alt="pc" class="w-10 h-10">
							<img src="{{ asset('images/pc-4.svg') }}" alt="pc" class="w-10 h-10">
						</div>
						<div class="flex items-center mt-4">
							<div class="mr-2">
								<img src="{{ asset('images/pc-done-icon.svg') }}" alt="icon" class="w-6 h-6">
							</div>
							<div class="text-gray-400 text-sm uppercase">
								konsultasi selesai
							</div>
						</div>
						<div class="grid grid-cols-2 gap-4 mt-4">
							<div class="w-full col-span-2">
								<a href="/photo-consultation-detail-done" class="border-2 block text-center border-klinik-primary text-sm text-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none">
									DETAIL
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- modal --}}
		<div x-cloak x-show="openModal" class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
			<div class="flex items-end justify-center min-h-screen text-center md:block p-0">
					<div 
						x-show="openModal" 
						x-transition:enter="ease-out duration-300"
						x-transition:enter-start="opacity-0"
						x-transition:enter-end="opacity-100"
						x-transition:leave="ease-in duration-200"
						x-transition:leave-start="opacity-100"
						x-transition:leave-end="opacity-0" 
						class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"
					></div>

					<!-- This element is to trick the browser into centering the modal contents. -->
					<span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true">&#8203;</span>

					<div 
						x-show="openModal" 
						x-transition:enter="ease-out duration-300"
						x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
						x-transition:enter-end="opacity-100 translate-y-0 md:scale-100"
						x-transition:leave="ease-in duration-200"
						x-transition:leave-start="opacity-100 translate-y-0 md:scale-100"
						x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
						class="inline-block align-bottom bg-white rounded-t-lg md:rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all md:my-8 md:align-middle md:max-w-2xl md:w-full md:p-6 w-full"
						@click.away="openModal = false"
					>
							<div class="block absolute top-0 right-0 pt-4 pr-4">
								<button type="button" class="p-1 bg-white rounded-md text-gray-800 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" @click="openModal = false">
										<span class="sr-only">Close</span>
										<!-- Heroicon name: outline/x -->
										<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
								</button>
							</div>
							<div class="md:flex md:items-start">
								<div class="w-full mt-4 text-center md:mt-0">
										<h3 class="leading-6 text-2xl font-bold text-gray-900 pt-4 md:pt-8 pb-0 md:pb-4" id="modal-title">
												Konfirmasi Penggunaan Token
										</h3>
										<div class="my-4">
												<p class="text-sm text-gray-500">
														Anda akan menggunakan 1 token untuk memulai layanan Photo Consultation. <br>Tekan tombol LANJUT untuk memulai Photo Consultation.
												</p>
										</div>
										<div class="my-4 max-w-full md:max-w-sm mx-auto space-y-1">
												<div class="flex items-center justify-between p-3 rounded-lg">
													<div class="text-sm">Jumlah token Anda</div>
													<div class="text-base md:text-xl font-bold py-1.5 px-3 rounded-lg bg-gray-100">3</div>
												</div>
												<div class="flex items-center justify-between p-3 rounded-lg bg-klinik-primary-light text-white">
													<div class="font-bold text-sm">Token untuk Photo Consultation</div>
													<div class="text-base md:text-xl font-bold py-1.5 px-3 rounded-lg bg-klinik-primary">1</div>
												</div>
												<div class="flex items-center justify-between p-3 rounded-lg">
													<div class="text-sm">Sisa token Anda</div>
													<div class="text-base md:text-xl font-bold py-1.5 px-3 rounded-lg bg-gray-100">2</div>
												</div>
										</div>
										<div class="p-4 rounded-lg bg-klinik-blue-light max-w-md mx-auto text-sm my-4">
											Dengan menekan tombol LANJUT, Anda dianggap telah membaca dan menyetujui syarat dan ketentuan layanan Photo Consultation.
										</div>
								</div>
							</div>
							<div class="mt-5 md:mt-4 md:flex justify-center md:flex-row-reverse w-full">
								<a href="/photo-consultation">
									<button type="button" class="w-full md:w-36 inline-flex justify-center rounded-full border border-transparent shadow-sm px-4 py-2 bg-klinik-primary text-base font-semibold text-white hover:bg-klinik-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-klinik-primary md:ml-3 md:text-sm">
											LANJUT
									</button>
								</a>
							</div>
					</div>
			</div>
		</div>
	</div>
</x-layout-app>
@endsection
