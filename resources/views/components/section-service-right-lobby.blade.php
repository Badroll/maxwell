<div class="max-w-8xl mx-auto px-5 md:px-8 lg:px-16 py-8 md:py-16 grid grid-cols-1 md:grid-cols-2 items-center">
    
    <?php
        $imagePath = explode("__space__", $image);
    ?>

    <div>
        <div class="font-extrabold text-xl md:text-4.5xl mb-4 md:mb-5 pr-3 leading-normal">{{ $title }}</div>
        <div class="text-xs md:text-base">
            Decorated in classic modern ambience which located at the 1st floor along with our restaurant and lobby bar / small meeting room.
        </div>
        <div class="relative md:hidden my-8 flex w-full justify-center">
            <div class="container">
                <div class="relative">
                    @foreach($imagePath as $aKey => $aValue)
                    <div class="slide0-m mySlides">
                        <img src="{{ asset('images/'.$aValue) }}" alt="{{ $title }}" class="rounded-lg object-cover" style="width:100%; height:208px; cursor: pointer;" onclick="goToImage(this)">
                    </div>
                    @endforeach
                        
                </div>
                <div class="flex overflow-auto" style="">
                    @foreach($imagePath as $aKey => $aValue)
                    <img class="menu0-m demo cursor h-10 w-10 rounded-lg object-cover mx-1 my-1" src="{{ asset('images/'.$aValue) }}" onclick="currentSlide_0M(parseInt('{{ $aKey }}')+1)" alt="{{ $title }}">
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="hidden md:block justify-end">
        <div class="relative flex-grow mr-4" style="height: 300px;">
            @foreach($imagePath as $aKey => $aValue)
            <img src="{{ asset('images/'.$aValue) }}" alt="{{ $title }}" class="slide0-d mySlides-desktop rounded-lg object-cover" style="width:100%; height:100%; cursor: pointer;" onclick="goToImage(this)">
            @endforeach
        </div>

        <div class="flex overflow-auto mt-2" style="">
            @foreach($imagePath as $aKey => $aValue)
            <img class="menu0-d demo-desktop cursor h-16 w-16 rounded-lg object-cover mx-2 my-2" src="{{ asset('images/'.$aValue) }}" onclick="currentSlide_0D(parseInt('{{ $aKey }}')+1)" alt="{{ $title }}">
            @endforeach

        </div>
    </div>
</div>

<script>
    // desktop
    var slideIndex_0D = 1;
    showSlides_0D(slideIndex_0D);

    function currentSlide_0D(n) {
        showSlides_0D(slideIndex_0D = n);
    }

    function showSlides_0D(n) {
        var i;
        var slides = document.getElementsByClassName("slide0-d");
        var dots = document.getElementsByClassName("menu0-d");
        
        if (n > slides.length) {slideIndex_0D = 1}
        if (n < 1) {slideIndex_0D = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex_0D-1].style.display = "block";
        dots[slideIndex_0D-1].className += " active";
        
    }
    

    // mobile
    var slideIndex_0M = 1;
    showSlides_0M(slideIndex_0M);

    function currentSlide_0M(n) {
        showSlides_0M(slideIndex_0M = n);
    }

    function showSlides_0M(n) {
        var i;
        var slides = document.getElementsByClassName("slide0-m");
        var dots = document.getElementsByClassName("menu0-m");
        
        if (n > slides.length) {slideIndex_0M = 1}
        if (n < 1) {slideIndex_0M = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex_0M-1].style.display = "block";
        dots[slideIndex_0M-1].className += " active";
        
    }

</script>