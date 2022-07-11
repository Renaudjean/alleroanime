
  <main id="main-categorie">
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Fantasy</a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
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
  </main>
