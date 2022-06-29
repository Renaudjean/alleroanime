<?php 

    $api_key = 'api_key37c4996681ade9cfdb37958c17308c4b';
    $Base_url = 'https://api.themoviedb.org/3';

    $Popular = $Base_url.'/tv/popular?api_key=37c4996681ade9cfdb37958c17308c4b&language=en-US&page=1';
  
    $json = file_get_contents($Popular);
    $tvPopular = json_decode($json);

    foreach($tvPopular->results as $tv){
        echo $tv->name;
        echo "<br />";
    }

    // echo "<pre>";
    // print_r($tvPopular);
    // echo "</pre>";