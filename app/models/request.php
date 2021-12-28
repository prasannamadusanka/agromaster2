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
    public function getExpenseReport(){
      $this->db->query('SELECT *
      FROM expenses where  expenses.collection_center_id=:center_id ');
     
      $this->db->bind(':center_id', $_SESSION['user_id']);
      $results = $this->db->resultSet();

      return $results;
  }
  public function addExpenseReport($data,$today){
    $this->db->query('INSERT INTO expenses (collection_center_id,year,month, description, total_value,initiated_date) VALUES(:collection_center, :year, :month,:description,:total,:date)');
    // Bind values
    $s=".jpg";
    $this->db->bind(':collection_center', $_SESSION['user_id']);
    $this->db->bind(':month', $data['month']);
    $this->db->bind(':year', $data['year']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':total', $data['total']);
    $this->db->bind(':date', $today);
    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
}
  public function getUserId(){
    return $_SESSION['user_id'];
  }

  

}

?>
