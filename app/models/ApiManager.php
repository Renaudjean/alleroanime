<?php
require_once ("Model.php");
class ApiManager extends Model {
    public function getInfo() {
        return $this-> getMovie('ApiMovies');
       
    }
  
}