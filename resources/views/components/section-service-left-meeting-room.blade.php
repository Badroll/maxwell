<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16 py-8 md:py-16 grid grid-cols-1 md:grid-cols-2 items-center">
    
    <?php
        $imagePath = explode("__space__", $image);
    ?>

    <div class="hidden flex md:block mr-10">

        <div class="relative flex-grow mr-4" style="height: 300px;">
            @foreach($imagePath as $aKey => $aValue)
            <img src="{{ asset('images/'.$aValue) }}" alt="{{ $title }}" class="slide1-d mySlides-desktop rounded-lg object-cover" style="width:100%; height:100%; cursor: pointer;" onclick="goToImage(this)">
            @endforeach
        </div>

        <div class="flex overflow-auto mt-2" style="">
            @foreach($imagePath as $aKey => $aValue)
            <img class="menu1-d demo-desktop cursor h-16 w-16 rounded-lg object-cover mx-2 my-2" src="{{ asset('images/'.$aValue) }}" onclick="currentSlide_1D(parseInt('{{ $aKey }}')+1)" alt="{{ $title }}">
            @endforeach
        </div>
        
    </div>

    <div>
        <div class="font-extrabold text-xl md:text-4.5xl mb-4 md:mb-5 pr-3 leading-normal">{{ $title }}</div>
        <div class="text-xs md:text-base">
            Built as a multifunctiono room which set as a small meeting room for about 10 to 20 pax member. In the other hand it can be set as a lobby bar as well.
        </div>
        <div class="relative md:hidden my-8 flex w-full justify-center">
            <div class="container">
                <div class="relative">
                    @foreach($imagePath as $aKey => $aValue)
                    <div class="slide1-m mySlides">
                        <img src="{{ asset('images/'.$aValue) }}" alt="{{ $title }}" class="rounded-lg object-cover" style="width:100%; height:208px; cursor: pointer;" onclick="goToImage(this)">
                    </div>
                    @endforeach
                </div>

                <div class="flex overflow-auto" style="">
                    @foreach($imagePath as $aKey => $aValue)
                    <img class="menu1-m demo cursor h-10 w-10 rounded-lg object-cover mx-1 my-1" src="{{ asset('images/'.$aValue) }}" onclick="currentSlide_1M(parseInt('{{ $aKey }}')+1)" alt="{{ $title }}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    // desktop
    var slideIndex_1D = 1;
    showSlides_1D(slideIndex_1D);

    function currentSlide_1D(n) {
        showSlides_1D(slideIndex_1D = n);
    }

    function showSlides_1D(n) {
        var i;
        var slides = document.getElementsByClassName("slide1-d");
        var dots = document.getElementsByClassName("menu1-d");
        
        if (n > slides.length) {slideIndex_1D = 1}
        if (n < 1) {slideIndex_1D = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex_1D-1].style.display = "block";
        dots[slideIndex_1D-1].className += " active";
        
    }
    

    // mobile
    var slideIndex_1M = 1;
    showSlides_1M(slideIndex_1M);

    function currentSlide_1M(n) {
        showSlides_1M(slideIndex_1M = n);
    }

    function showSlides_1M(n) {
        var i;
        var slides = document.getElementsByClassName("slide1-m");
        var dots = document.getElementsByClassName("menu1-m");
        
        if (n > slides.length) {slideIndex_1M = 1}
        if (n < 1) {slideIndex_1M = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex_1M-1].style.display = "block";
        dots[slideIndex_1M-1].className += " active";
        
    }

</script>