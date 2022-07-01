<?php
class ControllerAccueil{
    private $_apiManager;
    private $_view;
    public function __construct($url){
        if (isset($url) && count ($url) >1){
             throw new Exception ('Page introuvable');
        }else{
            this->articles();
        }

        private function articles(){
            $this->_apiManager = new ApiManager; 
            $articles = $this ->_apiManager->getMovieSerie();
            require_once('views/viewAcceuil.php');
        }
    }  
};