@extends("layouts.app")

@section("head")
	<link rel="stylesheet" href="https://unpkg.com/swiper@6/swiper-bundle.min.css" />
@endsection

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
    <div class="px-5 mx-auto max-w-8xl md:px-8 lg:px-16">
        <div class="pt-5 text-xs">
            <a href="/promo" class="font-medium text-klinik-primary">Promo</a>  <span class="px-2">•</span>  Dapatkan Discount UP TO 35% Untuk Kulit Mulus Bebas Jerawat Di Masa New Normal
        </div>
        <div class="pt-6 md:pt-16">
            <div class="items-center justify-center block md:flex xl:px-24 md:pb-12">
                <img src="{{ asset('images/promo/promo-11.png') }}" alt="promo" style="height: auto; width: 447px" class="mx-auto">
                <div class="md:ml-8">
                    <div class="hidden pb-3 md:block">
                        Selasa, 16 Juni 2020 17.11 WIB
                    </div>
                    <div class="md:text-3.5xl font-bold py-4 md:py-0">
                        Dapatkan Discount UP TO 35% Untuk Kulit Mulus Bebas Jerawat Di Masa New Normal
                    </div>
                    <div class="text-sm p-2.5 rounded-md border border-klinik-primary flex justify-between items-center mb-4 md:mt-1.5 w-full md:w-8/12">
                        <div class="">
                            Periode Promo
                        </div>
                        <div class="font-bold text-klinik-primary">
                            1 Juni 2020 - 31 Juli 2020
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-full mx-auto text-xs prose text-gray-900 xl:px-24 md:text-base">
                <p>
                    Jerawat memang menjadi masalah kulit yang sering dialami oleh banyak orang. Akan tetapi tidak perlu cemas KEDAfren, Estetika dr. Affandi menghadirkan Acne Solutions yang pas untuk mengatasi berbagai permasalahan kulitmu. Kabar baiknya, Anda bisa mendapatkan Discount Up To 35% untuk treatment tertentu.
                </p>
                <p>
                    Treatment yang bisa kamu dapatkan adalah berikut ini:
                </p>
                <div class="p-6 mb-6 border border-klinik-primary rounded-2xl">
                    <div class="flex pb-3 border-b border-gray-300 md:pb-4">
                        <div class="w-1/3 text-xs font-bold text-klinik-primary md:text-sm">
                            Nama Treatment
                        </div>
                        <div class="w-1/3 text-xs font-bold text-klinik-primary md:text-sm">
                            Besar Diskon
                        </div>
                        <div class="w-1/3 text-xs font-bold text-klinik-primary md:text-sm">
                            Keterangan
                        </div>
                    </div>
                    <div class="divide-y">
                        <div class="flex py-3 md:py-4">
                            <div class="w-1/3 pr-3 text-xs font-bold md:text-sm">
                                LASER ACCUTONING (ALL VARIANT)
                            </div>
                            <div class="w-1/3 text-xs md:text-sm">
                                35%
                            </div>
                            <div class="w-1/3 text-xs md:text-sm">
                                Cirebon Only
                            </div>
                        </div>
                        <div class="flex py-3 md:py-4">
                            <div class="w-1/3 pr-3 text-xs font-bold md:text-sm">
                                ADVANCED FACIAL TREATEMENT
                            </div>
                            <div class="w-1/3 text-xs md:text-sm">
                                20%
                            </div>
                            <div class="w-1/3 text-xs md:text-sm">
                                All Variant
                            </div>
                        </div>
                        <div class="flex py-3 md:py-4">
                            <div class="w-1/3 pr-3 text-xs font-bold md:text-sm">
                                INTENSE PULSED LIGHT FOR ACNE
                            </div>
                            <div class="w-1/3 text-xs md:text-sm">
                                20%
                            </div>
                            <div class="w-1/3 text-xs md:text-sm">
                                All Variant
                            </div>
                        </div>
                        <div class="flex py-3 md:py-4">
                            <div class="w-1/3 pr-3 text-xs font-bold md:text-sm">
                                BRIGHT LIFT AQUAPURE FOR OILY SKIN
                            </div>
                            <div class="w-1/3 text-xs md:text-sm">
                                15%
                            </div>
                            <div class="w-1/3 text-xs md:text-sm">
                                Duren Tiga, Kelapa Gading, Cibubur, Tangerang, Medan, Makassar, Denpasar, Yogyakarta, Makassar
                            </div>
                        </div>
                        <div class="flex py-3 md:py-4">
                            <div class="w-1/3 pr-3 text-xs font-bold md:text-sm">
                                AUTOROLLER
                            </div>
                            <div class="w-1/3 text-xs md:text-sm">
                                20%
                            </div>
                            <div class="w-1/3 text-xs md:text-sm">
                                All Variant
                            </div>
                        </div>
                    </div>
                </div>
                <p>Promo ini berlaku sampai 31 Juli 2020 dan treatmentnya bisa dilakukan sampai dengan 31 Desember 2020</p>
                <p>Don’t worry be beautiful.</p>
                <p>
                    *S&K Berlaku <br>
                    More Info : <a href="/our-branches" class="font-semibold cursor-pointer text-klinik-primary">https://klinikestetika.com/branches</a>
                </p>
            </div>
            <div class="mt-6 mb-12 md:mt-8">
                <div class="mb-5 text-sm font-bold">
                    Did you like this? Share it!
                </div>
                <div class="flex space-x-6">
                    <a href="#">
                        <img src="{{ asset('images/social-media/wa.svg') }}" alt="social-media" class="w-8 h-8">
                    </a>
                    <a href="#">
                        <img src="{{ asset('images/social-media/fb.svg') }}" alt="social-media" class="w-8 h-8">
                    </a>
                    <a href="#">
                        <img src="{{ asset('images/social-media/tw.svg') }}" alt="social-media" class="w-8 h-8">
                    </a>
                    <a href="#">
                        <img src="{{ asset('images/social-media/ig.png') }}" alt="social-media" class="w-8 h-8 rounded-full">
                    </a>
                </div>
            </div>
        </div>
        <div class="xl:px-24">
            <hr>
            <div class="mt-8 mb-4">
                <div class="font-bold">
                    Other Promotion
                </div>
            </div>
            {{-- recomendation --}}
            <div class="relative">
                <div class="flex" style="overflow: hidden; margin: -16px;">
                    <div class="relative w-full swiper-container swiper-promo" style="overflow: visible; padding: 16px;">
                        <div class="swiper-wrapper">
                            {{-- card --}}
                            <a href="/treatment-detail" class="w-full h-full p-6 rounded-lg shadow-card-login swiper-slide">
                                <div class="flex items-start gap-4">
                                    <div class="w-5/12 sm:w-3/12 md:w-5/12">
                                        <img src="{{ asset('images/promo/promo-111.svg') }}" alt="promo" width="167" height="94" class="rounded-lg">
                                    </div>
                                    <div class="w-7/12 sm:w-9/12 md:w-7/12">
                                        <div class="mb-2 text-xs">Sabtu, 13 Juni 2020</div>
                                        <div class="text-sm font-bold md:text-base">
                                            Dapatkan Discount UP TO 35% Untuk Kulit Mulus Bebas Jerawat Di Masa New Normal
                                        </div>
                                    </div>
                                </div>
                            </a>
                            {{-- card --}}
                            <a href="/treatment-detail" class="w-full h-full p-6 rounded-lg shadow-card-login swiper-slide">
                                <div class="flex items-start gap-4">
                                    <div class="w-5/12 sm:w-3/12 md:w-5/12">
                                        <img src="{{ asset('images/promo/promo-111.svg') }}" alt="promo" width="167" height="94" class="rounded-lg">
                                    </div>
                                    <div class="w-7/12 sm:w-9/12 md:w-7/12">
                                        <div class="mb-2 text-xs">Sabtu, 13 Juni 2020</div>
                                        <div class="text-sm font-bold md:text-base">
                                            Dapatkan Discount UP TO 35% Untuk Kulit Mulus Bebas Jerawat Di Masa New Normal
                                        </div>
                                    </div>
                                </div>
                            </a>
                            {{-- card --}}
                            <a href="/treatment-detail" class="w-full h-full p-6 rounded-lg shadow-card-login swiper-slide">
                                <div class="flex items-start gap-4">
                                    <div class="w-5/12 sm:w-3/12 md:w-5/12">
                                        <img src="{{ asset('images/promo/promo-111.svg') }}" alt="promo" width="167" height="94" class="rounded-lg">
                                    </div>
                                    <div class="w-7/12 sm:w-9/12 md:w-7/12">
                                        <div class="mb-2 text-xs">Sabtu, 13 Juni 2020</div>
                                        <div class="text-sm font-bold md:text-base">
                                            Dapatkan Discount UP TO 35% Untuk Kulit Mulus Bebas Jerawat Di Masa New Normal
                                        </div>
                                    </div>
                                </div>
                            </a>
                            {{-- card --}}
                            <a href="/treatment-detail" class="w-full h-full p-6 rounded-lg shadow-card-login swiper-slide">
                                <div class="flex items-start gap-4">
                                    <div class="w-5/12 sm:w-3/12 md:w-5/12">
                                        <img src="{{ asset('images/promo/promo-111.svg') }}" alt="promo" width="167" height="94" class="rounded-lg">
                                    </div>
                                    <div class="w-7/12 sm:w-9/12 md:w-7/12">
                                        <div class="mb-2 text-xs">Sabtu, 13 Juni 2020</div>
                                        <div class="text-sm font-bold md:text-base">
                                            Dapatkan Discount UP TO 35% Untuk Kulit Mulus Bebas Jerawat Di Masa New Normal
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Add navigation -->
                <div class="flex justify-between w-full max-w-8xl">
                    <div
                        class="absolute z-30 p-1 bg-white border-2 rounded-full swiper-btn-prev text-klinik-primary border-klinik-primary -left-4 md:-left-6"
                        style="top: 45%"
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
                        class="absolute z-30 p-1 bg-white border-2 rounded-full swiper-btn-next text-klinik-primary border-klinik-primary -right-4 md:-right-6"
                        style="top: 45%"
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
    </div>
</x-layout-app>

<script src="https://unpkg.com/swiper@6/swiper-bundle.min.js"></script>

<script>
	var swiperPromo = new Swiper('.swiper-promo', {
		navigation: {
			nextEl: '.swiper-btn-next',
			prevEl: '.swiper-btn-prev',
			disabledClass: 'opacity-50'
		},
		slidesPerView: 1,
		spaceBetween: 30,
		breakpoints: {
			920: {
				slidesPerView: 2,
				spaceBetween: 30
			},
		}
	});
</script>
@endsection
