<?php 
class Categorie extends Controller {

    public function genre(){ 
        $ApiCategorieSeries = $this->model('ApiCategorieSeries');
        $this->render('viewCategorie',['catSearch'=>$ApiCategorieSeries->CatSeries]);
}
public function searchCategorie(){ 
    $searchMovies = $this->model('searchMovies');
 
    $this->render('viewCategorie',['seachResults'=>$searchMovies->searchM->results]);
}
  
        
        
   
}