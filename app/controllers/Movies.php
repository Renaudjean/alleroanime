<?php 
class Movies extends Controller {
    public function movielist(){ 
        $ApiMovies = $this->model('ApiMovies');
        $this->render('viewAccueil',['Media'=>$ApiMovies->Animovie->results]);
        
    }
}