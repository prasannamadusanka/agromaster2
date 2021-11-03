<?php
require_once "DBController.php";

class Order  extends DBController {	
   
	    
	
	 
	
	function add(){		
		if($this->item_id) {
			$query = $this->conn->prepare("
			INSERT INTO order_description(`item_id`, `ordered_quantity`, `order_date`, `order_id`)
			VALUES(?,?,?,?)");		
			$this->item_id = htmlspecialchars(strip_tags($this->item_id));
			
			$this->quantity = htmlspecialchars(strip_tags($this->ordered_quantity));
			$this->order_date = htmlspecialchars(strip_tags($this->order_date));
			$this->order_id = htmlspecialchars(strip_tags($this->order_id));	
					
			$query->bind_param("iisi", $this->item_id,  $this->ordered_quantity, $this->order_date, $this->order_id );			
			if($query->execute()){
				return true;
			}		
		}
	}
	function make(){		
		if($this->item_id) {
			$query = $this->conn->prepare("
			INSERT INTO orders(`outlet_id`, `collection_center_id`, `order_date`, `order_id`,  `assigned_status`)
			VALUES(?,?,?,?,?)");		
			$this->outlet_id = htmlspecialchars(strip_tags($this->outlet_id));
			$this->collection_center_id = htmlspecialchars(strip_tags($this->collection_center_id));
			$this->order_date = htmlspecialchars(strip_tags($this->order_date));
			$this->order_id = htmlspecialchars(strip_tags($this->order_id));
			$this->assigned_status = htmlspecialchars(strip_tags($this->assigned_status));
			$query->bind_param("iisis", $this->outlet_id, $this->collection_center_id, $this->order_date, $this->order_id, $this->assigned_status);			
			if($query->execute()){
				return true;
			}		
		}
	}
}
?>