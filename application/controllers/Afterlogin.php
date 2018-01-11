<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Afterlogin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$session_id=$this->session->userdata('user_id');
		if($session_id == null){
			redirect('welcome');
			
		}
		$this->load->model('welcome_model');
		$this->load->model('afterlogin_model');
	}

	function index(){
		//print_r($this->session->userdata('user_name'));exit();
		$data=array();
		$data['reg_info'] =  $this->afterlogin_model->reg_info();
		$data['last_sem'] =  $this->afterlogin_model->last_sem();
		//echo "<pre>";print_r($data['reg_info']);exit();
		$data['resulting1'] = $this->afterlogin_model->resulting1();
		$data['resulting2'] = $this->afterlogin_model->resulting2();
		$data['resulting3'] = $this->afterlogin_model->resulting3();
		$data['resulting4'] = $this->afterlogin_model->resulting4();
		$data['resulting5'] = $this->afterlogin_model->resulting5();
		$data['resulting6'] = $this->afterlogin_model->resulting6();
		$data['resulting7'] = $this->afterlogin_model->resulting7();
		$data['resulting8'] = $this->afterlogin_model->resulting8();
		$this->load->view('afterloginmaster',$data);
	}

	function submit_slip(){
		$data['last_sem'] =  $this->afterlogin_model->last_sem();
		if($this->input->post('reg')){
			//echo "ok";exit();
			if( empty($data['last_sem']->reg_id) || $data['last_sem']->status == 1){
				$this->afterlogin_model->insert_slip();
			} else {
				$this->afterlogin_model->update_slip($data['last_sem']->sem_no);
			}
		}
		redirect('afterlogin');
	}

	function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_name');
		redirect('welcome');
	}
	
}
?>