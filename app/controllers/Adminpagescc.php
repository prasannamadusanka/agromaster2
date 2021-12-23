<?php
    class Adminpagescc extends Controller {

        public function __construct(){
            $this->collectioncenterModel = $this->model('collectioncenter');
        }

        //collection centers
         public function ccaddrequest(){
          //get cc request list
          $ccaddrequest = $this->collectioncenterModel->getccrequest();
            $data = [
              'ccaddrequest' => $ccaddrequest
            ];
           
            $this->view('Admin/Admincollectioncenteradingrequest', $data);
        }

        public function cclist(){
          //get collectioncenter list
          $collectioncenters = $this->collectioncenterModel->getcc();
          $data = [
              'collectioncenters' => $collectioncenters
          ];
         
          $this->view('Admin/AdmincollectionCenterList', $data);
      }

        public function ccdetail($id){
          $outlet = $this->collectioncenterModel->getccById($id);
          $data = [
            'outlet' => $outlet
          ];
           
            $this->view('Admin/AdminviewCollectionCenter', $data);
        }
        public function cclocation(){
            $data = [
      
            ];
           
            $this->view('Admin/AdmincollectionCenterLocation', $data);
        }



        public function addcc($request_id){
          $outlet = $this->collectioncenterModel->getccByRequestId($request_id);
          $data = [
            'outlet' => $outlet
          ];

          // Load view
          $this->view('Admin/AdminaddCollectionCenter', $data);
          if($this->collectioncenterModel->addcce($data) && $this->collectioncenterModel->updateStatus($data) && $this->collectioncenterModel->addAccount($data)){
            // flash('adding_success', 'We will serve for your request');
            $to = $data['outlet']->email;
            $subject = 'regarding adding collection center request';
            $message = "you successfully added. <br>Your,<br>";
            $message .= "username: {$data['outlet']->center_name} <br>";
            $message .= "password: {$data['outlet']->email}";
            $headers = 'From: [your_gmail_account_username]@gmail.com' . "\r\n" .
                        'MIME-Version: 1.0' . "\r\n" .
                        'Content-type: text/html; charset=utf-8';
            // $mailResult = mail($to, $subject, $message, $headers);
            // if($mailResult){
            //   echo "Email sent";
            // }else{
            //   echo "Email sending failed";
            // }
            mail($to, $subject, $message, $headers);

            redirect('Adminpagescc/ccaddrequest');        
          }

        }





        // public function addcc(){

        //     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //         // Process form
        //         // Sanitize POST data
        //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        //         // Init data
        //         $data =[
        //           'name' => trim($_POST['name']),
        //           'address' => trim($_POST['address']),
        //           'district' => trim($_POST['district']),
        //           'con_number' => trim($_POST['con_number']),
        //           'email' => trim($_POST['email']),
        //           // 'location' => trim($_POST['location']),
        //           'manager_name' => trim($_POST['manager_name']),
        //           'init_username' => trim($_POST['init_username']),
        //           'init_password' => trim($_POST['init_password']),
        //           'name_err' => '',
        //           'address_err' => '',
        //           'district' => '',
        //           'con_number_err' => '',
        //           'email_err' => '',
        //           // 'location_err' => '',
        //           'manager_name_err' => '',
        //           'init_username_err' => '',
        //           'init_password_err' => '',
        //         ];

        //         // Validate Name
        //         if(empty($data['name'])){
        //           $data['name_err'] = 'Please enter collection center name';
        //         }

        //         //
        //         if(empty($data['address'])){
        //           $data['address_err'] = 'please enter address';
        //         }
        //         //
        //         if(empty($data['district'])){
        //             $data['district_err'] = 'please enter district';
        //           }
        //         //validate contact number
        //         if(empty($data['con_number'])){
        //           $data['con_number_err'] = 'please enter contact number';
        //         } elseif(strlen($data['con_number']) != 10){
        //           $data['con_number_err'] = 'contact number must be exactly 10 characters';
        //         }
        
        //         // Validate Email
        //         if(empty($data['email'])){
        //           $data['email_err'] = 'Pleae enter email';
        //         } else {
        //           // Check email
        //           if($this->collectioncenterModel->findUserByEmail($data['email'])){
        //             $data['email_err'] = 'Email is already taken';
        //           }
        //         }

        //         // 
        //         // if(empty($data['location'])){
        //         //   $data['location_err'] = 'please enter location';
        //         // }
        //         if(empty($data['manager_name'])){
        //           $data['manager_name_err'] = 'enter the manger name';
        //         }
        //         if(empty($data['init_username'])){
        //           $data['init_username_err'] = 'please enter initial user name';
        //         }

        //         // Validate Password
        //         if(empty($data['init_password'])){
        //            $data['init_password_err'] = 'Please enter password';
        //         } elseif(strlen($data['init_password']) < 6){
        //           $data['init_password_err'] = 'Password must be at least 6 characters';
        //         }
        
                
                
        
        //         // Make sure errors are empty
        //         if(empty($data['email_err']) && empty($data['name_err']) && empty($data['address_err']) && empty($data['district_err']) && empty($data['con_number_err'])  && empty($data['manager_name_err']) && empty($data['init_username_err']) && empty($data['init_Password_err'])){
        //           // Validated
          
        
        //           // Register User
        //           if($this->collectioncenterModel->register($data)){
        //             flash('register_success', 'We will serve for your requeest');
        //               redirect('Adminpagescc/ccaddrequest');
                    
        //           } else {
        //             die('Something went wrong');
        //           }
        
        //         } else {
        //           // Load view with errors
        //           $this->view('Admin/AdminaddCollectionCenter', $data);
                  
        //         }
        
        //       } else {
        //         // Init data  
        //         $data =[
        //           'name' => '',
        //           'address' => '',
        //           'district' => '',
        //           'con_number' => '',
        //           'email' => '',
        //           // 'location' => '',
        //           'manager_name' => '',
        //           'init_username' => '',
        //           'init_password' =>'',
        //           'name_err' => '',
        //           'address_err' => '',
        //           'district_err' => '',
        //           'con_number_err' => '',
        //           'email_err' => '',
        //           // 'location_err' => '',
        //           'manager_name_err' => '',
        //           'init_username_err' => '',
        //           'init_password_err' => ''
        //         ];
        
        //         // Load view
        //         $this->view('Admin/AdminaddCollectionCenter', $data);
        //       }
        // }

        
    }