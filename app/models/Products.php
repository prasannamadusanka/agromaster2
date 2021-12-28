<?php
  class Products {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getProducts($id){
      $this->db->query('SELECT collection_center_stock.collection_center_id,collection_center_stock.product_id as id,collection_center_stock.quantity as stock,
      products.name as name,products.type,products.description,products.maximum_buying_rate,products.selling_rate,products.type as type
      FROM collection_center_stock INNER JOIN products ON  collection_center_stock.product_id=products.product_id where  collection_center_stock.collection_center_id=:id order by collection_center_stock.quantity');
      $this->db->bind(':id', $id);

      $results = $this->db->resultSet();

      return $results;
    }
    public function getProductList(){
        $this->db->query('SELECT * from products');
        
  
        $results = $this->db->resultSet();
  
        return $results;
      }
      public function getproductid($productname){

        $this->db->query('SELECT * from products where name=:productname');
        $this->db->bind(':productname', $productname);
  
        $results = $this->db->resultSet();
  
        return $results;
      }
    public function getFarmerslist(){
        $this->db->query('SELECT * from farmers');
        
  
        $results = $this->db->resultSet();
  
        return $results;
    }
  
    public function getproductname($id){
      $this->db->query('SELECT * FROM products WHERE product_id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }

    public function addBought($data){
        $this->db->query('INSERT INTO non_listed_boughts (farmer_NIC, product_id, quantity,total_value, rate,invoice_status,date) VALUES(:farmer, :product_name, :quantity,:total_value,:rate,:invoice_status,:date)');
        // Bind values
        $this->db->bind(':farmer', $data['farmer']);
        $this->db->bind(':product_name', $data['name']);
        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':rate', $data['rate']);
        $this->db->bind(':total_value', $data['total']);
        $this->db->bind(':invoice_status','pending');
        $this->db->bind(':date',$data['date']);
        // Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
    }
    public function insertInvoiceRecord($nic,$total,$date){
      $this->db->query('INSERT INTO bought_invoice (farmer_id, date,total_amount,payment_status,paid_date) VALUES(:nic, :date, :total,:status,:paid_date)');
      // Bind values
      $this->db->bind(':nic', $nic);
      $this->db->bind(':date', $date);
      $this->db->bind(':total', $total);
      $this->db->bind(':status', 'not paid');
      $this->db->bind(':paid_date','-');
      //$this->db->bind(':invoice_status','pending');
      //$this->db->bind(':date',$data['date']);
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
  }
  
  public function getInvoiceNumber(){
    $this->db->query('SELECT max(invoice_id) as invoice FROM bought_invoice');
    $row = $this->db->single();

    return $row;
  }
  public function updateInvoiceStatus($nic,$invoice){
    $this->db->query('UPDATE non_listed_boughts SET invoice_id =:invoice,invoice_status=:invoiced  WHERE farmer_NIC = :nic and invoice_status=:not_invoiced');
    // Bind values
    $this->db->bind(':nic', $nic);
    $this->db->bind(':invoice', $invoice);
    $this->db->bind(':invoiced','invoiced' );
    $this->db->bind(':not_invoiced','pending');

    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }
  public function changeOrderStatus($id){
    $this->db->query('UPDATE orders SET assigned_status =:rejected  WHERE order_id = :id');
    // Bind values
    $this->db->bind(':id', $id);
    $this->db->bind(':rejected', 'rejected');
    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }
  public function incrementBalance($nic,$total){
    $this->db->query('UPDATE farmers SET balance =balance+:totalup  WHERE NIC = :nic');
    // Bind values
    $this->db->bind(':nic', $nic);
    $this->db->bind(':totalup', $total);

    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }
  public function decrementBalance($nic,$total){
    $this->db->query('UPDATE farmers SET balance =balance-:totaldown  WHERE NIC = :nic');
    // Bind values
    $this->db->bind(':nic', $nic);
    $this->db->bind(':totaldown', $total);

    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }
  public function setInvoiceStatus($invoice_id,$today){
    $this->db->query('UPDATE bought_invoice SET payment_status =:paid,paid_date=:paid_date WHERE invoice_id = :invoice_id ');
    // Bind values
    $this->db->bind(':invoice_id', $invoice_id);
    $this->db->bind(':paid_date', $today);
    $this->db->bind(':paid','paid' );
  

    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }
    public function updateStock($data){
      $this->db->query('UPDATE collection_center_stock SET quantity =quantity + :quantityup  WHERE collection_center_id = :id and product_id=:product_id');
      // Bind values
      $this->db->bind(':quantityup', $data['quantity']);
      $this->db->bind(':id', $_SESSION['user_id']);
      $this->db->bind(':product_id', $data['name']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    public function pendingorders(){
      $this->db->query('SELECT orders.order_id as id, outlets.outlet_name as outlet_name, products.name as product_name,order_description.ordered_quantity as quantity
      FROM orders INNER JOIN order_description ON  orders.order_id=order_description.order_id  INNER JOIN outlets ON  orders.outlet_id=outlets.outlet_id 
      INNER JOIN products ON  order_description.product_id=products.product_id where  orders.assigned_status=:s and orders.collection_center_id=:id group by orders.order_id');
      $this->db->bind(':s','Not_assigned');
      $this->db->bind(':id', $_SESSION['user_id']);
      $results = $this->db->resultSet();

      return $results;
    }
    public function completedorders(){
      $this->db->query('SELECT orders.order_id as id,orders.delivery_date as delivery_date,orders.assigned_date as assigned_date, outlets.outlet_name as outlet_name, products.name as product_name,order_description.ordered_quantity as quantity
      FROM orders INNER JOIN order_description ON  orders.order_id=order_description.order_id  INNER JOIN outlets ON  orders.outlet_id=outlets.outlet_id 
      INNER JOIN products ON  order_description.product_id=products.product_id where  orders.assigned_status=:s and orders.collection_center_id=:id group by orders.order_id');
      $this->db->bind(':s','Assigned');
      $this->db->bind(':id', $_SESSION['user_id']);
      $results = $this->db->resultSet();

      return $results;
    }
    public function deliveredorders(){
      $this->db->query('SELECT orders.order_id as id,orders.driver as driver, orders.delivery_date as delivery_date, outlets.outlet_name as outlet_name, products.name as product_name,order_description.ordered_quantity as quantity
      FROM orders INNER JOIN order_description ON  orders.order_id=order_description.order_id  INNER JOIN outlets ON  orders.outlet_id=outlets.outlet_id 
      INNER JOIN products ON  order_description.product_id=products.product_id where  orders.delivery_status=:s and orders.collection_center_id=:id group by orders.order_id');
      $this->db->bind(':s','assigned');
      $this->db->bind(':id', $_SESSION['user_id']);
      $results = $this->db->resultSet();

      return $results;
    }
    public function assignordermore($id){
      $this->db->query('SELECT orders.order_id as id,orders.delivery_date as delivery_date, outlets.outlet_name as outlet_name, products.name as product_name,order_description.ordered_quantity as oredered_quantity,
      orders.ordered_date as ordered_date, orders.assigned_date as assigned_date, orders.driver as driver, orders.delivery_date as delivery_date,order_description.assigned_quantity as assigned_quantity FROM orders INNER JOIN order_description ON  orders.order_id=order_description.order_id  INNER JOIN outlets ON  orders.outlet_id=outlets.outlet_id 
      INNER JOIN products ON  order_description.product_id=products.product_id where  orders.order_id=:order_id');
      $this->db->bind(':order_id', $id);
      $results = $this->db->resultSet();

      return $results;
    }
    public function nonlistedbroughts($nic){
      $this->db->query('SELECT non_listed_boughts.farmer_NIC as nic, non_listed_boughts.quantity as quantity , non_listed_boughts.rate as rate, non_listed_boughts.total_value as value, non_listed_boughts.date as date, 
      farmers.name as farmers_name,products.name as product_name  from non_listed_boughts INNER JOIN farmers ON  non_listed_boughts.farmer_NIC=farmers.NIC 
      INNER JOIN products ON  non_listed_boughts.product_id=products.product_id where  non_listed_boughts.farmer_NIC=:nic and  non_listed_boughts.invoice_status=:invoice_status order by non_listed_boughts.date asc');
      $this->db->bind(':nic', $nic);
      $this->db->bind(':invoice_status',"pending");
      $results = $this->db->resultSet();

      return $results;
    }
    public function farmerInvoice($nic){
      $this->db->query('SELECT invoice_id, date ,total_amount,payment_status, paid_date from bought_invoice  where  farmer_id=:nic ');
      $this->db->bind(':nic', $nic);
      $results = $this->db->resultSet();

      return $results;
    }
    public function invoice($invoice_id){
      $this->db->query('SELECT bought_invoice.invoice_id as invoice_id, bought_invoice.farmer_id as farmer_id , bought_invoice.date as invoice_date, bought_invoice.total_amount as total, bought_invoice.payment_status as payment_status, 
     bought_invoice.paid_date as paid_date,non_listed_boughts.quantity as quantity,non_listed_boughts.rate as rate,non_listed_boughts.total_value as value,products.name as product_name  from bought_invoice inner JOIN non_listed_boughts ON  bought_invoice.invoice_id=non_listed_boughts.invoice_id 
      INNER JOIN products ON  non_listed_boughts.product_id=products.product_id where  bought_invoice.invoice_id=:invoice_id ');
      $this->db->bind(':invoice_id', $invoice_id);
      $results = $this->db->resultSet();

      return $results;
    }
    public function deliveredordersmore($id){
      $this->db->query('SELECT orders.order_id as id,orders.delivery_date as delivery_date,orders.assigned_date as assigned_date, outlets.outlet_name as outlet_name, products.name as product_name,order_description.ordered_quantity as ordered_quantity,
      orders.ordered_date as ordered_date, orders.assigned_date as assigned_date, orders.driver as driver, orders.delivery_date as delivery_date,order_description.assigned_quantity as assigned_quantity, order_description.rejected_quantity as rejected_quantity FROM orders INNER JOIN order_description ON  orders.order_id=order_description.order_id  INNER JOIN outlets ON  orders.outlet_id=outlets.outlet_id 
      INNER JOIN products ON  order_description.product_id=products.product_id where  orders.order_id=:order_id');
      $this->db->bind(':order_id', $id);
      $results = $this->db->resultSet();

      return $results;
    }
    public function getorder($id){
      $this->db->query('SELECT products.name as product_name,products.product_id as id, order_description.ordered_quantity as quantity, collection_center_stock.quantity as center_stock from order_description inner join products on order_description.product_id = products.product_id inner join collection_center_stock on products.product_id = collection_center_stock.product_id where order_id=:id and 
      collection_center_stock.collection_center_id =:center_id');
      $this->db->bind(':id',$id);
      $this->db->bind(':center_id',$_SESSION['user_id']);
      $results = $this->db->resultSet();

      return $results;
    }
    public function checkstock($product_id){
      $this->db->query('SELECT quantity FROM collection_center_stock WHERE product_id = :product_id and collection_center_id =:collection_center_id');
      $this->db->bind(':product_id',$product_id);
      $this->db->bind(':collection_center_id',$_SESSION['user_id']);

      $row = $this->db->single();

      return $row;
    }
    public function farmers(){
      $this->db->query('SELECT farmers.name as name,farmers.NIC as NIC,farmers.home_address as home_address, farmers.contact_number as contact_number,products.name as product_name,farmers.balance as balance FROM farmers INNER JOIN products ON farmers.MFI1=products.product_id');
     // $this->db->bind(':order_id', $id);
      $results = $this->db->resultSet();

      return $results;
    }

    public function updateorder($product_id,$order_id,$quantity){
      $this->db->query('UPDATE order_description SET assigned_quantity =:quantity  WHERE order_id = :order_id and product_id=:product_id');
      // Bind values
      $this->db->bind(':quantity', $quantity);
      $this->db->bind(':order_id', $order_id);
      $this->db->bind(':product_id', $product_id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    public function updatedeliveryDate($id,$assigned_date,$delivery_date){
      $this->db->query('UPDATE orders SET assigned_date =:assigned_date, delivery_date=:delivery_date,assigned_status=:assigned  WHERE order_id = :order_id');
      // Bind values
      $this->db->bind(':assigned_date', $assigned_date);
      $this->db->bind(':delivery_date', $delivery_date);
      $this->db->bind(':order_id', $id);
      $this->db->bind(':assigned', 'Assigned');

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    public function assigndriver($id,$driver){
      $this->db->query('UPDATE orders SET driver=:driver  ,delivery_status=:assigned WHERE order_id = :order_id');
      // Bind valuees
      $this->db->bind(':driver', $driver);
      $this->db->bind(':order_id', $id);
      $this->db->bind(':assigned',"assigned");


      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  
    public function reduceStock($product_id,$quantity){
      $this->db->query('UPDATE collection_center_stock SET quantity =quantity - :quantitydown  WHERE collection_center_id = :id and product_id=:product_id');
      // Bind values
      $this->db->bind(':quantitydown', $quantity);
      $this->db->bind(':id', $_SESSION['user_id']);
      $this->db->bind(':product_id', $product_id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    

    public function addPost($data){
      $this->db->query('INSERT INTO posts (title, user_id, body) VALUES(:title, :user_id, :body)');
      // Bind values
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':user_id', $data['user_id']);
      $this->db->bind(':body', $data['body']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function updatePost($data){
      $this->db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':body', $data['body']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function getPostById($id){
      $this->db->query('SELECT * FROM posts WHERE id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }

    public function deletePost($id){
      $this->db->query('DELETE FROM posts WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }
