@extends("layouts.app")

@section("content")
<x-layout-app withNavbar withFooter withBottomNavbar>
  <div class="pt-10 mb-6 md:mb-16">
    <div class="hidden md:flex items-center justify-center h-40 bg-grad-header w-full">
			<div class="tracking-wider text-5xl text-white font-extrabold">Cara Konsultasi Online dan Pemesanan</div>
		</div>
    <div class="block md:hidden px-5">
      <div class="md:text-2xl text-xl font-extrabold">Cara Konsultasi Online dan Pemesanan</div>
    </div>
  </div>
  
  <div class="max-w-7xl mx-auto px-5 space-y-16 md:space-y-24 mb-28">
    <div class="max-w-4xl mx-auto">
      <div class="font-extrabold text-sm md:text-2xl text-left md:text-center mb-5 md:mb-10">
        Video Panduan “Pemesanan Produk via E-commerce” Estetika dr. Affandi
      </div>
			<div class="">
				<iframe src="https://www.youtube.com/embed/upvHwx6maJo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mx-auto w-full h-60 md:h-500px"></iframe>
			</div>
    </div>

    <div class="max-w-4xl mx-auto">
      <div class="font-extrabold text-sm md:text-2xl text-left md:text-center mb-5 md:mb-10">
        Video Panduan “Live Video Consultation” Estetika dr. Affandi
      </div>
			<div class="">
				<iframe src="https://www.youtube.com/embed/KA3XYEIHufk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mx-auto w-full h-60 md:h-500px"></iframe>
			</div>
    </div>

		<div class="max-w-4xl mx-auto">
			<div class="font-extrabold text-sm md:text-2xl text-left md:text-center mb-5 md:mb-10">
				Video Panduan “Live Photo Consultation” Estetika dr. Affandi
			</div>
		<div class="">
			<iframe src="https://www.youtube.com/embed/SznDHj4qFxA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mx-auto w-full h-60 md:h-500px"></iframe>
		</div>
  </div>
</x-layout-app>
@endsection
