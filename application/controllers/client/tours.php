<?php 

namespace Controllers\Client;

use Core\Controller;
use Models\Client\Tours as Tours1;

class Tours extends Controller
{
    /**
     *
     */
    function index()
    {
        $model = new Tours1();
        $tours = $model->get_tours();
        $data = array(
            'breadcrumb' => 'Главная',
            'tours' => $tours 
        );
        $this->view->generate('tours','template.php',  $data);
    }

    /**
     * 
     */
    public function wrap_images(&$item, $key){
        $item = "<img src='../../images/$item' alt='' class='preview'>";
    }
    
    /**
     * @param array $args
     */
    function tour(array $args = null){
        $id = (isset($args[0])? $args[0]: "");
        $model = new Tours1();
        $tour = $model->getById($id);
        
         // строку преобразуем в массив и оборачиваем тегами
        if(!empty($tour['image'])){
            $arr = explode(',' , $tour['image']);
            array_walk($arr, array($this , 'wrap_images'));
            $tour['image'] = implode('' ,$arr);
        }
        $data = array(
            'tour' => $tour,
            'breadcrumb' => 'Главная / Статьи / '.$tour['title'],
        
        );
        $this->view->generate('', 'template_null.php',  $data);
    }
    

}