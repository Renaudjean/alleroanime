<?php 

class GenreSeries{
    public $api_key = 'api_key=37c4996681ade9cfdb37958c17308c4b';
    public $Base_url = 'https://api.themoviedb.org/3';
   
   
    public $GenreSeries ;  
    public $GenreSer;
    public $GenreS;
    public function __construct(){
        $this->GenreSeries = $this->Base_url.'/discover/tv?'.$this->api_key.'&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_genres=16&with_watch_monetization_types=flatrate';   
        $this->GenreSer = file_get_contents($this->GenreSeries) ;
        $this->GenreS = json_decode($this->GenreSer); 
    }

}