<?php 

class Controller{
    public function model($model){
       require_once '../app/models/'.$model.'.php';
       return new $model();
    }

    public function render(string $fichier, array $datas = []){
      
        foreach($datas as $element) {
           if (gettype($element) == "object"){
            extract($element);
           } 
        }
        extract($datas);
        // On démarre le buffer

        ob_start();

        require_once('../app/views/'.$fichier.'.php');

        $content = ob_get_clean();
        require_once('../app/views/default.php');

    }
    
}