<?php

Class c_login extends CI_Controller{
    function __construct(){

        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('m_login');
    }

    public function login()
    {
        $data['title'] = 'Masuk';
        
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login', $data);
        }
        else {
            $this->aksi_login();
        }
    }

    function aksi_login2()
    {
        $this->m_login->aksi_login();
    }

    public function register()
    {
        $this->m_login->register_mas();
    }
}