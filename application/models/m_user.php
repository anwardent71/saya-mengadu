<?php

Class m_user extends CI_Model
{

    private function editImageProfile()
	{
		$config['upload_path']          = './assets/img/profile/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 5120;
		$config['max_width']            = '4480';
		$config['max_height']           = '4480';
		$config['file_name']            = 'Image' . time();

		$this->upload->initialize($config);

		if (!empty('Image' . time())) {
			if ($this->upload->do_upload('Image')) {
				return $this->upload->data("file_name");
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger  alert-dismissible fade show" role="alert"> Gambar gagal di Upload!.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
				</button></div>');
				redirect('user/profilku');
				print_r($this->upload->display_errors());
			}
		} else {
			$this->input->post('Image');
		}
    }
    
    public function ubah_profil($nik, $data)
    {
        $this->db->where('nik', $nik);
        $this->db->update('masyarakat', $data);
	}

	public function get_nik($username) {
		$this->db->select("nik");
		$this->db->from('masyarakat');
		$this->db->where('username', $username);
		return $this->db->get()->row_array();
	}
	
	public function get_pengaduan($nik) {
		$this->db->select('*');
		$this->db->from('pengaduan');
		$this->db->where('nik', $nik);
		return $this->db->get()->result_array();
	}

	public function get_masyarakat($username) {
		$this->db->select('*');
		$this->db->from('masyarakat');
		$this->db->where('username', $username);
		return $this->db->get()->result_array();
	}
}
?>