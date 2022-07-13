<?php 


class ApiInfo{
    
    public $api_key = 'api_key=37c4996681ade9cfdb37958c17308c4b';
    public $Base_url = 'https://api.themoviedb.org/3';

    public function getInfo($index){
        
        $datasTv = $this->Base_url."/tv/$index?".$this->api_key.'&language=en-US';
        $datas = file_get_contents( $datasTv);
        $datasInfo= json_decode($datas);
        return $datasInfo;
        
    }
     
// https://api.themoviedb.org/3/tv/{tv_id}?api_key=<<api_key>>&language=en-US
// https://api.themoviedb.org/3/movie/{movie_id}?api_key=<<api_key>>&language=en-US
    
}