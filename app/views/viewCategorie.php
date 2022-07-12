
  <main id="main-categorie">
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Fantasy</a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <?php foreach($CatSeries as $CategoSerie){  ?>
            <li><a class="dropdown-item" href="id=<?=$CategoSerie->id?>"><?=$CategoSerie->name?></a></li>
            <?php } ?>
        </ul>
    </div>

    <?php 
    //  var_dump($searchResults);
     if($searchResults != ''){
     foreach($searchResults as $searchResult){
      if($searchResult->media_type == "tv" && in_array("16", $searchResult->genre_ids)){?>
        <h6> <?= $searchResult->name; ?> </h6>
        <p><?= $searchResult->overview;?> </p>
        <a href="viewInfo.php"><img src="https://image.tmdb.org/t/p/w200/<?=$searchResult->poster_path?>"></a>
        <br>;
        <?php }
         if($searchResult->media_type == "movie" && in_array("16", $searchResult->genre_ids)){?>
        <h6><?= $searchResult->original_title;?> </h6>
        <p><?= $searchResult->overview;?> </p>
        <a href="viewInfo.php"><img src="https://image.tmdb.org/t/p/w200/<?=$searchResult->poster_path?>"></a>
       <br>
       <?php  }
           }
        }
        if($searchResults != ''){
          
          
        }?>

    </div>
  </main>
