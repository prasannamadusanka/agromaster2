<?php
  class outlet {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Regsiter user
    public function register($data){
      $this->db->query('INSERT INTO outlets (name, address, con_number, email,  manager_name, init_username, init_password) VALUES(:name, :address, :con_number, :email,  :manager_name, :init_username, :init_password)');
      //$this->db->query('INSERT INTO accounts (user_name, email, password, type) VALUES(:name,  :email,  :password , 2)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':con_number', $data['con_number']);
      $this->db->bind(':email', $data['email']);
      // $this->db->bind(':location', $data['location']);
      $this->db->bind(':manager_name', $data['manager_name']);
      $this->db->bind(':init_username', $data['init_username']);
      $this->db->bind(':init_password', $data['init_password']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    // Regsiter user
    public function addo($data){
      $this->db->query('INSERT INTO outlets (outlet_id, name, address, con_number, email,  manager_name, init_username, init_password) VALUES(:outlet_id, :name, :address, :con_number, :email,  :manager_name, :init_username, :init_password)');
      
      // Bind values
      $this->db->bind(':outlet_id', $data['outlet']-> request_id);
      $this->db->bind(':name', $data['outlet']-> center_name);
      $this->db->bind(':address', $data['outlet']-> address);
      $this->db->bind(':con_number', $data['outlet']-> Contact_Number);
      $this->db->bind(':email', $data['outlet']-> email);
      // $this->db->bind(':location', $data['location']);
      $this->db->bind(':manager_name', $data['outlet']-> requester_name);
      $this->db->bind(':init_username', $data['outlet']-> center_name);
      $this->db->bind(':init_password',  $data['password'] = password_hash($data['outlet']-> email, PASSWORD_DEFAULT));

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    //update request table status
    public function updateStatus($data){
      $this->db->query('UPDATE user_request SET status = 1 WHERE request_id = :request_id');

      $this->db->bind(':request_id', $data['outlet']-> request_id);

       // Execute
       if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    //add to accounts table
    public function addAccount($data){
      $this->db->query('INSERT INTO accounts (id, user_name, email, password, type) VALUES(:id, :user_name, :email, :password, :type)');

      $this->db->bind(':id', $data['outlet']-> request_id);
      $this->db->bind(':user_name', $data['outlet']-> center_name);
      $this->db->bind(':email', $data['outlet']-> email);
      $this->db->bind(':password', $data['password'] = password_hash($data['outlet']-> email, PASSWORD_DEFAULT));
      $this->db->bind(':type', '2');

      // $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
      
    }


    // Find user by email
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM outlets WHERE email = :email');
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

    //outlet list
    public function geto(){
      $this->db->query('SELECT name, address, con_number, outlet_id FROM outlets');
  
       $results = $this->db->resultSet();

      return $results;
    }

    //outlet registration request list
    public function getoutletrequest(){
      $this->db->query('SELECT requester_name, request_id FROM user_request WHERE type= :type AND status= :status ');
      
      //bind value
      $this->db->bind(':type','outlet');
      $this->db->bind(':status','0');

      $results = $this->db->resultSet();

      if($this->db->rowCount() > 0){
        return $results;
      }else{
        return 'no requests';
      }

      return $results;
    }

    public function getOutletById($id){
      $this->db->query('SELECT * FROM outlets WHERE outlet_id = :id');
      $this->db->bind(':id',$id);

      $row = $this->db->single();

      return $row;
    }

    public function getOutletByRequestId($request_id){
      $this->db->query('SELECT * FROM user_request WHERE request_id = :request_id');
      $this->db->bind(':request_id',$request_id);

      $row = $this->db->single();

      return $row;
    }
  }