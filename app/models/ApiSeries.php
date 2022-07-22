<?php 


require_once  realpath(dirname(__DIR__, 2) . "/.php");
class ApiSeries{
    public $Base_url = 'https://api.themoviedb.org/3';
    public $AnimationTV ;  
    public $AnimeSeries;
    public function __construct(){
        $this->api_key=getenv('API_KEY');;
        $this->AnimationTV = $this->Base_url.'/discover/tv?'.$this->api_key.'&language=en-US&sort_by=popularity.desc&with_genres=16';
        $AnimeSeries = file_get_contents( $this->AnimationTV);
        $this->AnimeSeries = json_decode($AnimeSeries);
    }
  
    
     

    
}