<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends MY_Controller 
{

	
    public function index() 
    {
        $this->dataView = array(
        	'title' => 'Accueil',
        	'example' => 'Accueil',
        	);
        $this->bladeView('welcome', $this->dataView);
    }

}