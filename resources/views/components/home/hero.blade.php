<div x-data="{ openModalAppointment: false, openModalLoyaltyProgram: false, openModalLiveChat: false, isShow: false }">
	
	{{-- hero for mobile --}}
	<div class="block max-w-full mx-auto md:max-w-8xl md:hidden">
		<div class="px-5 md:px-8 lg:px-16">
			<div class="mt-6 mb-2 text-3xl font-bold text-klinik-primary">
				Maxwell Hotel
			</div>
			<div class="text-sm font-semibold text-klinik-primary text-justify">
				Maxwell Hotel Jakarta is located at the central city of Jakarta, just a few minutes away from the bustling China Town which renowned for its variety of shops and choices of food.
				<br>
				Hotel is closed to the authentic Jakarta’s district, entertainment area, exhibition center.
			</div>
		</div>
		<div class="px-8 pt-6 pb-3 mt-6 shadow-card-hero">
			<div class="grid items-start grid-cols-3 gap-10">
				<a href="#">
					<div class="flex justify-center">
						<div class="p-4 border border-gray-200 rounded-md">
							<img src="{{ asset('images/home/ic-loyal.svg') }}" alt="icon" class="w-12 h-12 mx-auto ">
						</div>
					</div>
					<div class="mt-2.5 text-xs font-semibold text-center">Large Space Room</div>
				</a>
				<a href="#">
					<div class="flex justify-center">
						<div class="p-4 border border-gray-200 rounded-md">
							<img src="{{ asset('images/home/ic-loyal.svg') }}" alt="icon" class="w-12 h-12 mx-auto ">
						</div>
					</div>
					<div class="mt-2.5 text-xs font-semibold text-center">Room with Bathtub & Shower</div>
				</a>
				<a href="#">
					<div class="flex justify-center">
						<div class="p-4 border border-gray-200 rounded-md">
							<img src="{{ asset('images/home/ic-loyal.svg') }}" alt="icon" class="w-12 h-12 mx-auto ">
						</div>
					</div>
					<div class="mt-2.5 text-xs font-semibold text-center">Tasty Food Restaurant & Room Service</div>
				</a>
				<a href="#">
					<div class="flex justify-center">
						<div class="p-4 border border-gray-200 rounded-md">
							<img src="{{ asset('images/home/ic-loyal.svg') }}" alt="icon" class="w-12 h-12 mx-auto ">
						</div>
					</div>
					<div class="mt-2.5 text-xs font-semibold text-center">Free Parking</div>
				</a>
			</div>
		</div>
	</div>
	
	{{-- hero for desktop --}}
	<div class="relative hidden md:block">
		<div class="relative max-w-full mx-auto">
			<div class="flex bg-klinik-grey-sec" style="background-image: url('/images/_mw/banner.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 43rem;">
				<div class="w-full px-5 pt-20 pb-16 mx-auto max-w-7xl md:px-8 lg:px-16">
					<div class="w-1/2 font-bold text-white">
						<div class="text-6.5xl mb-6">
							Maxwell Hotel
						</div>
						<div class="w-10/12 text-lg">
							Maxwell Hotel Jakarta is located at the central city of Jakarta, just a few minutes away from the bustling China Town which renowned for its variety of shops and choices of food.
							<br>
							Hotel is closed to the authentic Jakarta’s district, entertainment area, exhibition center.
						</div>
					</div>
				</div>
			</div>
			<div class="w-full px-5 mx-auto -mt-32 max-w-7xl md:px-8 lg:px-16">
				<div class="relative p-12 mb-20 bg-white rounded-lg shadow-card-home">
					<div class="flex">
						<div class="w-full h-auto swiper-container swiper-menu">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<p>
										<img src="{{ asset('images/home/ic-loyal.svg') }}" alt="icon" class="w-8 h-8 mb-4">
										<div class="mb-3 text-xl font-extrabold">
											Large Space Room
										</div>
										<div class="font-lato">
										</div>
									</p>
								</div>
								<div class="swiper-slide">
									<p>
										<img src="{{ asset('images/home/ic-loyal.svg') }}" alt="icon" class="w-8 h-8 mb-4">
										<div class="mb-3 text-xl font-extrabold">
											Room with Bathtub & Shower
										</div>
										<div class="font-lato">
										</div>
									</p>
								</div>
								<div class="swiper-slide">
									<p>
										<img src="{{ asset('images/home/ic-loyal.svg') }}" alt="icon" class="w-8 h-8 mb-4">
										<div class="mb-3 text-xl font-extrabold">
											Tasty Food Restaurant & Room Service
										</div>
										<div class="font-lato">
										</div>
									</p>
								</div>
								<div class="swiper-slide">
									<p>
										<img src="{{ asset('images/home/ic-loyal.svg') }}" alt="icon" class="w-8 h-8 mb-4">
										<div class="mb-3 text-xl font-extrabold">
											Free Parking
										</div>
										<div class="font-lato">
										</div>
									</p>
								</div>
							</div>
						</div>
					</div>
					{{-- navigation --}}
					<div class="flex justify-between w-full">
						<div
							class="absolute z-30 p-1 rounded-full swiper-btn-prev-hero text-klinik-primary left-2"
							style="top: 45%"
						>
							<svg
							class="w-6 h-6"
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
							class="absolute z-30 p-1 rounded-full swiper-btn-next-hero text-klinik-primary right-2"
							style="top: 45%"
						>
							<svg
							class="w-6 h-6"
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
			</div>
		</div>
	</div>

</div>
