@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
    <div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
        <div class="pt-7 text-xs">
            <a href="/product" class="text-klinik-primary font-medium">All Products</a> 
            <span class="mx-2">|</span>
            <a href="/eksotika-series" class="font-medium">EKSOTIKA Series</a>
        </div>
        <div class="pt-10 md:pt-14 pb-12 md:pb-24">
            <img src="{{ asset('images/eksotika/logo-eksotika.svg') }}" alt="logo" width="259" height="96" class="mb-3">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12">
				<div class="">
					<img src="{{ asset('images/eksotika/header.svg') }}" alt="banner" class="w-full">
				</div>
				<div class="">
                    <div class="text-lg md:text-2xl font-bold">EKSOTIKA SERIES</div>
					<div class="mt-4 text-md md:text-base">
                        Rangkaian produk perawatan dan kosmetik EKSOTIKA merupakan pilihan tepat untuk digunakan dalam rutinitas harian Anda.
                        <br><br>
                        Selain fungsinya untuk merias diri, produk EKSOTIKA yang formulanya sudah disempurnakan selama lebih dari 30 tahun juga bermanfaat untuk merawat kesehatan kulit wajah Anda.
                        <br><br>
                        Dapat dibeli bebas tanpa resep Dokter.
					</div>
				</div>
			</div>
        </div>
        {{-- tabs --}}
        <div class="mb-8 md:mb-16">
            <div class="md:hidden text-sm relative">
                <label for="tabs" class="sr-only">Select a tab</label>
                <select id="tabs" name="tabs" class="block w-full focus:ring-klinik-primary focus:border-klinik-primary border-white rounded-md font-extrabold bg-klinik-primary text-white appearance-none focus:outline-none px-3 py-3 opacity-80">
                    <option selected class="bg-white text-black">Semua Produk</option>
                    <option class="bg-white text-black">Produk Bundling</option>
                </select>
                <div class="text-white absolute right-2 top-2.5">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path></svg>
                </div>
            </div>
            <div class="hidden md:block">
                <nav class="flex items-stretch text-sm text-center" aria-label="Tabs">
                    <!-- Current: "bg-gray-100 text-gray-700", Default: "text-gray-500 hover:text-gray-700" -->
                    <a href="#" class="bg-klinik-primary  opacity-80 text-white px-3 py-2 text-sm rounded-md font-extrabold flex items-center">
                        Semua Produk
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500 px-3 py-2 text-sm rounded-md font-bold flex items-center">
                        Produk Bundling
                    </a>
                </nav>
            </div>
        </div>
        <div class="">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">
                {{-- card product --}}
                <a href="/product-detail">
                    <x-card-product title="AHA WHITENING BODY LOTION" isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="Lotion Pembersih Muka EKSOTIKA, Untuk Kulit..." isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="BEDAK TABUR EKSOTIKA 02-NATURAL" isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="KRIM KELOPAK MATA" isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="Krim Malam I & Krim Pagi Penghalus Leng..." isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="EKSOTIKA SERUM VITAMIN C 10 ML" isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="OIL CONTROL SERUM" isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="KRIM BEKAS GIGITAN SERANGGA" isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}" />
                </a>

            </div>
            <div class="text-center mt-20 mb-14 md:mb-32">
                <button
                    class="px-10 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary uppercase opacity-80"
                >
                    See More
                </button>
            </div>
        </div>
    </div>
</x-layout-app>
@endsection
