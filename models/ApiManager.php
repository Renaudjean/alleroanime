<?php 

    $api_key = 'api_key=37c4996681ade9cfdb37958c17308c4b';
    $Base_url = 'https://api.themoviedb.org/3';

    // $Popular = $Base_url.'/tv/popular?api_key=37c4996681ade9cfdb37958c17308c4b&language=en-US&page=1';
  
  
    // $json = file_get_contents($Popular);
    // $tvPopular = json_decode($json);

    
    $AnimationMovie = $Base_url.'/discover/movie?'.$api_key.'&language=en-US&sort_by=popularity.desc&page=1&primary_release_year=2020&with_genres=16';
    $AnimationTV = $Base_url.'/discover/tv?'.$api_key.'&language=en-US&sort_by=popularity.desc&with_genres=16';
  
    $AnimeMovie = file_get_contents($AnimationMovie);
    $Animovie = json_decode($AnimeMovie);


    $AnimeTV = file_get_contents($AnimationTV);
    $AnimaTV = json_decode($AnimeTV);



    // foreach($tvPopular->results as $tv){
    //     echo $tv->name;
    //     echo "<br />";
    // }
    // echo "<pre>";
    // print_r($AnimaTV);
    // echo "</pre>";
    foreach($Animovie->results as $anime){
        echo $anime->original_title;
        echo "<br />";
    }
    foreach($AnimaTV->results as $tv){
        echo $tv->name;
        echo "<br />";
    }

    // echo "<pre>";
    // print_r($tvAnimation);
    // echo "</pre>";