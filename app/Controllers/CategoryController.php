<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class CategoryController extends BaseController {


    public function deleteCategory($request, $response, $args)
    {
    
        $response = $this->container->view->render($response, 'view.phtml',['category_deleted'=>true]);

        return $response;
    }
}
