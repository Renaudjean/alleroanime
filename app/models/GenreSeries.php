<?php 

require_once  realpath(dirname(__DIR__, 2) . "/.php");
class GenreSeries{
    public $Base_url = 'https://api.themoviedb.org/3';
    public $GenreSeries ;  
    public $GenreSer;
    public $GenreS;
    public function __construct(){
        $this->api_key =getenv('API_KEY');
        $this->GenreSeries = $this->Base_url.'/discover/tv?'.$this->api_key.'&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_genres=16&with_watch_monetization_types=flatrate';   
        $this->GenreSer = file_get_contents($this->GenreSeries) ;
        $this->GenreS = json_decode($this->GenreSer); 
    }

}