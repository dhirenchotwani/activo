<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Login_model");
		$this->load->library("encryption");
		$this->load->helper("form");
		  $this->load->helper('url_helper');
		  $this->load->library("session");
	}
	
	public function show(){
		 	//add profile views if you want to show differnt profile views for different user roles
			 $this->showProfile();
		 }
	
	public function showProfile(){
		//set $data varibale here for page name and title
		//load header and footer and sidebars
		
		//load view to show profile of the user
		
	}
	}
}
?>