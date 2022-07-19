
  <main id="main-categorie">
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Fantasy</a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

        <?php 
        // For the categorie drop down
        foreach($CatSeries as $CategoSerie){  ?>
            <li><a class="dropdown-item" href="id=<?=$CategoSerie->id?>"><?=$CategoSerie->name?></a></li>
            <?php } ?>
        </ul>
    </div>

    <?php 
    //  verify if searchresults carries the data if not skip to the default view of categorie

    if($searchResults != ''){
     foreach($searchResults as $searchResult){
      // Check which Media we are dealing with for proper parameters use also verify if the genre id has animation 
      if($searchResult->media_type == "tv" && in_array("16", $searchResult->genre_ids)){?>
        <div class='counter'>
        <div class='cat-cards'>
        <div class='cell2'>
        <h6 class="title"> <?= $searchResult->name; ?> </h6>
        <p class="overview"><?= $searchResult->overview;?> </p>
        </div>
        <a href="../../Info/infoMovies/<?= $searchResult->id;?>" class="cover-photo"><img src="https://image.tmdb.org/t/p/w200/<?=$searchResult->poster_path?>"></a>
        </div>
        </div>
        <?php }
        
        // Same as first if condition but for movies
        if($searchResult->media_type == "movie" && in_array("16", $searchResult->genre_ids)){?>
          <div class='counter'>
         <div class='cat-cards'>
          <div class='cell2'>
          <h6 class="title"><?= $searchResult->original_title;?> </h6>
          <p class="overview"><?= $searchResult->overview;?> </p>
        </div>
        <a href="../../Info/infoSeries/<?= $searchResult->id;?> " class="cover-photo"><img src="https://image.tmdb.org/t/p/w200/<?=$searchResult->poster_path?>"></a>
        </div>
       </div>
       <?php  }
           }
        }
        // verify if SerieGenres and MovieGenres carries the data needed if not ignore to the default view of categorie
        if($SerieGenres != '' && $MovieGenres != ''){
       
          foreach($SerieGenres as $SerieGenre){?>
          <div class='counter'>
            <div class='cat-cards'> 
            <div class='cell2'>
              <h6 class="title"> <?= $SerieGenre->name; ?> </h6>
              <p class="overview"><?= $SerieGenre->overview;?> </p>
            </div>
            <a href="../../Info/infoSeries/<?= $SerieGenre->id;?>" class="cover-photo"><img src="https://image.tmdb.org/t/p/w200/<?=$SerieGenre->poster_path?> "></a>
            </div>
            </div>
          <?php $picture =$SerieGenre->poster_path;
            } 
            if($picture){
          foreach($MovieGenres as $MovieGenre){?>
          <div class='counter'>
            <div class='cat-cards'>
              <div class='cell2'>
                <h6 class="title"><?= $MovieGenre->original_title;?> </h6>
                <p class="overview"><?= $MovieGenre->overview;?> </p>
              </div>
              <a href="../../Info/infoMovies/<?= $MovieGenre->id;?>" class="cover-photo"><img src="https://image.tmdb.org/t/p/w200/<?=$MovieGenre->poster_path?>"></a>
              </div>
              </div>
            <?php   }
            }
        }?>

  </main>
