<?php

Class m_user extends CI_Model{
    
    public function simpan()
    {
        $data = [
            // 'nik' => 
            'isi_laporan' => $this->input->post('Isi'),
            // 'foto'
        ];
    }
}
?>