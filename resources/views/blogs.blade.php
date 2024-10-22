@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
    <div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
        <div class="flex md:pt-20">
            <div class="w-full md:w-8/12">
                {{-- search bar --}}
                {{-- <div class="py-8 md:hidden">
                    <div class="bg-gray-100 rounded-lg flex items-center px-3 py-2">
                        <input type="text" name="search" class="w-full focus:outline-none bg-transparent" placeholder="Cari artikel">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                </div> --}}
                <div class="space-y-6 md:space-y-10 md:px-24 pt-8 md:pt-0">
                    {{-- card blog --}}
                    <div class="pb-6 border-b border-gray-300">
                        <a href="/news-detail" class="text-xl md:text-3xl font-extrabold">Pentingnya Cuci Tangan Sebelum Pemakaian Skincare</a>
                        <div class="text-sm text-gray-400 mt-2 hidden md:block">
                            Selasa, 16 Juni 2020
                        </div>
                        <div class="aspect-h-9 aspect-w-16 my-4 md:my-6">
                            <img src="{{ asset('images/blog/blog-2.png') }}" alt="blog" class="w-full h-full rounded-lg">
                        </div>
                        <div class="text-sm md:text-lg mb-1">
                            Merawat kulit dengan skin care sudah menjadi rutinitas sehari-hari yang wajib dilakukan dalam menjaga penampilan. Sayangnya, mungkin masih banyak diantara...
                        </div>
                        <div class="text-sm text-gray-400 md:hidden">
                            Selasa, 16 Juni 2020
                        </div>
                        <div class="text-center mb-4 md:mb-12 mt-6 md:mt-8">
                            <a
                                href="/news-detail"
                                class="px-10 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
                            >
                                READ MORE
                            </a>
                        </div>
                    </div>
    
                    <div class="pb-6 border-b border-gray-300">
                        <a href="/news-detail" class="text-xl md:text-3xl font-extrabold">Ikuti Tips Ampuh Ini Untuk Menghindari Jerawat Punggung</a>
                        <div class="text-sm text-gray-400 mt-2 hidden md:block">
                            Selasa, 16 Juni 2020
                        </div>
                        <div class="aspect-h-9 aspect-w-16 my-4 md:my-6">
                            <img src="{{ asset('images/blog/blog-1.png') }}" alt="blog" class="w-full h-full rounded-lg">
                        </div>
                        <div class="text-sm md:text-lg mb-1">
                            Hampir semua orang mungkin pernah mengalami kulit berjerawat. Masalah kulit yang sudah ada sejak zaman Pharaoh di Mesir (3000 SM) ini, masih menjadi tren per...
                        </div>
                        <div class="text-sm text-gray-400 md:hidden">
                            Selasa, 16 Juni 2020
                        </div>
                        <div class="text-center mb-4 md:mb-12 mt-6 md:mt-8">
                            <a
                                href="/news-detail"
                                class="px-10 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
                            >
                                READ MORE
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-10 md:hidden">
                    <button
                        class="px-10 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary uppercase w-full opacity-80"
                    >
                        See more 
                    </button>
                </div>
            </div>
            <div class="w-4/12 hidden md:block">
                <div class="lg:px-8">
                    <div class="font-bold text-xl mb-6">
                        Info Menarik Lainnya
                    </div>
                    <div class="space-y-8">
                        <a href="/news-detail" class="flex items-start cursor-pointer">
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
                        </a>
                        <a href="/news-detail" class="flex items-start cursor-pointer">
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
                        </a>
                        <a href="/news-detail" class="flex items-start cursor-pointer">
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
                        </a>
                        <a href="/news-detail" class="flex items-start cursor-pointer">
                            <div class="">
                                <img src="{{ asset('images/about-1.png') }}" alt="blog-post" class="object-cover rounded-lg" height="80" width="130" style="max-width: 130px; max-height: 80px;">
                            </div>
                            <div class="ml-5">
                                <div class="font-bold">
                                    Kenali Penyebab Munculnya Kantung Mata
                                </div>
                                <div class="text-xs text-gray-500">
                                    Senin, 8 Juni 2020
                                </div>
                            </div>
                        </a>
                        <a href="/news-detail" class="flex items-start cursor-pointer">
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
                        </a>
                    </div>
                    <div class="text-center mt-10">
                        <button
                            class="px-10 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary uppercase opacity-80"
                        >
                            more news & articles
                        </button>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</x-layout-app>
@endsection
