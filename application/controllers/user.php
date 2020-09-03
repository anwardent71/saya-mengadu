<?php
    
Class user extends CI_Controller{
    function __construct()
    {
    
        parent::__construct();

        $this->load->model('m_user');
        $this->load->helper('url');
    }

    function uploadImage()
    {
        $this->load->helper('file');
		$config['upload_path'] 			= '.assets/img/bukti/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = 'item-' . date('ymd');
		$config['overwrite']            = true;
		$config['max_size']             = 20048;

		$this->load->library('upload');
		$this->upload->initialize($config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data('file_name');
		}
		print_r($this->upload->display_errors());

		return "default.jpg";
    }

    public function homeuser()
    {
        $data['title'] = 'Home - Pengguna';
        $this->load->view('user/index', $data);
    }

    
    public function ajukan()
    {
        $data['title'] = 'Ajukan Pengaduan';
        $this->load->view('user/ajukan', $data);
    }
    
    public function riwayat()
    {
        $data['title'] = 'Riwayat Pengaduan';
        $this->load->view('user/riwayat', $data);
    }

    public function logout()
    {
        $this->m_login->aksi_logout();
    }

    public function simpandata()
    {
        $this->m_user->simpan();
    }
}

?>
