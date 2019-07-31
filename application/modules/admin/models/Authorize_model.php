<?php

class Authorize_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	/**
	* This method authenticates User login 
	* @param $username - username
	* @param $password - password
	*
	* @return array | boolean
	*/
	public function authenticate($username, $password){
		try{
			$response = array();

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username', $username);
			$this->db->where('password', md5($password));
			$this->db->where('status', 'active');

			$query = $this->db->get();

			if($query->num_rows() > 0){
				$response = $query->row_array();
			}

			return $response;
		}catch(\Exception $e){
			log_message('error', $e->getMessage());
		}
	}

	/**
	* This method updates User's last login 
	* @param $userId - User Id
	* @param $data - Array
	*
	* @return boolean
	*/
	public function updateLastLogin($userId, $data){
		try{
			$this->db->where('user_id', $userId);
            return $this->db->update('users', $data);
		}catch(\Exception $e){
			log_message('error', $e->getMessage());
		}
	}
}