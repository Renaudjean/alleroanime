
  <main id="main-accueil">
    <?php
    ?><div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Fantasy</a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
    </div>

    <?php foreach($seachResults as $seachResult){ 
      if($seachResult->media_type == "tv"){
        echo $seachResult->name;
        echo "<br>";
      }
      if($seachResult->media_type == "movie"){
        echo $seachResult->original_title;
        echo "<br>";
      }
    }?>
  </main>
