<?php 
    class searchMovies{
    public $api_key = 'api_key=37c4996681ade9cfdb37958c17308c4b';
    public $Base_url = 'https://api.themoviedb.org/3';
   
   
    public $searchMov ;  
    public $searchM;
    public $query;
    public function __construct(){
         $this->query= $_GET["query"];
        $this->searchMovies = $this->Base_url.'/search/multi?'.$this->api_key.'&language=en-US&query='.urlencode($this->query).'&page=1&include_adult=false&with_genres=16';
        $this->searchM = file_get_contents($this->searchMovies) ;
        $this->searchM = json_decode($this->searchM);

    }

    }