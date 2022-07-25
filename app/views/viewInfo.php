<main id="main-info">
    <?php //var_dump($infoSeries)?>
    <div class="clearfix">
      <img src="https://image.tmdb.org/t/p/w300/<?= $infoSeries->poster_path ?>" alt="...">
      <div id="info-container">
        <div>
            <h4 id="titre-info">
              <?php
          
         
              echo $infoSeries->name;
          
            
            ?></h4>
          <?php foreach($infoSeries->genres  as $nameGenre){  ?>
            <p id="p-name"><?=$nameGenre->name?>,</p>
            <?php } ?>
        </div>
        <div id="info-overviews">
            <h5>Synopsis</h5>
            <p id="p-overview"><?=$infoSeries ->overview?></p>
        </div>
        <div id="div-trailers">
          <iframe id="trailers" width="100%" height="315" src="https://www.youtube.com/embed/<?php
            echo $infoVideoTv->results[0]->key;
            ?>" frameborder="0"allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    
  </div>
    <section id="voice-actors"class="swiper mySwiper">
      <h5>Voice Actors</h5>
            <div class="swiper-wrapper">
                <?php foreach($infoCredits->cast ?? $infoCreditsSeries->cast as $info){ ?>
                <div class="swiper-slide">
                <img id="photo-actors" src="https://image.tmdb.org/t/p/w92/<?= $info->profile_path ?>" alt="...">
                <div>
                  <h6 id="h6-actors"><?=$info->name?></h6>
                  <p id="p-actors"><?=$info->character?></p>
                </div> 
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
        slidesPerView: 5,
        // spaceBetween: 30,
        slidesPerGroup: 5,
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