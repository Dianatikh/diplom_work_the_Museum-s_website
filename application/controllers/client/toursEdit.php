<?php 

namespace Controllers\Client;

use Core\Controller;
use Models\Client\ToursEdit as Tours1;

class ToursEdit extends Controller
{
    /**
     * 
     */
    public function index(){
        
                if(isset($_SESSION['user'])) 
    {
		$tour  = new Tours1();
                    $id = $_SESSION['user']['id'];
        $tour = $tour->get_tours($id);
        $data = array(
            'tour' => $tour
        );
        $this->view->generate('toursEdit','template.php', $data);
     }
        else
     {
            $this->view->generate('tours','template.php',  $data);
     }
        
    }

    /**
     * 
     */

    public function tourEdit(array $args = null){
        $model = new Tours1();
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

        $tour = $model->getById($id);
        $data = array(
            'tour' => $tour
        );
        $this->view->generate('','templatesame.php', $data);
    }

    /**
     * 
     */

    public function add(array $args = null){
        $model = new Tours1();
        $id = (isset($args[0])? $args[0]: "");
        $tour = new Tours1();
         
        
        $tour = $tour->get_tour($id);

       

        if(!empty($_POST)){
            /* base values */
            $data = array();
            foreach ($_POST as $key => $value) {
                global $dat;
                if(!empty($value)){
                    $dat[$key] = $value;
                }
            }
            $res = $model->add($dat);
            
        }

        $data = array(
            'tour' => $tour,
            'data' => $dat
        );
    
        $this->view->generate('addToursEdit','templatesame.php', $data);
    }

    /**
     * 
     */
    public function delete($args = null){
       $id = (isset($args[0])? $args[0]: ""); 
       if($id){
            $model = new Tours1();
            $res = $model->delete($id);            
       }
       $this->view->redirect('/toursEdit');
    }
}
