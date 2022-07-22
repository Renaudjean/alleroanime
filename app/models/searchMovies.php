<?php 
    require_once  realpath(dirname(__DIR__, 2) . "/.php");
    class searchMovies{
    public $Base_url = 'https://api.themoviedb.org/3';
    public $searchMov ;  
    public $searchM;
    public $query;
    public $key;
  
    public function __construct(){
        $this->api_key=getenv('API_KEY');;
        $this->query= $_GET["query"];
        $this->searchMovies = $this->Base_url.'/search/multi?'.$this->api_key.'&language=en-US&query='.urlencode($this->query).'&page=1&include_adult=false$with_genre=16-animation';
        $this->searchM = file_get_contents($this->searchMovies) ;
        $this->searchM = json_decode($this->searchM);
    }

    }