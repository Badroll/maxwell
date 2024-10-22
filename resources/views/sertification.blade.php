@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div class="pt-10 mb-6 md:mb-16">
		<div class="hidden md:flex items-center justify-center h-40 bg-grad-header w-full">
			<div class="tracking-wider text-5xl text-white font-extrabold">Sertifikasi</div>
		</div>
		<div class="block md:hidden px-5">
			<div class="md:text-2xl text-xl font-extrabold">Sertifikasi</div>
		</div>
	</div>
	
	<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
		<div class="max-w-8xl mx-auto">
			<div class="grid grid-cols-1 md:grid-cols-2">
			<div class="md:mr-8">
				<img src="{{ asset('images/sertification.png') }}" class="w-full" alt="sertifikat" />
			</div>
			<div class="pt-8 md:pt-0">
				<div class="font-extrabold text-klinik-primary text-xl md:text-2xl">Sertifikasi Klinik Estetika dr. Affandi</div>
				<div class="mt-3 text-base md:text-lg">
					Produk perawatan yang dikembangkan oleh dr. Mochammad Affandi, Sp.KK(K) tidak hanya menggunakan formulasi dermatologi terbaik tetapi juga lolos uji klinis dan mendapatkan sertifikasi resmi dari Badan POM Indonesia untuk produk EKSOTIKA. Sejak tahun 2005 Klinik Estetika dr. Affandi Pusat telah mendapatkan Surat Ijin Penyelenggaraan Pelayanan Medik Spesialis dari Badan Pelayanan Perijinan Terpadu Kota Semarang. Sertifikasi ini merupakan bagian dari penerapan standar profesionalisme dan standar medis yang kami pegang untuk memberikan pelayanan terbaik bagi seluruh pasien Klinik Estetika dr. Affandi.
				</div>
			</div>
		</div>
		</div>
	</div>
</x-layout-app>

@endsection
