<?php 
    class searchMovies{
    public $api_key = 'api_key=37c4996681ade9cfdb37958c17308c4b';
    public $Base_url = 'https://api.themoviedb.org/3';
   
    public $searchMov ;  
    public $searchM;

    public function __construct(){
        $this->searchMovies = $this->Base_url.'/search/movie?'.$this->api_key.'&language=en-US&query=the+international&page=1&include_adult=false';
        $this->searchM = file_get_contents($this->searchMovies) ;
        $this->searchM = json_decode($this->searchM);

    }

    }