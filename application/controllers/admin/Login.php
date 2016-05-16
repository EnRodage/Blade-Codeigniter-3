<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
    }

    public $viewData = array('title' => 'Login');

    /**
     * Login Page
     */
    public function index()
    {
        $this->bladeView('login/login_page', $this->dataView);
    }

    /**
     * Login request
     * 
     * @return redirect to admin page or login page if fails
     */
    public function login()
    {

        if (!$this->input->post() || (!$this->input->post('username') && !$this->input->post('password') ))
        {
            $this->load->view('errors/html/error_general', array('heading' => 'Erro', 'message' => 'User and password are required'));
            return;
        }

        $this->db->limit(1);
        $qryUser = $this->user->get_by(array('user_login' => $this->input->post('username')));

        if (!$qryUser)
        {
            $this->load->view('errors/html/error_general', array('heading' => 'Erro', 'message' => "User or password are incorrect"));
            return;
        }

        $qryPass = password_verify($this->input->post('password'), $qryUser->user_password);

        if ($qryPass)
        {
            $this->session->set_userdata(array('logged' => TRUE, 'user' => $qryUser));
            redirect('admin/home');
        }
    }

    /**
     * Logout request
     */
    public function logout()
    {

        if ($this->session->userdata('logged'))
        {
            $this->session->sess_destroy();
        }

        redirect('welcome');
    }

}