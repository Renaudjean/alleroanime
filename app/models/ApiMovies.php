<?php 


class ApiMovies{
    
    public $api_key = 'api_key=37c4996681ade9cfdb37958c17308c4b';
    public $Base_url = 'https://api.themoviedb.org/3';
    // public $Popular = $Base_url.'/tv/popular?api_key=37c4996681ade9cfdb37958c17308c4b&language=en-US&page=1';
  

    public  $AnimationMovie ;
    public $AnimeMovie;
    public $Animovie;
    public function __construct(){
        $this->AnimationMovie = $this->Base_url.'/discover/movie?'.$this->api_key.'&language=en-US&sort_by=popularity.desc&page=1&primary_release_year=2020&with_genres=16';
        $this->AnimeMovie = file_get_contents( $this->AnimationMovie);
        $this->Animovie = json_decode( $this->AnimeMovie);
    }

    // $AnimeTV = file_get_contents($AnimationTV);
    // $AnimaTV = json_decode($AnimeTV);

    
}
