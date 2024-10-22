@extends("layouts.app")

@section("head")
	<link rel="stylesheet" href="https://unpkg.com/swiper@6/swiper-bundle.min.css" />
@endsection

@section("content")
<x-layout-app withNavbar withFooter="false" withBottomNavbar>
	<div class="">
		<x-home.hero />
		<x-home.promo />
		<x-home.service />
		<x-home.testimonial />
		<x-footer-home />
	</div>
</x-layout-app>

{{--
<x-home.hero />
<x-home.promo />
<x-home.service />
<x-home.product />
<x-home.testimonial />
<x-home.news />
<x-home.video />
<x-home.consultation />
<x-footer-home />
--}}

<script src="https://unpkg.com/swiper@6/swiper-bundle.min.js"></script>

<script>
	var swiperMenu = new Swiper('.swiper-menu', {
		slidesPerView: 3,
		spaceBetween: 30,
		navigation: {
			nextEl: '.swiper-btn-next-hero',
			prevEl: '.swiper-btn-prev-hero',
			disabledClass: 'opacity-50'
		},
	});

	var swiperPromo = new Swiper('.swiper-promo', {
		autoplay: {
			delay: 3000,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});

	var swiperProduct = new Swiper('.swiper-product', {
		navigation: {
			nextEl: '.swiper-btn-next-product',
			prevEl: '.swiper-btn-prev-product',
			disabledClass: 'opacity-50'
		},
		slidesPerView: 'auto',
	});
	var swiperProduct = new Swiper('.swiper-product', {
		navigation: {
			nextEl: '.swiper-btn-next-product',
			prevEl: '.swiper-btn-prev-product',
			disabledClass: 'opacity-50'
		},
		slidesPerView: 'auto',
	});

	var swiperTestimonial = new Swiper('.swiper-testimonial', {
		navigation: {
			nextEl: '.swiper-btn-next-testimonial',
			prevEl: '.swiper-btn-prev-testimonial',
			disabledClass: 'opacity-50'
		},
		slidesPerView: 1,
		spaceBetween: 30,
		breakpoints: {
			// when window width is >= 320px
			640: {
				slidesPerView: 2,
				spaceBetween: 20
			},
			// when window width is >= 640px
			1000: {
				slidesPerView: 3,
				spaceBetween: 30
			}
		}
	});

	var swiperNews = new Swiper('.swiper-news', {
		navigation: {
			nextEl: '.swiper-btn-next-news',
			prevEl: '.swiper-btn-prev-news',
			disabledClass: 'opacity-50'
		},
		slidesPerView: 3,
		spaceBetween: 30,
	});

	function goToImage(el){
		window.open(el.getAttribute("src"), '_blank')
	}
</script>
@endsection
