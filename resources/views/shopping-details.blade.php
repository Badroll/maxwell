@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter="false" withBottomNavbar="false">
	<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
		{{-- breadcrumbs --}}
		<div class="pt-7 text-xs md:flex items-center hidden">
			<a href="/" class="text-klinik-primary font-medium">Home</a>
			<span class="px-2 hidden md:flex">•</span>
			<span class="px-2 flex md:hidden">
				<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
			</span>
			<a href="/cart" class="text-klinik-primary font-medium">Keranjang Belanja</a>
			<span class="px-2 hidden md:flex">•</span>
			<span class="px-2 flex md:hidden">
				<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
			</span>
			<span>Rincian Belanja</span>
		</div>

		<div class="block md:flex py-6 md:divide-x" x-data="ShoppingDetails()" x-init="init()">
			{{-- metode pengiriman --}}
			<div class="md:w-7/12 md:mr-8">
				<div class="flex items-center mb-3">
					<a href="/cart" class="mr-3 md:hidden">
						<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
					</a>
					<div class="text-lg md:text-2xl font-bold" @click="addressAlreadyAvailable = !addressAlreadyAvailable">Metode Pengiriman</div>
				</div>
				{{-- tab pilih metode --}}
				<div class="mb-6">
					<div class="border-b-2 border-gray-200">
						<nav class="-mb-px flex" aria-label="Tabs">
							<a href="#" class="w-1/2 py-4 px-1 text-center border-b-2 font-bold uppercase" :class="{ 'border-klinik-primary text-klinik-primary': tabValue === 1, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tabValue !== 1 }" @click="tabValue = 1">
								Ambil di Cabang
							</a>
							<a href="#" class="w-1/2 py-4 px-1 text-center border-b-2 font-bold uppercase" :class="{ 'border-klinik-primary text-klinik-primary': tabValue === 2, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tabValue !== 2 }" @click="tabValue = 2">
								Kirim ke Rumah
							</a>
						</nav>
					</div>
				</div>
				{{-- ambil di cabang --}}
				<template x-if="tabValue === 1">
					<div>
						<div class="text-sm text-white bg-klinik-primary rounded-xl flex py-3 px-4 mb-9 opacity-80">
							<div class="mr-2.5" style="padding-top: 5px">
								<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
							</div>
							<div>
								<ul class="list-outside pl-4 list-disc text-sm mt-1">
									<li>Untuk produk yang diambil di cabang akan diproses setiap hari Senin sampai Sabtu (Kecuali Hari Libur Nasional)</li>
									<li>Jika Anda melakukan pembayaran sebelum pukul 12.00 WIB, maka pesanan Anda akan diproses pada hari yang sama</li>
								</ul>
							</div>
						</div>
						<form action="#" class="mb-8 md:mb-0">
							<div>
								<div class="w-full block md:flex md:gap-4 lg:gap-6 space-y-4 md:space-y-0 mb-4 md:mb-8">
									<div class="w-full">
										<label for="selectBranch" class="block text-sm font-bold">Pilih Cabang <span class="ordinal text-red-500">*</span></label>
										<div class="text-sm mt-1 w-full">
											<div class="relative flex">
												<select id="selectBranch" name="selectBranch" class="appearance-none shadow-sm focus:outline-none block w-full sm:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5">
													<option value="Bekasi">Cabang Bekasi</option>
													<option value="Cibubur">Cabang Cibubur</option>
													<option value="Cirebon">Cabang Cirebon</option>
													<option value="Denpasar">Cabang Denpasar</option>
													<option value="Depok">Cabang Depok</option>
													<option value="Jakarta 1">Cabang Jakarta 1</option>
													<option value="Jakarta 2">Cabang Jakarta 2</option>
													<option value="Jakarta 3">Cabang Jakarta 3</option>
													<option value="Makassar">Cabang Makassar</option>
													<option value="Medan">Cabang Medan</option>
													<option value="Semarang">Cabang Semarang</option>
													<option value="Solo">Cabang Solo</option>
													<option value="Surabaya">Cabang Surabaya</option>
													<option value="Tangerang">Cabang Tangerang</option>
													<option value="Yogyakarta">Cabang Yogyakarta</option>
												</select>
												<div class="flex items-center text-gray-600 absolute right-2 top-3">
													<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<label for="address" class="block text-sm font-bold">Catatan Order <span class="ordinal text-red-500">*</span></label>
									<div class="mt-1">
										<textarea required id="address" name="address" rows="4" class="shadow-sm focus:outline-none block w-full sm:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5" placeholder="Contoh : ambil jam 15.00 WIB"></textarea>
									</div>
								</div>
							</div>
						</form>
					</div>
				</template>
				{{-- kirim kerumah --}}
				<template x-if="tabValue === 2">
					<div>
						<div class="text-sm text-white bg-klinik-primary rounded-xl flex py-3 px-4 mb-9 opacity-80">
							<div class="mr-2.5">
								<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
							</div>
							<div>
								Jika Anda melakukan pembayaran sebelum pukul 12.00 WIB, maka pesanan Anda akan dikirimkan pada hari yang sama (kecuali hari Sabtu, Minggu dan Libur Nasional)
							</div>
						</div>
						<form action="#" class="mb-8 md:mb-0">
							<div x-show="addressAlreadyAvailable === true">
								<div class="px-4 py-5 mb-6 text-xs md:text-sm rounded-xl" style="box-shadow: 0px 5px 20px 0px rgba(12, 67, 183, 0.04);">
									<div class="font-bold mb-4">
										Alamat Pengiriman
									</div>
									<div>
										Jl. Ir. Juanda No. 2156, Segoro Tambak, Sedati, Kab. Sidoarjo
									</div>
									<div>
										KAB. SIDOARJO, JAWA TIMUR, 61253
									</div>
								</div>
								<div>
									<button
										type="button"
										class="text-sm font-bold border-2 border-klinik-primary text-klinik-primary py-1.5 w-full rounded-full"
										@click="addressAlreadyAvailable = false"
									>
										UBAH ALAMAT
									</button>
								</div>
							</div>
							<div x-show="addressAlreadyAvailable === false">
								<div class="w-full block md:flex md:gap-4 lg:gap-6 space-y-4 md:space-y-0 mb-4 md:mb-8">
									<div class="md:w-1/3">
										<label for="province" class="block text-sm font-bold">Provinsi <span class="ordinal text-red-500">*</span></label>
										<div class="mt-1">
											<div class="relative flex">
												<select id="province" name="province" class="appearance-none shadow-sm focus:outline-none block w-full sm:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5" x-model="selectedProvince" @click="handleChangeProvince()">
													<option disabled value=""></option>
													<template x-for="data in province">
														<option :value="data.id" x-text="data.nama"></option>
													</template>
												</select>
												<div class="flex items-center text-gray-600 absolute right-2 top-3">
													<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
												</div>
											</div>
										</div>
									</div>
									<div class="md:w-1/3">
										<label for="city" class="block text-sm font-bold">Kota <span class="ordinal text-red-500">*</span></label>
										<div class="mt-1">
											<div class="relative flex">
												<select id="city" name="city" :disabled="selectedProvince === ''" class="appearance-none shadow-sm focus:outline-none block w-full sm:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5" x-model="selectedCity">
													<option disabled value=""></option>
													<template x-for="city in cities">
														<option :value="city.id" x-text="city.nama"></option>
													</template>
												</select>
												<div class="flex items-center text-gray-600 absolute right-2 top-3">
													<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
												</div>
											</div>
										</div>
									</div>
									<div class="md:w-1/3">
										<label for="postalCode" class="block text-sm font-bold">Kode Pos <span class="ordinal text-red-500">*</span></label>
										<div class="mt-1">
											<input required type="text" name="postalCode" id="postalCode" class="shadow-sm focus:outline-none block w-full sm:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5">
										</div>
									</div>
								</div>
								<div>
									<label for="address" class="block text-sm font-bold">Alamat <span class="ordinal text-red-500">*</span></label>
									<div class="mt-1">
										<textarea required id="address" name="address" rows="4" class="shadow-sm focus:outline-none block w-full sm:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5"></textarea>
									</div>
								</div>
							</div>
						</form>
					</div>
				</template>
			</div>
			{{-- rincian belanja --}}
			<div class="md:w-5/12 md:pl-8 pb-48 md:pb-0">
				<hr class="md:hidden">
				<div class="mt-5 md:mt-0 mb-5">
					<div class="text-2xl font-bold mb-3">Rincian Belanja</div>
				</div>
				<div>
					<div class="space-y-4">
						<div>
							<div class="flex justify-between font-bold text-sm mb-1">
								<div>Bedak Tabur EKSOTIKA 01-BEIGE</div>
								<div>Rp. 101.000</div>
							</div>
							<div class="text-sm">
								1 x Rp. 101.000
							</div>
						</div>
						<div>
							<div class="flex justify-between font-bold text-sm mb-1">
								<div>Bedak Tabur EKSOTIKA 01-BEIGE</div>
								<div>Rp. 101.000</div>
							</div>
							<div class="text-sm">
								1 x Rp. 101.000
							</div>
						</div>
						<div>
							<div class="flex justify-between font-bold text-sm mb-1">
								<div>Bedak Tabur EKSOTIKA 01-BEIGE</div>
								<div>Rp. 101.000</div>
							</div>
							<div class="text-sm">
								1 x Rp. 101.000
							</div>
						</div>
					</div>
					<div class="my-5">
						<hr>
					</div>
					<div class="text-sm text-white bg-klinik-primary rounded-xl flex items-center justify-between py-3 px-4 mb-5 mt-5 md:mt-0 cursor-pointer opacity-80" @click="openModal = true">
						<div>
							Anda punya kode promo? Masukkan disini
						</div>
						<div>
							<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
						</div>
					</div>
					<hr>
					<div class="my-5 space-y-3 font-bold text-sm">
						<div class="flex items-center justify-between">
							<div>Subtotal</div>
							<div class="text-right">Rp. 256.000</div>
						</div>
						<div class="flex items-center justify-between">
							<div>Promo</div>
							<div class="text-right">Rp. 0</div>
						</div>
						<div class="flex items-center justify-between">
							<div>Berat</div>
							<div class="text-right">1 Kg</div>
						</div>
						<div class="flex items-center justify-between">
							<div>Biaya Pengiriman</div>
							<div class="text-right">Rp. 20.000</div>
						</div>
					</div>
					<hr>
					<div class="mt-5 font-bold">
						<div class="flex items-center justify-between">
							<div>Total</div>
							<div class="text-right">Rp. 276.000</div>
						</div>
					</div>
					<div class="mt-6 hidden md:block">
						<a
							href="#"
							class="px-10 py-2 w-full block text-center text-sm md:text-base tracking-wider bg-klinik-primary text-white rounded-full font-bold btn-focus-primary"
						>
							LANJUTKAN PEMBAYARAN
						</a>
					</div>
				</div>
			</div>

			{{-- ringkasan belanja fixed bottom navigation --}}
			<div class="mt-8 md:hidden">
				<div class="p-6 z-10 fixed left-0 bottom-0 w-full bg-white" style="box-shadow: 0px -2px 20px 0px rgba(0, 0, 0, 0.16);">
					<div class="font-bold text-lg mb-4">
						Ringkasan Belanja
					</div>
					<div class="flex items-center justify-between mb-6">
						<div class="text-xs">Total Semua</div>
						<div class="font-bold">Rp. 276.000</div>
					</div>
					<a
						href="#"
						class="px-10 py-2 w-full block text-center text-sm md:text-base tracking-wider bg-klinik-primary text-white rounded-full font-bold btn-focus-primary"
					>
						LANJUTKAN PEMBAYARAN
					</a>
				</div>
			</div>

			{{-- modal promosi --}}
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
						class="inline-block align-bottom bg-white rounded-t-lg md:rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all md:my-8 md:align-middle md:max-w-lg md:w-full md:p-8 w-full"
						@click.away="openModal = false"
					>
						<div class="absolute top-0 right-0 pt-3 pr-3">
							<button type="button" class="bg-white rounded-md text-gray-800 hover:bg-gray-100 p-1 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" @click="openModal = false">
								<span class="sr-only">Close</span>
								<!-- Heroicon name: outline/x -->
								<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
							</button>
						</div>
						<div x-show="promoApplied === false">
							<div class="md:flex md:items-start">
								<div class="w-full mt-3 text-center md:mt-0 md:text-left">
									<h3 class="leading-6 font-bold text-gray-900 md:text-xl" id="modal-title">
										Punya Kode Promo?
									</h3>
									<div class="mt-2">
										<p class="text-sm text-gray-500">
											Masukkan kode Promonya di bawah ini!
										</p>
									</div>
									<div class="my-4">
										<input required type="text" name="email" id="email" class="shadow-sm focus:outline-none block w-full md:text-sm bg-gray-50 rounded-md px-3 py-2.5 md:py-3 text-sm" placeholder="Contoh: az625zx777127653">
									</div>
								</div>
							</div>
							<div class="mt-6 md:flex md:flex-row-reverse w-full">
								<button type="button" class="w-full inline-flex justify-center rounded-full border border-transparent shadow-sm px-4 py-2 bg-klinik-primary text-base font-semibold text-white hover:bg-klinik-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-klinik-primary md:text-sm" @click="promoApplied = true">
									SUBMIT
								</button>
							</div>
							<div class="pt-6 pb-4 md:pb-0 text-center">
								<a href="/promo" target="_blank" class="text-xs font-bold text-klinik-primary">Lihat Semua Promo</a>
							</div>
						</div>
						<div x-show="promoApplied === true">
							<div class="md:flex md:items-start">
								<div class="w-full mt-3 text-center md:mt-0 md:text-left py-8">
									<h3 class="leading-6 text-center font-bold text-gray-900" id="modal-title">
										Kode Promo diterapkan.
									</h3>
									<div class="mt-2">
										<p class="text-sm text-center text-gray-500">
											Selamat menikmati Promo dari kami
										</p>
									</div>
								</div>
							</div>
							<div class="mt-6 md:flex md:flex-row-reverse w-full">
								<button type="button" class="w-full inline-flex justify-center rounded-full border border-transparent shadow-sm px-4 py-2 bg-klinik-primary text-base font-semibold text-white hover:bg-klinik-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-klinik-primary md:text-sm" @click="openModal = false ; promoApplied = false">
									OKE
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="hidden md:block">
		<x-footer />
	</div>

	<script>
		function ShoppingDetails() {
			return {
				openModal: false, 
				promoApplied: false, 
				addressAlreadyAvailable: false, 
				tabValue: 1,
				province: [],
				selectedProvince: '',
				selectedCity: '',
				cities: [],
				init() {
					fetch(`https://dev.farizdotid.com/api/daerahindonesia/provinsi`)
						.then(res => res.json())
						.then(data => {
							this.province = data.provinsi;
						});
				},
				handleChangeProvince() {
					fetch(`https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=${this.selectedProvince}`)
						.then(res => res.json())
						.then(data => {
							console.log(data)
							this.cities = data.kota_kabupaten;
						});
				}
			}
		}
	</script>
</x-layout-app>

@endsection
