<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi_model extends CI_Model {

	public function cekLogin($username, $password){

		$username = set_value('username');
		$password = set_value('password');
		

		$hasil = $this->db
		->where('username', $username)
		->where('password', md5($password))
		-> limit(1)
		-> get('tbl_user');

		if($hasil->num_rows() > 0){
			return $hasil->row();
			
		} else{
			return FALSE;
		}
	}

	public function getData($table){
		return $this->db->get($table);
	}

	public function getWhere($where, $table){
		return $this->db->get_where($table, $where);
	}

	public function updateData($table, $data, $where){
		$this->db->update($table, $data, $where);
	}

	public function insertData($table, $data){
		$this->db->insert($table, $data);
	}

	public function deleteData($where, $table){
		$this->db->delete($table, $where);
	}

}

/* End of file Donasi_model.php */
/* Location: ./application/models/Donasi_model.php */