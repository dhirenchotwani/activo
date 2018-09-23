<?php
   class Request_Model extends CI_Model{
      
      public function __construct(){
         $this->load->database();
      }
      
      //function to get all the values from the db
      
      public function get_all_request_items(){
         $query = "SELECT * FROM request INNER JOIN request_item ON request.request_id = request_item.request_id INNER JOIN users ON request.user_id = users.user_id INNER JOIN item ON request_item.item_id  = item.item_id AND request.is_deleted = 0";
         
         $result = $this->db->query($query);
         return $result;
      }
      
      // to search for queries with given values
      
      public function get_all_request_items_search($string){
         $query = "SELECT * FROM request INNER JOIN request_item ON request.request_id = request_item.request_id INNER JOIN users ON request.user_id = users.user_id INNER JOIN item ON request_item.item_id  = item.item_id HAVING is_deleted = 0 AND user.user_email like '%".$string."%.'";
         $result = $this->db->query($query);
         return $result;
      }
      
      //Function to get total number records
      
      public function get_total_number(){
         $query =  "SELECT * FROM request INNER JOIN request_item ON request.request_id = request_item.request_id INNER JOIN users ON request.user_id = users.user_id INNER JOIN item ON request_item.item_id  = item.item_id AND request.is_deleted = 0";
         $result = $this->db->query($query);
         return $result->nuw_rows;
      }
      
      //Function to get values with limit
      public function get_all_request_with_limit($start,$limit,$order_by=$columns[0],$order="ASC"){
         
         $query = "SELECT * FROM request INNER JOIN request_item ON request.request_id = request_item.request_id INNER JOIN users ON request.user_id = users.user_id INNER JOIN item ON request_item.item_id  = item.item_id AND request.is_deleted = 0 LIMIT ".$start.",".$limit." ORDER BY ".$order_by." ".$order; 
         
         $result = $this->db->query($query);
         return $result;
      }
      //Function to set the status
      public function set_status($request_item_id){
         $query = "UPDATE request_item SET is_fullfilled = 1 WHERE request_item_id = $request_item_id";
         
         $this->db->query($query);
         
         $query = "SELECT * FROM request_item WHERE request_item = $request_item";
         
         $result = $this->db->query($query);
         
         $result = $result->row_array();
         
         set_status_of_request($result["request_id"],$request_item_id);
      }
      
      public function set_status_of_request($request_item_id,$request_id){
         
         $query1 = "SELECT * FROM request_item WHERE request = $request_id ";
         
         $result1 = $this->db->query($query1);
         
         $num = $result1->num_rows
         while($row = $result->row_array()){
               if($row["is_fullfilled"]==1){
                  $num--;
               }   
         }
         
         if($row == 0){
            $query = "UPDATE request SET request_status = 2 WHERE request_id = $request_id";
         }else{
         
         if($num < $result1->num_rows){
            $query = "UPDATE request SET request_status = 1 WHERE request_id = $request_id";
         }
      }
      
      $this->db->query($query);
      }
      

      
   }
?>