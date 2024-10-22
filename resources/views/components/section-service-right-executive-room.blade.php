<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16 py-8 md:py-16 grid grid-cols-1 md:grid-cols-2 items-center">
    
    <?php
        $imagePath = explode("__space__", $image);
    ?>

    <div>
        <div class="font-extrabold text-xl md:text-4.5xl mb-4 md:mb-5 pr-3 leading-normal">{{ $title }}</div>
        <div class="text-xs md:text-base">
            <div class="max-w-full text-sm prose text-black md:text-base">
                Facility :
                <ul>
                    <li>Bathroom with bathtub and shower</li>
                    <li>Cold and Hot water.</li>
                    <li>Air Conditioner with individual control</li>
                    <li>Refrigerator</li>
                    <li>Socket for shaver</li>
                    <li>Guest Amenities</li>
                    <li>Hair dryer at bathroom area</li>
                    <li>Tea and coffee making equipment</li>
                    <li>Android TV with satellite channels</li>
                    <li>Free WIFI connection</li>
                    <li>Main street view</li>
                    <li>Room sofa</li>
                    <li>Large space, Approximately  32 sqm </li>
                </ul>
            </div>
        </div>
        <div class="relative md:hidden my-8 flex w-full justify-center">
            <div class="container">
                <div class="relative">
                    @foreach($imagePath as $aKey => $aValue)
                    <div class="slide4-m mySlides">
                        <img src="{{ asset('images/'.$aValue) }}" alt="{{ $title }}" class="rounded-lg object-cover" style="width:100%; height:208px; cursor: pointer;" onclick="goToImage(this)">
                    </div>
                    @endforeach
                        
                </div>
                <div class="flex overflow-auto" style="">
                    @foreach($imagePath as $aKey => $aValue)
                    <img class="menu4-m demo cursor h-10 w-10 rounded-lg object-cover mx-1 my-1" src="{{ asset('images/'.$aValue) }}" onclick="currentSlide_4M(parseInt('{{ $aKey }}')+1)" alt="{{ $title }}">
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="hidden md:block justify-end">
        <div class="relative flex-grow mr-4" style="height: 300px;">
            @foreach($imagePath as $aKey => $aValue)
            <img src="{{ asset('images/'.$aValue) }}" alt="{{ $title }}" class="slide4-d mySlides-desktop rounded-lg object-cover" style="width:100%; height:100%; cursor: pointer;" onclick="goToImage(this)">
            @endforeach
        </div>

        <div class="flex overflow-auto mt-2" style="">
            @foreach($imagePath as $aKey => $aValue)
            <img class="menu4-d demo-desktop cursor h-16 w-16 rounded-lg object-cover mx-2 my-2" src="{{ asset('images/'.$aValue) }}" onclick="currentSlide_4D(parseInt('{{ $aKey }}')+1)" alt="{{ $title }}">
            @endforeach

        </div>
    </div>
</div>

<script>
    // desktop
    var slideIndex_4D = 1;
    showSlides_4D(slideIndex_4D);

    function currentSlide_4D(n) {
        showSlides_4D(slideIndex_4D = n);
    }

    function showSlides_4D(n) {
        var i;
        var slides = document.getElementsByClassName("slide4-d");
        var dots = document.getElementsByClassName("menu4-d");
        
        if (n > slides.length) {slideIndex_4D = 1}
        if (n < 1) {slideIndex_4D = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex_4D-1].style.display = "block";
        dots[slideIndex_4D-1].className += " active";
        
    }
    

    // mobile
    var slideIndex_4M = 1;
    showSlides_4M(slideIndex_4M);

    function currentSlide_4M(n) {
        showSlides_4M(slideIndex_4M = n);
    }

    function showSlides_4M(n) {
        var i;
        var slides = document.getElementsByClassName("slide4-m");
        var dots = document.getElementsByClassName("menu4-m");
        
        if (n > slides.length) {slideIndex_4M = 1}
        if (n < 1) {slideIndex_4M = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex_4M-1].style.display = "block";
        dots[slideIndex_4M-1].className += " active";
        
    }

</script>