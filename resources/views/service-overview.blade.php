@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
    <div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16">
      <div class="pt-8 md:pt-28 pb-28 md:pb-44">
				<div class="flex justify-between mb-8 md:mb-36">
					<div class="flex flex-col" style="max-width: 28rem">
						<div>
							<img src="{{ asset('images/service/3-dot.svg') }}" alt="dot">
						</div>
						<div class="text-base md:text-xl font-extrabold mt-6 md:mt-12">
							Memahami kondisi kulit wajah sendiri, adalah faktor utama untuk Anda memilih produk dan jenis perawatan yang tepat.
						</div>
					</div>
					<div class="hidden md:block">
						<div class="relative">
							<img src="{{ asset('images/service/dot.svg') }}" alt="dot" class="w-20 h-20">
							<img src="{{ asset('images/service/circle.svg') }}" alt="dot" class="w-16 h-16 absolute" style="bottom: -35px; left: -30px;">
						</div>
					</div>
				</div>
				<div class="block md:flex">
					<div class="md:w-1/2 flex justify-center md:justify-start">
						<div>
							<div class="relative">
								<img src="{{ asset('images/service/overview-solution.svg') }}" alt="service" height="414" width="311" class="relative z-20"> 
								<img src="{{ asset('images/service/dot.svg') }}" alt="dot" class="absolute w-16 h-16 -bottom-4 -right-4 md:-right-10">
							</div>
						</div>
					</div>
					<div class="md:w-1/2 mt-8 md:mt-0">
						<div class="font-extrabold text-xl md:text-4.5xl mb-5">
							Estetika Solution
						</div>
						<div class="font-medium text-sm md:text-base lg:pr-24">
							Sebagai organ tubuh paling luar, kulit selalu terpapar berbagai faktor baik external maupun internal, yang dapat memengaruhi kesehatannya seperti faktor usia, pola hidup dan kondisi lingkungan hidup yang mana polusi semakin tidak terhindarkan. Memahami kulit wajah sendiri, adalah faktor utama untuk Anda memilih produk dan jenis treatment atau perawatan yang tepat. Karena, Klinik Estetika dr. Affandi memahami setiap keinginan dan permasalahan kulit wajah wanita Indonesia, kami menawarkan Estetika Solutions yang dapat menjaga dan merawat kesehatan kulit Anda, diantaranya adalah 
							<a href="#" class="text-klinik-primary font-bold">Acne Solutions</a>, 
							<a href="#" class="text-klinik-primary font-bold">Anti-Aging Solutions</a>, 
							<a href="#" class="text-klinik-primary font-bold">Hyperpigmentation Solutions</a>, 
							<a href="#" class="text-klinik-primary font-bold">Scar Solutions</a>, 
							<a href="#" class="text-klinik-primary font-bold">Brightening Solutions</a>, 
							<a href="#" class="text-klinik-primary font-bold">Teen Skin Solutions</a>, dan 
							<a href="#" class="text-klinik-primary font-bold">Hair Solutions</a>.
						</div>
						<div class="mt-7">
							<a
								href="/service-detail"
								class="w-full block text-center md:w-80 py-2 bg-klinik-primary text-white rounded-full font-bold btn-focus-primary text-sm uppercase"
							>
								SEE MORE on estetika solution
							</a>
						</div>
					</div>
				</div>
			</div>
    </div>
</x-layout-app>

@endsection
