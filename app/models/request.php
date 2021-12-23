<?php
class Request{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
    public function addRequest($data,$today){
        $this->db->query('INSERT INTO new_item_requests (requested_by, requested_date,filename, item_name, notes_or_details) VALUES(:collection_center, :today, :file_name,:item_name,:notes)');
        // Bind values
        $this->db->bind(':collection_center', $_SESSION['user_id']);
        $this->db->bind(':today', $today);
        $this->db->bind(':file_name', $data['filename']);
        $this->db->bind(':item_name', $data['productName']);
        $this->db->bind(':notes', $data['description']);
       // $this->db->bind(':invoice_status','pending');
        //$this->db->bind(':date',$data['date']);
        // Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
    }

  

}

?>