@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
    <div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
        <div class="pt-10 md:pt-20 pb-8 md:pb-16 flex justify-between items-center">
            <div class="pr-4">
                <div class="md:text-3xl font-extrabold mb-1.5 md:mb-3">
                    Promo Terbaik Untukmu
                </div>
                <div class="text-xs md:text-lg">
                    Temukan berbagai promo menarik di bawah ini
                </div>
            </div>
            <div class="hidden md:block relative">
                <img src="{{ asset('images/promo/dot.svg') }}" alt="dot" class="absolute" style="top:-12px; right:-36px;">
                <img src="{{ asset('images/promo/promo.jpg') }}" alt="promo" height="264" width="470" class="bg-gray-100 rounded-2xl relative z-30">
                <img src="{{ asset('images/promo/dot.svg') }}" alt="dot" class="absolute" style="bottom:-32px; left:-42px;">
            </div>
        </div>
        
        <div class="md:mt-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- card promo --}}
                <div class="rounded-2xl w-full flex flex-col" style="box-shadow: 0px 5px 20px rgba(12, 67, 183, 0.08);">
                    <a href="/promo-detail" class="p-1">
                        <img src="{{ asset('images/promo/promo-1.png') }}" alt="img-promo" class="w-full h-52 object-cover rounded-14px">
                    </a>
                    <div class="flex-grow p-6">
                        <div class="text-sm mb-3">
                            Selasa, 16 Juni 2020 17.11 WIB
                        </div>
                        <a href="/promo-detail" class="font-bold mb-4">
                            Dapatkan Discount UP TO 35% Untuk Kulit Mulus Bebas Jerawat Di Masa New Normal
                        </a>
                    </div>
                    <div class="flex-grow-0 p-6 pt-0">
                        <div class="space-y-2.5 mb-5">
                            <div class="text-sm p-2.5 rounded-md border border-klinik-primary block ss:flex justify-between items-center">
                                <div class="">
                                    Periode Promo
                                </div>
                                <div class="font-bold text-klinik-primary">
                                    1 Juni 2020 - 31 Juli 2020
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <a  
                                href="/promo-detail"
                                class="w-full block text-center py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
                            >
                                MORE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl w-full flex flex-col" style="box-shadow: 0px 5px 20px rgba(12, 67, 183, 0.08);">
                    <a href="/promo-detail" class="p-1">
                        <img src="{{ asset('images/promo/promo-2.png') }}" alt="img-promo" class="w-full h-52 object-cover rounded-14px">
                    </a>
                    <div class="flex-grow p-6">
                        <div class="text-sm mb-3">
                            Sabtu, 13 Juni 2020 16.45 WIB
                        </div>
                        <a href="/promo-detail" class="font-bold mb-4">
                            Dapatkan Diskon UP TO 20% untuk Teen Skin Problems Solutions For Gen Z
                        </a>
                    </div>
                    <div class="flex-grow-0 p-6 pt-0">
                        <div class="space-y-2.5 mb-5">
                            <div class="text-sm p-2.5 rounded-md border border-klinik-primary block ss:flex justify-between items-center">
                                <div class="">
                                    Periode Promo
                                </div>
                                <div class="font-bold text-klinik-primary">
                                    1 Juni 2020 - 31 Juli 2020
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <a  
                                href="/promo-detail"
                                class="w-full block text-center py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
                            >
                                MORE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl w-full flex flex-col" style="box-shadow: 0px 5px 20px rgba(12, 67, 183, 0.08);">
                    <a href="/promo-detail" class="p-1">
                        <img src="{{ asset('images/promo/promo-3.png') }}" alt="img-promo" class="w-full h-52 object-cover rounded-14px">
                    </a>
                    <div class="flex-grow p-6">
                        <div class="text-sm mb-3">
                            Rabu, 10 Juni 2020 14.50 WIB
                        </div>
                        <a href="/promo-detail" class="font-bold mb-4">
                            Get Ready For The New Normal And Get Discount UP TO 35% For Estetika Brightening Solutions
                        </a>
                    </div>
                    <div class="flex-grow-0 p-6 pt-0">
                        <div class="space-y-2.5 mb-5">
                            <div class="text-sm p-2.5 rounded-md border border-klinik-primary block ss:flex justify-between items-center">
                                <div class="">
                                    Periode Promo
                                </div>
                                <div class="font-bold text-klinik-primary">
                                    1 Juni 2020 - 31 Juli 2020
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <a  
                                href="/promo-detail"
                                class="w-full block text-center py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
                            >
                                MORE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl w-full flex flex-col" style="box-shadow: 0px 5px 20px rgba(12, 67, 183, 0.08);">
                    <a href="/promo-detail" class="p-1">
                        <img src="{{ asset('images/promo/promo-4.png') }}" alt="img-promo" class="w-full h-52 object-cover rounded-14px">
                    </a>
                    <div class="flex-grow p-6">
                        <div class="text-sm mb-3">
                            Selasa, 16 Juni 2020 17.11 WIB
                        </div>
                        <a href="/promo-detail" class="font-bold mb-4">
                            Dapatkan Discount UP TO 35% Untuk Kulit Mulus Bebas Jerawat Di Masa New Normal
                        </a>
                    </div>
                    <div class="flex-grow-0 p-6 pt-0">
                        <div class="space-y-2.5 mb-5">
                            <div class="text-sm p-2.5 rounded-md border border-klinik-primary block ss:flex justify-between items-center">
                                <div class="">
                                    Periode Promo
                                </div>
                                <div class="font-bold text-klinik-primary">
                                    1 Juni 2020 - 31 Juli 2020
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <a  
                                href="/promo-detail"
                                class="w-full block text-center py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
                            >
                                MORE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl w-full flex flex-col" style="box-shadow: 0px 5px 20px rgba(12, 67, 183, 0.08);">
                    <a href="/promo-detail" class="p-1">
                        <img src="{{ asset('images/promo/promo-5.png') }}" alt="img-promo" class="w-full h-52 object-cover rounded-14px">
                    </a>
                    <div class="flex-grow p-6">
                        <div class="text-sm mb-3">
                            Sabtu, 13 Juni 2020 16.45 WIB
                        </div>
                        <a href="/promo-detail" class="font-bold mb-4">
                            Dapatkan Diskon UP TO 20% untuk Teen Skin Problems Solutions For Gen Z
                        </a>
                    </div>
                    <div class="flex-grow-0 p-6 pt-0">
                        <div class="space-y-2.5 mb-5">
                            <div class="text-sm p-2.5 rounded-md border border-klinik-primary block ss:flex justify-between items-center">
                                <div class="">
                                    Periode Promo
                                </div>
                                <div class="font-bold text-klinik-primary">
                                    1 Juni 2020 - 31 Juli 2020
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <a  
                                href="/promo-detail"
                                class="w-full block text-center py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
                            >
                                MORE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl w-full flex flex-col" style="box-shadow: 0px 5px 20px rgba(12, 67, 183, 0.08);">
                    <a href="/promo-detail" class="p-1">
                        <img src="{{ asset('images/promo/promo-6.png') }}" alt="img-promo" class="w-full h-52 object-cover rounded-14px">
                    </a>
                    <div class="flex-grow p-6">
                        <div class="text-sm mb-3">
                            Rabu, 10 Juni 2020 14.50 WIB
                        </div>
                        <a href="/promo-detail" class="font-bold mb-4">
                            Get Ready For The New Normal And Get Discount UP TO 35% For Estetika Brightening Solutions
                        </a>
                    </div>
                    <div class="flex-grow-0 p-6 pt-0">
                        <div class="space-y-2.5 mb-5">
                            <div class="text-sm p-2.5 rounded-md border border-klinik-primary block ss:flex justify-between items-center">
                                <div class="">
                                    Periode Promo
                                </div>
                                <div class="font-bold text-klinik-primary">
                                    1 Juni 2020 - 31 Juli 2020
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <a  
                                href="/promo-detail"
                                class="w-full block text-center py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
                            >
                                MORE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
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
