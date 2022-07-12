<?php 

class Categorie extends Controller {
    public function __construct($index = null) {
        $this->index = $index;
       }
       
//     public function genre(){ 
       
//         $this->render('viewCategorie');
//         // var_dump($ApiCategorieSeries->CatSeries);
//         // $this->render('viewCategorie',['catSearch'=>$ApiCategorieSeries->CatSeries]);
// }
public function searchCategorie(){ 
    $key = "query";
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')  {
        $url = "https://";   
    }else  {
        $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   

    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
}
    $ApiCategorieSeries = $this->model('ApiCategorieSeries');
   
    if( strpos($url, $key) == TRUE){
    $searchMovies = $this->model('searchMovies');
    $this->render('viewCategorie',['searchResults'=>$searchMovies->searchM->results, 'CatSeries'=>$ApiCategorieSeries->CatSeries->genres, 'MovieGenre'=> '','SerieGenre'=>'']);
    }else{
    
    $GenreMovies = $this->model('GenreMovies');
    $GenreSeries = $this->model('GenreSeries');
    $this->render('viewCategorie',['MovieGenre'=>$GenreMovies->GenreM->results, 'SerieGenre'=>$GenreMovies->GenreM->results, 'CatSeries'=>$ApiCategorieSeries->CatSeries->genres,  'searchResults'=>'']);
    }
}
  
        
        
   
}