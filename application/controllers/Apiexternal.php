<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apiexternal extends CI_Controller {
	
	function __construct(){
		parent::__construct();
        $this->load->helper(array('form', 'url', 'date'));
		$this->load->library(array('session', 'email', 'encrypt'));
		$this->load->model(array('plisting', 'manage', 'notification'));
		// $this->output->cache(0.5);
		$this->output->delete_cache();
        $this->config->load('emailc');
		$data = array();
		$data_add = array();
	}
		
	public function register()
	{
	    $data = array();
		$result = array();
		$data1 = array();

		$encryption_key = $this->config->item('encryption_key');
		
		$data['user_access_domain_type'] = $this->input->post('domain_type');
		$data['user_access_domain_name'] = $this->input->post('domain_name');
					
		$action = $this->input->post('action');
		$data['usern'] = $this->input->post('email');
		$data['upasswd'] = openssl_encrypt($this->input->post('password'),"AES-128-ECB",$encryption_key);
		$data['ufname'] = $this->input->post('first_name');
		$data['ulname'] = $this->input->post('last_name');
		$data['verification'] = $this->input->post('verification');
        
        $random_hash = substr(md5(uniqid(rand(), true)), 16, 16);
		$data['hash'] = $random_hash;
				
		if($action == 'signup'){
			$result = $this->manage->add_ext_user($data, $user_type);
		}
		log_message("info","result from database".json_encode($result));
		if(!empty($result) && is_array($result) && sizeof($result) <> 0){
			
			$data1['status'] = 200;
			$data1['message'] = "Successfully Registered.";
			
		}
		elseif(json_encode($result) == "false"){
			$data1['status'] = 409;
			$data1['message'] = "User Already Exists.";
		}
        else{
			$data1['status'] = 1064;
            $data1['message'] = "Could not add data into database";
        }
		echo json_encode($data1);
	}

	public function login()
	{
		$data = array();
		$result = array();
		
		$data['page'] = 'login';
		
		$encryption_key = $this->config->item('encryption_key');
		
		$action = $this->input->post('action');
		$data['user_name'] = $this->input->post('user_name');
		$data['user_password'] = openssl_encrypt($this->input->post('user_password'),"AES-128-ECB",$encryption_key);
				
		
		$data['user_access_domain_type'] = $this->input->post('domain_type');
		$data['user_access_domain_name'] = $this->input->post('domain_name');
		
		if($action == 'login'){
			$result = $this->manage->fetch_extuser($data);
		}
		
		if(!empty($result) && is_array($result) && sizeof($result) <> 0){
			foreach($result['user_detail'] as $user){
				if($result['error'] == 0 && $user->tfu_admin_blocked == 0){
					$data1['status'] = 200;
					$data1['message'] = "Successfully Logged In.";
				}
				
				if($result['error'] == 0 && $user->tfu_admin_blocked == 1){
					
					$data1['status'] = 400;
					$data1['message'] = "User account blocked by admin. Please contact us at contact@tradefinex.org.";
					
				}
				
				if($result['error'] == 1){
					$data1['status'] = 404;
					$data1['message'] = "Username/Password Not Valid ! Try again.";
				}
			}
				
		}
		else{
			$data1['status'] = 502;
			$data1['message'] = "No Data Found.";
		}
		echo json_encode($data1);
	}
    
}