<?php 
	$this->load->view('teachers/layouts/header');
	if($main_content != '') $this->load->view($main_content);
	$this->load->view('teachers/layouts/footer');
 ?>