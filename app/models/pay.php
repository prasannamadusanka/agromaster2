<?php
  class pay {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    
     public function pay($data){
      $this->db->query('INSERT INTO payment (order_id, amount) VALUES(:order_id,  :amount)');
      // Bind values
      $this->db->bind(':order_id', $data['order_id']);
     
      $this->db->bind(':amount', $data['amount']);
      
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    
    
   
  }