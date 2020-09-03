<?php
    
Class c_beranda extends CI_Controller{

    public function index()
    {
        $data['title'] = 'Saya Mengadu';
        $this->load->view('beranda', $data);
    }
}
?>