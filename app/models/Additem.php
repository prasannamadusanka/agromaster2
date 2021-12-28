<?php
  class Additem { 

    private $db;

    public function __construct(){
      $this->db = new Database;
    }
      /*get all products; so no id needed*//*$id*/
    public function insertRequest($data){
      $this->db->query('INSERT INTO products (name, description, images) SELECT new_item_requests.item_name, new_item_requests.notes_or_details, new_item_requests.filename FROM new_item_requests WHERE request_id =:request_id');
      $this->db->bind(':request_id',$data['request_id']);
       
      
      // Execute
      if($this->db->execute()){
        $this->db->query('UPDATE new_item_requests SET status="Accepted", accepted_date=CURRENT_TIMESTAMP  WHERE new_item_requests.request_id =:request_id');
        $this->db->bind(':request_id',$data['request_id']);
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      } else {
        return false;
      }

    }

    public function deleteRequest($data){
      $this->db->query('UPDATE new_item_requests SET status="Rejected", accepted_date=CURRENT_TIMESTAMP  WHERE new_item_requests.request_id =:request_id');
      $this->db->bind(':request_id',$data['request_id']);
      
      //Execute
      if($this->db->execute()){
          return true;
        } else {
          return false;
        }

    }

    
  }
