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
      </div>
    </div>
    <div id="info-voice">
        <?php foreach($infoCredits->cast as $info){  ?>
          <img src="https://image.tmdb.org/t/p/w92/<?= $info->profile_path ?>" alt="...">
          <div>
            <h6><?=$info->name?></h6>
            <p><?=$info->character?></p>
          </div>
      <?php } ?>
    </div>
</main>