@extends("layouts.app")

@section("head")
	<link rel="stylesheet" href="https://unpkg.com/swiper@6/swiper-bundle.min.css" />
@endsection

@section("content")

<x-layout-app withNavbar withFooter withBottomNavbar>
    <div>
		<!-- <div class=" bg-klinik-blue-transparent">
			<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16 pb-14 md:pb-24 pt-4 md:pt-7">
				<div class="flex items-center flex-col-reverse md:flex-row justify-between">
					<div class="flex flex-col md:max-w-lg xl:max-w-xl mt-16 md:mt-0">

						<div class="font-extrabold text-xl md:text-4.5xl mb-2 md:mb-6 uppercase tracking-wider md:tracking-wide">Layanan Kami</div>
						<div class="text-lg md:text-xl leading-tight pr-0 md:pr-4" style="line-height: 1.25rem">
							Temukan berbagai layanan dari Hotel Maxwell 😊
						</div>
					</div>
					<div class="relative mt-5">
						{{-- img header desktop --}}
						<div class="hidden md:block">
							<img src="{{ asset('images/_mw/service.jpg') }}" alt="header-img" height="414" width="311" class="relative rounded-xl">
						</div>
						{{-- img header mobile --}}
						<div class="md:hidden">
							<img src="{{ asset('images/_mw/service.jpg') }}" alt="header-img" height="250" width="200" class="relative rounded-xl">
						</div>
					</div>
				</div>
			</div>
		</div> -->

		{{-- klinik solustion --}}
		<div class="pb-20">
			{{-- right 2 --}}
			<div id="#lobby" class="bg-klinik-blue-transparent">
				<?php
					$imagePath = implode("__space__", [
						"_mw/LOBBY.JPG",
						"_mw/LOBBY LOUNGE.JPG",
						"_mw/LOBBY 2.JPG",
						"_mw/lobby3.jpg",
					]);
				?>
				<x-section-service-right-lobby title="Lobby Area" image="{{ $imagePath }}" href="-" desc="-" />
			</div>
			{{-- left 1 --}}
			<div id="#meeting-room">
				<?php
					$imagePath = implode("__space__", [
						"_mw/Meeting Room _ Portal Restaurant/1.jpg",
						"_mw/Meeting Room _ Portal Restaurant/2.jpg",
						"_mw/Meeting Room _ Portal Restaurant/3.jpg",
						"_mw/Meeting Room _ Portal Restaurant/4.jpg",
						"_mw/Meeting Room _ Portal Restaurant/5.jpg",
						"_mw/Meeting Room _ Portal Restaurant/6.jpg",
					]);
				?>
				<x-section-service-left-meeting-room title="Lobby Meeting Room" image="{{ $imagePath }}" href="-" desc="-" />
			</div>
			{{-- right 2 --}}
			<div id="#restaurant" class="bg-klinik-blue-transparent">
				<?php
					$imagePath = implode("__space__", [
						"_mw/Menu Restaurant2/1 (1).jpg",
						"_mw/Menu Restaurant2/1 (2).jpg",
						"_mw/Menu Restaurant2/1 (3).jpg",
						"_mw/Menu Restaurant2/1 (4).jpg",
						"_mw/Menu Restaurant2/1 (5).jpg",
						"_mw/Menu Restaurant2/1 (6).jpg",
						"_mw/Menu Restaurant2/1 (7).jpg",
						"_mw/Menu Restaurant2/1 (8).jpg",
						"_mw/Menu Restaurant2/1 (9).jpg",
						"_mw/Menu Restaurant2/1 (10).jpg",
						"_mw/Menu Restaurant2/1 (11).jpg",
						"_mw/Menu Restaurant2/1 (12).jpg",
						"_mw/Menu Restaurant2/1 (13).jpg",
					]);
				?>
				<x-section-service-right-restaurant title="Restaurant" image="{{ $imagePath }}" href="-" desc="-" />
			</div>
			{{-- left 3 --}}
			<div id="#standard-deluxe-room">
				<?php
					$imagePath = implode("__space__", [
						"_mw/Standard Deluxe Room.JPG",
						"_mw/Standard Deluxe Room 2.JPG",
						"_mw/Room Standard Deluxe/1.JPG",
						"_mw/Room Standard Deluxe/2.JPG",
						"_mw/Room Standard Deluxe/3.JPG",
						"_mw/Room Standard Deluxe/4.JPG",
						"_mw/Room Standard Deluxe/5.JPG",
						"_mw/Room Standard Deluxe/6.JPG",
					]);
				?>
				<x-section-service-left-standard-deluxe-room title="Standard Deluxe Room" image="{{ $imagePath }}" href="-" desc="-" />
			</div>
			{{-- right 4 --}}
			<div id="#executive-room" class="bg-klinik-blue-transparent">
				<?php
					$imagePath = implode("__space__", [
						"_mw/Room Executive2/1 (1).jpg",
						"_mw/Room Executive2/1 (2).jpg",
						"_mw/Room Executive2/1 (3).jpg",
						"_mw/Room Executive2/1 (4).jpg",
						"_mw/Room Executive2/1 (5).jpg",
						"_mw/Room Executive2/1 (6).jpg",
						"_mw/Room Executive2/1 (7).jpg",
						"_mw/Room Executive2/1 (8).JPG",
						"_mw/Room Executive2/1 (9).JPG",
					]);
				?>
				<x-section-service-right-executive-room title="Executive Room" image="{{ $imagePath }}" href="-" desc="-" />
			</div>
			{{-- left 5 --}}
			<div id="#bar">
				<?php
					$imagePath = implode("__space__", [
						"_mw/bar/1 (1).jpg",
						"_mw/bar/1 (2).jpg",
						"_mw/bar/1 (3).jpg",
						"_mw/bar/1 (4).jpg",
						"_mw/bar/1 (5).jpg",
						"_mw/bar/1 (6).jpg",
						"_mw/bar/1 (7).jpg",
						"_mw/bar/1 (8).jpg",
						"_mw/bar/1 (9).jpg",
						"_mw/bar/1 (10).jpg",
						"_mw/bar/1 (11).jpg",
						"_mw/bar/1 (12).jpg",
					]);
				?>
				<x-section-service-left-bar title="Bar" image="{{ $imagePath }}" href="-" desc="-" />
			</div>

		</div>

    </div>
    <script src="https://unpkg.com/swiper@6/swiper-bundle.min.js"></script>

	<script>
		var swiperBranch = new Swiper('.swiper-branch', {
			navigation: {
				nextEl: '.swiper-btn-next',
				prevEl: '.swiper-btn-prev',
				disabledClass: 'hidden'
			},
			freeMode: true,
			slidesPerView: 3,
			spaceBetween: 10,
		});

		function goToImage(el){
			window.open(el.getAttribute("src"), '_blank')
		}
	</script>

</x-layout-app>


@endsection
