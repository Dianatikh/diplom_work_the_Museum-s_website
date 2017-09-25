<?php 

namespace Controllers\Client;

use Core\Controller;
use Models\Client\Book as Book1;

class Book extends Controller
{
    /**
     * 
     */
    public function index(){
        
  
		$book  = new Book1();
        $book = $book->get_book();
        $data = array(
            'book' => $book
        );
        $this->view->generate('book','template.php', $data);
    
    }

    /**
     * 
     */

public function addCom(array $args = null){
        
$data = "";


$model = new Book1();
    
     $data = array();
            foreach ($_POST as $key => $value) {
                global $data;
                if(!empty($value)){
                    $data[$key] = $value;
                }
            }




$data['message'] = trim($_POST['message']);
    
   
            $data['id_users'] = $_SESSION['user']['id'];
            $data['date'] = date("Y-m-d H:i:s");
            
            $res = $model->addCom($data); 
            
            $data = array(   'data' =>$data    );
   
        
          $this->view->redirect('/book');  
        
    }

    /**
     * 
     */
    public function delCom($args = null){
       $id = (isset($args[0])? $args[0]: ""); 
       if($id){
            $model = new Book1();
            $res = $model->delete($id);            
       }
       $this->view->redirect('/book');
    }
}
