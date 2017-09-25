<?php 

namespace Controllers\Client;

use Core\Controller;
use Models\Client\Gallery as Gallery1;

class Gallery extends Controller
{
    /**
     *
     */
    function index()
    {
        $model = new Gallery1();
        $gallery = $model->get_photos();
        $data = array(
            'breadcrumb' => 'Главная',
            'gallery' => $gallery
        );
        $this->view->generate('gallery','template.php',  $data);
    }

    /**
     * 
     */
    public function wrap_images(&$item, $key){
        $item = "<img src='images/$item' alt='' class='preview'>";
    }
    

}