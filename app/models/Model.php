<?php  

abstract class Model{
    
    protected function getApi(){
    $api_key = 'api_key=37c4996681ade9cfdb37958c17308c4b';
    $Base_url = 'https://api.themoviedb.org/3';

    
    $AnimationMovie = $Base_url.'/discover/movie?'.$api_key.'&language=en-US&sort_by=popularity.desc&page=1&primary_release_year=2020&with_genres=16';
    $AnimeMovie = file_get_contents($AnimationMovie);
    $AniMovie = json_decode($AnimeMovie);
    
    
    $AnimationTV = $Base_url.'/discover/tv?'.$api_key.'&language=en-US&sort_by=popularity.desc&with_genres=16';
    $AnimeTV = file_get_contents($AnimationTV);
    $AnimaTV = json_decode($AnimeTV);

    }
    // foreach($Animovie->results as $anime){
    //     echo $anime->original_title;
    //     echo $anime->overview;
    //     echo "<br />";
    // }
    // foreach($AnimaTV->results as $tv){
    //     echo $tv->name;
    //     echo $tv->overview;
    //     echo "<br />";
    // }

    // }
}