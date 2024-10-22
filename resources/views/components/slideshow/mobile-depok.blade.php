<div class="mt-4">
	<x-branch-info 
		address="Saladdin Square Blok C No. 16, Jl. Margonda, Depok 16431"
		phone="021-77205854"
    phoneId="phone-depok"
    fax="021-77205862"
    whatsapp="+628111085884"
    linkWA="https://wa.me/628111085884?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Depok"
    location="https://www.google.com/maps/place/KLINIK+ESTETIKA+DEPOK/@-6.3933615,106.8222151,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69ebe4859299eb:0xba16a131da9ce947!8m2!3d-6.3933615!4d106.8244038"
	/>
	<div class="container mt-6">
		<div class="relative mb-4">
			<div class="mySlides">
				<img src="{{ asset('images/branches/depok/1.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>

			<div class="mySlides">
				<img src="{{ asset('images/branches/depok/2.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>

			<div class="mySlides">
				<img src="{{ asset('images/branches/depok/3.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>
				
			<div class="mySlides">
				<img src="{{ asset('images/branches/depok/4.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>

			<div class="mySlides">
				<img src="{{ asset('images/branches/depok/5.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>
				
				
			<a class="prev" onclick="plusSlides(-1)">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
			</a>
			<a class="next" onclick="plusSlides(1)">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
			</a>
		</div>

		<div class="row flex space-x-3 overflow-x-auto">
			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/depok/1.jpg') }}" onclick="currentSlide(1)" alt="The Woods">

			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/depok/2.jpg') }}" onclick="currentSlide(2)" alt="Cinque Terre">
			
			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/depok/3.jpg') }}" onclick="currentSlide(3)" alt="Mountains and fjords">

			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/depok/4.jpg') }}" onclick="currentSlide(4)" alt="Northern Lights">

			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/depok/5.jpg') }}" onclick="currentSlide(5)" alt="Nature and sunrise">

		</div>
	</div>
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);
	
		function plusSlides(n) {
			showSlides(slideIndex += n);
		}
	
		function currentSlide(n) {
			showSlides(slideIndex = n);
		}
	
		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("demo");
			
			if (n > slides.length) {slideIndex = 1}
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
	
			slides[slideIndex-1].style.display = "block";
			dots[slideIndex-1].className += " active";
			
		}
	</script>
</div>

