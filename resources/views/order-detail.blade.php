@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16" x-data="{ isDone: false }">
		<div class="pt-10 md:pt-20 mb-6 md:mb-8">
			<div class="flex items-center">
				<a href="/order-list">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
				</a>
				<div class="text-xl md:text-3.5xl font-extrabold ml-3" @click="isDone = !isDone">
					Detail Pesanan
				</div>
			</div>
    	</div>
		{{-- detail pesanan sedang berjalan --}}
		<div class="" x-show="isDone === false">
			<div class="rounded-lg shadow-card-login">
				<div class="bg-klinik-yellow text-white py-1.5 text-center rounded-t-lg font-semibold text-xs md:text-base">
					MENUNGGU PEMBAYARAN
				</div>
				<div class="grid grid-cols-1 md:grid-cols-3 gap-8 py-9 px-6">
					<div class="flex items-start text-xs md:text-base">
						<div class="mr-3">
							<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
						</div>
						<div>
							<div>No. Pesanan #102013</div>
							<div class="font-bold">10 Nov 2019 • 21:21</div>
						</div>
					</div>
					<div class="flex items-start text-xs md:text-base">
						<div class="mr-3">
							<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path><path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path></svg>
						</div>
						<div>
							<div class="font-bold">Alamat Pengiriman</div>
							<div>Jl. Buah Batu No.243, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264</div>
						</div>
					</div>
					<div>
						<div class="flex justify-end">
							<button
								class="w-full md:w-auto px-5 py-2 bg-klinik-primary text-white rounded-full font-medium btn-focus-primary text-sm"
							>
								LANJUTKAN PEMBAYARAN
							</button>
						</div>
					</div>
				</div>
				<hr>
				<div class="flex items-center p-6">
					<div class="mr-2">
						<img src="{{ asset('images/receipt-icon.svg') }}" alt="icon-receipt" class="w-6 h-6">
					</div>
					<div class="uppercase font-bold text-sm">
						Detail Pesanan
					</div>
				</div>
				<hr>
				{{-- list pesanan --}}
				<div class="divide-y p-6 pt-0">
					{{-- item produk --}}
					<div class="flex items-start md:items-center py-3">
						<div class="mr-4 md:mr-6">
							<img src="{{ asset('images/product-order-list.svg') }}" alt="product" class="w-10 h-10">
						</div>
						<div class="block md:flex items-center justify-between w-full">
							<div class="text-sm">
								<div class="font-bold">BEDAK TABUR EKSOTIKA 02-NATURAL</div>
								<div>x1</div>
							</div>
							<div class="text-sm mt-6 md:mt-0">
								Rp 101.000
							</div>
						</div>
					</div>
					{{-- item produk --}}
					<div class="flex items-start md:items-center py-3">
						<div class="mr-4 md:mr-6">
							<img src="{{ asset('images/product-order-list.svg') }}" alt="product" class="w-10 h-10">
						</div>
						<div class="block md:flex items-center justify-between w-full">
							<div class="text-sm">
								<div class="font-bold">BEDAK TABUR EKSOTIKA 02-NATURAL</div>
								<div>x1</div>
							</div>
							<div class="text-sm mt-6 md:mt-0">
								Rp 101.000
							</div>
						</div>
					</div>
					<div class="flex flex-col items-end py-6 text-sm">
						<div class="w-full md:w-1/4 flex justify-between py-1">
							<div>Subtotal</div>
							<div class="font-bold">Rp 202.000</div>
						</div>
						<div class="w-full md:w-1/4 flex justify-between py-1">
							<div>Berat Total</div>
							<div class="font-bold">1 Kg</div>
						</div>
						<div class="w-full md:w-1/4 flex justify-between py-1 pb-2 border-b-2 border-dashed">
							<div>Biaya Pengiriman</div>
							<div class="font-bold">Rp 35.000</div>
						</div>
						<div class="w-full md:w-1/4 flex justify-between pt-2">
							<div>Total Pembayaran</div>
							<div class="font-bold text-klinik-primary">Rp 237.000</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="" x-show="isDone === true">
			<div class="rounded-lg shadow-card-login">
				<div class="bg-klinik-green text-white py-1.5 text-center rounded-t-lg font-semibold text-xs md:text-base">
					SELESAI
				</div>
				<div class="grid grid-cols-1 md:grid-cols-2 gap-8 py-9 px-6">
					<div class="flex items-start text-xs md:text-base">
						<div class="mr-3">
							<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
						</div>
						<div>
							<div>No. Pesanan #102013</div>
							<div class="font-bold">10 Nov 2019 • 21:21</div>
						</div>
					</div>
					<div class="flex items-start text-xs md:text-base">
						<div class="mr-3">
							<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path><path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path></svg>
						</div>
						<div>
							<div class="font-bold">Alamat Pengiriman</div>
							<div>Jl. Buah Batu No.243, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="flex items-center p-6">
					<div class="mr-2">
						<img src="{{ asset('images/receipt-icon.svg') }}" alt="icon-receipt" class="w-6 h-6">
					</div>
					<div class="uppercase font-bold text-sm">
						Detail Pesanan
					</div>
				</div>
				<hr>
				{{-- list pesanan --}}
				<div class="divide-y p-6 pt-0">
					{{-- item produk --}}
					<div class="flex items-start md:items-center py-3">
						<div class="mr-4 md:mr-6">
							<img src="{{ asset('images/product-order-list.svg') }}" alt="product" class="w-10 h-10">
						</div>
						<div class="block md:flex items-center justify-between w-full">
							<div class="text-sm">
								<div class="font-bold">BEDAK TABUR EKSOTIKA 02-NATURAL</div>
								<div>x1</div>
							</div>
							<div class="text-sm mt-6 md:mt-0">
								Rp 101.000
							</div>
						</div>
					</div>
					{{-- item produk --}}
					<div class="flex items-start md:items-center py-3">
						<div class="mr-4 md:mr-6">
							<img src="{{ asset('images/product-order-list.svg') }}" alt="product" class="w-10 h-10">
						</div>
						<div class="block md:flex items-center justify-between w-full">
							<div class="text-sm">
								<div class="font-bold">BEDAK TABUR EKSOTIKA 02-NATURAL</div>
								<div>x1</div>
							</div>
							<div class="text-sm mt-6 md:mt-0">
								Rp 101.000
							</div>
						</div>
					</div>
					<div class="flex flex-col items-end py-6 text-sm">
						<div class="w-full md:w-1/4 flex justify-between py-1">
							<div>Subtotal</div>
							<div class="font-bold">Rp 202.000</div>
						</div>
						<div class="w-full md:w-1/4 flex justify-between py-1">
							<div>Berat Total</div>
							<div class="font-bold">1 Kg</div>
						</div>
						<div class="w-full md:w-1/4 flex justify-between py-1 pb-2 border-b-2 border-dashed">
							<div>Biaya Pengiriman</div>
							<div class="font-bold">Rp 35.000</div>
						</div>
						<div class="w-full md:w-1/4 flex justify-between pt-2">
							<div>Total Pembayaran</div>
							<div class="font-bold text-klinik-primary">Rp 237.000</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-layout-app>
@endsection
