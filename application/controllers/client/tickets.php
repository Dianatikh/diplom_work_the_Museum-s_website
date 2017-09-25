<?php 

namespace Controllers\Client;

use Core\Controller;
use Models\Client\Tickets as Tickets1;

class Tickets extends Controller
{
    /**
     * 
     */
    public function index(){
        
                if(isset($_SESSION['user'])) 
    {
		$ticket  = new Tickets1();
                    $id = $_SESSION['user']['id'];
        $ticket = $ticket->get_tickets($id);
        $data = array(
            'ticket' => $ticket
        );
        $this->view->generate('tickets','template.php', $data);
     }
        else
     {
            $this->view->generate('main','template_null.php',  $data);
     }
        
    }

    /**
     * 
     */

    public function ticket(array $args = null){
        $model = new Tickets1();
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

        $ticket = $model->getById($id);
        $data = array(
            'ticket' => $ticket
        );
        $this->view->generate('','template.php', $data);
    }

    /**
     * 
     */

    public function add(array $args = null){
        $model = new Tickets1();
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
         $this->view->generate('AddTickets','templatesame.php', $data);
        
    }

    /**
     * 
     */
    public function delete($args = null){
       $id = (isset($args[0])? $args[0]: ""); 
       if($id){
            $model = new Tickets1();
            $res = $model->delete($id);            
       }
       $this->view->redirect('/tickets');
    }
}
