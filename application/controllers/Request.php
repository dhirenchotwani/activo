<?php
class Request extends CI_Controller{
   public function __construct(){
      parent::__construct();
      $this->load->model("Request_Model");
      $this->load->model();
      $this->helper('url_helper');
   }
   
   public function create(){
      //This is the function to generate the UI
   }
   
	public function loadPage(){
		$data['title']="Request Item | Activo";
		$data['page']="Request";
		if($this->session->userdata('user_role_id')==4 || $this->session->userdata('user_role_id')==5)
			$user_details=$this->Request_model->getUserDetails("student",$this->session->userdata('user_id'));
		else
			$user_details=$this->Request_model->getUserDetails("staff",$this->session->userdata('user_id'));
			
		$data['user_details']=$user_details->row_array();
		
		$this->load->view("VIEW KA NAAM DAAL",$data);
		
	}
	
	public function addRequest(){
		if(isset($_POST['addRequest'])){
			
		}
	}
   //This is the function to populate all the items 
   public function show_all_requested_items(){
      $string = $_POST["search"]["value"];
      if(isset($string)){
      $result =   $this->request_model->get_all_request_items_search($string);
           
     }
      else{
         if(isset($_POST["order"])){
            if($_POST["limit"]!=-1){
               $result = $this->request_model->get_all_request_with_limit($_POST["start"],$_POST["limit"],$_POST["order"]["0"]["column"],$_POST["order"]["0"]["dir"]);
               
            }
            else{
             $result = $this->request_model->get_all_request_items();
               
            }
         }
         
      }
      
      
      while($row = $result->row_array()){
         $sub_array = array();
         $sub_array[] = $row[""];
         $sub_array[] = $row[""];
         $sub_array[] = $row[""];
         $sub_array[] = $row[""];
         $sub_array[] = $row[""];
         $sub_array[] = $row[""];
         
         $data[] = $sub_array;
      }
      $output = array(
      "draw"=>intval($_POST["draw"]),
      "recordsTotal"=> $this->request_model->get_total_number(),
      "recordsFiltered" => $result->num_rows,
      "data"=>data,   
      );
      
      echo json_encode($output);
   }
}
?>