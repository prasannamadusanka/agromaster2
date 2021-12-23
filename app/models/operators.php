<?php
  class operators {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Regsiter user
    public function register($data){
      $this->db->query('INSERT INTO operators (name, address, con_number, email, type, username, password) VALUES(:name, :address, :con_number, :email, :type,  :username, :password)');
      
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':con_number', $data['con_number']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':type', $data['type']);
      $this->db->bind(':username', $data['name']);
      $this->db->bind(':password', $data['password'] = password_hash($data['email'], PASSWORD_DEFAULT));

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Find user by email
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM operators WHERE email = :email');
      // Bind value
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }
  }