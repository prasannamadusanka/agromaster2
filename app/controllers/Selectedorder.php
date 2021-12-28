<?php
    class Selectedorder extends Controller {
      public function __construct(){
        $this->selorder1Model = $this->model('Selectedorder1');
        $this->fetchModel = $this->model('Fetch');
      }



        public function showDescrpT($id){
          $descorder = $this->selorder1Model->getSelOrdTrans($id);
          $data = [
            'descorder' => $descorder
          ];

          $this->view('financial operator/FO Selected Payment', $data);
        }

        public function setAsComp($id){
          if($this->selorder1Model->setAsCompleted($id)) {
            redirect('financialoperatorpages/paymentcat');
          }
        }

        public function checkInFetch($id){

          $tid = $this->selorder1Model->checkTID($id);

          echo "  Checked:  "; print_r($id); echo "<br>"; echo "  Transaction ID:  "; print_r($tid); echo "<br>";

          $transmonth1 = $this->fetchModel->getTheTransactions();

          $word = '"transaction_id":"'.$tid.'"';

          if (substr_count($transmonth1,$word)){
            echo " Connected to server. <br> Retrieved transactions successfully. <br> <b> Paypal has confirmed the payment! </b>";
          } else {
            echo " Payment might be older than a month or <br> It might have occured within last 24 hours, <br> Otherwise : has <strong>NOT</strong> paid to Agromaster! </b>";
          }
        }
      }
    
    
