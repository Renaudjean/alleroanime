<?php 


require_once  realpath(dirname(__DIR__, 2) . "/.php");
class ApiInfo{
    public $Base_url = 'https://api.themoviedb.org/3';

    public function getInfoTv($index){
        var_dump($index);
        $this->api_key =getenv('API_KEY');
        $datasTv = $this->Base_url."/tv/$index?".$this->api_key.'&language=en-US';
        $datas = file_get_contents($datasTv);
        $datasInfo= json_decode($datas);
        return $datasInfo; 
    }
    public function getCreditsTV($index){
        $this->api_key=getenv('API_KEY');
        $datasCreditsTv = $this->Base_url."/tv/$index/credits?".$this->api_key.'&language=en-US';
        $data = file_get_contents($datasCreditsTv);
        $datasCreditsInfoSeries = json_decode($data);
        return $datasCreditsInfoSeries;
    }
    public function getVideoTv($index){
        $this->api_key=getenv('API_KEY');
        $datasVideoTv = $this->Base_url."/tv/$index/videos?".$this->api_key.'&language=en-US';
        $data = file_get_contents($datasVideoTv);
        $datasVideoInfoSeries = json_decode($data);
        return $datasVideoInfoSeries;
    }
     
// https://api.themoviedb.org/3/tv/{tv_id}?api_key=<<api_key>>&language=en-US
// https://api.themoviedb.org/3/movie/{movie_id}?api_key=<<api_key>>&language=en-US
    
}