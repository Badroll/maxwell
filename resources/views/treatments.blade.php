@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
    <div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
        <div class="pt-7 pb-2 md:pb-4 text-xs">
            <a href="/services" class="text-klinik-primary font-medium">Estetika Solutions</a>
            <span class="mx-2">|</span>
            <a href="/stress-free-solutions" class="font-medium">All Treatments</a>
        </div>
        <div class="pt-6 md:pt-7 pb-4 md:pb-16 flex justify-between items-center">
            <div class="md:pr-4 w-full md:w-auto">
                <div class="mb-6 flex overflow-x-auto" id="scroll-to-end">
                    <a href="/services">
                        <button class="border-2 border-klinik-primary text-klinik-primary rounded-full font-bold text-xs p-3 w-56 btn-focus-primary">ESTETIKA SOLUTIONS</button>
                    </a>
                    <a href="/treatments" class="ml-4">
                        <button class="border-2 text-white rounded-full font-bold text-xs py-3 w-56 btn-focus-primary" style="background: linear-gradient(271.2deg, #3867AB 3.66%, #8DB7DD 97.09%); border-color: linear-gradient(271.2deg, #3867AB 3.66%, #8DB7DD 97.09%);">ALL TREATMENTS</button>
                    </a>
                </div>
                <div class="text-lg md:text-3.5xl pb-2 md:pb-4 font-extrabold  leading-normal">
                    Layanan Perawatan Terbaik<br> dari Klinik Estetika dr. Estetika
                </div>
                <div class="text-sm md:text-lg">
                    Setiap kulit memiliki jenis perawatan yang berbeda.<br class="hidden md:block"> Pahami bagaimana kulitmu bersama kami.
                </div>
            </div>
            <div class="hidden md:block relative">
                <img src="{{ asset('images/promo/dot.svg') }}" alt="dot" class="absolute" style="top:-12px; right:-36px;">
                <img src="{{ asset('images/treatment.jpg') }}" alt="promo" height="264" width="470" class="bg-gray-100 rounded-2xl relative z-30">
                <img src="{{ asset('images/promo/dot.svg') }}" alt="dot" class="absolute" style="bottom:-32px; left:-42px;">
            </div>
        </div>
        
        <div class="mt-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- card promo --}}
                <div class="rounded-2xl w-full flex flex-col" style="box-shadow: 0px 5px 20px rgba(12, 67, 183, 0.08);">
                    <a href="/treatment-detail" class="p-1">
                        <img src="{{ asset('images/promo/promo-1.png') }}" alt="img-promo" class="w-full h-52 object-cover rounded-14px">
                    </a>
                    <div class="flex-grow p-6">
                        <a href="/treatment-detail" class="font-bold mb-4">
                            Bright Light Aquapure for Acne by Treatments by Klinik Estetika dr. Affandi
                        </a>
                    </div>
                    <div class="flex-grow-0 p-6 pt-3">
                        <div class="">
                            <a  
                                href="/treatment-detail"
                                class="w-full block text-center py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
                            >
                                MORE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl w-full flex flex-col" style="box-shadow: 0px 5px 20px rgba(12, 67, 183, 0.08);">
                    <a href="/treatment-detail" class="p-1">
                        <img src="{{ asset('images/promo/promo-2.png') }}" alt="img-promo" class="w-full h-52 object-cover rounded-14px">
                    </a>
                    <div class="flex-grow p-6">
                        <a href="/treatment-detail" class="font-bold mb-4">
                            Bright Light Aquapure for Acne by Treatments by Klinik Estetika dr. Affandi
                        </a>
                    </div>
                    <div class="flex-grow-0 p-6 pt-3">
                        <div class="">
                            <a  
                                href="/treatment-detail"
                                class="w-full block text-center py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
                            >
                                MORE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl w-full flex flex-col" style="box-shadow: 0px 5px 20px rgba(12, 67, 183, 0.08);">
                    <a href="/treatment-detail" class="p-1">
                        <img src="{{ asset('images/promo/promo-3.png') }}" alt="img-promo" class="w-full h-52 object-cover rounded-14px">
                    </a>
                    <div class="flex-grow p-6">
                        <a href="/treatment-detail" class="font-bold mb-4">
                            Bright Light Aquapure for Acne by Treatments by Klinik Estetika dr. Affandi
                        </a>
                    </div>
                    <div class="flex-grow-0 p-6 pt-3">
                        <div class="">
                            <a  
                                href="/treatment-detail"
                                class="w-full block text-center py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
                            >
                                MORE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl w-full flex flex-col" style="box-shadow: 0px 5px 20px rgba(12, 67, 183, 0.08);">
                    <a href="/treatment-detail" class="p-1">
                        <img src="{{ asset('images/promo/promo-4.png') }}" alt="img-promo" class="w-full h-52 object-cover rounded-14px">
                    </a>
                    <div class="flex-grow p-6">
                        <a href="/treatment-detail" class="font-bold mb-4">
                            Bright Light Aquapure for Acne by Treatments by Klinik Estetika dr. Affandi
                        </a>
                    </div>
                    <div class="flex-grow-0 p-6 pt-3">
                        <div class="">
                            <a  
                                href="/treatment-detail"
                                class="w-full block text-center py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
                            >
                                MORE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl w-full flex flex-col" style="box-shadow: 0px 5px 20px rgba(12, 67, 183, 0.08);">
                    <a href="/treatment-detail" class="p-1">
                        <img src="{{ asset('images/promo/promo-5.png') }}" alt="img-promo" class="w-full h-52 object-cover rounded-14px">
                    </a>
                    <div class="flex-grow p-6">
                        <a href="/treatment-detail" class="font-bold mb-4">
                            Bright Light Aquapure for Acne by Treatments by Klinik Estetika dr. Affandi
                        </a>
                    </div>
                    <div class="flex-grow-0 p-6 pt-3">
                        <div class="">
                            <a  
                                href="/treatment-detail"
                                class="w-full block text-center py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
                            >
                                MORE DETAILS
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl w-full flex flex-col" style="box-shadow: 0px 5px 20px rgba(12, 67, 183, 0.08);">
                    <a href="/treatment-detail" class="p-1">
                        <img src="{{ asset('images/promo/promo-6.png') }}" alt="img-promo" class="w-full h-52 object-cover rounded-14px">
                    </a>
                    <div class="flex-grow p-6">
                        <a href="/treatment-detail" class="font-bold mb-4">
                            Bright Light Aquapure for Acne by Treatments by Klinik Estetika dr. Affandi
                        </a>
                    </div>
                    <div class="flex-grow-0 p-6 pt-3">
                        <div class="">
                            <a  
                                href="/treatment-detail"
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

<script>
    var objDiv = document.getElementById("scroll-to-end");
    objDiv.scrollLeft = objDiv.scrollWidth;
</script>
@endsection
