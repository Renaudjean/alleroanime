<?php

class Info extends Controller {
   public function __construct($index = null) {
    $this->index = $index;
   }

    public function infoSeries($index){
        $ApiInfo = $this->model("ApiInfo");
        $datasSeries = $ApiInfo->getInfoTv($index);

        $ApiInfoCreditSeries = $this->model("ApiInfo");
        $creditSeries = $ApiInfoCreditSeries->getCreditsTv($index);

        $ApiInfoVideoSeries = $this->model("ApiInfo");
        $videoSeries = $ApiInfoVideoSeries->getVideoTv($index);

        // var_dump($videoSeries);
        $this->render('viewInfo',['infoSeries'=>$datasSeries, 'infoCreditsSeries' => $creditSeries, 'infoVideoTv'=>$videoSeries]);
    }
    public function infoMovies($index){
        $ApiInfoMovies = $this->model("ApiInfoMovies");
        $datasMovies = $ApiInfoMovies->getInfoM($index);
        
        $ApiInfoCreditsMovies = $this->model("ApiInfoMovies");
        $creditMovies = $ApiInfoCreditsMovies->getCredits($index);

        $ApiInfoVideoMovies = $this->model("ApiInfoMovies");
        $videoMovies = $ApiInfoVideoMovies->getVideoMovies($index);
        // var_dump($videoMovies);
        // var_dump($creditMovies);
        $this->render('viewInfo',['infoSeries'=> $datasMovies, 'infoCredits' => $creditMovies, 'infoVideoMovies'=>$videoMovies]);
    }
}  