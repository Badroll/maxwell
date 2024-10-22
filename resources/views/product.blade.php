@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
    <div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
        <div class="pt-7 text-xs">
            <a href="/product" class="font-medium">All Products</a>
            <span class="mx-2">|</span>
            <a href="/eksotika-series" class="text-klinik-primary font-medium">EKSOTIKA Series</a>
        </div>
        <div class="pt-10 md:pt-14 pb-12 md:pb-32 flex justify-between items-center">
            <div class="pr-3">
                <div class="flex mb-4 md:mb-10">
                    <div class="py-1 px-2 md:px-3 rounded-full text-white bg-green-600 font-bold text-10px md:text-base" style="font-size: 13px">
                        RECOMMENDED
                    </div>
                </div>
                <div class="text-xs md:text-3.5xl pb-2 md:pb-4 font-bold">
                    LOTION OIL CONTROL
                </div>
                <div class="text-10px md:text-base mb:2 md:mb-7">
                    Lotion Oil Control memberikan efek khusus agar kulit tidak <br> mengkilap secara berlebihan.
                </div>
                <div class="flex flex-col-reverse md:flex-row md:items-center justify-between">
                    <div class="pr-4">
                        <a  
                            href="/product-detail"
                            class="px-6 block text-center md:px-9 py-2.5 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary mt-3 md:mt-0 text-xs md:text-base opacity-80"
                        >
                            ORDER NOW
                        </a>
                    </div>
                    <div class="">
                        <div class="text-10px md:text-xs pb-1.5 md:pb-0">
                            Mulai dari
                        </div>
                        <div class="font-extrabold text-10px md:text-lg">
                            Rp 175.000 - Rp 250.000
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:block relative">
                <img src="{{ asset('images/produk-banner.svg') }}" alt="product" height="269" width="543" class="bg-gray-100 rounded-lg relative z-10">
            </div>
            <div class="md:hidden">
                <img src="{{ asset('images/produk-banner-mobile.svg') }}" alt="product" class="bg-gray-100 rounded-lg relative z-30 h-24 w-24">
            </div>
        </div>
        {{-- tabs --}}
        <x-tabs />
        <div class="">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">
                {{-- card promo --}}
                <a href="/product-detail">
                    <x-card-product title="AHA WHITENING BODY LOTION" isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/produk-1.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="Lotion Pembersih Muka EKSOTIKA, Untuk Kulit..." isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/produk-1.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="BEDAK TABUR EKSOTIKA 02-NATURAL" isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/produk-1.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="KRIM KELOPAK MATA" isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/produk-1.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="Krim Malam I & Krim Pagi Penghalus Leng..." isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/produk-1.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="EKSOTIKA SERUM VITAMIN C 10 ML" isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/produk-1.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="OIL CONTROL SERUM" isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/produk-1.svg') }}" />
                </a>
                <a href="/product-detail">
                    <x-card-product title="KRIM BEKAS GIGITAN SERANGGA" isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/produk-1.svg') }}" />
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
