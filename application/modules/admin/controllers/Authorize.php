<?php

class Authorize extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	
	/**
	* Authencating User
	*
	*/
	public function index(){
		try{
		    $data = array();
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$this->load->model('authorize_model');
			$response = $this->authorize_model->authenticate($username, $password);
			
			if($response){
				// Update Login Time
				$data['last_logged'] = date('Y-m-d H:i:s');
				$this->authorize_model->updateLastLogin($response['user_id'], $data);
				
				// Start Session
				$sessionData = array(
					'user_id' => $response['user_id'],
					'username' => $response['username'],
					'loggedin' => TRUE
				);

				$this->session->set_userdata($sessionData);
				redirect('admin/dashboard');
			}else{
				$this->session->set_flashdata('loginerror','Invalid Credentials!');
				redirect('admin/welcome');
			}
		}catch(\Exception $e){
			log_message('error', $e->getMessage());
		}
	}
	
	/**
     * Logout Session
     */
    public function logout(){
        try{
            $this->session->unset_userdata($sessionData);
            session_destroy();
            redirect('admin/welcome');
        }catch(\Exception $e){
            log_message('error', $e->getMessage());
        }
    }
}