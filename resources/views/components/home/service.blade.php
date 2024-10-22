<div class="max-w-full w-full mx-auto py-12 md:py-20 relative flex" x-data="{ value: 1 }" id="section-active">
	<div class="z-30 max-w-8xl mx-auto w-full px-5 md:px-8 lg:px-16">
		<div id="service">
			<div class="flex items-center justify-between">
				<div>
					<div class="text-xs md:text-lg font-semibold tracking-widest mb-1.5 font-poppins">SERVICES</div>
					<div class="text-xl md:text-3.5xl font-bold mb-2 md:mb-4">We Offer Services To You</div>
					<div class="w-32 bg-klinik-primary" style="height: 2px"></div>
				</div>
				<div class="hidden md:block">
					<a
						href="/services"
						class="px-6 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary uppercase opacity-80 tracking-wide text-sm"
					>
						All Services
					</a>
				</div>
			</div>

			{{-- desktop --}}
			<div class="hidden md:block">
				<div class="flex mt-6">
					<div class="w-7/12">
						<template x-if="value === 1">
							<a href="#service">
								<img src="{{ asset('images/_mw/LOBBY.JPG') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 2">
							<a href="#service">
								<img src="{{ asset('images/_mw/Meeting Room _ Portal Restaurant/1.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 3">
							<a href="#service">
								<img src="{{ asset('images/_mw/restaurant.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 4">
							<a href="#service">
								<img src="{{ asset('images/_mw/Standard Deluxe Room.JPG') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 5">
							<a href="#service">
								<img src="{{ asset('images/_mw/Executive Room 2.JPG') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 6">
							<a href="#service">
								<img src="{{ asset('images/_mw/bar.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
					</div>
					<div class="w-5/12 h-96 overflow-y-auto ml-4 rounded-2xl">
						<div class="bg-white">
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 1 }" @mouseover="value = 1">
								<a href="/services#lobby" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Lobby Area</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 2 }" @mouseover="value = 2">
								<a href="/services#meeting-room" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Lobby Meeting Room</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 3 }" @mouseover="value = 3">
								<a href="/services#restaurant" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Restaurant</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 4 }" @mouseover="value = 4">
								<a href="/services#standard-deluxe-room" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Standard Deluxe Room</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 5 }" @mouseover="value = 5">
								<a href="/services#executive-room" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Executive Room</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 6 }" @mouseover="value = 6">
								<a href="/services#bar" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Bar</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			{{-- mobile --}}
			<div class="md:hidden">
				<div class="flex items-center flex-col md:flex-row-reverse">
					<div class="py-6">
						<img src="{{asset('images/_mw/logo-main.png')}}" alt="service" class="mx-auto relative z-20 w-full h-48 md:h-96 rounded-2xl" />
					</div>
					<div class="text-center md:text-left md:mr-24">
						<div class="pb-7">
							Find Various Services From Maxwell Hotel 😊
						</div>
						<a
							href="/services"
							class="px-6 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary uppercase opacity-80"
						>
							All Services
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>