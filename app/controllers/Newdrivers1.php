<?php
    class Newdrivers1 extends Controller {
      public function __construct(){
        $this->newdriver1Model = $this->model('Newdriver1');
      }



      public function Newdriverreq(){
      //Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        //If method id form; then process the form
          //die('Values submitted')
        //Initialize data below
          $data =[
            'name' => trim($_POST['name']),
            'age' => trim($_POST['age']),
            'address' => trim($_POST['address']),
            'contact_number' => trim($_POST['contact_number']),
            'email' => trim($_POST['email']),
            'initial_username' => trim($_POST['initial_username']),
            'initial_password' => trim($_POST['initial_password']),
            'name_err' =>'',
            'age_err' => '',
            'address_err' => '',
            'contact_number_err' => '',
            'email_err' => '',
            'initial_username_err' => '',
            'initial_password_err' => ''
            
         
          ];

        //Validations
          if(empty($data['name'])){
            $data['name_err'] = 'Please enter a name';

          }


          if($this->newdriver1Model->addDriver($data)){
            redirect('intermediateoperatorpages/newdrivers');
          } else {
           flash('insertion_success', 'New driver request added');
          }
        } else {
          // Init data
          $data =[    
            'name' =>'',
            'age' => '',
            'address' => '',
            'contact_number' => '',
            'email_err' => '',
            'initial_username' => '',
            'initial_password' => '',
            'name_err' =>'',
            'age_err' => '',
            'address_err' => '',
            'contact_number_err' => '',
            'email_err' => '',
            'initial_username_err' => '',
            'initial_password_err' => ''   
          ];
  
          // Load view
          $this->view('intermediateoperatorpages/newdrivers', $data);
        }
      }
    }
    
    
