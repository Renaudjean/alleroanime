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
    $key = "query";
    $Cgenre="id";
    
    if( strpos($url, $key) == TRUE ){
        $check = $_GET['query'];
        if( $check ==" "){
            echo "There is no result under blank"; 
        }
        if($check != '' ){
            $searchMovies = $this->model('searchMovies');
            $this->render('viewCategorie',['searchResults'=>$searchMovies->searchM->results, 'CatSeries'=>$ApiCategorieSeries->CatSeries->genres, 'MovieGenres'=> '','SerieGenres'=>'', 'GenreID'=>'']);
        } 
    else{
      
        $GenreMovies = $this->model('GenreMovies');
        $GenreSeries = $this->model('GenreSeries');
        $this->render('viewCategorie',['MovieGenres'=>$GenreMovies->GenreM->results, 'SerieGenres'=>$GenreSeries->GenreS->results, 'CatSeries'=>$ApiCategorieSeries->CatSeries->genres,  'searchResults'=>'', 'GenreID'=>'']);
            
        }
    }
    
    if( strpos($url, $key) == FALSE && strpos($url, $Cgenre) == FALSE ){
    $GenreMovies = $this->model('GenreMovies');
    $GenreSeries = $this->model('GenreSeries');
    $this->render('viewCategorie',['MovieGenres'=>$GenreMovies->GenreM->results, 'SerieGenres'=>$GenreSeries->GenreS->results, 'CatSeries'=>$ApiCategorieSeries->CatSeries->genres,  'searchResults'=>'', 'GenreID'=>'']);
    } 
    
    if( strpos($url, $Cgenre) == TRUE){
        $GenreId= $_GET['id'];  
        $GenreMovies = $this->model('CatMovies');
        $GenreSeries = $this->model('CatSeries');
        $this->render('viewCategorie',['MovieGenres'=>$GenreMovies->GenreM->results, 'SerieGenres'=>$GenreSeries->GenreS->results, 'CatSeries'=>$ApiCategorieSeries->CatSeries->genres,  'searchResults'=>'', 'GenreID'=>$GenreId]);
    }
    
   
    }

  
        
        
   
}