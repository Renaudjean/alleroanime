<?php

class Home extends Controller {
   public function __construct($index = null) {
    $this->index = $index;
   }

    public function accueil(){
        // find the models for the instructions in Controller 
        $ApiMovies = $this->model('ApiMovies');
        $ApiSeries = $this->model('ApiSeries');
        $this->render('viewAccueil',['Series'=>$ApiSeries->AnimeSeries->results, 'Movies'=>$ApiMovies->Animovie->results]);
    
    }
}   