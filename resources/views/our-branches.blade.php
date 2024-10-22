@extends("layouts.app")

@section("head")
	<link rel="stylesheet" href="https://unpkg.com/swiper@6/swiper-bundle.min.css" />
@endsection

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div class="px-5 mx-auto max-w-8xl md:px-8 lg:px-16" x-data="selectBranch()" x-init="init()">
		<div class="flex items-center justify-between w-full pt-8 md:pt-16">
			<div>
				<div class="text-lg md:text-3.5xl font-bold md:font-extrabold">Our Branches</div>
			</div>
		</div>

		<div class="hidden pt-6 md:block">
			{{-- desktop --}}
			<div class="flex w-full">
				<div class="w-5/12 mr-4">
					{{-- search bar --}}
					<div class="flex items-center w-full p-2 border border-gray-300 rounded-full bg-klinik-grey">
						<input
							type="text"
							name=""
							class="w-full ml-4 bg-transparent focus:outline-none"
							placeholder="Temukan cabang terdekat"
						>
						<div class="p-2 text-white rounded-full bg-klinik-primary">
							<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
						</div>
					</div>
					<div class="mt-4 space-y-8 overflow-y-auto border-l border-gray-300" style="height: 330px">
						{{-- cabang --}}
						<div class="flex w-full " id="bekasi">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 1, 'bg-transparent': value !== 1 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 1">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 1, 'text-gray-300': value !== 1 }">Bekasi</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 1 }">
										<div>
											Suncity Square Blok A No. 23, Jl. M. Hasibuan, Bekasi 17141
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-bekasi">021-88958088</x-copy-phone-number> || <span class="ml-2">Fax : 021-88960611</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/628111455088?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Bekasi" class="ml-1 font-semibold" :class="{ 'text-klinik-primary': value === 1, 'text-gray-300': value !== 1 }">+628111455088</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 1, 'text-gray-300': value !== 1 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/Klinik+Estetika+dr.+Affandi+-+Bekasi/@-6.247716,106.9256207,12z/data=!4m9!1m2!2m1!1sklinik+estetika+dr.+affandi!3m5!1s0x2e698c2cf0509905:0xbd93b62c7066136f!8m2!3d-6.2476627!4d106.9949206!15sChtrbGluaWsgZXN0ZXRpa2EgZHIuIGFmZmFuZGkiA4gBAZIBEHNraW5fY2FyZV9jbGluaWM" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="flex w-full " id="cibubur">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 2, 'bg-transparent': value !== 2 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 2">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 2, 'text-gray-300': value !== 2 }">Cibubur</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 2 }">
										<div>
											Jl. Alternatif Cibubur Kav. 39 No. 3, Cibubur 17435 (samping Cibubur Times Square)
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-cibubur">021-84593432</x-copy-phone-number> || <span class="ml-2">Fax : 021-84593342</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/6285282315786?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Cibubur" class="font-semibold" :class="{ 'text-klinik-primary': value === 2, 'text-gray-300': value !== 2 }">+6285282315786</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 2, 'text-gray-300': value !== 2 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/Klinik+Estetika+-+Cibubur/@-6.3775985,106.9172986,17z/data=!3m1!4b1!4m5!3m4!1s0x2e699354d55d551f:0xbfd10880ed19f74!8m2!3d-6.3775985!4d106.9194873" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="flex w-full " id="cirebon">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 3, 'bg-transparent': value !== 3 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 3">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 3, 'text-gray-300': value !== 3 }">Cirebon</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 3 }">
										<div>
											CSB Office Park 12-B, Jl. dr. Cipto Mangunkusumo No. 26, Kel. Pekiringan, Kec. Kesambi, Kota Cirebon, Jawa Barat 45131
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-cirebon">0231-8291616</x-copy-phone-number> || <span class="ml-2">Fax : 0231-8291617</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/6281220731039?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Cirebon" class="font-semibold" :class="{ 'text-klinik-primary': value === 3, 'text-gray-300': value !== 3 }">+6281220731039</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 3, 'text-gray-300': value !== 3 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/Klinik+Estetika+dr.+Affandi/@-6.7191642,108.5477732,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6ee27270614989:0xdbe835171188e03b!8m2!3d-6.7191642!4d108.5499619" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="flex w-full " id="denpasar">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 4, 'bg-transparent': value !== 4 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 4">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 4, 'text-gray-300': value !== 4 }">Denpasar</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 4 }">
										<div>
											Jl. Puputan Niti Mandala No. 166, Renon, Denpasar 80226
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-denpasar">0361-4743999</x-copy-phone-number> || <span class="ml-2">Fax : 0361-4745926</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/62811398199?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Denpasar" class="font-semibold" :class="{ 'text-klinik-primary': value === 4, 'text-gray-300': value !== 4 }">+62811398199</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 4, 'text-gray-300': value !== 4 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/Klinik+Estetika+dr.+Affandi/@-8.6733868,115.2284946,15z/data=!4m5!3m4!1s0x2dd240f41313576b:0x9565e7e94caabe16!8m2!3d-8.6733868!4d115.2372493" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="flex w-full " id="depok">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 5, 'bg-transparent': value !== 5 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 5">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 5, 'text-gray-300': value !== 5 }">Depok</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 5 }">
										<div>
											Saladdin Square Blok C No. 16, Jl. Margonda, Depok 16431
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-depok">021-77205854</x-copy-phone-number> || <span class="ml-2">Fax : 021-77205862</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/628111085884?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Depok" class="font-semibold" :class="{ 'text-klinik-primary': value === 5, 'text-gray-300': value !== 5 }">+628111085884</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 5, 'text-gray-300': value !== 5 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/KLINIK+ESTETIKA+DEPOK/@-6.3933615,106.8222151,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69ebe4859299eb:0xba16a131da9ce947!8m2!3d-6.3933615!4d106.8244038" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="flex w-full " id="jakarta-1">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 6, 'bg-transparent': value !== 6 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 6">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 6, 'text-gray-300': value !== 6 }">Jakarta 1</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 6 }">
										<div>
											Jl. Duren Tiga No. 30-B, Pancoran, Jakarta Selatan 12760
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-jakarta1">021-7970548</x-copy-phone-number> || <span class="ml-2">Fax : 021-7987924</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/6285288287056?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Jakarta" class="font-semibold" :class="{ 'text-klinik-primary': value === 6, 'text-gray-300': value !== 6 }">+6285288287056</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 6, 'text-gray-300': value !== 6 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/KLINIK+ESTETIKA+JAKARTA+I/@-6.247716,106.9256207,12z/data=!4m9!1m2!2m1!1sklinik+estetika+dr.+affandi!3m5!1s0x2e69f3cd8b08f249:0xc2fe46c4a0a87b6b!8m2!3d-6.2541643!4d106.8296382!15sChtrbGluaWsgZXN0ZXRpa2EgZHIuIGFmZmFuZGkiA4gBAVocIhprbGluaWsgZXN0ZXRpa2EgZHIgYWZmYW5kaZIBEHNraW5fY2FyZV9jbGluaWOaASRDaGREU1VoTk1HOW5TMFZKUTBGblNVTkplWE5IZG1wblJSQUI" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="flex w-full " id="jakarta-2">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 7, 'bg-transparent': value !== 7 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 7">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 7, 'text-gray-300': value !== 7 }">Jakarta 2</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 7 }">
										<div>
											Kelapa Gading Square Italian Walk Blok C-25, Jl. Raya Boulevard Barat, Kelapa Gading, Jakarta Utara 14240
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-jakarta2">021-45867199</x-copy-phone-number> || <span class="ml-2">Fax : 021-45867198</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/6281290725744?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Jakarta" class="font-semibold" :class="{ 'text-klinik-primary': value === 7, 'text-gray-300': value !== 7 }">+6281290725744</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 7, 'text-gray-300': value !== 7 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/Klinik+Estetika+dr.+Affandi+-+Jakarta+II/@-6.247716,106.9256207,12z/data=!4m9!1m2!2m1!1sklinik+estetika+dr.+affandi!3m5!1s0x2e69f538c713f11f:0xb5064ee8afbe3415!8m2!3d-6.152609!4d106.8925347!15sChtrbGluaWsgZXN0ZXRpa2EgZHIuIGFmZmFuZGkiA4gBAZIBEHNraW5fY2FyZV9jbGluaWM" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="flex w-full " id="jakarta-3">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 8, 'bg-transparent': value !== 8 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 8">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 8, 'text-gray-300': value !== 8 }">Jakarta 3</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 8 }">
										<div>
											Jl. Panjang No. 37-B, Kebon Jeruk, Jakarta Barat 11530
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-jakarta3">021-53653766</x-copy-phone-number> || <span class="ml-2">Fax : 021-53653770</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/6281289768315?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Jakarta" class="font-semibold" :class="{ 'text-klinik-primary': value === 8, 'text-gray-300': value !== 8 }">+6281289768315</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 8, 'text-gray-300': value !== 8 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/Klinik+Estetika+Dr+Affandi/@-6.1928005,106.7669446,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f71e41c619d3:0x1d58b9ca30f12b96!8m2!3d-6.1928005!4d106.7691333" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="flex w-full " id="makassar">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 9, 'bg-transparent': value !== 9 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 9">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 9, 'text-gray-300': value !== 9 }">Makassar</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 9 }">
										<div>
											Jl. Boulevard Raya - Ruko No. 1-P, Panakukkang, Makassar 90231
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-makassar">0411-4091331</x-copy-phone-number> || <span class="ml-2">Fax : 0411-4091332</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/628114440464?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Makassar" class="font-semibold" :class="{ 'text-klinik-primary': value === 9, 'text-gray-300': value !== 9 }">+628114440464</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 9, 'text-gray-300': value !== 9 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/Aesthetic+Clinic+dr+Affandi/@-5.1551732,119.4207455,14z/data=!4m5!3m4!1s0x2dbee2c0d07d42ff:0xa07b31bf43e2b194!8m2!3d-5.1551733!4d119.438255" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="flex w-full " id="medan">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 10, 'bg-transparent': value !== 10 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 10">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 10, 'text-gray-300': value !== 10 }">Medan</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 10 }">
										<div>
											Jl. Abdullah Lubis No. 36, Medan 20154
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-medan">061-4579899</x-copy-phone-number> || <span class="ml-2">Fax : 061-4563797</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/628116552021?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Medan" class="font-semibold" :class="{ 'text-klinik-primary': value === 10, 'text-gray-300': value !== 10 }">+628116552021</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 10, 'text-gray-300': value !== 10 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/Klinik+Estetika+-+Medan/@3.5770402,98.6574129,17z/data=!3m1!4b1!4m5!3m4!1s0x30312fd5f34a4e47:0xb2abaa6a58e83f03!8m2!3d3.5770715!4d98.6596025" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="flex w-full " id="semarang">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 11, 'bg-transparent': value !== 11 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 11">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 11, 'text-gray-300': value !== 11 }">Semarang</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 11 }">
										<div>
											Jl. Kyai Saleh No. 9, Semarang 50243
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-semarang">024-8444333</x-copy-phone-number> || <span class="ml-2">Fax : 024-8442082</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/6285600656864?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Semarang" class="font-semibold" :class="{ 'text-klinik-primary': value === 11, 'text-gray-300': value !== 11 }">+6285600656864</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 11, 'text-gray-300': value !== 11 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/Klinik+Estetika/@-6.9965627,110.408206,15z/data=!4m12!1m6!3m5!1s0x2e708b44ca51659b:0x195cf5db95fb1188!2sKlinik+Estetika!8m2!3d-6.9947098!4d110.413785!3m4!1s0x2e708b44ca51659b:0x195cf5db95fb1188!8m2!3d-6.9947098!4d110.413785" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="flex w-full " id="solo">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 12, 'bg-transparent': value !== 12 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 12">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 12, 'text-gray-300': value !== 12 }">Solo</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 12 }">
										<div>
											Jl. dr. Muwardi No. 11, Solo 57142
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-solo">0271-739799</x-copy-phone-number> || <span class="ml-2">Fax : 0271-739568</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/6282243526585?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Solo" class="font-semibold" :class="{ 'text-klinik-primary': value === 12, 'text-gray-300': value !== 12 }">+6282243526585</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 12, 'text-gray-300': value !== 12 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/KLINIK+ESTETIKA+SURAKARTA/@-7.5633048,110.8040651,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a1429f38b974d:0x415140db1eb1e3d9!8m2!3d-7.5633267!4d110.8063715" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="flex w-full " id="surabaya">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 13, 'bg-transparent': value !== 13 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 13">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 13, 'text-gray-300': value !== 13 }">Surabaya</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 13 }">
										<div>
											Jl. Raya Diponegoro No. 144, Surabaya 60264
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-surabaya">031-5674999</x-copy-phone-number> || <span class="ml-2">Fax : 031-5634999</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/62811311348?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Surabaya" class="font-semibold" :class="{ 'text-klinik-primary': value === 13, 'text-gray-300': value !== 13 }">+62811311348</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 13, 'text-gray-300': value !== 13 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/Klinik+Estetika+dr.+Affandi/@-7.2818417,112.7302388,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd7fbeb8141fced:0xded09c7ebdf04fcf!8m2!3d-7.2818264!4d112.7324505" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="flex w-full " id="tangerang">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 14, 'bg-transparent': value !== 14 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 14">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 14, 'text-gray-300': value !== 14 }">Tangerang</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 14 }">
										<div>
											Ruko CBD Blok A-3, 7, 8, BSD (Depan Ocean Park), Jl. Pahlawan Seribu, Bumi Serpong Damai, Tangerang 15321
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-tangerang">021-53164299</x-copy-phone-number> || <span class="ml-2">Fax : 021-53164298</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/6281289768316?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Tangerang" class="font-semibold" :class="{ 'text-klinik-primary': value === 14, 'text-gray-300': value !== 14 }">+6281289768316</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 14, 'text-gray-300': value !== 14 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/Estetika+dr.affandi+BSD/@-6.3014071,106.6324971,13z/data=!4m9!1m2!2m1!1sklinik+estetika+dr.+affandi+near+Tangerang,+Tangerang+City,+Banten!3m5!1s0x2e69fb25635ae9b1:0xca9e65b91e7c5433!8m2!3d-6.293729!4d106.6666577!15sCkJrbGluaWsgZXN0ZXRpa2EgZHIuIGFmZmFuZGkgbmVhciBUYW5nZXJhbmcsIFRhbmdlcmFuZyBDaXR5LCBCYW50ZW4iA4gBAZIBEHNraW5fY2FyZV9jbGluaWM" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="flex w-full " id="yogyakarta">
							<div class="w-1 h-20 rounded-r" :class="{ 'bg-klinik-primary': value === 15, 'bg-transparent': value !== 15 }"></div>
							<div class="w-full pl-8 pr-4">
								<div class="cursor-pointer" @click="value = 15">
									<div class="text-3.5xl text-klinik-primary font-extrabold mb-2 cursor-pointer" :class="{ 'text-klinik-primary': value === 15, 'text-gray-300': value !== 15 }">Yogyakarta</div>
									<div class="text-sm cursor-pointer" :class="{ 'text-gray-300': value !== 15 }">
										<div>
											Jl. Cik Ditiro No. 15, Yogyakarta 55223
										</div>
										<div class="flex flex-wrap items-center mt-1">
											Phone : <x-copy-phone-number id="phone-yogyakarta">0274-555599</x-copy-phone-number> || <span class="ml-2">Fax : 0274-554188</span>
										</div>
										<div class="items-center block gap-4 mt-1 lg:flex">
											<div class="flex items-center">
												<img src="{{ asset('images/branches/wa.svg') }}" alt="icon-wa" class="mr-1">
												WA : <a href="https://wa.me/628112655604?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Yogyakarta" class="font-semibold" :class="{ 'text-klinik-primary': value === 15, 'text-gray-300': value !== 15 }">+628112655604</a>
											</div>
											<div class="flex items-center" :class="{ 'text-klinik-primary': value === 15, 'text-gray-300': value !== 15 }">
												<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
												<a href="https://www.google.com/maps/place/Klinik+Estetika+Jogja/@-7.7793534,110.3730753,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a5834bf91ad21:0x334af0537cef8843!8m2!3d-7.7793496!4d110.3752308" target="_blank" rel="noopener" class="text-sm font-bold">Lihat lokasi di maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
				<div class="w-7/12">
					<template x-if="value === 1">
						<x-slideshow.desktop-bekasi />
					</template>
					<template x-if="value === 2">
						<x-slideshow.desktop-cibubur />
					</template>
					<template x-if="value === 3">
						<x-slideshow.desktop-cirebon />
					</template>
					<template x-if="value === 4">
						<x-slideshow.desktop-denpasar />
					</template>
					<template x-if="value === 5">
						<x-slideshow.desktop-depok />
					</template>
					<template x-if="value === 6">
						<x-slideshow.desktop-jakarta-1 />
					</template>
					<template x-if="value === 7">
						<x-slideshow.desktop-jakarta-2 />
					</template>
					<template x-if="value === 8">
						<x-slideshow.desktop-jakarta-3 />
					</template>
					<template x-if="value === 9">
						<x-slideshow.desktop-makassar />
					</template>
					<template x-if="value === 10">
						<x-slideshow.desktop-medan />
					</template>
					<template x-if="value === 11">
						<x-slideshow.desktop-semarang />
					</template>
					<template x-if="value === 12">
						<x-slideshow.desktop-solo />
					</template>
					<template x-if="value === 13">
						<x-slideshow.desktop-surabaya />
					</template>
					<template x-if="value === 14">
						<x-slideshow.desktop-tangerang />
					</template>
					<template x-if="value === 15">
						<x-slideshow.desktop-yogyakarta />
					</template>
				</div>
			</div>
		</div>

		<div class="mt-6 md:hidden">
			{{-- mobile --}}
			<div class="mt-4">
				{{-- tab --}}
				<div class="relative">
					<div class="flex border-b border-gray-200">
							<div class="relative w-full swiper-container swiper-branch">
									<div class="swiper-wrapper">
										<a href="#" id="bekasi" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" :class="{ 'border-klinik-primary text-klinik-primary': value === 1, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 1 }" @click="value = 1">
											Bekasi
										</a>

										<a href="#" id="cibubur" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" :class="{ 'border-klinik-primary text-klinik-primary': value === 2, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 2 }" @click="value = 2">
											Cibubur
										</a>

										<a href="#" id="cirebon" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" :class="{ 'border-klinik-primary text-klinik-primary': value === 3, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 3 }" @click="value = 3">
											Cirebon
										</a>

										<a href="#" id="denpasar" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" :class="{ 'border-klinik-primary text-klinik-primary': value === 4, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 4 }" @click="value = 4">
											Denpasar
										</a>

										<a href="#" id="depok" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" :class="{ 'border-klinik-primary text-klinik-primary': value === 5, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 5 }" @click="value = 5">
											Depok
										</a>

										<a href="#" id="jakarta-1" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" style="min-width: 90px;" :class="{ 'border-klinik-primary text-klinik-primary': value === 6, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 6 }" @click="value = 6">
											<div class="">
												Jakarta 1
											</div>
										</a>

										<a href="#" id="jakarta-2" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" style="min-width: 90px;" :class="{ 'border-klinik-primary text-klinik-primary': value === 7, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 7 }" @click="value = 7">
											<div class="">
												Jakarta 2
											</div>
										</a>

										<a href="#" id="jakarta-3" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" style="min-width: 90px;" :class="{ 'border-klinik-primary text-klinik-primary': value === 8, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 8 }" @click="value = 8">
											<div class="">
												Jakarta 3
											</div>
										</a>

										<a href="#" id="makassar" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" :class="{ 'border-klinik-primary text-klinik-primary': value === 9, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 9 }" @click="value = 9">
											Makassar
										</a>

										<a href="#" id="medan" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" :class="{ 'border-klinik-primary text-klinik-primary': value === 10, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 10 }" @click="value = 10">
											Medan
										</a>

										<a href="#" id="semarang" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" :class="{ 'border-klinik-primary text-klinik-primary': value === 11, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 11 }" @click="value = 11">
											Semarang
										</a>

										<a href="#" id="solo" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" :class="{ 'border-klinik-primary text-klinik-primary': value === 12, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 12 }" @click="value = 12">
											Solo
										</a>
										<a href="#" id="surabaya" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" :class="{ 'border-klinik-primary text-klinik-primary': value === 13, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 13 }" @click="value = 13">
											Surabaya
										</a>

										<a href="#" id="tangerang" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" :class="{ 'border-klinik-primary text-klinik-primary': value === 14, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 14 }" @click="value = 14">
											Tangerang
										</a>

										<a href="#" id="yogyakarta" class="px-2 py-2 text-lg font-bold text-center border-b-2 swiper-slide" :class="{ 'border-klinik-primary text-klinik-primary': value === 15, 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': value !== 15 }" @click="value = 15">
											Yogyakarta
										</a>
									</div>
							</div>
					</div>
					<!-- Add navigation -->
					<div class="flex justify-between w-full max-w-8xl">
							<div
									class="absolute z-30 bg-white rounded-full swiper-btn-prev text-klinik-primary -left-4 md:-left-6"
									style="top: 20%"
							>
									<svg
									class="w-6 h-6 md:w-7 md:h-7"
									fill="none"
									stroke="currentColor"
									viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg"
									>
									<path
											stroke-linecap="round"
											stroke-linejoin="round"
											stroke-width="2"
											d="M15 19l-7-7 7-7"
									></path>
									</svg>
							</div>
							<div
									class="absolute z-30 bg-white rounded-full swiper-btn-next text-klinik-primary -right-4 md:-right-6"
									style="top: 20%"
							>
									<svg
									class="w-6 h-6 md:w-7 md:h-7"
									fill="none"
									stroke="currentColor"
									viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg"
									>
									<path
											stroke-linecap="round"
											stroke-linejoin="round"
											stroke-width="2"
											d="M9 5l7 7-7 7"
									></path>
									</svg>
							</div>
					</div>
				</div>
				{{-- content --}}
				<div>
					<template x-if="value === 1">
						<x-slideshow.mobile-bekasi />
					</template>
					<template x-if="value === 2">
						<x-slideshow.mobile-cibubur />
					</template>
					<template x-if="value === 3">
						<x-slideshow.mobile-cirebon />
					</template>
					<template x-if="value === 4">
						<x-slideshow.mobile-denpasar />
					</template>
					<template x-if="value === 5">
						<x-slideshow.mobile-depok />
					</template>
					<template x-if="value === 6">
						<x-slideshow.mobile-jakarta-1 />
					</template>
					<template x-if="value === 7">
						<x-slideshow.mobile-jakarta-2 />
					</template>
					<template x-if="value === 8">
						<x-slideshow.mobile-jakarta-3 />
					</template>
					<template x-if="value === 9">
						<x-slideshow.mobile-makassar />
					</template>
					<template x-if="value === 10">
						<x-slideshow.mobile-medan />
					</template>
					<template x-if="value === 11">
						<x-slideshow.mobile-semarang />
					</template>
					<template x-if="value === 12">
						<x-slideshow.mobile-solo />
					</template>
					<template x-if="value === 13">
						<x-slideshow.mobile-surabaya />
					</template>
					<template x-if="value === 14">
						<x-slideshow.mobile-tangerang />
					</template>
					<template x-if="value === 15">
						<x-slideshow.mobile-yogyakarta />
					</template>
				</div>
			</div>
		</div>

		<div class="my-10 md:hidden">
			<hr class="bg-gray-500">
		</div>

		{{-- footer info --}}
		<div class="block mt-0 mb-16 md:mt-40 md:flex">
			<div class="w-full md:w-1/2">
				<div class="text-lg md:text-3.5xl font-bold md:font-extrabold">Get In Touch With Us</div>
				<div class="mt-4 text-xs md:text-sm">
					Apabila Anda mempunyai pertanyaan seputar produk<br>	
					maupun pelayanan Estetika dr. Affandi, silahkan<br>	
					hubungi kami. 

				</div>
				<div class="items-center hidden space-x-6 md:flex mt-7 md:mt-12">
					<a href="https://www.facebook.com/klinikestetika" target="_blank" rel="noopener" class="p-2 rounded-full bg-klinik-primary">
						<img src="{{ asset('images/branches/fb.png') }}" alt="icon" class="w-7 h-7">
					</a>
					<a href="https://twitter.com/klinikestetika" target="_blank" rel="noopener" class="p-2 rounded-full bg-klinik-primary">
						<img src="{{ asset('images/branches/twt.png') }}" alt="icon" class="w-7 h-7">
					</a>
					<a href="https://www.instagram.com/klinikestetika" target="_blank" rel="noopener" class="p-2 rounded-full bg-klinik-primary">
						<img src="{{ asset('images/branches/ig.png') }}" alt="icon" class="w-7 h-7">
					</a>
					<a href="https://www.youtube.com/channel/UCAlLbnKcaP-FYtWakHSGCJg" target="_blank" rel="noopener" class="p-2 rounded-full bg-klinik-primary">
						<img src="{{ asset('images/branches/yt.png') }}" alt="icon" class="w-7 h-7">
					</a>
					<a href="https://www.tiktok.com/@klinikestetika?lang=en" target="_blank" rel="noopener" class="p-2 rounded-full bg-klinik-primary">
						<img src="{{ asset('images/branches/tt.png') }}" alt="icon" class="w-7 h-7">
					</a>
				</div>
			</div>
			<div class="w-full md:w-1/2">
				<div class="mt-8 space-y-6 md:mt-0">
					<div class="block gap-6 md:flex">
						<div class="w-full mb-6 md:mb-0">
							<label for="name" class="block text-sm font-bold">Nama</label>
							<div class="mt-4">
								<input required type="text" name="name" id="name" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-100 bg-gray-50 rounded-md px-3 py-2.5 md:py-3" placeholder="Nama Anda">
							</div>
						</div>
						<div class="w-full">
							<label for="email" class="block text-sm font-bold">Email</label>
							<div class="mt-4">
								<input required type="text" name="email" id="email" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-100 bg-gray-50 rounded-md px-3 py-2.5 md:py-3" placeholder="Alamat Email">
							</div>
						</div>
					</div>
					<div>
						<label for="subject" class="block text-sm font-bold">Subjek</label>
						<div class="mt-4">
							<input required type="text" name="subject" id="subject" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-100 bg-gray-50 rounded-md px-3 py-2.5 md:py-3" placeholder="Subjek Anda">
						</div>
					</div>
					<div>
						<label for="message" class="block text-sm font-bold">Pesan</label>
						<div class="mt-4">
							<input required type="text" name="message" id="message" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-100 bg-gray-50 rounded-md px-3 py-2.5 md:py-3" placeholder="Mulai mengetik disini">
						</div>
					</div>
				</div>
				<div class="mt-10">
					<button
						class="w-full py-2 font-semibold text-white rounded-full bg-klinik-primary btn-focus-primary"
					>
						Kirim
					</button>
				</div>
			</div>
		</div>
	</div>

	<script src="https://unpkg.com/swiper@6/swiper-bundle.min.js"></script>

	<script>
		function selectBranch() {
			return {
				value: 1,
				init() {
					if (window.location.hash === '#bekasi') {
						this.value = 1
					}
					if (window.location.hash === '#cibubur') {
						this.value = 2
					}
					if (window.location.hash === '#cirebon') {
						this.value = 3
					}
					if (window.location.hash === '#denpasar') {
						this.value = 4
					}
					if (window.location.hash === '#depok') {
						this.value = 5
					}
					if (window.location.hash === '#jakarta-1') {
						this.value = 6
					}
					if (window.location.hash === '#jakarta-2') {
						this.value = 7
					}
					if (window.location.hash === '#jakarta-3') {
						this.value = 8
					}
					if (window.location.hash === '#makassar') {
						this.value = 9
					}
					if (window.location.hash === '#medan') {
						this.value = 10
					}
					if (window.location.hash === '#semarang') {
						this.value = 11
					}
					if (window.location.hash === '#solo') {
						this.value = 12
					}
					if (window.location.hash === '#surabaya') {
						this.value = 13
					}
					if (window.location.hash === '#tangerang') {
						this.value = 14
					}
					if (window.location.hash === '#yogyakarta') {
						this.value = 15
					}
				}
			}
		}
		var swiperBranch = new Swiper('.swiper-branch', {
			navigation: {
				nextEl: '.swiper-btn-next',
				prevEl: '.swiper-btn-prev',
				disabledClass: 'hidden'
			},
			freeMode: true,
			slidesPerView: 3,
			spaceBetween: 10,
		});
	</script>
</x-layout-app>

@endsection
