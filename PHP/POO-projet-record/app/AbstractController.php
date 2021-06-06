<?php



abstract class AbstractController {

    public function loadModel(string $model){
        require_once(ROOT . '/model/' . $model . '.php');
        return new $model;
    }

    public function loadFunction(){
        require_once(ROOT . '/function/function.php');
        return new Functions;
    }

    public function render(string $file, array $data = []) {

            extract($data);

            ob_start();

            require(ROOT . '/views/' . strtolower(get_class($this)) .'/'. $file . '.php');

            $content = ob_get_clean();
            
            require_once(ROOT . '/views/layout/default.php');
    }

}