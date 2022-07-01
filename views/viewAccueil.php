<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
<?php 
 

    $api_key = 'api_key=37c4996681ade9cfdb37958c17308c4b';
    $Base_url = 'https://api.themoviedb.org/3';


    
    $AnimationMovie = $Base_url.'/discover/movie?'.$api_key.'&language=en-US&sort_by=popularity.desc&page=1&primary_release_year=2020&with_genres=16';
    $AnimationTV = $Base_url.'/discover/tv?'.$api_key.'&language=en-US&sort_by=popularity.desc&with_genres=16';
  
    $AnimeMovie = file_get_contents($AnimationMovie);
    $Animovie = json_decode($AnimeMovie);


    $AnimeTV = file_get_contents($AnimationTV);
    $AnimaTV = json_decode($AnimeTV);


    // print_r($Animovie);
    // foreach($tvPopular->results as $tv){
    //     echo $tv->name;
    //     echo "<br />";
    // }
    echo "<pre>";
    print_r($Animovie);
    echo "</pre>";
    // foreach($Animovie->results as $anime){
    //     print_r($anime);
    //     // echo $anime->original_title;
    //     echo "<br />";
    // }
    // foreach($AnimaTV->results as $tv){
    //     echo $tv->name;
    //     echo "<br />";
    // }

    // echo "<pre>";
    // print_r($tvAnimation);
    // echo "</pre>";    ?>
</body>
</html>