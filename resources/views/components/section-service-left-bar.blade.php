<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16 py-8 md:py-16 grid grid-cols-1 md:grid-cols-2 items-center">
    
    <?php
        $imagePath = explode("__space__", $image);
    ?>

    <div class="hidden flex md:block mr-10">

        <div class="relative flex-grow mr-4" style="height: 300px;">
            @foreach($imagePath as $aKey => $aValue)
            <img src="{{ asset('images/'.$aValue) }}" alt="{{ $title }}" class="slide5-d mySlides-desktop rounded-lg object-cover" style="width:100%; height:100%; cursor: pointer;" onclick="goToImage(this)">
            @endforeach
        </div>

        <div class="flex overflow-auto mt-2" style="">
            @foreach($imagePath as $aKey => $aValue)
            <img class="menu5-d demo-desktop cursor h-16 w-16 rounded-lg object-cover mx-2 my-2" src="{{ asset('images/'.$aValue) }}" onclick="currentSlide_5D(parseInt('{{ $aKey }}')+1)" alt="{{ $title }}">
            @endforeach
        </div>
        
    </div>

    <div>
        <div class="font-extrabold text-xl md:text-4.5xl mb-4 md:mb-5 pr-3 leading-normal">{{ $title }}</div>
        <div class="text-xs md:text-base">
            <div class="max-w-full prose text-black">
                <h3>Sam Resto and Bar</h3>
                <p>
                    Improvement and new appearance of restaurant and bar with a classic concept which is located at Jl.Pangeran Jayakarta no.70, Sawah Besar, Central Jakarta is the best place to present the comfort of a sensational and professional restaurant and bar. We welcome you with western and asian dishes. Enjoy our lounge bar with live music every Monday and Friday. Tasty food menu from selected chefs, we also provide buffet for breakfast and room service as well as ala carte menu made and prepared with heart from Sam Resto and Bar.
                </p>
            </div>
        </div>
        <div class="relative md:hidden my-8 flex w-full justify-center">
            <div class="container">
                <div class="relative">
                    @foreach($imagePath as $aKey => $aValue)
                    <div class="slide5-m mySlides">
                        <img src="{{ asset('images/'.$aValue) }}" alt="{{ $title }}" class="rounded-lg object-cover" style="width:100%; height:208px; cursor: pointer;" onclick="goToImage(this)">
                    </div>
                    @endforeach
                </div>

                <div class="flex overflow-auto" style="">
                    @foreach($imagePath as $aKey => $aValue)
                    <img class="menu5-m demo cursor h-10 w-10 rounded-lg object-cover mx-1 my-1" src="{{ asset('images/'.$aValue) }}" onclick="currentSlide_5M(parseInt('{{ $aKey }}')+1)" alt="{{ $title }}">
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    // desktop
    var slideIndex_5D = 1;
    showSlides_5D(slideIndex_5D);

    function currentSlide_5D(n) {
        showSlides_5D(slideIndex_5D = n);
    }

    function showSlides_5D(n) {
        console.log("here #1")
        var i;
        var slides = document.getElementsByClassName("slide5-d");
        var dots = document.getElementsByClassName("menu5-d");
        
        if (n > slides.length) {slideIndex_5D = 1}
        if (n < 1) {slideIndex_5D = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex_5D-1].style.display = "block";
        dots[slideIndex_5D-1].className += " active";
        
    }
    

    // mobile
    var slideIndex_5M = 1;
    showSlides_5M(slideIndex_5M);

    function currentSlide_5M(n) {
        showSlides_5M(slideIndex_5M = n);
    }

    function showSlides_5M(n) {
        var i;
        var slides = document.getElementsByClassName("slide5-m");
        var dots = document.getElementsByClassName("menu5-m");
        
        if (n > slides.length) {slideIndex_5M = 1}
        if (n < 1) {slideIndex_5M = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex_5M-1].style.display = "block";
        dots[slideIndex_5M-1].className += " active";
        
    }

</script>