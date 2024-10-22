@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div class="pt-10 mb-6 md:mb-16">
		<div class="hidden md:flex items-center justify-center h-40 bg-grad-header w-full">
			<div class="tracking-wider text-5xl text-white font-extrabold">Tim Dokter</div>
		</div>
		<div class="block md:hidden px-5">
			<div class="md:text-2xl text-xl font-extrabold">Tim Dokter</div>
		</div>
	</div>
	
	<div class="md:max-w-8xl max-w-full mx-auto mb-20 px-5 md:px-8 lg:px-16"  x-data="{ city: 'Semarang' }">
		<div class="block md:flex">
			{{-- select cabang -> mobile --}}
			<div class="text-sm my-6 w-full md:hidden">
				<div class="relative flex">
					<label for="tabs" class="sr-only">pilih sesi</label>
					<select id="tabs" name="tabs" class="focus:ring-klinik-primary focus:border-klinik-primary font-semibold appearance-none focus:outline-none p-2.5 w-full border-gray-200 border rounded-md" x-model="city">
						<option value="Semarang">Semarang</option>
						<option value="Bekasi">Bekasi</option>
						<option value="Cibubur">Cibubur</option>
						<option value="Cirebon">Cirebon</option>
						<option value="Denpasar">Denpasar</option>
						<option value="Depok">Depok</option>
					</select>
					<div class="flex items-center text-gray-600 absolute right-2 top-3">
						<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
					</div>
				</div>
			</div>
			{{-- navigator cabang -> desktop --}}
			<div class="w-1/4 hidden md:block">
				<div class="text-xl">
					<div class="py-3 px-5 cursor-pointer" :class="{ 'border-l-4 border-klinik-primary text-klinik-primary text-2xl font-extrabold': city === 'Semarang', 'border-l border-gray-200': city !== 'Semarang' }" x-on:click="city = 'Semarang'">Semarang</div>
					<div class="py-3 px-5 cursor-pointer" :class="{ 'border-l-4 border-klinik-primary text-klinik-primary text-2xl font-extrabold': city === 'Bekasi', 'border-l border-gray-200': city !== 'Bekasi' }" x-on:click="city = 'Bekasi'">Bekasi</div>
					<div class="py-3 px-5 cursor-pointer" :class="{ 'border-l-4 border-klinik-primary text-klinik-primary text-2xl font-extrabold': city === 'Cibubur', 'border-l border-gray-200': city !== 'Cibubur' }" x-on:click="city = 'Cibubur'">Cibubur</div>
					<div class="py-3 px-5 cursor-pointer" :class="{ 'border-l-4 border-klinik-primary text-klinik-primary text-2xl font-extrabold': city === 'Cirebon', 'border-l border-gray-200': city !== 'Cirebon' }" x-on:click="city = 'Cirebon'">Cirebon</div>
					<div class="py-3 px-5 cursor-pointer" :class="{ 'border-l-4 border-klinik-primary text-klinik-primary text-2xl font-extrabold': city === 'Denpasar', 'border-l border-gray-200': city !== 'Denpasar' }" x-on:click="city = 'Denpasar'">Denpasar</div>
					<div class="py-3 px-5 cursor-pointer" :class="{ 'border-l-4 border-klinik-primary text-klinik-primary text-2xl font-extrabold': city === 'Depok', 'border-l border-gray-200': city !== 'Depok' }" x-on:click="city = 'Depok'">Depok</div>
				</div>
			</div>
			{{-- list dokter --}}
			<template x-if="city === 'Semarang'">
					<div class="w-full md:w-3/4 block lg:block gap-10">
						<div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
							<!-- loop card doctor -->
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
						</div>
					</div>
			</template>
			<template x-if="city === 'Bekasi'">
					<div class="w-full md:w-3/4 block lg:flex gap-10">
						<div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
							<!-- loop card doctor -->
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
						</div>
					</div>
			</template>
			<template x-if="city === 'Cibubur'">
					<div class="w-full md:w-3/4 block lg:flex gap-10">
						<div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
							<!-- loop card doctor -->
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
						</div>
					</div>
			</template>
			<template x-if="city === 'Cirebon'">
				<div class="w-full md:w-3/4 block lg:flex gap-10">
					<div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
							<!-- loop card doctor -->
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
						</div>
				</div>
			</template>
			<template x-if="city === 'Denpasar'">
				<div class="w-full md:w-3/4 block lg:flex gap-10">
					<div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
							<!-- loop card doctor -->
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
						</div>
				</div>
			</template>
			<template x-if="city === 'Depok'">
				<div class="w-full md:w-3/4 block lg:flex gap-10">
					<div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
							<!-- loop card doctor -->
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
							<x-card-doctor name="dr. Diana Nurhayati Affandi, MM, M.Kes, Sp.KK" title="Ketua Komite Medis" image="{{ asset('images/doctor/dokter-1.png') }}">
								{{-- jadwal dokter --}}
								<div>
									<div class="flex justify-between">
										<div>Senin</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Selasa</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Rabu</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="flex justify-between">
										<div>Kamis</div>
										<div>09.00 - 11.00 WIB</div>
									</div>
									<div class="mt-4 text-xs md:text-sm">
										* Jadwal Praktek Dokter dapat berubah sewaktu-waktu. <br>
										Untuk informasi lebih lengkap silahkan menghubungi cabang Klinik Estetika dr.Affandi yang hendak dikunjungi.
									</div>
								</div>
							</x-card-doctor>
						</div>
				</div>
			</template>
		</div>
	</div>
</x-layout-app>
@endsection



