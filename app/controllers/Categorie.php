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
    $searchMovies = $this->model('searchMovies');
    $ApiCategorieSeries = $this->model('ApiCategorieSeries');
    $this->render('viewCategorie',['seachResults'=>$searchMovies->searchM->results, 'CatSeries'=>$ApiCategorieSeries->CatSeries->genres]);
}
  
        
        
   
}