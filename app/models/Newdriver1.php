<?php
  class Newdriver1 { 

    private $db;

    public function __construct(){
      $this->db = new Database;
    }
 
   
    public function addDriver($data){
 //Bind values
 
      $this->db->query('INSERT INTO drivers (name, age, address, contact_number, email, initial_username, initial_password) VALUES (:name, :age, :address, :contact_number, :email, :initial_username, :initial_password)');
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':age', $data['age']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':contact_number', $data['contact_number']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':initial_username', $data['initial_username']);
      $this->db->bind(':initial_password', $data['initial_password']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  
  }
