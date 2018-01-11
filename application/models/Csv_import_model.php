<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csv_import_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	

    public function search_data(){
    	$series = $this->session->userdata('series');
    	$semester = $this->session->userdata('semester');
        $this->db->select("registration.*");
        $this->db->where("std_id LIKE '$series%'");
        if (!empty($semester)) {
        	$this->db->where("sem_no", $semester);
        }
        $query = $this->db->get('registration')->result();
        //echo "<pre>"; print_r($query);exit();
        return $query;
    }


	public function confirm($reg_id){
        $this->db->set('registration.status', 1);
        $this->db->where('registration.reg_id',$reg_id);
        $this->db->update('registration');
	}


	public function decline($reg_id){
        $this->db->where('registration.reg_id',$reg_id);
        $this->db->delete('registration');
	}
	

    public function check_csv($data,$semester){
    	$table = 'semester'.$semester;
        $this->db->select("$table.id");
        $this->db->where("$table.user_id", $data['user_id']);
        $query = $this->db->get($table)->row();
        return $query;
    }


	public function add_csv($data,$semester){
		$table = 'semester'.$semester;
		//echo "<pre>";print_r($data);exit();
        $this->db->insert($table, $data);
        $id = $this->db->insert_id();
        return $id;
	}
	
}
	
?>