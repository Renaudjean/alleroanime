
<main id="main">
<h4>Popular Series</h4>
        <section class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php foreach($Series as $Serie){ ?>
                <div class="swiper-slide">
                    <img src="https://image.tmdb.org/t/p/w200/<?=$Serie->poster_path?>">
                    <h6><?= $Serie->name?></h6> 
                </div>
               <?php }?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- <div class="swiper-pagination"></div> -->
        </section> 
        <h4>Popular Movies</h4>
        <section class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php foreach($Movies as $Movie){ ?>
                <div class="swiper-slide">
                    <img src="https://image.tmdb.org/t/p/w200/<?=$Movie->poster_path?>">
                    <h6><?= $Movie->original_title?></h6> 
            </div>
           <?php }?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- <div class="swiper-pagination"></div> -->
    </section>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        // spaceBetween: 30,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</main>

