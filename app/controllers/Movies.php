<?php 
class Movies extends Controller {
    public function movielist(){ 
        $ApiMovies = $this->model('ApiMovies'); 
          
        foreach($ApiMovies->Animovie->results as $anime){

            echo $anime->original_title;
            echo "<br />";
            echo "<br />";
            echo $anime->overview;
            echo "<br />";
            echo "<br />";
            echo "<br />";
        }
    }
}