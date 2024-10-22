<div class="max-w-8xl mx-auto md:px-8 lg:px-16 pt-16 -mb-4 md:-mb-12 flex flex-col relative" x-data="{ openModalLiveChat: false }">
	<div class="bg-klinik-primary text-white rounded-lg p-6 md:p-12" style="box-shadow: 0px 0px 40px 0px #0764E366;">
    <div class="text-base md:text-2xl text-center font-semibold">
      Konsultasi mudah dan cepat dengan <br class="hidden md:block"> Tim Dokter berpengalaman.
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-12 font-bold text-klinik-primary mt-10">
      <a href="/video-consultation-list" class="py-2 w-full border-2 border-white hover:text-white hover:bg-klinik-primary bg-white text-klinik-primary rounded-full text-center font-bold focus:outline-none">
        <div class="flex items-center justify-center">
          <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
          <div>Live Video Consultation</div>
        </div>
      </a>
      <a href="/photo-consultation-list" class="py-2 w-full border-2 border-white hover:text-white hover:bg-klinik-primary bg-white text-klinik-primary rounded-full text-center font-bold focus:outline-none">
        <div class="flex items-center justify-center">
          <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
          <div>Photo Consultation</div>
        </div>
      </a>
      <button @click="openModalLiveChat = true" class="py-2 w-full border-2 border-white hover:text-white hover:bg-klinik-primary bg-white text-klinik-primary rounded-full text-center font-bold focus:outline-none">
        <div class="flex items-center justify-center">
          <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
          <div>Live Chat Consultation</div>
        </div>
      </button>
    </div>
  </div>

  {{-- modal live chat --}}
	<div x-cloak x-show="openModalLiveChat" class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
		<div class="flex items-center justify-center min-h-screen p-4 text-center md:block md:p-0">
			<div 
				x-show="openModalLiveChat" 
				x-transition:enter="ease-out duration-300"
				x-transition:enter-start="opacity-0"
				x-transition:enter-end="opacity-100"
				x-transition:leave="ease-in duration-200"
				x-transition:leave-start="opacity-100"
				x-transition:leave-end="opacity-0" 
				class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" 
				aria-hidden="true"
			></div>

			<!-- This element is to trick the browser into centering the modal contents. -->
			<span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true">&#8203;</span>

			<!-- Modal panel, show/hide based on modal state. -->
			<div 
				x-show="openModalLiveChat" 
				x-transition:enter="ease-out duration-300"
				x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
				x-transition:enter-end="opacity-100 translate-y-0 md:scale-100"
				x-transition:leave="ease-in duration-200"
				x-transition:leave-start="opacity-100 translate-y-0 md:scale-100"
				x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
				class="inline-block rounded-lg p-6 text-left overflow-hidden shadow-xl transform transition-all md:my-8 align-middle md:max-w-4xl md:w-full bg-no-repeat bg-cover bg-center bg-popup-chat-app"
				@click.away="openModalLiveChat = false"
				 style="height: 487px;"
			>
				<div class="block absolute top-0 right-0 pt-4 pr-4">
					<button type="button" class="rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-klinik-primary" @click="openModalLiveChat = false">
						<span class="sr-only">Close</span>
						<!-- Heroicon name: outline/x -->
						<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
					</button>
				</div>
				<div class="flex h-full">
					<div class="w-1/2 hidden sm:block"></div>
					<div class="w-full sm:w-1/2">
						<div class="flex h-full items-center">
							<div class="mt-3 text-left">
								<h3 class="text-2xl md:text-3xl mb-3 font-bold text-white leading-relaxed" id="modal-title">
									Layanan Live Chat Consultation hanya tersedia di Estetika Mobile Apps.
								</h3>
								<div class="mt-2">
									<p class="text-sm sm:text-base text-white leading-relaxed">
										Silakan download Estetika Mobile Apps.
									</p>
								</div>
								<div class="flex mt-3">
									<a href="https://apps.apple.com/id/app/klinik-estetika-dr-affandi/id1446841848">
										<img src="{{asset('images/footer/app-store.svg')}}" alt="app" />
									</a>
									<a href="https://play.google.com/store/apps/details?id=com.klinikestetika.affandi">
										<img src="{{asset('images/footer/google-play.svg')}}" alt="app" class="ml-5" />
									</a>
								</div>
								<div class="mt-3 text-white text-sm sm:text-base">Atau scan QR Code</div>
								<div class="mt-3">
									<img src="{{asset('images/home/qr-download.svg')}}" alt="qr-code" class="h-24 w-24">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>