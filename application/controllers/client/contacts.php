<?php

namespace Controllers\Client;

use Core\Controller;

class Contacts extends Controller
{
	
	function index()
	{
		$this->view->generate('contacts', 'template.php');
	}
    
    public function send(){
        
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $msg = htmlspecialchars($msg);
        
        $name = urldecode($name);
        $email = urldecode($email);
        $msg = urldecode($msg);
        
        $name = trim($name);
        $email = trim($email);
        $msg = trim($msg);
        
    
        
        
        $to = "diankaururu@mail.ru";
        $subject = "с сайта";
        $message = "Имя:".$name." E-mail: ".$email. "Сообщение:".$msg ;
       
        
        
        if (!mail ($to, $subject, $message))
 { 
   $mess = "good";
} else { 
    $mess = "not good";
}

        $this->view->generate('contacts', 'template.php', $send);
    }
}