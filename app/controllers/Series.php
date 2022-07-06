<?php 
class Series extends Controller {
    public function serieslist(){ 
        $ApiSeries = $this->model('ApiSeries');
        $this->render('viewAccueil',['Media'=>$ApiSeries->AnimeSeries->results]);
    }
}