<?php 

class Controller{
    // Thos function will create a new instance for the model once the moden as been selected by the controller
    public function model($model){
       require_once '../app/models/'.$model.'.php';
       return new $model();
    }

    // Function render will extract the data in the controller
    public function render(string $fichier, array $datas = []){
        if (gettype($datas) == "object"){
        foreach($datas as $element) {
            extract($element);
           } 

        }
        extract($datas);
        
        // On démarre le buffer
        ob_start();

        require_once('../app/views/'.$fichier.'.php');

        // Lit le contenu de sortie puis l'efface
        $content = ob_get_clean();

        require_once('../app/views/default.php');
    }
    
}