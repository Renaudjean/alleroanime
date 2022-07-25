<?php

class Info extends Controller {
    
    public function __construct($index = null) {
        $this->index = $index;
   }
    
    public function infoSeries($param){
        $params = explode("=",$param);

 
        $keyserie = "idserie";
    
    
    
        $ApiInfo = $this->model("ApiInfo");
        $datasSeries = $ApiInfo->getInfoTv($params[1]);

        $ApiInfoCreditSeries = $this->model("ApiInfo");
        $creditSeries = $ApiInfoCreditSeries->getCreditsTv($params[1]);

        $ApiInfoVideoSeries = $this->model("ApiInfo");
        $videoSeries = $ApiInfoVideoSeries->getVideoTv($params[1]);

        $this->render('viewInfo',['infoSeries'=>$datasSeries, 'infoCreditsSeries' => $creditSeries, 'infoVideoTv'=>$videoSeries]);
    

    }
    
    
    
    
    
    public function infoMovies($param){
        $params = explode("=",$param);
        $keymovie = "idmovie";
          
          $ApiInfoMovies = $this->model("ApiInfoMovies");
          $datasMovies = $ApiInfoMovies->getInfoM($params[1]);
          
          $ApiInfoCreditsMovies = $this->model("ApiInfoMovies");
          $creditMovies = $ApiInfoCreditsMovies->getCredits($params[1]);
    
          $ApiInfoVideoMovies = $this->model("ApiInfoMovies");
          $videoMovies = $ApiInfoVideoMovies->getVideoMovies($params[1]);
          $this->render('viewInfo',['infoMovies'=> $datasMovies, 'infoCredits' => $creditMovies, 'infoVideoMovies'=>$videoMovies]);

    }
}
 


