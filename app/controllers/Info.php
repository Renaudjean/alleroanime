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

        // var_dump($creditSeries);
        $this->render('viewInfo',['infoSeries'=>$datasSeries, 'infoCreditsSeries' => $creditSeries]);
        
    }
    public function infoMovies($index){
        $ApiInfoMovies = $this->model("ApiInfoMovies");
        $datasMovies = $ApiInfoMovies->getInfoM($index);
        
        $ApiInfoCreditsMovies = $this->model("ApiInfoMovies");
        $creditMovies = $ApiInfoCreditsMovies->getCredits($index);
        // var_dump($datasMovies);
        // var_dump($creditMovies);
        $this->render('viewInfo',['infoSeries'=> $datasMovies, 'infoCredits' => $creditMovies]);
    }
}  