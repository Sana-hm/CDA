<?php


define('ROOT' , $_SERVER['DOCUMENT_ROOT']);

require_once(ROOT . '/app/AbstractController.php');
require_once(ROOT . '/app/ModelParent.php');

$url = $_SERVER['REQUEST_URI'];

$param = explode('/' , $url);

//  var_dump($param);
if(!$param['1'] == '') {

    $controller = ucfirst($param['1']);
    $method = isset($param['2']) ? $param['2'] : 'index' ;

        if(file_exists(ROOT . '/controllers/' . $controller . '.php')) {

            require_once(ROOT . '/controllers/' . $controller . '.php');

            $controller = new $controller;

                if(method_exists($controller , $method)){

                    unset($param[0]);
                    unset($param[1]);
                    unset($param[2]);

                    call_user_func_array([$controller , $method] , $param);

                }else{
                    http_response_code(404);
                    echo 'Le contrôleur demandé n\'existe pas' ;
                }
        } else {
            http_response_code(404);
            echo 'Le controleur demandé n\'exidte pas' ;
        }
    }else{
        
        header('Location:/Discs/index');

    }