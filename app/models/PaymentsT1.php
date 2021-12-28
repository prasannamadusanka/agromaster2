<?php
  class PaymentsT1 { 

    private $db;

    public function __construct(){
      $this->db = new Database;
    }
      /*get all products; so no id needed*//*$id*/
    

    public function getNotPaidOrders(){
      //Toatal in db;
      $this->db->query('SELECT outlet_payment.order_id, outlet_payment.outlet_id, outlet_payment.payment_status, outlet_payment.toatal_amount_after_delivery FROM outlet_payment WHERE outlet_payment.payment_status IN ("Not Paid","Late","Suspend")');
      
      $results = $this->db->resultSet(); 

      return $results;
    }

    public function getPaidOrders(){
      $this->db->query('SELECT outlet_payment.order_id, outlet_payment.outlet_id, outlet_payment.payment_status, outlet_payment.toatal_amount_after_delivery FROM outlet_payment WHERE outlet_payment.payment_status IN ("Paid")');
      
      $results = $this->db->resultSet(); 

      return $results;
    }

    public function getCompOrders(){
      $this->db->query('SELECT outlet_payment.order_id, outlet_payment.outlet_id, outlet_payment.payment_status, outlet_payment.toatal_amount_after_delivery FROM outlet_payment WHERE outlet_payment.payment_status IN ("Completed")');
      
      $results = $this->db->resultSet(); 

      return $results;
    }

    public function setStateL(){
      /*
      $this->db->query('SELECT outlet_payment.order_id FROM outlet_payment WHERE outlet_payment.payment_status IN ("Not Paid")');
      
      $resultsNP = $this->db->resultSet(); 

      $this->db->query('SELECT outlet_payment.order_id FROM outlet_payment WHERE outlet_payment.payment_status IN ("Late")');

      $resultsLP = $this->db->resultSet(); 

      $this->db->query('SELECT outlet_payment.order_id FROM outlet_payment WHERE outlet_payment.payment_status IN ("Suspend Outlet")');

      $resultsSP = $this->db->resultSet(); 
      */
        $this->db->query('UPDATE outlet_payment INNER JOIN orders ON outlet_payment.order_id = orders.order_id SET outlet_payment.payment_status="Late" WHERE (DATE(CURRENT_TIMESTAMP) - orders.order_date)>31 AND outlet_payment.payment_status="Not Paid"');

        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
    }
    public function setStateS(){
        $this->db->query('UPDATE outlet_payment INNER JOIN orders ON outlet_payment.order_id = orders.order_id SET outlet_payment.payment_status="Suspend" WHERE (DATE(CURRENT_TIMESTAMP) - orders.order_date)>45 AND outlet_payment.payment_status="Late"');

        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
    }

    public function addPaidOrders(){
      $this->db->query('SELECT order_id FROM outlet_payment WHERE outlet_payment.payment_status = "Paid"');
      
      $results = $this->db->resultSet(); 
      
      $total = 100;

      while ($row = $results) {
        $this->db->query('SELECT amount_paid FROM outlet_transactions WHERE outlet_transactions.invoice_no = :row1');
        $this->db->bind(':row1', $row);
        $results1 = $this->db->resultSet(); 
        $total = $total + $results1;
      }

      return $total;
    }

    public function addNewRequests(){
      $this->db->query('SELECT request_id FROM collection_center_requests WHERE collection_center_requests.request_status = "New"');
      
      $results = $this->db->resultSet(); 

      $total = 10;

      while ($row = $results) {
        $this->db->query('SELECT amount_requested FROM collection_center_requests /*WHERE collection_center_requests.request_id = :row1*/');
        $this->db->bind(':row1', $row);
        $results1 = $this->db->resultSet(); 
        $total = $total + $results1;
      }

      return $total;
    }





    
  }
