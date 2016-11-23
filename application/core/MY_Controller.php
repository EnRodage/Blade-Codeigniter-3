<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
  
    protected $views = APPPATH . '/views';
    protected  $cache = APPPATH . '/cache';
    public $dataView = array();
    
    public function __construct()
    {
        parent::__construct();
        
        if($this->uri->segment(1)=='admin')
        {
            $this->dataView['title'] = 'Admin';
            
            if(!$this->session->userdata('logged'))
            {
                if($this->uri->segment(2)!='login')
                {
                    redirect('admin/login');
                }
            } 
            else 
            {
                $this->dataView['currentPage'] = $this->uri->segment(2);
                $this->dataView['user'] = $this->session->userdata('user');
            }
        }
        $this->dataView['currentController'] = $this->uri->segment(1);
    }
    public function bladeView($page, $data=NULL)
    {
        echo $this->blade->view()->make($page, $data)->render();
    }
}
