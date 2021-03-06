
<?php

class Model_pasien extends CI_Model {

	public function get_pasien(){
        $this->db->select('*');
        $this->db->from('tb_pasien');
		$this->db->join('tb_user', 'tb_pasien.id_user=tb_user.id_user');

        return $this->db->get();
    }

	public function get_pasien_byid($id_pasien){
        $this->db->select('*');
        $this->db->from('tb_pasien');
		$this->db->join('tb_user', 'tb_pasien.id_user=tb_user.id_user');
		$this->db->where('tb_pasien.id_pasien', $id_pasien);

        return $this->db->get();
    }

	public function get_pasien_byiduser($id_user){
        $this->db->select('*');
        $this->db->from('tb_pasien');
		$this->db->join('tb_user', 'tb_pasien.id_user=tb_user.id_user');
		$this->db->where('tb_user.id_user', $id_user);

        return $this->db->get();
    }


	public function get_iduser_byidpasien($id){
        $this->db->select('tb_user.id_user');
        $this->db->from('tb_pasien');
		$this->db->join('tb_user', 'tb_pasien.id_user=tb_user.id_user');
		$this->db->where('tb_pasien.id_pasien', $id);

        return $this->db->get();
    }

	public function get_idpasien_byiduser($id){
        $this->db->select('*');
        $this->db->from('tb_pasien');
		$this->db->join('tb_user', 'tb_pasien.id_user=tb_user.id_user');
		$this->db->where('tb_user.id_user', $id);

        return $this->db->get();
    }

	public function get_asuransi_byiduser($id){
        $this->db->select('tb_pasien.asuransi');
        $this->db->from('tb_pasien');
		$this->db->join('tb_user', 'tb_pasien.id_user=tb_user.id_user');
		$this->db->where('tb_user.id_user', $id);

        return $this->db->get();
    }

	public function get_pasien_bykode($kode_aktivasi){
        $this->db->select('*');
        $this->db->from('tb_pasien');
		$this->db->join('tb_user', 'tb_pasien.id_user=tb_user.id_user');
		$this->db->where('tb_pasien.kode_aktivasi', $kode_aktivasi);

        return $this->db->get();
    }

	public function get_pasien_bykode_reset($kode_reset){
        $this->db->select('*');
        $this->db->from('tb_pasien');
		$this->db->join('tb_user', 'tb_pasien.id_user=tb_user.id_user');
		$this->db->where('tb_user.kode_reset', $kode_reset);

        return $this->db->get();
    }

	public function insert_data($tabel, $data){

        return $this->db->insert($tabel, $data);

    }
}
