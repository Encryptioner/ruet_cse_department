<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Afterlogin_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function reg_info(){
		$this->db->select('registration.*');
		$this->db->where('registration.std_id',$this->session->userdata('user_name'));
		$query=$this->db->get('registration')->result();
		return $query;
	}

	function insert_slip(){
		$reg = $_POST['reg'];
		//print_r($reg);exit();
		$query=$this->db->set($reg);
		$query=$this->db->insert('registration');
		return $query;
	}

	function update_slip($sem_no){
		$reg = $_POST['reg'];
		$query=$this->db->set($reg);
		$this->db->where('registration.std_id',$this->session->userdata('user_name'));
		$this->db->where('registration.sem_no',$sem_no);
		$query=$this->db->update('registration');
		return $query;
	}

	function last_sem(){
		$this->db->select('registration.*');
		$this->db->where('registration.std_id',$this->session->userdata('user_name'));
		$this->db->order_by('sem_no','DESC');
		$this->db->limit(1);
		$query=$this->db->get('registration')->row();
		return $query;
	}

	function resulting1(){
		$this->db->select('semester1.*');

		$this->db->where('semester1.user_id',$this->session->userdata('user_name'));
		$query=$this->db->get('semester1')->row();
		return $query;
	}
	function resulting2(){
		$this->db->select('semester2.*');

		$this->db->where('semester2.user_id',$this->session->userdata('user_name'));
		$query=$this->db->get('semester2')->row();
		return $query;
	}
	function resulting3(){
		$this->db->select('semester3.*');

		$this->db->where('semester3.user_id',$this->session->userdata('user_name'));
		$query=$this->db->get('semester3')->row();
		return $query;
	}
	function resulting4(){
		$this->db->select('semester4.*');

		$this->db->where('semester4.user_id',$this->session->userdata('user_name'));
		$query=$this->db->get('semester4')->row();
		return $query;
	}
	function resulting5(){
		$this->db->select('semester5.*');

		$this->db->where('semester5.user_id',$this->session->userdata('user_name'));
		$query=$this->db->get('semester5')->row();
		return $query;
	}
	function resulting6(){
		$this->db->select('semester6.*');

		$this->db->where('semester6.user_id',$this->session->userdata('user_name'));
		$query=$this->db->get('semester6')->row();
		return $query;
	}
	function resulting7(){
		$this->db->select('semester7.*');

		$this->db->where('semester7.user_id',$this->session->userdata('user_name'));
		$query=$this->db->get('semester7')->row();
		return $query;
	}
	function resulting8(){
		$this->db->select('semester8.*');

		$this->db->where('semester8.user_id',$this->session->userdata('user_name'));
		$query=$this->db->get('semester8')->row();
		return $query;
	}
	
}
	
?>