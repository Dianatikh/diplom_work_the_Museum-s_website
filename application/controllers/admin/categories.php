<?php 

namespace Controllers\Admin;

use Core\Controller;
use Models\Admin\Categories as Categories1;

class Categories extends Controller
{
    /**
     * 
     */
    public function index(){
        
                if(isset($_SESSION['admin'])) 
    {
		$categories = new categories1();
        $categories = $categories->get_categories();
        $data = array(
            'categories' => $categories
        );
        $this->view->generate('categories','template.php', $data);
     }
        else
     {
            $this->view->generate('nf_404','template_null.php',  $data);
     }
        
    }

    /**
     * 
     */

    public function category(array $args = null){
        $model = new categories1();
        $id = (isset($args[0])? $args[0]: "");

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
            $res = $model->edit($data);
        }

        $category = $model->getById($id);
        $data = array(
            'category' => $category
        );
        $this->view->generate('', $data);
    }

    /**
     * 
     */

    public function add(array $args = null){
        $model = new categories1();
        $id = (isset($args[0])? $args[0]: "");

        if(!empty($_POST)){
            /* base values */
            $data = array();
            foreach ($_POST as $key => $value) {
                global $data;
                if(!empty($value)){
                    $data[$key] = $value;
                }
            }
            $res = $model->add($data);
        }

        $data = array();
        $this->view->generate('addCategory','template.php', $data);
    }

    /**
     * 
     */
    public function delete($args = null){
       $id = (isset($args[0])? $args[0]: ""); 
       if($id){
            $model = new categories1();
            $res = $model->delete($id);            
       }
       $this->view->redirect('/admin/categories');
    }
}
