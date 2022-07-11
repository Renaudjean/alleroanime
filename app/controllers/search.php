<?php 
class search extends Controller {
    public function viewInfo(){ 
        $searchMovies = $this->model('searchMovies');
        $this->render('viewCategorie',['seachResult'=>$searchMovies->searchM->results]);
        
    }
    
    
}