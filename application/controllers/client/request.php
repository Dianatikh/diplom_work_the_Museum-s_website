<?php 

namespace Controllers\Client;

use Core\Controller;
use Models\Client\Request as Request1;

class Request extends Controller
{
    /**
     * 
     */
    public function index(){
        
                if(isset($_SESSION['user'])) 
    {
		$request  = new Request1();
                    $id = $_SESSION['user']['id'];
        $request = $request->get_requests($id);
        $data = array(
            'request' => $request
        );
        $this->view->generate('requests','template.php', $data);
     }
        else
     {
            $this->view->generate('../../../main','template_null.php',  $data);
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

    public function add(array $args = null){
        $model = new Request1();
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
        $this->view->generate('addRequest','template.php', $data);
    }

    /**
     * 
     */
    public function delete($args = null){
       $id = (isset($args[0])? $args[0]: ""); 
       if($id){
            $model = new Request1();
            $res = $model->delete($id);            
       }
       $this->view->redirect('/request');
    }
}
