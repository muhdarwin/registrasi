<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mregistrasi extends CI_Model {

  function daftarLayanan($coderole = null){
      $this->db->select('id, nama');
      $this->db->order_by('nama');
      $query=$this->db->get('mslayanan');

      $result = array();
      foreach($query->result_array() as $row) {
        $result[$row['id']] = $row['nama'];
      }
      return $result;
  }

	public function login($user, $pass) {
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $user);
		$this->db->where('password', md5($pass));

		$data = $this->db->get();

		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
	}

  function simpanRegistrasi($data){
      $query = $this->db->insert('registrasi', $data);
      $insert_id = $this->db->insert_id();

      if($query){
          return true;
      }else{
          return false;
      }
  }

}
