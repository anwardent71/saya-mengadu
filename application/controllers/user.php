<?php
    
Class user extends CI_Controller{
    function __construct()
    {
    
        parent::__construct();

        $this->load->model('m_user');
        $this->load->helper('url');
    }

    private function editImageProfil()
	{
		$config['upload_path']          = './assets/img/profil/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 5120;
		$config['max_width']            = '4480';
		$config['max_height']           = '4480';
		$config['file_name']            = 'image'.time();

		$this->upload->initialize($config);

		if (!empty('image'.time())) {
			if ($this->upload->do_upload('image')) {
				return $this->upload->data("file_name");
			} else {
				print_r($this->upload->display_errors());
			}
		} else {
			$this->input->post('mage');
		}
	}

    public function homeuser()
    {
        $data['title'] = 'Halaman Depan';
        $this->load->view('user/index', $data);
    }

    
    public function ajukan()
    {
        $data['title'] = 'Ajukan Pengaduan';
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username'=>
        $this->session->userdata('username')])->row_array();
        
        $this->load->view('user/ajukan', $data);
    }

    public function profilku()
    {
        $data['title'] = 'Profil Saya';
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username'=>
        $this->session->userdata('username')])->row_array();

        $this->load->view('user/profilku', $data);
    }

    public function ubah_profil()
    {
        $data = [
            'nama' => $this->input->post('Nama', TRUE),
            'username' => $this->input->post('Username', TRUE),
            'password' => password_hash($this->input->post('Password'), PASSWORD_DEFAULT),
            'no_telp' => $this->input->post('No_telp'),
            'image' => $this->editImageProfil()
        ];

        $nik = $this->input->post('Nik');
        $this->m_user->ubah_profil($nik, $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success  alert-dismissible fade show" role="alert"> Data Berhasil diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('user/profilku');
    }
    
    // public function simpandata()
    // {
    //     $username = $this->session->userdata('username');

    //     $data = [
    //         'nik' => $this->input->post('Nik'),
    //         'isi_laporan' => $this->input->post('Isi'),
    //         // 'image' => $this->uploadImage(), 
    //         'alamat_pengaduan' => $this->input->post('Alamat'),
    //         'tanggal_pengaduan' => time(),
    //     ];

    //     $this->db->insert('pengaduan', $data);

    //     $this->session->set_flashdata('message', '<div class="alert alert-success  alert-dismissible fade show" role="alert"> Data kamu aku simpan disini ya !<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //     <span aria-hidden="true">&times;</span>
    //     </button></div>');
    //     redirect('user/riwayat');
    // }
    

}

?>
