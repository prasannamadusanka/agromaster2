<?php
  class Outlet1 { 

    private $db;

    public function __construct(){
      $this->db = new Database;
    }
      /*get all products; so no id needed*/ /*$id*/
    public function getTheOutlets($id){
      $this->db->query('SELECT outlets.outlet_name FROM outlets');
      $this->db->bind(':id', $id);
      /*No need to bind?*/ 
      

      $results = $this->db->resultSet(); 
      //resultSet() is a function in Database.php to get results for the values (query and bindings) of Current object's db variable.

      return $results;
    }

   
  }
