<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Login_model");
		$this->load->library("encryption");
		$this->load->helper("form");
		$this->load->library("session");
	}
	
	public function show(){
		echo $this->session->userdata('user_id');
		echo $this->session->userdata('user_email');
		echo $this->session->userdata('user_role_id');
	}
}
?>