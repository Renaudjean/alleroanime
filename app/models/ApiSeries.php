<?php 


class ApiSeries{
    
    public $api_key = 'api_key=37c4996681ade9cfdb37958c17308c4b';
    public $Base_url = 'https://api.themoviedb.org/3';
    

    public $AnimationTV ;  
    public $AnimeSeries;
    public function __construct(){
        $this->AnimationTV = $this->Base_url.'/discover/tv?'.$this->api_key.'&language=en-US&sort_by=popularity.desc&with_genres=16';
        $AnimeSeries = file_get_contents( $this->AnimationTV);
        $this->AnimeSeries = json_decode($AnimeSeries);
    }
  
    
     

    
}