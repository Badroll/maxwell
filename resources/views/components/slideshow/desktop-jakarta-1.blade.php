<div>
<style>
.slideShow {
  overflow-y: scroll; /* Add the ability to scroll */
}

/* Hide scrollbar for Chrome, Safari and Opera */
.slideShow::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.slideShow {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
</style>

<div class="">
	<div class="relative flex justify-end">
		<div class="relative flex-grow mr-4">
			<div class="mySlides-desktop">
				<img src="{{ asset('images/branches/bekasi/1.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:400px">
			</div>

			<div class="mySlides-desktop">
				<img src="{{ asset('images/branches/bekasi/2.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:400px">
			</div>

			<div class="mySlides-desktop">
				<img src="{{ asset('images/branches/bekasi/3.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:400px">
			</div>
				
			<div class="mySlides-desktop">
				<img src="{{ asset('images/branches/bekasi/4.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:400px">
			</div>

			<div class="mySlides-desktop">
				<img src="{{ asset('images/branches/bekasi/5.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:400px">
			</div>
				
			<div class="mySlides-desktop">
				<img src="{{ asset('images/branches/bekasi/6.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:400px">
			</div>
				
			<a class="prev-desktop left-2" onclick="plusSlidesDesktop(-1)">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
			</a>
			<a class="next-desktop right-2" onclick="plusSlidesDesktop(1)">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
			</a>
		</div>

		<div class="space-y-3 slideShow" style="height: 400px; min-width: 4rem;">
			<img class="demo-desktop cursor h-16 w-16 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/1.jpg') }}" onclick="currentSlideDesktop(1)" alt="The Woods">

			<img class="demo-desktop cursor h-16 w-16 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/2.jpg') }}" onclick="currentSlideDesktop(2)" alt="Cinque Terre">
			
			<img class="demo-desktop cursor h-16 w-16 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/3.jpg') }}" onclick="currentSlideDesktop(3)" alt="Mountains and fjords">

			<img class="demo-desktop cursor h-16 w-16 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/4.jpg') }}" onclick="currentSlideDesktop(4)" alt="Northern Lights">

			<img class="demo-desktop cursor h-16 w-16 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/5.jpg') }}" onclick="currentSlideDesktop(5)" alt="Nature and sunrise">

			<img class="demo-desktop cursor h-16 w-16 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/6.jpg') }}" onclick="currentSlideDesktop(6)" alt="Snowy Mountains">
		</div>
	</div>
</div>

<script>
	var slideIndexDesktop = 1;
	showSlidesDesktop(slideIndexDesktop);

	function plusSlidesDesktop(n) {
		showSlidesDesktop(slideIndexDesktop += n);
	}

	function currentSlideDesktop(n) {
		showSlidesDesktop(slideIndexDesktop = n);
	}

	function showSlidesDesktop(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides-desktop");
		var dots = document.getElementsByClassName("demo-desktop");
		
		if (n > slides.length) {slideIndexDesktop = 1}
		if (n < 1) {slideIndexDesktop = slides.length}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}

		slides[slideIndexDesktop-1].style.display = "block";
		dots[slideIndexDesktop-1].className += " active";
		
	}
</script>
</div>