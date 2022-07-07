<?php 
class Series extends Controller {

    public function serieslist(){ 
        $ApiSeries = $this->model('ApiSeries');

        $this->movierender('viewAccueil',['Media'=>$ApiSeries->Animovie->results]);
        
        $this->render('viewAccueil',['Media'=>$ApiSeries->AnimeSeries->results]);
       
    
}
  
        
        
   
}