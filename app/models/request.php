<?php
class Request{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
    public function addRequest($data,$today){
        $this->db->query('INSERT INTO new_item_requests (requested_by, requested_date,filename, item_name, notes_or_details,type) VALUES(:collection_center, :today, :file_name,:item_name,:notes,:type)');
        // Bind values
        $s=".jpg";
        $this->db->bind(':collection_center', $_SESSION['user_id']);
        $this->db->bind(':today', $today);
        $this->db->bind(':file_name', $data['filename']);
        $this->db->bind(':item_name', $data['productName']);
        $this->db->bind(':notes', $data['description']);
        $this->db->bind(':type',$data['type']);
        //$this->db->bind(':date',$data['date']);
        // Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
    }
    public function getPendingRequests(){
        $this->db->query('SELECT *
        FROM new_item_requests where  new_item_requests.requested_by=:center_id and new_item_requests.status=:status');
       
        $this->db->bind(':center_id', $_SESSION['user_id']);
        $this->db->bind(':status', 'NEW');
        $results = $this->db->resultSet();
  
        return $results;
    }

  

}

?>