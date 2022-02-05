<?php
  class Ddriver {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getcc(){
      $this->db->query('SELECT collection_center_name, address, contact_number, collection_center_id FROM collection_center');
  
       $results = $this->db->resultSet();

      return $results;
    }

    
    public function orderforreturnentry($orderid){
      $this->db->query('SELECT item_id,ordered_quantity FROM order_description WHERE order_id=:orderid');

      $this->db->bind(':orderid',$orderid);
  
      $results = $this->db->resultSet();

      return $results;
    }

    public function odrlist(){
      $this->db->query('SELECT orders.order_id as id,c.collection_center_name as ccn,c.address as cca,c.contact_number as ccc,o.name as oun,o.address as oua,o.con_number as ouc
                        FROM orders
                        INNER JOIN collection_center AS c 
                        ON orders.collection_center_id=c.collection_center_id
                        INNER JOIN outlets AS o 
                        ON orders.outlet_id=o.outlet_id
                        WHERE orders.driver=:driverid'
                        );

      $this->db->bind(':driverid',$_SESSION['user_id'] );
  
      $results = $this->db->resultSet();

      return $results;
    }

   
    public function orderdisplay($orderid){
      $this->db->query('SELECT order_description.item_id as item,order_description.ordered_quantity as qty,order_description.order_date as od,orders.delivery_date as dd
                        FROM order_description 
                        INNER JOIN orders
                        ON order_description.order_id=orders.order_id
                        WHERE order_description.order_id=:orderid'
                        );

      $this->db->bind(':orderid',$orderid);

      $results = $this->db->resultSet();
      
      return $results;
    }

    public function deliverydate($orderid){
      $this->db->query('SELECT delivery_date
                        FROM orders
                        WHERE order_id=:orderid');

      $this->db->bind(':orderid',$orderid);

      $row = $this->db->single();

      return $row;
    }

    public function setavilability($current_day){
      $this->db->query('INSERT INTO availability (date,12AM_03AM,03AM_06AM,06AM_09AM,09AM_12PM,12PM_03PM,03PM_06PM,06PM_09PM,09PM_12AM) VALUES (:day,)');

      $this->db->bind(':day',$current_day);

      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    

  }
