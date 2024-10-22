<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16 py-12 md:py-20 flex flex-col items-center relative" x-data="{ value: 1 }">
	<div class="flex items-center justify-between w-full mb-4 md:mb-8">
		<div>
			<div class="text-xs md:text-lg font-semibold tracking-widest mb-1.5 font-poppins">USEFUL INFORMATION</div>
			<div class="text-xl md:text-3.5xl font-bold mb-2 md:mb-4">Klinik Estetika Videos</div>
			<div class="w-32 bg-klinik-primary" style="height: 2px"></div>
		</div>
		<div class="hidden md:block">
			<a
				href="https://www.youtube.com/channel/UCAlLbnKcaP-FYtWakHSGCJg" 
        target="_blank"
        rel="noreferrer"
				class="px-6 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary uppercase opacity-80 tracking-wide text-sm"
			>
				ALL VIDEOS
			</a>
		</div>
	</div>

  <div class="flex flex-col-reverse md:flex-row w-full">
    <div class="w-full md:w-5/12 mr-0 md:mr-10 mt-4 md:mt-0">
      <div class="cursor-pointer px-2 py-8 border-b-2 border-gray-300 font-montserrat" :class="{ 'text-klinik-primary font-bold': value === 1 }" @click="value = 1">Video Panduan “Pemesanan Produk via E-commerce” Estetika dr. Affandi</div>
      <div class="cursor-pointer px-2 py-8 border-b-2 border-gray-300 font-montserrat" :class="{ 'text-klinik-primary font-bold': value === 2 }" @click="value = 2">Video Panduan “Live Video Consultation” Estetika dr. Affandi</div>
      <div class="cursor-pointer px-2 py-8 border-b-2 border-gray-300 font-montserrat" :class="{ 'text-klinik-primary font-bold': value === 3 }" @click="value = 3">Video Panduan “Live Photo Consultation” Estetika dr. Affandi</div>
    </div>
    <div class="w-full md:w-7/12">
      <template x-if="value === 1">
        <iframe src="https://www.youtube.com/embed/upvHwx6maJo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mx-auto w-full h-56 sm:h-72 md:h-96"></iframe>
      </template>
      <template x-if="value === 2">
        <iframe src="https://www.youtube.com/embed/KA3XYEIHufk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mx-auto w-full h-56 sm:h-72 md:h-96"></iframe>
      </template>
      <template x-if="value === 3">
        <iframe src="https://www.youtube.com/embed/SznDHj4qFxA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="mx-auto w-full h-56 sm:h-72 md:h-96"></iframe>
      </template>
    </div>
  </div>
  <div class="mt-10 md:mt-16 text-center md:hidden">
    <a href="https://www.youtube.com/channel/UCAlLbnKcaP-FYtWakHSGCJg" target="_blank" rel="noopener" rel="noreferrer" class="px-10 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary opacity-80">
      ALL VIDEOS
    </a>
  </div>
</div>