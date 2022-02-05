<?php
    class Ddriverpages extends Controller{
        public function __construct(){
            $this->DSdriverModel = $this->model('Ddriver');
        }

        public function driverhome(){
            $data = [
  
            ];
            $this->view('driver/driverHome', $data);
          }

        /*public function availabilitycalender(){
            //get cc request list
            //$ccaddrequest = $this->DSdriverModel->getccrequest();
              $data = [
                
              ];
             
              $this->view('driver/driver-availability-calender', $data);
        }*/

        public function orderlist(){
            //get order list
            $orders = $this->DSdriverModel->odrlist();
              $data = [
                'orders'=>$orders
              ];
             
              $this->view('driver/driver-orderlist', $data);
        }

        
        public function availabilityview($current_day){
          $day=$current_day;

              $data = [
                'day'=>$day
              ];
             
              $this->view('driver/driver-availabilityviewer', $data);
        }

        public function cclist(){
          //get collectioncenter list
          $collectioncenters = $this->DSdriverModel->getcc();
          $data = [
              'collectioncenters' => $collectioncenters
          ];
         
          $this->view('driver/driver-collectioncenter', $data);
      }

      public function orderdisplay($orderid){
        $order = $this->DSdriverModel->orderdisplay($orderid);
        $order_id = $orderid;
          $data = [
            'order'=>$order,
            'id'=>$order_id
            //'delivery_date'=>$order[1]
          ];
         
          $this->view('driver/driver-orderdisplay', $data);
      }

      public function returnentry($orderid){
        $order = $this->DSdriverModel->orderforreturnentry($orderid);
        $order_id = $orderid;
          $data = [
            'order'=>$order,
            'id'=>$order_id,
          ];
         
          $this->view('driver/driver-newEntry', $data);
      }

      public function location(){
        //$order = $this->DSdriverModel->orderforreturnentry($orderid);
          $data = [
          ];
         
          $this->view('driver/driver-location', $data);
      }


      //test
      public function availabilitycalender(){
        //get cc request list
        //$ccaddrequest = $this->DSdriverModel->getccrequest();
          $data = [
            
          ];
         
          $this->view('driver/driver-availability-calender', $data);
      }

      


    }