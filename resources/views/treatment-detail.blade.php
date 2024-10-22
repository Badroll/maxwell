@extends("layouts.app")

@section("head")
	<link rel="stylesheet" href="https://unpkg.com/swiper@6/swiper-bundle.min.css" />
@endsection

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
    <div class="max-w-5xl px-5 mx-auto md:px-8 lg:px-16">
        <div class="pt-5 text-xs leading-loose">
            <a href="/services" class="font-medium text-klinik-primary">Estetika Solutions</a> 
            <span class="px-2">•</span>  
            <a href="/sub-service-detail" class="font-medium text-klinik-primary">Ance Solutions</a> 
            <span class="px-2">•</span>  
            Acne Peeling Treatments by Klinik Estetika dr. Affandi
        </div>
        <div class="pt-6 md:pt-16">
            <div class="text-left ">
                <div class="md:text-3.5xl font-bold py-4 md:py-0">
                    Acne Peeling Treatments by Klinik Estetika dr. Affandi
                </div>
                <img src="{{ asset('images/promo/promo-11.png') }}" alt="treatment" class="object-cover w-full h-56 my-6 sm:h-26rem rounded-2xl">
            </div>
            <div class="mx-auto ">
                <div class="max-w-full mb-6 text-sm prose text-black md:text-base">
                    <p>Jerawat memang menjadi masalah kulit yang sering dialami oleh banyak orang. Akan tetapi tidak perlu cemas KEDAfren, Estetika dr. Affandi menghadirkan Acne Solutions yang pas untuk mengatasi berbagai permasalahan kulitmu. Kabar baiknya, Anda bisa mendapatkan Discount Up To 35% untuk treatment tertentu.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, neque enim pulvinar egestas pulvinar aenean. Quis venenatis urna at odio scelerisque tellus tristique vel nunc. Nunc vulputate tincidunt massa lectus dignissim quam eget ut. Augue elit enim, ut et blandit. Tristique eu gravida pellentesque ut. Tristique turpis in nulla suspendisse justo posuere.</p>
                    <p>Nibh amet, sapien amet penatibus vitae, elit maecenas ut. Lorem pretium, massa, iaculis ornare a lorem. Ac lacinia egestas enim risus sit diam id. Sit enim elementum, a, cras arcu tristique. Malesuada ultrices id et, posuere sit. Turpis rhoncus amet porttitor massa sed posuere mi cras nunc. Id rhoncus et tellus malesuada mi condimentum. Quisque et augue turpis viverra vel. Tempus ac adipiscing elementum libero maecenas tortor ultrices. Id vitae ullamcorper id imperdiet.</p>
                    <p>
                      Vitae quam ultricies bibendum augue. Enim in a pellentesque ipsum, amet, purus odio enim. At integer viverra pretium iaculis nisl.
                    </p>
                </div>
                
                <div class="mt-6 mb-12 md:mt-8">
                    <div class="mb-5 text-sm font-bold md:text-base">
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
        </div>
        <div class="">
            <hr>
            <div class="mt-8 mb-4">
                <div class="font-bold">
                  <a href="/service-detail/treatments">
                    Other Treatments
                  </a>
                </div>
            </div>
            {{-- recomendation --}}
            <div class="relative mb-8">
                <div class="flex" style="overflow: hidden; margin: -16px;">
                    <div class="relative w-full swiper-container swiper-treatment" style="overflow: visible; padding: 16px;">
                        <div class="swiper-wrapper">
                            {{-- card --}}
                            <a href="/treatment-detail" class="w-full h-full p-6 rounded-lg shadow-card-login swiper-slide">
                                <div class="flex items-start">
                                    <div class="mr-4">
                                        <img src="{{ asset('images/promo/promo-111.svg') }}" alt="promo" width="167" height="94" class="rounded-2xl" style="min-width: 167px; min-height: 94px;">
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold md:text-base">Bright Lift Aquapure for Acne / Oily Skin</div>
                                        <div class="text-xs md:text-sm">Efektif mengeringkan jerawat yang meradang.</div>
                                    </div>
                                </div>
                            </a>
                            {{-- card --}}
                            <a href="/treatment-detail" class="w-full h-full p-6 rounded-lg shadow-card-login swiper-slide">
                                <div class="flex items-start">
                                    <div class="mr-4">
                                        <img src="{{ asset('images/promo/promo-111.svg') }}" alt="promo" width="167" height="94" class="rounded-2xl" style="min-width: 167px; min-height: 94px;">
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold md:text-base">Bright Lift Aquapure for Acne / Oily Skin</div>
                                        <div class="text-xs md:text-sm">Efektif mengeringkan jerawat yang meradang.</div>
                                    </div>
                                </div>
                            </a>
                            {{-- card --}}
                            <a href="/treatment-detail" class="w-full h-full p-6 rounded-lg shadow-card-login swiper-slide">
                                <div class="flex items-start">
                                    <div class="mr-4">
                                        <img src="{{ asset('images/promo/promo-111.svg') }}" alt="promo" width="167" height="94" class="rounded-2xl" style="min-width: 167px; min-height: 94px;">
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold md:text-base">Bright Lift Aquapure for Acne / Oily Skin</div>
                                        <div class="text-xs md:text-sm">Efektif mengeringkan jerawat yang meradang.</div>
                                    </div>
                                </div>
                            </a>
                            {{-- card --}}
                            <a href="/treatment-detail" class="w-full h-full p-6 rounded-lg shadow-card-login swiper-slide">
                                <div class="flex items-start">
                                    <div class="mr-4">
                                        <img src="{{ asset('images/promo/promo-111.svg') }}" alt="promo" width="167" height="94" class="rounded-2xl" style="min-width: 167px; min-height: 94px;">
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold md:text-base">Bright Lift Aquapure for Acne / Oily Skin</div>
                                        <div class="text-xs md:text-sm">Efektif mengeringkan jerawat yang meradang.</div>
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
            <hr>
            <div class="items-center justify-between block px-8 py-4 my-8 text-center text-white md:flex" style="background-color: #8BB6DD;">
                <div class="items-center block mb-6 md:flex md:text-left md:mb-0">
                    <div class="mb-2 md:mr-6 lg:mr-8 xl:mr-12 md:mb-0">Estetika <span class="font-extrabold">Solutions</span></div>
                    <div class="text-sm md:max-w-xs">
                        Temukan berbagai jenis perawatan kulit yang sesuai untuk kebutuhan Anda hanya di Layanan Perawatan Kulit Kllinik Estetika.
                    </div>
                </div>
                <div>
                    <a href="/treatments" class="px-6 py-1 text-sm font-bold bg-white rounded-full md:px-6 md:py-2 md:text-base" style="color: #8BB6DD;">
                        ALL TREATMENTS
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout-app>

<script src="https://unpkg.com/swiper@6/swiper-bundle.min.js"></script>

<script>
	var swiperTreatment = new Swiper('.swiper-treatment', {
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
