<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csv_import extends CI_Controller {

    function __construct(){
        parent::__construct();
        $session_id=$this->session->userdata('admin_id');
        if($session_id == null){
            redirect('welcome');
            
        }
        $this->load->model('csv_import_model');
    }

    function index(){
        //print_r($this->session->userdata('user_name'));exit();
        $this->session->unset_userdata('count');
        $data=array();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('admin/layout/footer');
    }

	function approve(){
		//print_r($this->session->userdata('user_name'));exit();
        $this->session->unset_userdata('count');
		$data=array();
        if ($this->input->post('search')) {
            
        $this->session->unset_userdata('series');
        $this->session->unset_userdata('semester');
            $search_sess = $this->input->post('search');
            $this->session->set_userdata($search_sess);
            $data['search_data'] = $this->csv_import_model->search_data();
        }
		$this->load->view('admin/layout/header');
		$this->load->view('admin/approve',$data);
		$this->load->view('admin/layout/footer');
	}

    function confirm($reg_id){
        $this->csv_import_model->confirm($reg_id);
        $data['search_data'] = $this->csv_import_model->search_data();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/approve',$data);
        $this->load->view('admin/layout/footer');
    }

    function decline($reg_id){
        $this->csv_import_model->decline($reg_id);
        $data['search_data'] = $this->csv_import_model->search_data();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/approve',$data);
        $this->load->view('admin/layout/footer');
    }

    function reset_search(){
        $this->session->unset_userdata('series');
        $this->session->unset_userdata('semester');
        //print_r($this->session->userdata('series'));exit();
        redirect('csv_import/approve');
    }

	public function upload_sampledata()
    {   
        $this->session->unset_userdata('count');
        $count = 0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or die(redirect(site_url('csv_import')));
        $semester_no = $this->input->post('semester');
        $this->db->trans_start();
        $csv_line = fgetcsv($fp,1024);
        //echo "<pre>"; print_r($csv_line);exit();
        while($csv_line = fgetcsv($fp,1024)) 
        {        
         
            $insert_csv = array();
            $insert_csv['user_id'] = $csv_line[0];
            $insert_csv['gp'] = $csv_line[1];
            $insert_csv['semester_earn_credit'] = $csv_line[2];
            $insert_csv['gpa'] = $csv_line[3];
            $insert_csv['total_earned_credit'] = $csv_line[4];
            $insert_csv['cgpa'] = $csv_line[5];
            $insert_csv['failed_subject'] = $csv_line[6];
            $insert_csv['x_grade_subject'] = $csv_line[7];
            $insert_csv['s1'] = $csv_line[8];
            $insert_csv['s2'] = $csv_line[9];
            $insert_csv['s3'] = $csv_line[10];
            $insert_csv['s4'] = $csv_line[11];
            $insert_csv['s5'] = $csv_line[12];
            $insert_csv['s6'] = $csv_line[13];
            $insert_csv['s7'] = $csv_line[14];
            $insert_csv['s8'] = $csv_line[15];
            $insert_csv['s9'] = $csv_line[16];
            $insert_csv['s10'] = $csv_line[17];
            $check = $this->csv_import_model->check_csv($insert_csv,$semester_no);
            if(empty($check)){
            	$id = $this->csv_import_model->add_csv($insert_csv,$semester_no);
                $count++;
            }      
        }

        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
        }
        else
        {
            $this->db->trans_commit();
        }
        $sess['count'] = $count . ' rows affected';
        $this->session->set_userdata($sess);
        //echo $this->session->userdata('count');exit();
        redirect(site_url('csv_import/success'));
    }

    public function success(){
        echo "<body style='background:#ddd'>";
        echo "<h1 style='text-align:center;'>" . $this->session->userdata('count') . " rows affected</h1>";
        echo "<p style='text-align:center;'><a href='" . site_url('csv_import') . "'>Reload</a></p>";
        echo "</body>";
    }

    function logout(){
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        redirect('welcome');
    }
	
}
?>