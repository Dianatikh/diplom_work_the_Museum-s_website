<?php

namespace Controllers\Client;

use Core\Controller;

class Nf_404  extends Controller
{
	
	public function index($file)
	{
        $data['unexist_file'] = $file;
		$this->view->generate("nf_404", "template_null.php", $data);
	}

}


