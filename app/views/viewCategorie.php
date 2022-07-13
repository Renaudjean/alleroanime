
  <main id="main-categorie">
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Fantasy</a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <?php foreach($CatSeries as $CategoSerie){  ?>
            <li><a class="dropdown-item" href="<?=$CategoSerie->id?>"><?=$CategoSerie->name?></a></li>
            <?php } ?>
        </ul>
    </div>

    <?php 
    var_dump($seachResults);
    foreach($seachResults as $seachResult){ ?>

      <?php  if($seachResult->media_type == "tv"){?>
        <h6> <?= $seachResult->name; ?> </h6>
        <p><?= $seachResult->overview;?> </p>
        <a href="viewInfo.php"><img src="https://image.tmdb.org/t/p/w200/<?=$seachResult->poster_path?>"></a>
        <br>;
        <?php }?>
        <?php  if($seachResult->media_type == "movie"){?>
        <h6><?= $seachResult->original_title;?> </h6>
        <p><?= $seachResult->overview;?> </p>
        <a href="viewInfo.php"><img src="https://image.tmdb.org/t/p/w200/<?=$seachResult->poster_path?>"></a>
       <br>;
       <?php  }?>
       <?php  }?>

    </div>

    <div class="clearfix">
      <img src="..." alt="...">
      <div>
        <h4 id="titre-categorie">Titre</h4>
        <p>Overview</p>
      </div>
    </div>

  </main>
