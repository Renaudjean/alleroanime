<?php
require_once ("Model.php");
class ApiManager extends Model {
    public function getInfo() {
      var_dump(getMovie('ApiMovies'));
        return $this-> getMovie('ApiMovies');
       
    }
  
}