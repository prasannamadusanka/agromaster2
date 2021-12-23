<?php

class Neccesity{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function addNeccesityOrder($today,$data){
      $this->db->query('INSERT INTO neccesity (collection_center_id, product_id, quantity, ordered_date, status) VALUES(:collection_center_id, :product_id, :quantity,:ordered_date,:status)');
      // Bind values
      $this->db->bind(':collection_center_id', $_SESSION['user_id']);
      $this->db->bind(':product_id', $data['product_id']);
      $this->db->bind(':quantity', $data['quantity']);
      $this->db->bind(':ordered_date', $today);
      $this->db->bind(':status','pending');
      //$this->db->bind(':invoice_status','pending');
      //$this->db->bind(':date',$data['date']);
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
      }

      public function neccesityDetails(){
        $this->db->query('SELECT neccesity.neccesity_id as id, neccesity.ordered_date as ordered_date, neccesity.quantity  as quantity, neccesity.status as status,
        neccesity.assigned_quantity as assigned_quantity, products.name as product_name, neccesity.assigned_date as assigned_date
        FROM neccesity INNER JOIN products ON  neccesity.product_id=products.product_id where  neccesity.collection_center_id=:center_id and neccesity.status=:status');
       
        $this->db->bind(':center_id', $_SESSION['user_id']);
        $this->db->bind(':status', 'assigned');
        $results = $this->db->resultSet();
  
        return $results;
      }

      public function pendingNeccesityDetails(){
        $this->db->query('SELECT neccesity.neccesity_id as id, neccesity.ordered_date as ordered_date, neccesity.quantity  as quantity, neccesity.status as status,
        neccesity.assigned_quantity as assigned_quantity, products.name as product_name, neccesity.assigned_date as assigned_date
        FROM neccesity INNER JOIN products ON  neccesity.product_id=products.product_id where  neccesity.collection_center_id=:center_id and neccesity.status=:status');
       
        $this->db->bind(':center_id', $_SESSION['user_id']);
        $this->db->bind(':status', 'pending');
        $results = $this->db->resultSet();
  
        return $results;
      }

}

?>