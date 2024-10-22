<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16 py-8 md:py-16 grid grid-cols-1 md:grid-cols-2 items-center">
    
    <?php
        $imagePath = explode("__space__", $image);
    ?>

    <div class="hidden flex md:block mr-10">

        <div class="relative flex-grow mr-4" style="height: 300px;">
            @foreach($imagePath as $aKey => $aValue)
            <img src="{{ asset('images/'.$aValue) }}" alt="{{ $title }}" class="slide3-d mySlides-desktop rounded-lg object-cover" style="width:100%; height:100%; cursor: pointer;" onclick="goToImage(this)">
            @endforeach
        </div>

        <div class="flex overflow-auto mt-2" style="">
            @foreach($imagePath as $aKey => $aValue)
            <img class="menu3-d demo-desktop cursor h-16 w-16 rounded-lg object-cover mx-2 my-2" src="{{ asset('images/'.$aValue) }}" onclick="currentSlide_3D(parseInt('{{ $aKey }}')+1)" alt="{{ $title }}">
            @endforeach
        </div>
        
    </div>

    <div>
        <div class="font-extrabold text-xl md:text-4.5xl mb-4 md:mb-5 pr-3 leading-normal">{{ $title }}</div>
        <div class="text-xs md:text-base">
            <div class="max-w-full prose text-black">
                Facility :
                <ul>
                    <li>Bathroom with bathtub and shower</li>
                    <li>Cold and Hot water.</li>
                    <li>Air Conditioner with individual control</li>
                    <li>Refrigerator</li>
                    <li>Socket for shaver</li>
                    <li>Guest Amenities</li>
                    <li>Hair dryer ( upon request for deluxe room)</li>
                    <li>Tea and coffee making equipment</li>
                    <li>LCD TV with satellite channels</li>
                    <li>Free WIFI connection</li>
                    <li>Large space, Approximately 28 - 30 sqm </li>
                </ul>
            </div>
        </div>
        <div class="relative md:hidden my-8 flex w-full justify-center">
            <div class="container">
                <div class="relative">
                    @foreach($imagePath as $aKey => $aValue)
                    <div class="slide3-m mySlides">
                        <img src="{{ asset('images/'.$aValue) }}" alt="{{ $title }}" class="rounded-lg object-cover" style="width:100%; height:208px; cursor: pointer;" onclick="goToImage(this)">
                    </div>
                    @endforeach
                </div>

                <div class="flex overflow-auto" style="">
                    @foreach($imagePath as $aKey => $aValue)
                    <img class="menu3-m demo cursor h-10 w-10 rounded-lg object-cover mx-1 my-1" src="{{ asset('images/'.$aValue) }}" onclick="currentSlide_3M(parseInt('{{ $aKey }}')+1)" alt="{{ $title }}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    // desktop
    var slideIndex_3D = 1;
    showSlides_3D(slideIndex_3D);

    function currentSlide_3D(n) {
        showSlides_3D(slideIndex_3D = n);
    }

    function showSlides_3D(n) {
        var i;
        var slides = document.getElementsByClassName("slide3-d");
        var dots = document.getElementsByClassName("menu3-d");
        
        if (n > slides.length) {slideIndex_3D = 1}
        if (n < 1) {slideIndex_3D = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex_3D-1].style.display = "block";
        dots[slideIndex_3D-1].className += " active";
        
    }
    

    // mobile
    var slideIndex_3M = 1;
    showSlides_3M(slideIndex_3M);

    function currentSlide_3M(n) {
        showSlides_3M(slideIndex_3M = n);
    }

    function showSlides_3M(n) {
        var i;
        var slides = document.getElementsByClassName("slide3-m");
        var dots = document.getElementsByClassName("menu3-m");
        
        if (n > slides.length) {slideIndex_3M = 1}
        if (n < 1) {slideIndex_3M = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex_3M-1].style.display = "block";
        dots[slideIndex_3M-1].className += " active";
        
    }

</script>