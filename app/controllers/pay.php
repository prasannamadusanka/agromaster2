<?php
  class pay extends Controller  {
    public function __construct(){
      $this->userModel = $this->model('pay');
    }

     function pay(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
  
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        $data =[
          'order_id' => trim($_POST['order_id']),
          
          'amount' => trim($_POST['amount'])
          
        ];

        
       
  
        $this->userModel->pay($data);
          // Register User
         

        

       
    }

    
  }}