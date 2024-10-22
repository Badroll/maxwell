@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
    <div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
        <div class="pt-10 md:pt-20 pb-4 md:pb-16 flex justify-between items-center">
            <div class="pr-4 w-full md:w-auto">
                <div class="text-lg md:text-3.5xl pb-2 md:pb-4 font-extrabold  leading-normal">
                    Treatment
                    Acne Solutions
                </div>
                <div class="text-sm md:text-base max-w-md">
                    Penuaan pada kulit wajah ditandai dengan munculnya keriput, vlek, kulit kering, dan pori-pori membesar. Hal ini terjadi pada wajah Anda? Anti-Aging Solutions dari Estetika dr. Affandi bisa jadi solusinya.
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
                {{-- card treatment --}}
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
            </div>
        </div>
    </div>
</x-layout-app>
@endsection
