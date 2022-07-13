<main id="main-info">
    <?php //var_dump($infoSeries)?>
    <div class="clearfix">
      <img src="https://image.tmdb.org/t/p/w300/<?= $infoSeries->poster_path ?>" alt="...">
      <div id="info-container">
        <div>
            <h4 id="titre-info"><?=$infoSeries->name ?? $infoSeries->title?></h4>
          <?php foreach($infoSeries->genres  as $nameGenre){  ?>
            <p id="p-name"><?=$nameGenre->name?>,</p>
            <?php } ?>
        </div>
        <div id="info-overviews">
            <h5>Synopsis</h5>
            <p id="p-overview"><?=$infoSeries ->overview?></p>
        </div>
        <div id="info-voice">
        <?php foreach($infoCredits->cast  as $nameGenre){  ?>


            <?php } ?>
        </div>
      </div>
    </div>
</main>