<?php
  class Collectioncenterpages extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }
      $this->productModel = $this->model('Products');
      $this->excessModel = $this->model('excess');
      $this->neccesityModel = $this->model('neccesity');
      $this->requestModel = $this->model('request');
    }
    
    public function home(){
      $products = $this->productModel->getProducts($_SESSION['user_id']);

      $data = [
        'products' => $products,
      ];
     
      $this->view('collection center/home', $data);
    }
   public function addProduct(){
      $productList=$this->productModel->getProductList();
      $farmerList=$this->productModel->getFarmersList();
      
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $data = [
        'n' => $productList,
        'm' => $farmerList,
        'name'=> $_POST['product']
      ];
      $product=$this->productModel->getproductname($data['name']);
      $name1=$product->name;
      $data = [
        'n' => $productList,
        'm' => $farmerList,
        'name'=> $_POST['product'],
        'name1'=> $name1
      ];

      $this->view('collection center/addproduct', $data);
    }

    }
    public function addProductSubmit(){
      $productList=$this->productModel->getProductList();
      $farmerList=$this->productModel->getFarmersList();
     
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $rate= trim($_POST['rate']);
      $quantity= trim($_POST['quantity']);

        $data =[
          'n' => $productList,
          'm' => $farmerList,
          'name'=> trim($_POST['product_name']),
          'quantity' => $quantity,
          'farmer' => trim($_POST['farmer']),
          'rate' => $rate,
          'date' => trim($_POST['date']),
         'total'=> $rate*$quantity,
        ];
       // $total_value=$data['rate']*$data['quantity'];
        $max_rate=$this->productModel->getproductname($data['name']);
        $max_rate_n=$max_rate->maximum_buying_rate;
        $today=date("Y-m-d") ;
        if($max_rate_n<$data['rate']){
         $this->view('collection center/error');
        }
        else if($today!=$data['date']){
          $this->view('collection center/error');
        }
        else {
          $this->productModel->addBought($data);
          $this->productModel->updateStock($data);
          redirect('collectioncenterpages/home');
        }


      }
      else{
        $data =[    
          'n' => $productList,
          'm' => $farmerList,
          'name'=> '',
          'quantity' => '',
          'farmer' =>'',
          'rate' => '',
          'date' => '',
          'total'=>'',
          'quantity_err'=>'',
          'farmer_err'=>'',
          'rate_err'=>'',
        ];

        // Load view
        $this->view('collection center/addproduct', $data);
      }
  }
 public function assigndriver(){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
      $data =[
        'id'=> trim($_POST['order_id']),
        'driver' => trim($_POST['driver']),
       
      ];
      if($data['driver'] == ""){
        redirect('collectioncenterpages/error');
      }
     if($this->productModel->assigndriver($data['id'],$data['driver'])){
      redirect('collectioncenterpages/deliveredorders');
     }


    }
 } 
  public function assignorder(){
      $data =[
        'id'=> $_GET['id'],
        'order' =>'',
        'error'=>''
      ];
      $order=$this->productModel->getorder($data['id']);

      $data =[
        'id'=> $_GET['id'],
        'order' =>$order,
      ];
      $this->view('collection center/order_completion',$data);
  }   

  public function assignment(){
    $id=$_POST['order_id'];
    $delivery_date=$_POST['date'];
    if($delivery_date<=date("Y-m-d")){
      $this->view('collection center/error');
    }
    else{
    foreach ($_POST as $key=>$value):
      if($key!='order_id' || $key!='date'){
   // $stock = $this->productModel->checkstock($key);
  //  $stockn=$stock->quantity
      $this->productModel->updateorder($key,$id,$value);
      $this->productModel->reduceStock($key,$value);
     
     }
     
      
    endforeach;
  if($value=1){
    $assigned_date=date("Y/m/d");
    $this->productModel->updatedeliveryDate($id,$assigned_date,$delivery_date);
    $this->assignedordersmore($id);
  }
}
  }
  public function pendingorders(){
    $result= $this->productModel->pendingorders();

    $data = [
      'result'=>$result
    ];
   
    $this->view('collection center/pending_orders',$data);
  }
  public function completedorders(){
    $result= $this->productModel->completedorders();
    $data = [
      'result'=>$result
    ];
   
    $this->view('collection center/completed_orders',$data);
  }
  public function ordercompletion(){
    $data = [
    ];
   
    $this->view('collection center/order_completion');
  }
   public function deliveredorders(){
    $result= $this->productModel->deliveredorders();
    $data = [
      'result'=>$result
    ];
   
    $this->view('collection center/delivered_orders',$data);
  }
  
  public function deliveredordersmore(){
    $id=$_GET['id'];
    $order=$this->productModel->deliveredordersmore($id);
    $data = [
      'order'=>$order
    ];
   
    $this->view('collection center/delivered_orders_more',$data);
  }
  public function farmers(){
    $results=$this->productModel->farmers();
    $data = [
      'result'=>$results
    ];
   
    $this->view('collection center/farmers',$data);
  }
  public function addfarmers(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Process form

      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // Init data
      $data =[
        'name' => trim($_POST['name']),
        'address'=>trim($_POST['address']),
        'con_number' => trim($_POST['con_number']),
        'name_err' => '',
        'address_err' => '',
        'con_number_err' => '',
      ];

      // Validate Name
      if(empty($data['name'])){
        $data['name_err'] = 'Please enter requester name';
      }
      if(empty($data['con_number'])){
        $data['con_number_err'] = 'please enter contact number';
      }
      if(empty($data['address'])){
        $data['address_err'] = 'plese fill your address';
      }
   
      if(empty($data['name_err']) && empty($data['con_number_err']) && empty($data['address_err'])  ){
        // Validated


        // Register User
        if($this->productModel->addfarmerdata($data)){
          flash('register_success', 'Registered successfully, We will serve for your requeest');
          redirect('collectioncenterpages/addfarmers');
          
        } else {
          die('Something went wrong');
        }

      } else {
        // Load view with errors
        $this->view('collection center/add_farmer', $data);
      }

    } else {
      // Init data
      $data =[
        'name' =>'',
        'con_number' => '',
        'address' => '',
        'name_err' => '',
        'address_err' => '',
        'con_number_err' => '',
      ];

      // Load view
      $this->view('collection center/add_farmer', $data);
    }
  }
  public function nonlistedboughts(){
    $nic=$_GET['NIC'];
    $broughts=$this->productModel->nonlistedbroughts($nic);
    $data = [
      'broughts'=>$broughts
    ];
    if(sizeof($data['broughts'])==0){
      redirect('collectioncenterpages/notpending');
    }
   else { $this->view('collection center/non-listed-boughts',$data);}
   
  }
  public function createinvoice(){
    $nic=$_GET['NIC'];
    $total=$_GET['total'];
    $today=date("Y/m/d");
   $this->productModel->insertInvoiceRecord($nic,$total,$today);
   $invoiceNumberRow= $this->productModel->getInvoiceNumber();
   $this->productModel->incrementBalance($nic,$total);
   $invoiceNumber = $invoiceNumberRow->invoice;
   $this->productModel->updateInvoiceStatus($nic,$invoiceNumber);

  redirect('Collectioncenterpages/farmers');
   
   
 // $this->view('collection center/farmers');
  }
  public function invoice(){
    $invoice_id=$_GET['id'];
    $invoice=$this->productModel->invoice($invoice_id);
    $data = [
      'invoice'=>$invoice
    ];
     $this->view('collection center/invoiceDetails',$data);
   
  }
  public function setInvoiceStatus(){
    $invoice_id=$_GET['invoice_id'];
    $nic=$_GET['farmer_id'];
    $total=$_GET['total'];
    $data = [
      'invoice'=>$invoice_id
    ];
   
    $today=date("Y-m-d");
   $this->productModel->setInvoiceStatus($invoice_id,$today);
   $this->productModel->decrementBalance($nic,$total);
   $invoice = $this->productModel->farmerInvoice($nic);
   $datanew=[
     'farmer_invoice'=>$invoice,
     'nic'=>$nic 
   ];
   $this->view('collection center/payment_management',$datanew);
  }

  public function paymentmanagement(){
    $nic=$_GET['NIC'];
    $invoice = $this->productModel->farmerInvoice($nic);
    $data = [
      'farmer_invoice'=>$invoice,
      'nic'=>$nic
    ];
   
    $this->view('collection center/payment_management',$data);
  }
  public function employeeSalary(){
    $data = [
    ];
   
    $this->view('collection center/employee_salary');
  }
  public function assignedordersmore($id = 202){
    $order=$this->productModel->assignordermore($id);
    $data = [
      'order'=>$order
    ];
   
    $this->view('collection center/assignedordersmore',$data);
  
  }
  public function assignedordersmore1(){
   $id=$_GET['id'];
    $order=$this->productModel->assignordermore($id);
    $data = [
      'order'=>$order
    ];
   
    $this->view('collection center/assignedordersmore',$data);
  

  }
 
  public function addExcess(){
    $products = $this->productModel->getProducts($_SESSION['user_id']);
    $data = [
      'products'=>$products
    ];
   
    $this->view('collection center/add_excess',$data);
  } 

  public function addNewExcess(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
        $data =[
          'quantity'=> trim($_POST['quantity']),
          'product_id' => trim($_POST['product_id']),
         
        ];
       if($data['quantity']==0){
        redirect('collectioncenterpages/addExcess');
       }
       else{
          $today=date("Y/m/d");
          $this->excessModel->addnewexcess($today,$data);
          redirect('collectioncenterpages/pendingExcess');

       }
      }
  }

  public function excessAssignment(){
    
    $result= $this->excessModel->excessDetails();

    $data = [
      'result'=>$result
    ];
   
    $this->view('collection center/excess_assignment',$data);
  }
  public function pendingExcess(){
    $result= $this->excessModel->pendingExcessDetails();
    $data = [
      'result'=>$result
    ];
   
    $this->view('collection center/pending_excess',$data);
  }
  public function orderNeccesity(){
    $products = $this->productModel->getProducts($_SESSION['user_id']);
    $data = [
      'products'=>$products
    ];
   
    $this->view('collection center/order_neccesity',$data);
  }
  public function addNeccesityOrder(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      
        $data =[
          'quantity'=> trim($_POST['quantity']),
          'product_id' => trim($_POST['product_id']),
         
        ];
       if($data['quantity']==0){
        redirect('collectioncenterpages/orderNeccesity');
       }
       else{
          $today=date("Y/m/d");
          $this->neccesityModel->addNeccesityOrder($today,$data);
          redirect('collectioncenterpages/pendingNeccesity');

       }
      }
  }
  public function pendingNeccesity(){
    $result= $this->neccesityModel->pendingNeccesityDetails();
    $data = [
      'result'=>$result
    ];
   
    $this->view('collection center/pending_neccesity',$data);
  }
  public function neccesityAssignment(){
    
    $result= $this->neccesityModel->neccesityDetails();

    $data = [
      'result'=>$result
    ];
   
    $this->view('collection center/neccesity_assignment',$data);
  }
  public function reject(){
    $data = [
    ];
   
    $this->view('collection center/reject');
  }
  public function employee(){
    $data = [
    ];
   
    $this->view('collection center/employee');
  }
  public function error(){
    $data = [
    ];
   
    $this->view('collection center/error');
  }
  public function notpending(){
    $data = [
    ];
   
    $this->view('collection center/notpending');
  }
  public function edit(){
    $data = [
    ];
   
    $this->view('collection center/edit_farmer');
  }
  public function editEmployee(){
    $data = [
    ];
   
    $this->view('collection center/edit_employee');
  }
  public function addemployee(){
    $data = [
    ];
   
    $this->view('collection center/add_employee');
  }
  public function productRequest(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $data = [
      'productName'=>trim($_POST['productName']),
      'description'=>trim($_POST['description']),
      'type'=>trim($_POST['type']),
      'filename' =>$_FILES["uploadfile"]["name"],
      'tempname'=> $_FILES["uploadfile"]["tmp_name"]
    ];
    $today=date("Y/m/d");
    $folder= '../public/img/vegetables/'.$data['filename'];
    move_uploaded_file($data['tempname'],$folder);
    $this->requestModel->addRequest($data,$today);
    redirect('collectioncenterpages/pendingRequest');
  }
   else{
    $this->view('collection center/product_request');
   }
  }

  public function pendingRequest(){
    $result= $this->requestModel->getPendingRequests();
    $data = [
      'result'=>$result
    ];
   
    $this->view('collection center/pending_request',$data);
  }
  }
  ?>