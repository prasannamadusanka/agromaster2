<?php
    class Additems extends Controller {
      public function __construct(){
        //$this->colcen1Model = $this->model('Colcen1');
        $this->additemModel = $this->model('Additem');
      }



      public function addNewItem($id){
      //Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           //If method id form; then process the form
           //die('Values submitted')
           //Initialize data below
          $data =[
            'request_id' => trim($_POST['request_id']),
            'request_id_err' => ''
          ];

           //Validations
          if(empty($data['request_id'])){
            $data['request_id_err'] = 'Please select value';

          }

          if(empty($data['request_id_err'])){
           //Validated
           //die('SUCCESS');
          }

          if($this->additemModel->insertRequest($data)) {
            //$this->additemModel->insertTheProduct($data);
            redirect('financialoperatorpages/newitems');
          }
        } else {
            $data = [
              'request_id' => $id
            ];
            if($this->additemModel->insertRequest($data)) {
              redirect('financialoperatorpages/newitems');
            }
        }
      }

      public function delNewItem($id){
        //Check for POST
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
             //If method id form; then process the form
             //die('Values submitted')
             //Initialize data below
            $data =[
              'request_id' => trim($_POST['request_id']),
              'request_id_err' => ''
            ];
  
             //Validations
            if(empty($data['request_id'])){
              $data['request_id_err'] = 'Please select value';
  
            }
  
            if(empty($data['request_id_err'])){
             //Validated
             //die('SUCCESS');
            }
  
            if($this->additemModel->deleteRequest($data)) {
              //$this->additemModel->insertTheProduct($data);
              redirect('financialoperatorpages/newitems');
            }
          } else {
            $data = [
              'request_id' => $id
            ];
            if($this->additemModel->deleteRequest($data)) {
              redirect('financialoperatorpages/newitems');
            }
        }
        }
    }
    
     
