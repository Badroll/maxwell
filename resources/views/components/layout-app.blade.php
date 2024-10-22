<div class="min-h-screen relative">
	<!-- navbar start -->
    @if ($withNavbar == 'true')
        <x-navbar />
    @endif

	<!-- navbar end -->
	@if ($withBottomNavbar == 'true')
        <!-- navbar bottom start -->
        <div
            class="md:hidden flex justify-between bg-white fixed bottom-0 w-full border-t border-gray-200 uppercase font-semibold text-sm z-40"
        >
            <a  
                href="/"
                class="bg-white hover:bg-gray-50 md:p-5 p-2 flex flex-col items-center flex-1 cursor-pointer text-xs"
            >
                @if (Request::path() == '/')
                    <img src="{{asset('images/icon-navbar/icon-home-active.svg')}}" class="w-6 h-6" />
                    <div class="mt-1 text-klinik-primary">home</div>
                @else
                    <img src="{{asset('images/icon-navbar/icon-home.svg')}}" class="w-6 h-6" />
                    <div class="mt-1 text-gray-400">home</div>
                @endif
            </a>
            <a  
                href="/services"
                class="bg-white hover:bg-gray-50 md:p-5 p-2 flex flex-col items-center flex-1 cursor-pointer text-xs text-gray-400"
            >   
                @if (Request::path() == 'services')
                    <img src="{{asset('images/icon-navbar/icon-product-active.svg')}}" class="w-6 h-6" />
                    <div class="mt-1 text-klinik-primary">services</div>
                @else
                    <img src="{{asset('images/icon-navbar/icon-product.svg')}}" class="w-6 h-6" />
                    <div class="mt-1 text-gray-400">services</div>
                @endif
            </a>
        </div>
    @endif
	<!-- navbar bottom end -->
    
    @if ($withNavbar == 'true')
        <div class="md:pt-20 pt-16">
            {{ $slot }}
        </div>
    @else
        <div>
            {{ $slot }}
        </div>
    @endif

    {{-- footer --}}
    @if ($withFooter == 'true')
	    <x-footer />
    @endif
</div>
