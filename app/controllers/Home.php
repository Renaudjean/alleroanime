<?php

class Home extends Controller {
   public function __construct($index = null) {
    $this->index = $index;
   }

    public function start(){
        $ApiMovies = $this->model('ApiMovies');
        $ApiSeries = $this->model('ApiSeries');

        $this->render('viewAccueil',['Series'=>$ApiSeries->AnimeSeries->results, 'Movies'=>$ApiMovies->Animovie->results]);
    
    }
}   