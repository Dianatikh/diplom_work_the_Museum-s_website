<?php 

namespace Controllers\Client;

use Core\Controller;
use Models\Client\Events as Events1;

class Events extends Controller
{
    /**
     *
     */
    function index()
    {
        $model = new Events1();
        $events = $model->get_events();
        $data = array(
            'breadcrumb' => 'Главная',
            'events' => $events 
        );
        $this->view->generate('events','template.php',  $data);
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
    function event(array $args = null){
        $id = (isset($args[0])? $args[0]: "");
        $model = new Events1();
        $events = $model->getById($id);
        
         // строку преобразуем в массив и оборачиваем тегами
        if(!empty($events['image'])){
            $arr = explode(',' , $events['image']);
            array_walk($arr, array($this , 'wrap_images'));
            $events['image'] = implode('' ,$arr);
        }
        $data = array(
            'events' => $events,
            'breadcrumb' => 'Главная / Статьи / '.$events['title'],
        
        );
        $this->view->generate('', 'template_null.php',  $data);
    }
    

}