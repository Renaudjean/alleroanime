<?php 
    class searchMovies{
    public $api_key = 'api_key=37c4996681ade9cfdb37958c17308c4b';
    public $Base_url = 'https://api.themoviedb.org/';
   
    public $searchMov ;  
    public $searchM;

    public function __construct(){
        $this->searchMov = $this->Base_url.'https://www.themoviedb.org/search/movie?'.$api_key.'&language=en-US&query=Thisisaqui&page=1&include_adult=false'
        $this->searchM = file_get_contents() ;
    }

    }