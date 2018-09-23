<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Login_model");
		$this->load->library("encryption");
		$this->load->helper("form");
		  $this->load->helper('url_helper');
		  $this->load->library("session");
	}
	
	public function index(){
		$this->load->view("pages/login");
		
	}
	
	public function verify(){
        if(isset($_POST["login"])){
			extract($_POST);
			$user=$this->Login_model->getUser("user_email",$user_email);
			$user=$user->row_array();
			
			if($user){
			if(password_verify($user_password,$user['user_password'])){
				if($user['user_role_id']==1)
					echo "ADMIN WORK HERE";
				else if($user['user_role_id']==4){
					if($user['is_fully_registered']==0){
						$url="../registration/show";
					}
					else
						//if fully registered show the profile of the user depending upon the user
						$url="index.php/dashoboard/show";
				}
				$this->setSession($user);
				
				$signed_in=$this->input->post("stay_signed_in");
				
				if($signed_id){
					$cookie_name="Activo_User";
					$user_id=$user['user_id'];
					$cookie_content=$this->encrytion->encrypt($user_id);
					$cookie_time=time()+ 86400 * 7;
					$cookie_path="/";
					setcookie($cookie_name,$cookie_content,$cookie_time,$cookie_path);
				}
				else{
					$cookie_name="Activo_User";
					$user_id=$user['user_id'];
					$cookie_content=$this->encrytion->encrypt($user_id);
					$cookie_time=time()+ 3600;
					$cookie_path="/";
					setcookie($cookie_name,$cookie_content,$cookie_time,$cookie_path);
				}
			}//end of main if
			else{
				?>
				<script>window.alert("No such user");</script>
				<?php
			}
		}//end of super if
			else{
				?>
				<script>window.alert("no row from DB!");</script>
				<?php
			}
		}
		header("Location: $url");
		
	}//end of verify here!!
	
	private function setSession($user){
		$datas=array(
		'user_id' => $user['user_id'],
		'user_email' => $user['user_email'],
			'user_role_id' => $user['user_role_id']
		);
		$this->session->set_userdata($datas);
	}
}//end of login class here!!

?>