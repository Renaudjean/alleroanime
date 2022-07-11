<?php 

class Categorie extends Controller {
    public function __construct($index = null) {
        $this->index = $index;
       }
       
    public function genre(){ 
        $ApiCategorieSeries = $this->model('ApiCategorieSeries');

        
        $this->render('viewCategorie',['CatSeries'=>$ApiCategorieSeries->CatSeries->genres]);
        // var_dump($ApiCategorieSeries->CatSeries);
        // $this->render('viewCategorie',['catSearch'=>$ApiCategorieSeries->CatSeries]);
       
    
    }   
   
}