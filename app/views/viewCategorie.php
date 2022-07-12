
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
        <h6> <?= $searchResult->name; ?> </h6>
        <p><?= $searchResult->overview;?> </p>
        <a href="viewInfo.php"><img src="https://image.tmdb.org/t/p/w200/<?=$searchResult->poster_path?>"></a>
        <br>
        <?php }
        
        // Same as first if condition but for movies
        if($searchResult->media_type == "movie" && in_array("16", $searchResult->genre_ids)){?>
        <h6><?= $searchResult->original_title;?> </h6>
        <p><?= $searchResult->overview;?> </p>
        <a href="viewInfo.php"><img src="https://image.tmdb.org/t/p/w200/<?=$searchResult->poster_path?>"></a>
       <br>
       <?php  }
           }
        }
        // verify if SerieGenres and MovieGenres carries the data needed if not ignore to the default view of categorie
        if($SerieGenres != '' && $MovieGenres != ''){
          
          foreach($SerieGenres as $SerieGenre){?>
            <h6> <?= $SerieGenre->name; ?> </h6>
            <p><?= $SerieGenre->overview;?> </p>
            <a href="viewInfo.php"><img src="https://image.tmdb.org/t/p/w200/<?=$SerieGenre->poster_path?>"></a>
            <br>
            
  <?php $picture =$SerieGenre->poster_path;
    } 
    if($picture){
          foreach($MovieGenres as $MovieGenre){?>
            <h6><?= $MovieGenre->original_title;?> </h6>
            <p><?= $MovieGenre->overview;?> </p>
            <a href="viewInfo.php"><img src="https://image.tmdb.org/t/p/w200/<?=$MovieGenre->poster_path?>"></a>
            <br>
            <?php   }
            }
        }?>

    </div>
  </main>
