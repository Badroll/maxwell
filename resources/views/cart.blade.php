@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter="false" withBottomNavbar="false">
    <div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
        <div class="pt-7 text-xs hidden md:flex items-center">
            <a href="/" class="text-klinik-primary font-medium">Home</a>
            <span class="px-2 hidden md:flex">•</span>
            <span class="px-2 flex md:hidden">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </span>
            <span>Keranjang Belanja</span>
        </div>
        {{-- layout desktop --}}
        <div class="mt-8 divide-x hidden md:flex">
            <div class="w-2/3 md:mr-6 lg:mr-10">
                <div class="text-2xl font-bold mb-8">
                    Keranjang Belanja
                </div>
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="text-left">Produk</th>
                            <th class="text-left">Jumlah</th>
                            <th class="text-left">Ukuran</th>
                            <th class="text-left">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td  class="py-10 flex items-center">
                                <img src="{{ asset('images/cart/cart-1.svg') }}" alt="product" class="w-12 h-12 mr-6">
                                <div class="font-bold text-sm">
                                    Bedak Tabur EKSOTIKA 01-BEIGE
                                </div>
                            </td>
                            <td  class="py-10">
                                <div class="flex items-center text-center" x-data="{ qty: 0 }">
                                    <button type="button" x-bind:disabled="qty === 0" name="button" class="bg-klinik-primary rounded-full text-white font-extrabold p-1 focus:outline-none" @click="qty--">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
                                    </button>
                                    <div class="mx-6" x-text="qty"></div>
                                    <button type="button" name="button" class="bg-klinik-primary rounded-full text-white font-extrabold p-1 focus:outline-none" @click="qty++">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                    </button>
                                </div>
                            </td>
                            <td  class="py-10">1</td>
                            <td  class="py-10">Rp. 101.000</td>
                        </tr>
                        <tr class="border-b">
                            <td  class="py-10 flex items-center">
                                <img src="{{ asset('images/cart/cart-2.svg') }}" alt="product" class="w-12 h-12 mr-6">
                                <div class="font-bold text-sm">
                                    Bedak Tabur EKSOTIKA 01-BEIGE
                                </div>
                            </td>
                            <td  class="py-10">
                                <div class="flex items-center text-center" x-data="{ qty: 0 }">
                                    <button type="button" x-bind:disabled="qty === 0" name="button" class="bg-klinik-primary rounded-full text-white font-extrabold p-1 focus:outline-none" @click="qty--">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
                                    </button>
                                    <div class="mx-6" x-text="qty"></div>
                                    <button type="button" name="button" class="bg-klinik-primary rounded-full text-white font-extrabold p-1 focus:outline-none" @click="qty++">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                    </button>
                                </div>
                            </td>
                            <td  class="py-10">1</td>
                            <td  class="py-10">Rp. 101.000</td>
                        </tr>
                        <tr class="border-b">
                            <td  class="py-10 flex items-center">
                                <img src="{{ asset('images/cart/cart-3.svg') }}" alt="product" class="w-12 h-12 mr-6">
                                <div class="font-bold text-sm">
                                    VITAMIN SELOXY AA
                                </div>
                            </td>
                            <td  class="py-10">
                                <div class="flex items-center text-center" x-data="{ qty: 0 }">
                                    <button type="button" x-bind:disabled="qty === 0" name="button" class="bg-klinik-primary rounded-full text-white font-extrabold p-1 focus:outline-none" @click="qty--">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
                                    </button>
                                    <div class="mx-6" x-text="qty"></div>
                                    <button type="button" name="button" class="bg-klinik-primary rounded-full text-white font-extrabold p-1 focus:outline-none" @click="qty++">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                    </button>
                                </div>
                            </td>
                            <td  class="py-10">1</td>
                            <td  class="py-10">Rp. 54.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-1/3 md:pl-6 lg:pl-10">
                <div class="text-2xl font-bold mb-8">
                    Ringkasan Belanja
                </div>
                <div class="flex justify-between text-sm font-bold">
                    <div class="">
                        Total Harga <span class="font-normal">(3 produk)</span>
                    </div>
                    <div class="">
                        Rp 256.000
                    </div>
                </div>
                <div class="flex items-center py-3">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="text-xs">belum termasuk biaya kirim</span>
                </div>
                <div class="">
                    <a  
                        href="/shopping-details"
                        class="px-10 py-2 w-full block text-center tracking-wider bg-klinik-primary text-white rounded-full font-bold btn-focus-primary"
                    >
                        BELI SEKARANG
                    </a>
                </div>
            </div>
        </div>
        {{-- layout mobile --}}
        <div class="pt-5 md:hidden">
            <div class="flex items-center mb-2">
                <a href="/" class="mr-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </a>
                <div class="font-bold text-lg">
                    Keranjang Belanja
                </div>
            </div>
            <div class="pb-52">
                <div class="flex py-6 border-b">
                    <div class="">
                        <img src="{{ asset('images/cart/cart-1.svg') }}" alt="product" class="w-8 h-8 mr-4">
                    </div>
                    <div class="font-bold text-xs w-full">
                        <div class="mb-2.5">
                            Bedak Tabur EKSOTIKA 01-BEIGE
                        </div>
                        <div class="mb-4">
                            Ukuran 1
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-xs flex items-center text-center" x-data="{ qty: 0 }">
                                <button type="button" x-bind:disabled="qty === 0" name="button" class="bg-klinik-primary rounded-full text-white font-extrabold w-5 h-5 focus:outline-none" @click="qty--">
                                    -
                                </button>
                                <div class="mx-4" x-text="qty">
    
                                </div>
                                <button type="button" name="button" class="bg-klinik-primary rounded-full text-white font-extrabold w-5 h-5 focus:outline-none" @click="qty++">
                                    +
                                </button>
                            </div>
                            <div class="">
                                Rp. 101.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex py-6 border-b">
                    <div class="">
                        <img src="{{ asset('images/cart/cart-2.svg') }}" alt="product" class="w-8 h-8 mr-4">
                    </div>
                    <div class="font-bold text-xs w-full">
                        <div class="mb-2.5">
                            Bedak Tabur EKSOTIKA 02-NATURAL
                        </div>
                        <div class="mb-4">
                            Ukuran 1
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-xs flex items-center text-center" x-data="{ qty: 0 }">
                                <button type="button" x-bind:disabled="qty === 0" name="button" class="bg-klinik-primary rounded-full text-white font-extrabold w-5 h-5 focus:outline-none" @click="qty--">
                                    -
                                </button>
                                <div class="mx-4" x-text="qty">
    
                                </div>
                                <button type="button" name="button" class="bg-klinik-primary rounded-full text-white font-extrabold w-5 h-5 focus:outline-none" @click="qty++">
                                    +
                                </button>
                            </div>
                            <div class="">
                                Rp. 101.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex py-6 border-b">
                    <div class="">
                        <img src="{{ asset('images/cart/cart-3.svg') }}" alt="product" class="w-8 h-8 mr-4">
                    </div>
                    <div class="font-bold text-xs w-full">
                        <div class="mb-2.5">
                            VITAMIN SELOXY AA
                        </div>
                        <div class="mb-4">
                            Ukuran 1
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-xs flex items-center text-center" x-data="{ qty: 0 }">
                                <button type="button" x-bind:disabled="qty === 0" name="button" class="bg-klinik-primary rounded-full text-white font-extrabold w-5 h-5 focus:outline-none" @click="qty--">
                                    -
                                </button>
                                <div class="mx-4" x-text="qty">
    
                                </div>
                                <button type="button" name="button" class="bg-klinik-primary rounded-full text-white font-extrabold w-5 h-5 focus:outline-none" @click="qty++">
                                    +
                                </button>
                            </div>
                            <div class="">
                                Rp. 54.000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-6 pt-8 fixed bottom-0 left-0 w-full bg-white" style="box-shadow: 0px -2px 20px 0px rgba(0, 0, 0, 0.16);">
                <div class="text-lg font-bold mb-4">
                    Ringkasan Belanja
                </div>
                <div class="flex justify-between text-sm font-bold">
                    <div class="text-xs">
                        Total Harga <span class="font-normal">(3 produk)</span>
                    </div>
                    <div class="text-sm">
                        Rp 256.000
                    </div>
                </div>
                <div class="flex items-center py-3">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="text-xs">belum termasuk biaya antar</span>
                </div>
                <div class="">
                    <a
                        href="/shopping-details"
                        class="px-10 py-2 w-full block text-center text-sm md:text-base tracking-wider bg-klinik-primary text-white rounded-full font-bold btn-focus-primary"
                    >
                        BELI SEKARANG
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden md:block">
        <x-footer />
    </div>
</x-layout-app>
@endsection
