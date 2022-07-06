<?php 

class Controller{
    public function model($model){
       require_once '../app/models/'.$model.'.php';
       return new $model();
    }

    public function render(string $fichier, array $data = []){
        extract($data);

        // On démarre le buffer
        ob_start();

        require_once('../app/views/'.$fichier.'.php');

        $content = ob_get_clean();

        require_once('../app/views/default.php');
    }
}