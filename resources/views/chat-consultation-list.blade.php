@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div x-data="{ openModal: false, isEmpty: false }" x-init="openModal = false">
		<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
			<div class="pt-6 md:pt-24 block md:flex items-center">
				<div class="text-lg md:text-3.5xl font-extrabold mr-8" @click="isEmpty = !isEmpty">
					Live Chat Consultation
				</div>
				<div class="mt-4 md:mt-0">
					<button class="w-full md:w-auto py-2 px-4 bg-klinik-primary text-white rounded-full font-bold btn-focus-primary text-sm text-center" @click="openModal = true">
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
			<div class="mt-10 mb-20" x-show="isEmpty === false">
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
							<th class="border-b border-gray-200 py-8 text-left">Tanggal Konsultasi</th>
							<th class="border-b border-gray-200 py-8 text-left">Foto wajah</th>
							<th class="border-b border-gray-200 py-8 text-left">Status Konsultasi</th>
							<th class="border-b border-gray-200 py-8"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="border-b border-gray-200 py-3 text-sm font-bold">20 Juli 2020 - 13:15</td>
							<td class="border-b border-gray-200 py-3">
								<div class="flex items-center space-x-3">
									<img src="{{ asset('images/chat-consultation/1.svg') }}" alt="pc" class="w-10 h-10">
								</div>
							</td>
							<td class="border-b border-gray-200 py-3 text-green-300 font-bold text-sm">RESEP TERSEDIA</td>
							<td class="border-b border-gray-200 py-3">
								<div class="grid grid-cols-2 gap-4">
									<div class="w-full">
										<a href="/chat-consultation-detail" class="border-2 block text-center border-klinik-primary text-sm text-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none">
											DETAIL
										</a>
									</div>
									<div>
										<a href="/shopping-details" class="block text-center text-white border-2 border-klinik-primary text-sm bg-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none">
											BELI OBAT
										</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td class="border-b border-gray-200 py-3 text-sm font-bold">20 Juli 2020 - 13:15</td>
							<td class="border-b border-gray-200 py-3">
								<div class="flex items-center space-x-3">
									<img src="{{ asset('images/chat-consultation/2.svg') }}" alt="pc" class="w-10 h-10">
									<img src="{{ asset('images/chat-consultation/3.svg') }}" alt="pc" class="w-10 h-10">
									<img src="{{ asset('images/chat-consultation/4.svg') }}" alt="pc" class="w-10 h-10">
								</div>
							</td>
							<td class="border-b border-gray-200 py-3 text-klinik-orange font-bold text-sm">MENUNGGU RESEP</td>
							<td class="border-b border-gray-200 py-3">
								<div class="grid grid-cols-2 gap-4">
									<div class="w-full">
										<a href="/chat-consultation-detail" class="border-2 block text-center border-klinik-primary text-sm text-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none">
											DETAIL
										</a>
									</div>
									<div class="w-full"></div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				{{-- tampilan mobile --}}
				<div class="block md:hidden shadow-card-pc rounded-lg divide-y">
					{{-- card item --}}
					<div class="px-6 py-8">
						<div class="font-bold text-sm mb-2">
							20 Juli 2020 - 13:15
						</div>
						<div class="flex items-center mt-3">
							<div class="mr-2">
								<img src="{{ asset('images/pc-already-icon.svg') }}" alt="icon" class="w-6 h-6">
							</div>
							<div class="text-green-300 text-sm uppercase">
								Resep tersedia
							</div>
						</div>
						<div class="grid grid-cols-2 gap-4 mt-4">
							<div class="w-full">
								<button class="border-2 border-klinik-primary text-sm text-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none">
									DETAIL
								</button>
							</div>
							<div class="w-full">
								<button class="text-white border-2 border-klinik-primary text-sm bg-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none">
									BELI OBAT
								</button>
							</div>
						</div>
					</div>
					{{-- card item --}}
					<div class="px-6 py-8">
						<div class="font-bold text-sm mb-2">
							20 Juli 2020 - 13:15
						</div>
						<div class="flex items-center mt-3">
							<div class="mr-2">
								<img src="{{ asset('images/pc-waiting-icon.svg') }}" alt="icon" class="w-6 h-6">
							</div>
							<div class="text-klinik-orange text-sm uppercase">
								Menunggu Resep
							</div>
						</div>
						<div class="grid grid-cols-2 gap-4 mt-4">
							<div class="w-full col-span-2">
								<button class="border-2 border-klinik-primary text-sm text-klinik-primary rounded-full py-1.5 lg:py-2 w-full font-semibold focus:outline-none">
									DETAIL
								</button>
							</div>
						</div>
					</div>
				</div>

        {{-- modal live chat --}}
				<div x-cloak x-show="openModal" class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
					<div class="flex items-center justify-center min-h-screen p-4 text-center md:block md:p-0">
						<div 
							x-show="openModal" 
							x-transition:enter="ease-out duration-300"
							x-transition:enter-start="opacity-0"
							x-transition:enter-end="opacity-100"
							x-transition:leave="ease-in duration-200"
							x-transition:leave-start="opacity-100"
							x-transition:leave-end="opacity-0" 
							class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" 
							aria-hidden="true"
						></div>

						<!-- This element is to trick the browser into centering the modal contents. -->
						<span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true">&#8203;</span>

						<!-- Modal panel, show/hide based on modal state. -->
						<div 
							x-show="openModal" 
							x-transition:enter="ease-out duration-300"
							x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
							x-transition:enter-end="opacity-100 translate-y-0 md:scale-100"
							x-transition:leave="ease-in duration-200"
							x-transition:leave-start="opacity-100 translate-y-0 md:scale-100"
							x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
							class="inline-block rounded-lg p-6 text-left overflow-hidden shadow-xl transform transition-all md:my-8 align-middle md:max-w-4xl md:w-full bg-no-repeat bg-cover bg-center bg-popup-chat-app"
							@click.away="openModal = false"
							style="height: 487px;"
						>
							<div class="block absolute top-0 right-0 pt-4 pr-4">
								<button type="button" class="rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-klinik-primary" @click="openModal = false">
									<span class="sr-only">Close</span>
									<!-- Heroicon name: outline/x -->
									<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
								</button>
							</div>
							<div class="flex h-full">
								<div class="w-1/2 hidden sm:block"></div>
								<div class="w-full sm:w-1/2">
									<div class="flex h-full items-center">
										<div class="mt-3 text-left">
											<h3 class="text-2xl md:text-3xl mb-3 font-bold text-white leading-relaxed" id="modal-title">
												Layanan Live Chat Consultation hanya tersedia di Estetika Mobile Apps.
											</h3>
											<div class="mt-2">
												<p class="text-sm sm:text-base text-white leading-relaxed">
													Silakan download Estetika Mobile Apps.
												</p>
											</div>
											<div class="flex mt-3">
												<a href="https://apps.apple.com/id/app/klinik-estetika-dr-affandi/id1446841848">
													<img src="{{asset('images/footer/app-store.svg')}}" alt="app" />
												</a>
												<a href="https://play.google.com/store/apps/details?id=com.klinikestetika.affandi">
													<img src="{{asset('images/footer/google-play.svg')}}" alt="app" class="ml-5" />
												</a>
											</div>
											<div class="mt-3 text-white text-sm sm:text-base">Atau scan QR Code</div>
											<div class="mt-3">
												<img src="{{asset('images/home/qr-download.svg')}}" alt="qr-code" class="h-24 w-24">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-layout-app>
@endsection
