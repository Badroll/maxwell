@extends("layouts.app")

@section("head")
	<link rel="stylesheet" href="https://unpkg.com/swiper@6/swiper-bundle.min.css" />
@endsection

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
    <div class="px-5 mx-auto max-w-8xl md:px-8 lg:px-16">
        <div class="pt-5 text-xs">
            <a href="/our-news" class="font-medium text-klinik-primary">Our News & Articles</a>  <span class="px-2">•</span>  Pentingnya Cuci Tangan Sebelum Pemakaian Skincare
        </div>
        <div class="flex pt-8 md:pt-12">
            <div class="w-full md:w-8/12">
                <div class="pb-8 md:px-12 xl:px-16">
                    <div class="mb-6 aspect-h-9 aspect-w-16">
                        <img src="{{ asset('images/blog/blog-2.png') }}" alt="blog" class="w-full h-full rounded-lg">
                    </div>
                    <div class="mb-1 text-sm text-gray-400">
                        Selasa, 16 Juni 2020
                    </div>
                    <div class="mb-6 text-xl font-extrabold md:text-3xl">Pentingnya Cuci Tangan Sebelum Pemakaian Skincare</div>
                    <div class="max-w-full mb-1 space-y-6 text-sm prose text-black md:text-base">
                        {{-- content --}}
                        <p>
                            Merawat kulit dengan skin care sudah menjadi rutinitas sehari-hari yang wajib dilakukan dalam menjaga penampilan. Sayangnya, mungkin masih banyak diantara kita yang tidak mencuci tangan sebelum mengaplikasikan skin care pada kulit. Tahukah KEDAfren, bahwa banyak hal tidak diinginkan yang dapat terjadi jika kita tidak mencuci tangan sebelum pakai skin care? Simak penjelasannya di bawah ini yuk!
                        </p>
                        <h3>
                            1. Mengkontaminasi Skin Care
                        </h3>
                        <p>
                            Telapak tangan adalah salah satu permukaan kulit yang paling banyak “ditumpangi” berbagai mikroorganisme (kuman, jamur, dan semacamnya) sebab sebagian besar aktifitas kita sehari - hari tidak lepas dari menyentuh bermacam benda. Maka dari itu, apabila kalian tidak mencuci tangan terlebih dahulu artinya sama saja dengan memindahkannya ke skin care kalian. Hal ini berlaku terutama jika kalian hendak mengambil produk langsung dengan menggunakan jari tangan, misalnya krim di dalam pot. Untuk mengurangi kemungkinan tadi, setelah mencuci tangan KEDAfren bisa juga menggunakan bantuan cotton buds untuk mengambilnya.
                        </p>
                        <h3>
                            2. Mengurangi Khasiat Skin Care
                        </h3>
                        <p>
                            Pada produk yang terkontaminasi mikroorganisme dapat terlihat dari perubahan bau, perubahan kekentalan, atau mungkin saja terjadi perubahan warna. Hal ini terjadi karena mikroorganisme mampu merubah bahan-bahan aktif yang terkandung pada produk skin care misalnya vitamin karena bahan aktifnya terdegradasi, khasiatnya pun akan berkurang.
                        </p>
                        <h3>
                            3. Meningkatkan Risiko Iritasi Kulit
                        </h3>
                        <p>
                            Jika produk skin care yang sudah terkontaminasi digunakan pada kulit wajah, tidak menutup kemungkinan kulit akan mengalami iritasi. Disamping itu, ketika kita mengoleskan produk ke tangan yang belum dicuci, juga akan mentransfer mikroorganisme dari telapak tangan ke wajah. Tentu hal ini akan meningkatkan risiko kulit menjadi iritasi.
                        </p>
                        <h3>
                            4. Mudah Berjerawat
                        </h3>
                        <p>
                            Pada permukaan kulit orang sehat terdapat berbagai macam mikroorganisme yang tidak menimbulkan penyakit kalau jumlahnya tidak berlebih dan tidak masuk ke dalam jaringan kulit, biasa disebut flora normal. Tetapi flora normal ini akan menimbulkan masalah jika masuk ke dalam jaringan kulit melalui kulit yang iritasi. Misalnya Corynobacterium acnes atau jamur Pitirosporum ovale adalah contoh flora normal tersering penyebab jerawat. Selain itu, kotoran yang dipindahkan dari telapak tangan yang belum dicuci juga akan menyumbat pori-pori dan akhirnya tumbuh komedo atau jerawat.
                        </p>
                        <h3>
                            5. Meningkatkan Risiko Penyakit Kulit
                        </h3>
                        <p>
                            Iritasi pada kulit, walaupun hanya seujung jarum dapat menjadi jalan masuk berbagai mikroorganisme penyebab penyakit. Bukan hanya jerawat lho, infeksi kulit lainnya juga bisa saja terjadi. Maksud hati ingin makin mulus malah timbul masalah kulit baru hanya karena sepele tidak mencuci tangan.
                        </p>
                    </div>
                    {{-- share --}}
                    <div class="flex flex-col items-center mt-8 md:mt-12">
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
                <div class="">
                    <hr>
                    <div class="my-8">
                        <div class="font-bold">
                            News & Articles Lainnya
                        </div>
                    </div>
                    {{-- recomendation --}}
                    <div class="relative">
                        <div class="flex" style="overflow: hidden; margin: -16px;">
                            <div class="relative w-full swiper-container swiper-news" style="overflow: visible; padding: 16px;">
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
                                                    Jenis Vlek Hitam Yang Sering Timbul Pada Wajah
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
                                                    Mengenal Chemical Peeling Dan Manfaat Treatmentnya
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
                                                    Mengenal Jerawat Batu dan Cara Mencegahnya
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
                                                    Posisi Tidur yang Tepat Untuk Mencegah Jerawat
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
            {{-- side other news --}}
            <div class="hidden w-4/12 md:block">
                <div class="lg:pl-8">
                    <div class="mb-6 text-xl font-bold">
                        Info Menarik Lainnya
                    </div>
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="">
                                <img src="{{ asset('images/about-1.png') }}" alt="blog-post" class="object-cover rounded-lg" height="80" width="130" style="max-width: 130px; max-height: 80px;">
                            </div>
                            <div class="ml-5">
                                <div class="font-bold">
                                    Now Rapid Test COVID-19 Available At Estetika dr. Affandi
                                </div>
                                <div class="text-xs text-gray-500">
                                    Senin, 8 Juni 2020
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="">
                                <img src="{{ asset('images/about-1.png') }}" alt="blog-post" class="object-cover rounded-lg" height="80" width="130" style="max-width: 130px; max-height: 80px;">
                            </div>
                            <div class="ml-5">
                                <div class="font-bold">
                                    Tips Meningkatkan Kekebalan Tubuh Saat Memasuki New Nor...
                                </div>
                                <div class="text-xs text-gray-500">
                                    Kamis, 4 Juni 2020
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="">
                                <img src="{{ asset('images/about-1.png') }}" alt="blog-post" class="object-cover rounded-lg" height="80" width="130" style="max-width: 130px; max-height: 80px;">
                            </div>
                            <div class="ml-5">
                                <div class="font-bold">
                                    Kenali Penyebab Munculnya Kantung Mata
                                </div>
                                <div class="text-xs text-gray-500">
                                    Kamis, 14 Mei 2020
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-app>


<script src="https://unpkg.com/swiper@6/swiper-bundle.min.js"></script>

<script>
	var swiperNews = new Swiper('.swiper-news', {
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
