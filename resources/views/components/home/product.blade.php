<div class="max-w-full md:max-w-8xl mx-auto px-5 md:px-8 lg:px-16 py-12 md:py-20 flex flex-col items-center">
	<div class="flex items-center justify-between w-full mb-4 md:mb-8">
		<div>
			<div class="text-xs md:text-lg font-semibold tracking-widest mb-1.5 font-poppins">PRODUCTS</div>
			<div class="text-xl md:text-3.5xl font-bold mb-2 md:mb-4">Dermatologically Tested Formula</div>
			<div class="w-32 bg-klinik-primary" style="height: 2px"></div>
		</div>
		<div class="hidden md:block">
			<a
				href="/product"
				class="px-6 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary uppercase opacity-80 tracking-wide text-sm"
			>
				All Products
			</a>
		</div>
	</div>

	<div class="relative h-auto w-full max-w-full">
		<div class="swiper-container swiper-product">
			<div class="swiper-wrapper">
				<x-card-product-slide title="AHA WHITENING BODY LOTION" href="/product-detail" isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}"  />

				<x-card-product-slide title="AHA WHITENING BODY LOTION" href="/product-detail" isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}"  />

				<x-card-product-slide title="AHA WHITENING BODY LOTION" href="/product-detail" isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}"  />

				<x-card-product-slide title="AHA WHITENING BODY LOTION" href="/product-detail" isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}"  />

				<x-card-product-slide title="AHA WHITENING BODY LOTION" href="/product-detail" isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}"  />

				<x-card-product-slide title="AHA WHITENING BODY LOTION" href="/product-detail" isRecomended="false" price="Rp 999.999 - RP 999.999" image="{{ asset('images/eksotika/product.svg') }}"  />
			</div>
		</div>
		<!-- Add navigation -->
		<div class="flex justify-between max-w-8xl w-full">
			<div
				class="swiper-btn-prev-product bg-white p-1 rounded-full text-klinik-primary border-2 border-klinik-primary absolute z-30 -left-2 md:-left-6 top-1/2"
			>
				<svg
				class="w-6 md:w-7 h-6 md:h-7"
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
				class="swiper-btn-next-product bg-white p-1 rounded-full text-klinik-primary border-2 border-klinik-primary absolute z-30 -right-2 md:-right-6 top-1/2"
			>
				<svg
				class="w-6 md:w-7 h-6 md:h-7"
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
	<div class="text-center pt-10 md:hidden">
		<a
			href="/product"
			class="px-10 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80"
		>
			ALL PRODUCTS
		</a>
	</div>
</div>
