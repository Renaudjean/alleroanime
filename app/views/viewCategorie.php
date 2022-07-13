<main id="main-categorie">
    <div class="dropdown">
      
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Animation</a>
      
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <?php foreach($CatSeries as $CategoSerie){  ?>
            <li><a class="dropdown-item" href="<?=$CategoSerie->id?>"><?=$CategoSerie->name?></a></li>
            <?php } ?>
      </ul>
    </div>

    <div class="clearfix">
      <img src="..." alt="...">
      <div>
        <h4 id="titre-categorie">Titre</h4>
        <p>Overview</p>
      </div>
    </div>

  </main>
