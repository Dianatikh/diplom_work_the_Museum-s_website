<?php

namespace Controllers\Client;

use Core\Controller;


class Main extends Controller
{

    
	function index()
	{	
		$this->view->generate('main', 'template_null.php');
        
	}
}