<?php 
class Categorie extends Controller {

    public function genre(){ 
        $ApiCategorieSeries = $this->model('ApiCategorieSeries');
        var_dump($ApiCategorieSeries->CatSeries);
        $this->render('viewCategorie',['catSearch'=>$ApiCategorieSeries->CatSeries]);
       
    
}
  
        
        
   
}