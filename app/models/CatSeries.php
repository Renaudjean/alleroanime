<?php 

require_once  realpath(dirname(__DIR__, 2) . "/.php");
class CatSeries{
    public $Base_url = 'https://api.themoviedb.org/3';
   
    public $GenreSeries ;  
    public $GenreSer;
    public $GenreS;
    public function __construct(){
        $this->api_key=getenv('API_KEY');;
        $this->GenreSeries = $this->Base_url.'/discover/tv?'.$this->api_key.'&language=en-US&page=1&with_genres=16';   
        $this->GenreSer = file_get_contents($this->GenreSeries) ;
        $this->GenreS = json_decode($this->GenreSer); 
    }
}