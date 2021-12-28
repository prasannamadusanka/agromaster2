<?php
    class Productsm extends Controller {
      public function __construct(){
        $this->productmModel = $this->model('Productm');
      }



      public function addProducts(){
      //Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        //If method id form; then process the form
          //die('Values submitted')
        //Initialize data below
          $data =[
            'name' => trim($_POST['name']),
            'type' => trim($_POST['type']),
            'description' => trim($_POST['description']),
            'name_err' => '',
            'type_err' => '',
            'description_err' => ''
         
          ];

        //Validations
          if(empty($data['name'])){
            $data['name_err'] = 'Please enter a product name';

          }


          if($this->productmModel->addProducts($data)){
            redirect('financialoperatorpages/productlist');
          } else {
           flash('insertion_success', 'New product added');
          }
        } else {
          // Init data
          $data =[    
            'name' => '',
            'type' => '',
            'description' => '',
            'name_err' => '',
            'type_err' => '',
            'description_err' => '',      
          ];
  
          // Load view
          $this->view('financialoperatorpages/productlist', $data);
        }
      }
    }
    
    
      /*
      public function fomaxrates(){
        $products1 = $this->products1Model->getTheProducts();
          $data = [
            'products1' => $products1
          ];

          $this->view('financial operator/fomaxrates', $data);
        }
        */

        /*
      public function updatemrates($data){
         //Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          //If method id form; then process the form
          die('Values submitted')
          //Initialize data below
          $data =[
            'maximum_buying_rate' => trim($_POST['maximum_buying_rate']),
            'selling_rate' => trim($_POST['selling_rate']),
            'maximum_buying_rate_err' => '',
            'selling_rate_err' => ''
            
          ];

          //Validations
          if(empty($data['maximum_buying_rate'])){
            $data['maximum_buying_rate_err'] = 'Please enter value';

          }

          if(empty($data['selling_rate'])){
            $data['selling_rate_err'] = 'Please enter value';
            
          }

          if(empty($data['maximum_buying_rate_err']) && if(empty($data['selling_rate_err']){
            //Validated
            die('SUCCESS');
          }
        }*/
