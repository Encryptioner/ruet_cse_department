<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$session_id=$this->session->userdata('user_id');
        $sessions=$this->session->userdata('admin_id');
		if($session_id){
			redirect('afterlogin');
			}
		if($sessions){
			redirect('csv_import');
			}
		$this->load->model('welcome_model');
	}
	
	public function index()
	{
		$this->load->view('login');
	}
	
	function sign_up(){
	$sdata=array();
	$user_id=$this->input->post('user_id');
	$password=$this->input->post('password');
	$id=$this->welcome_model->verify_user($user_id,$password);
	if(!empty($id)){
		if($id->user_id == 1){
		$adata['admin_id'] = $id->id;
		$adata['admin_name'] = $id->user_id;
		//echo "<pre>";print_r($adata);exit();
		$this->session->set_userdata($adata);
		redirect('Csv_import');			
		}
		else{
		$sdata['user_id'] = $id->id;
		$sdata['user_name'] = $id->user_id;
		//echo "<pre>";print_r($sdata);exit();
		$this->session->set_userdata($sdata);
		redirect('Afterlogin');
		//$this->load->view('masterprofile');
		}
	}	
	else{
		$sdata['error_msg'] = "Invalid Username or password";
		$this->session->set_userdata($sdata);
		redirect('welcome');
	}
}


	}

	