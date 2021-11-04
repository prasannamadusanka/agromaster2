<?php
  class Products {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getProducts($id){
      $this->db->query('SELECT collection_center_stock.collection_center_id,collection_center_stock.product_id as id,collection_center_stock.quantity as stock,
      products.name as name,products.type,products.description,products.maximum_buying_rate,products.selling_rate 
      FROM collection_center_stock INNER JOIN products ON  collection_center_stock.product_id=products.product_id where  collection_center_stock.collection_center_id=:id');
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
        $this->db->query('INSERT INTO non_listed_boughts (farmer_NIC, product_id, quantity,rate) VALUES(:farmer, :product_name, :quantity,:rate)');
        // Bind values
        $this->db->bind(':farmer', $data['farmer']);
        $this->db->bind(':product_name', $data['name']);
        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':rate', $data['rate']);
      
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
    public function assignordermore($id){
      $this->db->query('SELECT orders.order_id as id, outlets.outlet_name as outlet_name, products.name as product_name,order_description.ordered_quantity as oredered_quantity,
      orders.ordered_date as ordered_date, orders.assigned_date as assigned_date, orders.driver as driver, orders.delivery_date as delivery_date,order_description.assigned_quantity as assigned_quantity FROM orders INNER JOIN order_description ON  orders.order_id=order_description.order_id  INNER JOIN outlets ON  orders.outlet_id=outlets.outlet_id 
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