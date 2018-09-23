<?php
class Login_model extends CI_Model{

    //function to load the database
    //similar to view method of defalut contoller
    public function __construct()
    {
        $this->load->database();
    }
	
	public function getUser($condn,$key){
		$query="select * from users where $condn='$key'";
		return $this->db->query($query);
	}huihiug
}
?>