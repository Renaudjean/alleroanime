<?php 

require_once  realpath(dirname(__DIR__, 2) . "/.php");
class CatMovies{
    public $Base_url = 'https://api.themoviedb.org/3'; 
    public $GenreMov ;  
    public $GenreM;
    
    public function __construct(){
        $this->api_key =getenv('API_KEY');
        $this->GenreMovies = $this->Base_url.'/discover/movie?'.$this->api_key.'&language=en-US&page=1&with_genres=16';   
        $this->GenreMov = file_get_contents($this->GenreMovies) ;
        $this->GenreM = json_decode($this->GenreMov); 
    }
}