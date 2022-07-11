<?php 
class Categorie extends Controller {

    public function genre(){ 
        $ApiCategorieSeries = $this->model('ApiCategorieSeries');

        
        $this->render('viewCategorie',['CategorieSeries'=>$ApiCategorieSeries->$CategorieSeries->results]);
       
    
}
  
        
        
   
}