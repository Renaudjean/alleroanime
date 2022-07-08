<?php 
class CategorieSeries extends Controller {

    public function serieslist(){ 
        $ApiCategorieSeries = $this->model('ApiCategorieSeries');

        
        $this->render('viewCategorie',['Media'=>$ApiCategorieSeries->$CategorieSeries->results]);
       
    
}
  
        
        
   
}