<?php 

class Categorie extends Controller {
    public function __construct($index = null) {
        $this->index = $index;
       }
       
    public function genre(){ 
        $ApiCategorieSeries = $this->model('ApiCategorieSeries');

        
        $this->render('viewCategorie',['CateSeries'=>$ApiCategorieSeries->CategoriesSeries->results]);
       
    
    }   
   
}