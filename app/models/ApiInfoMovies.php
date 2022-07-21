<?php 


class ApiInfoMovies{
    
    public $api_key = 'api_key=37c4996681ade9cfdb37958c17308c4b';
    public $Base_url = 'https://api.themoviedb.org/3';

    public function getInfoM($index){
        $datasMovies = $this->Base_url."/movie/$index?".$this->api_key.'&language=en-US';
        $data = file_get_contents($datasMovies);
        $datasInfoMovies = json_decode($data);
        return $datasInfoMovies;
    }
    public function getCredits($index){
        $datasCreditsMovies = $this->Base_url."/movie/$index/credits?".$this->api_key.'&language=en-US';
        $data = file_get_contents($datasCreditsMovies);
        $datasCreditsInfoMovies = json_decode($data);
        return $datasCreditsInfoMovies;
    }
    public function getVideoMovies($index){
        $datasVideoMovies = $this->Base_url."/movie/$index/videos?".$this->api_key.'&language=en-US';
        $data = file_get_contents($datasVideoMovies);
        $datasVideoInfoMovies = json_decode($data);
        return $datasVideoInfoMovies;
    }
// https://api.themoviedb.org/3/movie/{movie_id}?api_key=<<api_key>>&language=en-US
//https://api.themoviedb.org/3/movie/{movie_id}/videos?api_key=<<api_key>>&language=en-US

}