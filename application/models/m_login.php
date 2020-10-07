<?php

Class m_login extends CI_Model
{
    private function uploadImageReg()
    {
        $config['upload_path'] 			= './assets/img/profil/';
		$config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5120;
        $config['max_width']            = '4480';
        $config['max_height']           = '4480';
        $config['file_name']            = 'image'. time();

        $this->upload->initialize($config);

        if (!empty('image'.time())) {
            if ($this->upload->do_upload('image')) {
                return $this->upload->data('file_name');
            }
            else {
                print_r($this->upload->display_errors());
            }
        }
        else {
            echo "Gambar gagal di upload, silahkan ulangi";
        }
    }

    public function aksi_login()
    {
        $usernama = $this->input->post('username');
        $pass = $this->input->post('password');

        // Nyari Level (usernya)
        $user = $this->db->get_where('user', ['username' => $usernama])->row_array();

        if ($user) {
            // kalo passwordnya bener
            if (password_verify($pass, $user['password']))
            {
                $data = [
                    'username' => $user['username'],
                    'level' => $user['level'],
                ];
                $this->session->set_userdata($data);

                // nentuin usernya masuk kemana sesuai level
                if ($user['level'] == "admin") {
                    redirect('admin/homeadmin');
                }
                elseif ($user['level'] == "petugas") {
                    redirect('petugas/homepetugas');
                }
                else {
                    redirect('user/homeuser');
                }
            }
            else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="danger">Kata Sandi yang anda masukkan salah</div>');
                redirect('c_login/login');
            }

            }
            else {
                // ini kalau akunnya belum terdaftar
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="danger">Username anda belum terdaftar</div>');
                redirect('c_login/login');
        }
    }

    public function register_mas()
    {
        $data['title'] = 'Pendaftaran - Pengguna';

        $this->form_validation->set_rules('Nik','Nik','required|trim|min_length[16]|max_length[17]',
        [
            'required' => 'Mohon Masukkan NIK',
            'min_length' => 'Nomor NIK tidak boleh kurang dari 16 angka',
            'max_length' => 'Nomor NIK tidak boleh dari 17 angka'
        ]);

        $this->form_validation->set_rules('Nama','Nama','required|trim|min_length[3]', 
        [
            'required' => 'Mohon masukkan Nama yang anda inginkan',
            'min_length' => 'test'
        ]);

        $this->form_validation->set_rules('Username','Username','required|trim|is_unique[masyarakat.username]', 
        [
            'required' => 'Mohon masukkan username yang anda inginkan',
            'is_unique' => 'Username ini sudah terdaftar'
        ]);

        $this->form_validation->set_rules('Password','Password','required|trim|min_length[3]', 
        [
            'required' => 'Mohon masukkan password yang anda inginkan',
            'min_length' => 'Kata sandi mu terlalu pendek'
        ]);

        $this->form_validation->set_rules('No_telp','No_telp','required|trim|min_length[9]|max_length[13]',
        [
            'required' => 'Mohon masukkan Nomor Telepon',
            'min_length' => 'Nomor anda terlalu pendek SILAHKAN ketik ulang'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('register', $data);
        }
        else {
            $data = array(
                'nik' => $this->input->post('Nik'),
                'nama' => htmlspecialchars($this->input->post('Nama', true)),
                'username' => htmlspecialchars($this->input->post('Username', true)),
                'password' => password_hash($this->input->post('Password'), PASSWORD_DEFAULT),
                'no_telp' => $this->input->post('No_telp'),
                'image' => $this->uploadImageReg(),
            );

            
            $this->db->insert('masyarakat', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun anda berhasil di tambahkan silahkan</div>');
            redirect('c_login/aksi_login2');
        }
    }

    public function aksi_logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');

        $this->session->set_flashdata('message', '<div class="alert alert-success  alert-dismissible fade show" role="alert"> Kamu berhasil keluar!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('c_beranda/');
    }
}