<?php 

namespace Controllers\Admin;

use Core\Controller;
use Models\Admin\Request as Request1;

class Request extends Controller
{
    /**
     * 
     */
    public function index(){
        
                if(isset($_SESSION['admin'])) 
    {
		$request  = new Request1();
        $request = $request->get_requests();
        $data = array(
            'request' => $request
        );
        $this->view->generate('requests','template.php', $data);
     }
        else
     {
            $this->view->generate('nf_404','template_null.php',  $data);
     }
        
    }

    /**
     * 
     */

    public function request(array $args = null){
        $model = new Request1();
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

        $request = $model->getById($id);
        $data = array(
            'request' => $request
        );
        $this->view->generate('','template.php', $data);
    }

    /**
     * 
     */

    public function remove($args = null){
       $id = (isset($args[0])? $args[0]: ""); 
       if($id){
            $model = new Request1();
            $res = $model->remove($id);            
       }
       $this->view->redirect('/admin/request');
    }

    /**
     * 
     */
    public function ok($args = null){
       $id = (isset($args[0])? $args[0]: ""); 
       if($id){
            $model = new Request1();
            $res = $model->ok($id);            
       }
       $this->view->redirect('/admin/request');
    }
}
