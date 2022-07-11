<?php 


class ApiCategorieSeries{
    
    public $api_key = 'api_key=37c4996681ade9cfdb37958c17308c4b';
    public $Base_url = 'https://api.themoviedb.org/3';
   

    public $CategoriesTV ;  
    public $CategoriesSeries;
    public function __construct(){
        $this->CategoriesTV = $this->Base_url.'/genre/tv/list?'.$this->api_key.'&language=en-US';
        $CategoriesSeries = file_get_contents( $this->CategoriesTV);
        $this->CategoriesSeries = json_decode($CategoriesSeries);
        echo $CategoriesSeries;
    }
  
     
// https://api.themoviedb.org/3/genre/tv/list?api_key=<<api_key>>&language=en-US
    
}