<?php

namespace Controllers\Client;

use Core\Controller;


class About extends Controller
{

    
	function index()
	{	
		$this->view->generate('about', 'template_null.php');
        
	}
}