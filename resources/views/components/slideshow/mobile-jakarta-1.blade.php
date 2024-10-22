<div class="mt-4">
	<x-branch-info 
		address="Jl. Duren Tiga No. 30-B, Pancoran, Jakarta Selatan 12760"
		phone="021-7970548"
    phoneId="phone-jakarta1"
    fax="021-7987924"
    whatsapp="+6285288287056"
    linkWA="https://wa.me/6285288287056?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Jakarta"
    location="https://www.google.com/maps/place/KLINIK+ESTETIKA+JAKARTA+I/@-6.247716,106.9256207,12z/data=!4m9!1m2!2m1!1sklinik+estetika+dr.+affandi!3m5!1s0x2e69f3cd8b08f249:0xc2fe46c4a0a87b6b!8m2!3d-6.2541643!4d106.8296382!15sChtrbGluaWsgZXN0ZXRpa2EgZHIuIGFmZmFuZGkiA4gBAVocIhprbGluaWsgZXN0ZXRpa2EgZHIgYWZmYW5kaZIBEHNraW5fY2FyZV9jbGluaWOaASRDaGREU1VoTk1HOW5TMFZKUTBGblNVTkplWE5IZG1wblJSQUI"
	/> 
	<div class="container mt-6">
		<div class="relative mb-4">
			<div class="mySlides">
				<img src="{{ asset('images/branches/bekasi/1.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>

			<div class="mySlides">
				<img src="{{ asset('images/branches/bekasi/2.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>

			<div class="mySlides">
				<img src="{{ asset('images/branches/bekasi/3.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>
				
			<div class="mySlides">
				<img src="{{ asset('images/branches/bekasi/4.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>

			<div class="mySlides">
				<img src="{{ asset('images/branches/bekasi/5.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>
				
			<div class="mySlides">
				<img src="{{ asset('images/branches/bekasi/6.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>
				
			<a class="prev" onclick="plusSlides(-1)">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
			</a>
			<a class="next" onclick="plusSlides(1)">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
			</a>
		</div>

		<div class="row flex space-x-3 overflow-x-auto">
			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/1.jpg') }}" onclick="currentSlide(1)" alt="The Woods">

			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/2.jpg') }}" onclick="currentSlide(2)" alt="Cinque Terre">
			
			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/3.jpg') }}" onclick="currentSlide(3)" alt="Mountains and fjords">

			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/4.jpg') }}" onclick="currentSlide(4)" alt="Northern Lights">

			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/5.jpg') }}" onclick="currentSlide(5)" alt="Nature and sunrise">

			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/6.jpg') }}" onclick="currentSlide(6)" alt="Snowy Mountains">
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

