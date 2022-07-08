<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../../../public\css\style.css">
    <title>AlleroAnime</title>
</head>
<body>
  <header id="header">
    <h1 class="title">AllerOAnime</h1>
    <div class="head-container">
        <div class="menu-btn"> 
            <div class="menu-btn_burger">
            
            </div> 
        </div> 
        <input type="text" class="search-bar" placeholder="Search...">  
        <img class="search-icon" src="../../../public/asset/icons8-google-web-search.svg">
    </div>
</header>
<main>
        <h4 id="titre">Popular Series</h4>
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
            <div class="swiper-pagination"></div>
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
        <div class="swiper-pagination"></div>
    </section>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
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
<footer>
    <p>&copy; 2022</p>
</footer>  
</body>
</html>
    
 