<?php 

class CatMovies{
    public $api_key = 'api_key=37c4996681ade9cfdb37958c17308c4b';
    public $Base_url = 'https://api.themoviedb.org/3';
   
   
    public $GenreMov ;  
    public $GenreM;
    
    public function __construct(){
        $this->GenreMovies = $this->Base_url.'/discover/movie?'.$this->api_key.'&language=en-US&page=1&with_genres=16';   
        $this->GenreMov = file_get_contents($this->GenreMovies) ;
        $this->GenreM = json_decode($this->GenreMov); 
    }

}