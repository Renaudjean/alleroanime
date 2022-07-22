<?php 


require_once  realpath(dirname(__DIR__, 2) . "/.php");
class ApiMovies{
    public $Base_url = 'https://api.themoviedb.org/3';

    public  $AnimationMovie ;
    public $AnimeMovie;
    public $Animovie;
    public function __construct(){
        $this->api_key=getenv('API_KEY');;
        $this->AnimationMovie = $this->Base_url.'/discover/movie?'.$this->api_key.'&language=en-US&sort_by=popularity.desc&page=1&primary_release_year=2020&with_genres=16';
        $this->AnimeMovie = file_get_contents( $this->AnimationMovie);
        $this->Animovie = json_decode( $this->AnimeMovie);
    }

}
