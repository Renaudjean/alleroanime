<?php 
class search extends Controller {
    public function viewCategorie(){ 
        $searchMovies = $this->model('searchMovies');
        $this->render('viewCategorie',['seachResult'=>$searchMovies->searchM->results]);
        
    }
    
    
}