@extends("layouts.app")

@section("head")
	<link rel="stylesheet" href="https://unpkg.com/swiper@6/swiper-bundle.min.css" />
@endsection

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
    <div class="px-5 mx-auto max-w-8xl md:px-8 lg:px-16">
        <div class="hidden text-xs pt-7 md:block">
            <a href="/product" class="font-medium text-klinik-primary">Produk</a>
            <span class="px-2">•</span>
            <a href="#" class="font-medium text-klinik-primary">Perawatan Tangan, Lengan, dan Kaki</a>
            <span class="px-2">•</span>
            <span>Krim Malam I & Krim Pagi Penghalus Lengan & Kaki</span>
        </div>
        <div class="block py-8 md:flex">
            <div class="flex items-start mb-6">
                <div class="mr-3 md:hidden">
                    <a href="/product">
                        <div>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        </div>
                    </a>
                </div>
                <div class="font-extrabold md:hidden">
                    Krim Malam I & Krim Pagi Penghalus Lengan & Kaki
                </div>
            </div>
            <div class="px-5 md:mr-18 md:px-0">
                <img src="{{ asset('images/produk-detail.svg') }}" alt="produk" class="mx-auto w-280 md:w-350px h-280 md:h-350px">
                <div class="mt-2 md:mt-5 text-10px md:text-sm text-center font-medium text-red-500 bg-klinik-pink rounded-lg px-2 py-1.5">
                    *Pembelian produk ini memerlukan resep Dokter
                </div>
            </div>
            <div class="mt-8 md:mt-0">
                <div class="hidden mb-8 text-2xl font-extrabold md:block">
                    Krim Malam I & Krim Pagi Penghalus Lengan & Kaki
                </div>
                <div class="flex">
                    <div class="w-24 text-xs font-semibold text-gray-500 md:text-klinik-primary md:text-base">
                        Varian
                    </div>
                    <div class="pt-2 text-10px md:text-sm w-96">
                        <div class="flex px-5 mb-3.5">
                            <div class="w-1/3">
                                Ukuran
                            </div>
                            <div class="w-1/3">
                                Netto
                            </div>
                            <div class="w-1/3">
                                Harga
                            </div>
                        </div>
                        <fieldset class="mb-6" x-data="{ selectVariant: '0' }">
                            <legend class="sr-only">
                                variant
                            </legend>
                            <div class="relative -space-y-px bg-white rounded-md">
                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label class="relative grid grid-cols-3 px-5 py-2 mb-6 text-xs font-bold border-2 rounded-lg cursor-pointer md:text-base" :class="{ 'border-klinik-primary z-10': selectVariant === '1', 'border-gray-200': !(selectVariant === '1') }" x-on:click="selectVariant = '1'">
                                    <input type="radio" name="variant" value="1" class="sr-only">
                                    <p class="">1</p>
                                    <p class="">45 gr</p>
                                    <p class="text-klinik-primary">Rp 999.999</p>
                                </label>

                                <label class="relative grid grid-cols-3 px-5 py-2 mb-6 text-xs font-bold border-2 rounded-lg cursor-pointer md:text-base" :class="{ 'border-klinik-primary z-10': selectVariant === '1/2', 'border-gray-200': !(selectVariant === '1/2') }" x-on:click="selectVariant = '1/2'">
                                    <input type="radio" name="variant" value="1/2" class="sr-only">
                                    <p class="">1/2</p>
                                    <p class="">22,5 gr</p>
                                    <p class="text-klinik-primary">Rp 499.999</p>
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="flex mb-12">
                    <div class="w-24 text-xs font-semibold text-gray-500 md:text-klinik-primary md:text-base">
                        Jumlah
                    </div>
                    <div class="flex items-center text-center w-96" x-data="{ qty: 0 }">
                        <button type="button" x-bind:disabled="qty === 0" name="button" class="p-1 font-extrabold text-white rounded-full bg-klinik-primary focus:outline-none" @click="qty--">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
                        </button>
                        <div class="mx-6" x-text="qty"></div>
                        <button type="button" name="button" class="p-1 font-extrabold text-white rounded-full bg-klinik-primary focus:outline-none" @click="qty++">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        </button>
                    </div>
                </div>
                <div class="flex justify-between w-full max-w-xl gap-7">
                    <button type="button" name="button" class="w-full py-2 text-xs font-bold border rounded-full md:text-base focus:outline-none text-klinik-primary border-klinik-primary">ADD TO CART</button>
                    <a href="/cart" type="button" name="button" class="flex items-center justify-center w-full py-2 text-xs font-bold text-center text-white rounded-full md:text-base focus:outline-none bg-klinik-primary">BUY NOW</a>
                </div>
            </div>
        </div>
        <hr class="hidden md:block">
        <div class="max-w-full mt-2 text-xs prose text-gray-900 md:mt-8 mb-15 md:text-base">
            <h4>Deskripsi</h4>
            <p>
                Krim penghalus lengan dan kaki yang mengandung kombinasi bahan aktif yang efektif melembabkan dan mengatasi kulit kering, kasar dan bersisik. Kulit lengan dan kaki menjadi halus dan lebih lembut.
            </p>
            <h4>Cara Pakai</h4>
            <p>
                Aplikasikan merata pada bagian kulit lengan dan kaki yang kering dan bersisik pada pagi dan malam hari.
            </p>
            <p>
                Konsultasikan penggunaan produk ini kepada kami secara online. Merawat kesehatan dan kecantikan kulit anda lebih mudah dan aman di sini. Klik "BUY NOW" untuk mendapatkan produk perawatan kami.
            </p>
        </div>
        <div class="my-12">
            <hr>
        </div>
        <div class="mt-12 mb-4 md:my-12">
            <div class="text-base font-bold md:text-2xl md:text-center">
                Produk Rekomendasi
            </div>
        </div>
    
        {{-- rekomendasi produk mobile --}}
        <div class="divide-y md:hidden">
            <div class="flex py-5">
                <div class="relative mr-5">
                    <img
                        src="{{ asset('images/produk-1.svg') }}"
                        alt="product"
                        class="w-20 h-20"
                        style="min-width: 80px; min-height: 80px;"
                    />
                    <span class="px-1 py-0.5 bg-green-600 absolute top-0 left-0 rounded-md text-white" style="font-size: 8px">RECOMMENDED</span>
                </div>
                <div class="">
                    <div class="text-xs font-bold uppercase">
                        OIL CONTROL SERUM
                    </div>
                    <div class="flex text-xs">
                        Lotion Oil Control memberikan efek khusus agar kulit tidak mengkilap secara berlebihan.
                    </div>
                </div>
            </div>
            <div class="flex py-5">
                <div class="relative mr-5">
                    <img
                        src="{{ asset('images/produk-1.svg') }}"
                        alt="product"
                        class="w-20 h-20"
                        style="min-width: 80px; min-height: 80px;"
                    />
                    <span class="px-1 py-0.5 bg-green-600 absolute top-0 left-0 rounded-md text-white" style="font-size: 8px">RECOMMENDED</span>
                </div>
                <div class="">
                    <div class="text-xs font-bold uppercase">
                        hair tonic pria
                    </div>
                    <div class="flex text-xs">
                        Tonic rambut yang mengandung bahan aktif yang efektif berperan dalam pertumbuhan rambut dan mengatasi kerontokan rambut yang berat pada pria.
                    </div>
                </div>
            </div>
            <div class="flex py-5">
                <div class="relative mr-5">
                    <img
                        src="{{ asset('images/produk-1.svg') }}"
                        alt="product"
                        class="w-20 h-20"
                        style="min-width: 80px; min-height: 80px;"
                    />
                    <span class="px-1 py-0.5 bg-green-600 absolute top-0 left-0 rounded-md text-white" style="font-size: 8px">RECOMMENDED</span>
                </div>
                <div class="">
                    <div class="text-xs font-bold uppercase">
                        smoothing body lotion
                    </div>
                    <div class="flex text-xs">
                        Lotion untuk lengan dan kaki di pagi hari yang berfungsi menghaluskan dan melembutkan kulit lengan dan kaki.
                    </div>
                </div>
            </div>
        </div>
        {{-- rekomendasi produk desktop --}}
        <div class="relative hidden mb-32 md:block">
            <div class="relative w-full swiper-container">
                <div class="swiper-wrapper" style="height: auto !important">
                    <x-card-product-slide title="AHA WHITENING BODY LOTION" href="/product-detail" isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}"  />
                    
                    <x-card-product-slide title="AHA WHITENING BODY LOTION" href="/product-detail" isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}"  />
                    
                    <x-card-product-slide title="AHA WHITENING BODY LOTION" href="/product-detail" isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}"  />
                    
                    <x-card-product-slide title="AHA WHITENING BODY LOTION" href="/product-detail" isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}"  />
                    
                    <x-card-product-slide title="AHA WHITENING BODY LOTION" href="/product-detail" isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}"  />
                    
                    <x-card-product-slide title="AHA WHITENING BODY LOTION" href="/product-detail" isRecomended="true" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}"  />
                </div>
                <!-- Add Pagination -->
            </div>
            <div class="flex justify-between w-full max-w-8xl">
                <div
                    class="absolute z-30 p-1 bg-white border-2 rounded-full swiper-btn-prev text-klinik-primary border-klinik-primary -left-2 md:-left-6 top-1/2"
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
                    class="absolute z-30 p-1 bg-white border-2 rounded-full swiper-btn-next text-klinik-primary border-klinik-primary -right-2 md:-right-6 top-1/2"
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
    </div>
</x-layout-app>

<script src="https://unpkg.com/swiper@6/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper('.swiper-container', {
    navigation: {
        nextEl: '.swiper-btn-next',
        prevEl: '.swiper-btn-prev',
        disabledClass: 'opacity-50'
    },
    slidesPerView: 'auto',
})
</script>
@endsection
