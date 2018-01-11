<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teachers extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function index(){
		$data = array();
		$data['main_content'] = '';
		$this->load->view('teachers/template',$data);		
	}

	function professors(){
		$data = array();
		$data['main_content'] = 'teachers/professors';
		$this->load->view('teachers/template',$data);
	}

	function assc_prof(){
		$data = array();
		$data['main_content'] = 'teachers/assc_prof';
		$this->load->view('teachers/template',$data);
	}

	function asst_prof(){
		$data = array();
		$data['main_content'] = 'teachers/asst_prof';
		$this->load->view('teachers/template',$data);
	}

	function lecturers(){
		$data = array();
		$data['main_content'] = 'teachers/lecturers';
		$this->load->view('teachers/template',$data);
	}

	function bp(){
		$data = array();
		$data['main_content'] = 'teachers/bp';
		$this->load->view('teachers/template',$data);
	}

	function ba(){
		$data = array();
		$data['main_content'] = 'teachers/ba';
		$this->load->view('teachers/template',$data);
	}

}

	