<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	function verify_user($user_id,$password){
	$this->db->select('*');
	$this->db->where('password',$password);
	$this->db->where('user_id',$user_id);
	$flag = $this->db->get('login')->row();
	return $flag;
	}
	
}
	
?>