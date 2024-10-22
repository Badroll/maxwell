<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16 py-8 md:py-16 grid grid-cols-1 md:grid-cols-2 items-center">
    
    <?php
        $imagePath = explode("__space__", $image);
    ?>

    <div>
        <div class="font-extrabold text-xl md:text-4.5xl mb-4 md:mb-5 pr-3 leading-normal">{{ $title }}</div>
        <div class="text-xs md:text-base">
            Sam's Kitchen
            <br>
            A new face restaurant with a classic concept located at Jl. Pangeran Jayakarta, Jakarta Pusat is the best place to present the latest concept of restaurant, sensational and professional lounge bar open 24 hours. We welcome you with western and asian dishes. Enjoy our lounge bar with live music every Friday and Sunday. Our restaurant also provides meal packages and has collaborated with companies both government and private.
        </div>
        <div class="relative md:hidden my-8 flex w-full justify-center">
            <div class="container">
                <div class="relative">
                    @foreach($imagePath as $aKey => $aValue)
                    <div class="slide2-m mySlides">
                        <img src="{{ asset('images/'.$aValue) }}" alt="{{ $title }}" class="rounded-lg object-cover" style="width:100%; height:208px; cursor: pointer;" onclick="goToImage(this)">
                    </div>
                    @endforeach
                        
                </div>
                <div class="flex overflow-auto" style="">
                    @foreach($imagePath as $aKey => $aValue)
                    <img class="menu2-m demo cursor h-10 w-10 rounded-lg object-cover mx-1 my-1" src="{{ asset('images/'.$aValue) }}" onclick="currentSlide_2M(parseInt('{{ $aKey }}')+1)" alt="{{ $title }}">
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="hidden md:block justify-end">
        <div class="relative flex-grow mr-4" style="height: 300px;">
            @foreach($imagePath as $aKey => $aValue)
            <img src="{{ asset('images/'.$aValue) }}" alt="{{ $title }}" class="slide2-d mySlides-desktop rounded-lg object-cover" style="width:100%; height:100%; cursor: pointer;" onclick="goToImage(this)">
            @endforeach
        </div>

        <div class="flex overflow-auto mt-2" style="">
            @foreach($imagePath as $aKey => $aValue)
            <img class="menu2-d demo-desktop cursor h-16 w-16 rounded-lg object-cover mx-2 my-2" src="{{ asset('images/'.$aValue) }}" onclick="currentSlide_2D(parseInt('{{ $aKey }}')+1)" alt="{{ $title }}">
            @endforeach

        </div>
    </div>
</div>

<script>
    // desktop
    var slideIndex_2D = 1;
    showSlides_2D(slideIndex_2D);

    function currentSlide_2D(n) {
        showSlides_2D(slideIndex_2D = n);
    }

    function showSlides_2D(n) {
        var i;
        var slides = document.getElementsByClassName("slide2-d");
        var dots = document.getElementsByClassName("menu2-d");
        
        if (n > slides.length) {slideIndex_2D = 1}
        if (n < 1) {slideIndex_2D = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex_2D-1].style.display = "block";
        dots[slideIndex_2D-1].className += " active";
        
    }
    

    // mobile
    var slideIndex_2M = 1;
    showSlides_2M(slideIndex_2M);

    function currentSlide_2M(n) {
        showSlides_2M(slideIndex_2M = n);
    }

    function showSlides_2M(n) {
        var i;
        var slides = document.getElementsByClassName("slide2-m");
        var dots = document.getElementsByClassName("menu2-m");
        
        if (n > slides.length) {slideIndex_2M = 1}
        if (n < 1) {slideIndex_2M = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex_2M-1].style.display = "block";
        dots[slideIndex_2M-1].className += " active";
        
    }

</script>