@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter="false" withBottomNavbar="false">
    <div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
        <div class="pt-7 text-xs flex items-center flex-wrap">
            <a href="/" class="text-gray-400">Home</a>
            <span class="px-2 hidden md:flex">•</span>
            <span class="px-2 flex md:hidden">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </span>
            <a href="/cart" class="text-gray-400">Keranjang</a>
            <span class="px-2 hidden md:flex">•</span>
            <span class="px-2 flex md:hidden">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </span>
            <a href="/shopping-details" class="text-gray-400">Pengiriman</a>
            <span class="px-2 hidden md:flex">•</span>
            <span class="px-2 flex md:hidden">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </span>
            <span>Pembayaran</span>
        </div>

        <div class="block md:flex py-8 md:divide-x divide-y md:divide-y-0">
            <div class="md:w-5/12 md:pr-8 pb-8 md:pb-0">
                <hr class="md:hidden">
                <div class="mt-5 md:mt-0 mb-8">
                    <div class="text-2xl font-bold mb-3">Rincian Keranjang</div>
                </div>
                <div>
                    <div class="mb-5 space-y-4">
                        <div>
                            <div class="flex justify-between font-bold text-sm mb-1">
                                <div>Bedak Tabur EKSOTIKA 01-BEIGE</div>
                                <div>Rp. 101.000</div>
                            </div>
                            <div class="text-sm">
                                1 x Rp. 101.000
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between font-bold text-sm mb-1">
                                <div>Bedak Tabur EKSOTIKA 01-BEIGE</div>
                                <div>Rp. 101.000</div>
                            </div>
                            <div class="text-sm">
                                1 x Rp. 101.000
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between font-bold text-sm mb-1">
                                <div>Bedak Tabur EKSOTIKA 01-BEIGE</div>
                                <div>Rp. 101.000</div>
                            </div>
                            <div class="text-sm">
                                1 x Rp. 101.000
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                    <div class="my-5 space-y-3 font-bold text-sm">
                        <div class="flex items-center justify-between">
                            <div>Subtotal</div>
                            <div>Rp. 256.000</div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>Promo</div>
                            <div>Rp. 0</div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>Berat</div>
                            <div>1 Kg</div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>Biaya Pengiriman</div>
                            <div>Rp. 20.000</div>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-5 font-bold">
                        <div class="flex items-center justify-between">
                            <div>Total</div>
                            <div>Rp. 276.000</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-7/12 md:pl-8 pb-24 pt-8 md:pt-0" x-data="{ addressAlreadyAvailable: false }">
                <div class="text-lg md:text-2xl font-bold mb-4 md:mb-8">Pembayaran</div>
                <div class="text-sm md:text-lg font-bold mb-4 md:mb-10">Pilih Metode Pembayaran :</div>
                <div class="block space-y-6 md:space-y-0 md:flex items-center justify-between gap-10">
                    <div class="w-full h-36 bg-klinik-primary rounded-lg"></div>
                    <div class="w-full h-36 bg-klinik-primary rounded-lg"></div>
                </div>
                <hr class="block md:hidden mt-6">
            </div>
        </div>
        
    </div>
    <div class="">
        <x-footer />
    </div>
</x-layout-app>

@endsection
