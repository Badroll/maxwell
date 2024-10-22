@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
	<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
		<div class="pt-10 md:pt-20 mb-6 md:mb-8">
			<div class="text-xl md:text-3.5xl font-extrabold">
				Riwayat Pesanan
			</div>
    	</div>
		<div class="space-y-8 mb-24">
			{{-- card pesanan menunggu pembayaran --}}
			<div class="rounded-lg shadow-card-login">
				{{-- header card --}}
				<div class="grid grid-cols-2 md:grid-cols-5 px-8 py-4 gap-3 md:gap-0">
					<div class="text-sm">
						<div class="mb-2">Tanggal Pesanan</div>
						<div class="font-bold">1 Juli 2020</div>
					</div>
					<div class="text-sm">
						<div class="mb-2">No. Pesanan</div>
						<div class="font-bold">#141993</div>
					</div>
					<div class="text-sm">
						<div class="mb-2">Total Pesanan</div>
						<div class="font-bold">Rp 202.000</div>
					</div>
					<div class="text-sm">
						<div class="mb-2">Status Pesanan</div>
						<div class="font-bold text-yellow-500">Menunggu Pembayaran</div>
					</div>
					<div class="hidden md:flex items-center gap-2 lg:gap-3 xl:gap-8 col-span-2 md:col-span-1">
						<div class="w-1/2">
							<a  href="/order-detail" class="block text-center border-2 border-klinik-primary text-sm text-klinik-primary rounded-full py-2 w-full font-semibold focus:outline-none">
								DETAIL
							</a>
						</div>
						<div class="w-1/2">
							<a href="/shopping-details" class="block text-center border-2 border-klinik-primary text-white text-sm bg-klinik-primary rounded-full py-2 w-full font-semibold focus:outline-none">
								BAYAR
							</a>
						</div>
					</div>
				</div>
				<hr>
				{{-- list pesanan --}}
				<div class="divide-y px-8">
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
				</div>
				<div class="flex md:hidden items-center gap-2 col-span-2 px-8 py-3 border-t border-gray-200">
					<div class="w-1/2">
						<a  href="/order-detail" class="block text-center border-2 border-klinik-primary text-sm text-klinik-primary rounded-full py-2 w-full font-semibold focus:outline-none">
							DETAIL
						</a>
					</div>
					<div class="w-1/2">
						<a href="/shopping-details" class="block text-center border-2 border-klinik-primary text-white text-sm bg-klinik-primary rounded-full py-2 w-full font-semibold focus:outline-none">
							BAYAR
						</a>
					</div>
				</div>
			</div>

			{{-- card pesanan selesai --}}
			<div class="rounded-lg shadow-card-login">
				{{-- header card --}}
				<div class="grid grid-cols-2 md:grid-cols-5 px-8 py-4 gap-3 md:gap-0">
					<div class="text-sm">
						<div class="mb-2">Tanggal Pesanan</div>
						<div class="font-bold">10 Nov 2019</div>
					</div>
					<div class="text-sm">
						<div class="mb-2">No. Pesanan</div>
						<div class="font-bold">#102013</div>
					</div>
					<div class="text-sm">
						<div class="mb-2">Total Pesanan</div>
						<div class="font-bold">Rp 202.000</div>
					</div>
					<div class="text-sm">
						<div class="mb-2">Status Pesanan</div>
						<div class="font-bold text-green-500">Selesai</div>
					</div>
					<div class="hidden md:flex items-center gap-2 lg:gap-3 xl:gap-8 col-span-2 md:col-span-1">
						<div class="w-full md:w-1/2">
							<a href="/order-detail" class="block text-center border-2 border-klinik-primary text-sm text-klinik-primary rounded-full py-2 w-full font-semibold focus:outline-none">
								DETAIL
							</a>
						</div>
						<div class="hidden md:block w-1/2"></div>
					</div>
				</div>
				<hr>
				{{-- list pesanan --}}
				<div class="divide-y px-8">
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
					<div class="py-3 text-gray-600 text-center text-sm font-semibold">
						+2 Produk lainnya
					</div>
				</div>
				<div class="flex md:hidden items-center gap-2 col-span-2 px-8 py-3 border-t border-gray-200">
					<div class="hidden md:block w-1/2"></div>
					<div class="w-full md:w-1/2">
						<a  href="/order-detail" class="block text-center border-2 border-klinik-primary text-sm text-klinik-primary rounded-full py-2 w-full font-semibold focus:outline-none">
							DETAIL
						</a>
					</div>
				</div>
			</div>

		</div>

	</div>
</x-layout-app>
@endsection
