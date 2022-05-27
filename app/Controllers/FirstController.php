<?php
namespace App\Controllers;
use App\Controllers\BaseController;



class FirstController{

    public function home($request,$response,$args)
    {
        $view =  new \Slim\Views\PhpRenderer('../app/Views/');
        $response = $view->render($response,'view.phtml', ['name'=>$args['name']]);
        //return 'hee!'. $args['name'];
        return $response;
    }
}

