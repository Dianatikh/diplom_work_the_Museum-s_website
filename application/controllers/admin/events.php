<?php 

namespace Controllers\Admin;

use Models\Admin\Events as Events1;


use Core\Controller;

class Events extends Controller{
	
	/**
	 * 
	 */
	public function index(){
        if(isset($_SESSION['admin'])) 
    {
		$events = new Events1();
		$events = $events->get_events();
        $data = array(
            'events' => $events
        );
		$this->view->generate('events','template.php',  $data);
     }
        else
     {
            $this->view->generate('nf_404','template_null.php',  $data);
     }
	}

    /**
     * 
     */
    public function wrap_images(&$item, $key){
        $item = "<img src='images/$item' alt='' class='preview'>";
    }

    /**
     * 
     */
    public function delete_images($item){
        if(file_exists(PATH_SITE.DS.'images'.DS.$item)){
            unlink(PATH_SITE.DS.'images'.DS.$item);
        }
    }

    /**
     * 
     */
    

    /**
     * @param array $args
     */
    public function event(array $args = null){
        $id = (isset($args[0])? $args[0]: "");
        $model = new Events1();
        

        // edit action
        if(!empty($_POST)){
            /* base values */
            $data = array();
            foreach ($_POST as $key => $value) {
                global $data;
                if(!empty($value)){
                    $data[$key] = $value;
                }
            }
            /* image  */
            if(!empty($_FILES['image']['name'][0])){
                $data["image"] = $_FILES['image']['name'][0];
                $uploaded_files = array();
                foreach($_FILES['image']['error'] as $key=> $error){
                    global $uploaded_files;
                    if($error == UPLOAD_ERR_OK){
                        $tmp_name = $_FILES['image']['tmp_name'][$key];
                        $name = basename($_FILES['image']['name'][$key]);
                        $res = move_uploaded_file($tmp_name, PATH_SITE.DS.'images'.DS.$name); 
                        if($res){
                            $uploaded_files[] = $_FILES['image']['name'][$key];
                        }
                    }
                }
                // массив картинок переводим в строку
                $data["image"] = implode(',' , $uploaded_files);
            }
           

            $model->edit($data);
        }


        $event = $model->getById($id);
      
        // строку преобразуем в массив и оборачиваем тегами
        if(!empty($event['image'])){
            $arr = explode(',' , $event['image']);
            
           array_walk($arr,array($this, 'wrap_images')); 
            $event['image'] = implode('' ,$arr);
        }

       

        $data = array(
            'event' => $event,
            
        );
        $this->view->generate('','template.php',   $data);
    }

    /**
     * 
     */
    public function add(){
         $model = new Events1();
        
        if(!empty($_POST)){

            /* base values */
            $data = array();
            foreach ($_POST as $key => $value) {
                global $data;
                if(!empty($value)){  //////////////////////
                    $data[$key] = $value;
                }
            }
            /* image  */
           if(!empty($_FILES['image']['name'][0])){
                $data["image"] = $_FILES['image']['name'][0];
                $uploaded_files = array();
                foreach($_FILES['image']['error'] as $key=> $error){
                    global $uploaded_files;
                    if($error == UPLOAD_ERR_OK){
                        $tmp_name = $_FILES['image']['tmp_name'][$key];
                        $name = basename($_FILES['image']['name'][$key]);
                        $res = move_uploaded_file($tmp_name, PATH_SITE.DS.'images'.DS.$name); 
                        if($res){
                            $uploaded_files[] = $_FILES['image']['name'][$key];
                        }
                    }
                }
                // массив картинок переводим в строку
                $data["image"] = implode(',' , $uploaded_files);
            }
                      

            $res = $model->add($data);
        }

       

        
        $this->view->generate('addEvent','template.php',   $data);   
    }

    /**
     * 
     */
    public function delete($args = null){
       $id = (isset($args[0])? $args[0]: ""); 
       if($id){
            $model = new Events1();
            $events = $model->getById($id);
           $res = $model->delete($id);
            // удаляем картинки
            if($res == true){
                $arr = explode(',' , $events['image']);
                //array_walk($arr, [$this, 'delete_images']);
                array_walk($arr, array($this, 'delete_images'));
                
            }
       }
       $this->view->redirect('/admin');
    }
}


 ?>