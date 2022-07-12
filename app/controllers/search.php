<?php 
class search extends Controller {
    public function viewCategorie(){ 
        $results = [];
        if($_GET['query']=True){
            $searchMovies = $this->model('searchMovies');
            $this->render('viewCategorie',['seachResult'=>$searchMovies->searchM->results]);
        }else{
           
        }
    }
    
    
}