<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/Financial.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
    <style>
   
     .new{
        background-color: rgba(200,240,235, 0.1);
         
         border:3px solid wheat;
         border-top:0px
     }
     .topnav {
  overflow: hidden;
  background-color:#006b38ff;

}

.topnav a {
  float: left;
  display: block;
color: white;
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 25px;
  font-family: bevan;
  width:50%;
  box-sizing: border-box;
  
}
.active{
    background-color: #013220;
}
.content{
  width: 81%; margin-top: 60px;padding: 20px;margin-left: 250px;background: url('<?php echo URLROOT; ?>/img/background1.jpg') no-repeat;
      background-position: center;
      background-color: cyan;
      background-size: cover;
      
      transition: 0.5s;
}


.topnav input[type=date] {
  float: right;
  padding: 10px;
  margin-top: 12px;
  margin-right: 16px;
  border: none;
  font-size: 14px;
}
.pt{
    overflow: hidden;}

    .btn-block {
    margin-top: 2px;
    text-align: left;
    font-size:15px;
    }
    .btn-hlock {
    margin-top: 2px;
    text-align: left;
    font-size:15px;
    }
    .btn-vlock {
    margin-top: -18px;
    text-align: left;
    font-size:15px;
    }
    .btn-mlock {
    margin-top: 2px;
    text-align: left;
    font-size:15px;
    }
    button {
    width: 120px;
    padding: 10px;
    border: none;
    -webkit-border-radius: 5px; 
    -moz-border-radius: 5px; 
    border-radius: 5px; 
    background-color: #013220;
    font-size: 15px;
    color: #fff;
    cursor: pointer;
    opacity: 3;
    }
    button:hover {
    background-color: #0666a3;
    }
   
    
    </style>
  </head>
  <body>

     <?php include_once('header.php'); ?>
    <div class="sidebar">
      <div class="profile_info">
        <img src="<?php echo URLROOT; ?>/img/profile1.jpg" class="profile_image" alt="">
        <a href="<?php echo URLROOT; ?>/users/register" > <h4 style="color: yellowgreen;">Hettipola Supermarket</h4></a>
      </div>
      
   <button class="dropdown-btn">
        <a href="home"><i class="fas fa-bars"></i><span>Products</span></a>
    </button>
    
    <button class="dropdown-btn" >
        <a  href="#"><i class="fas fa-bars"></i><span>Orders</span></a>
    </button>
    <div class="dropdown-container drop-active">
      <a href="index2"><i class="fas fa-bars"><span></i>New Order</span></a>
      <a href="orderhistory"><i class="fas fa-bars"><span></i>Order History</span></a>
      <a href="accsort"><i class="fas fa-bars"><span></i>Rejected Order</span></a>
      <a href="reportsort"><i class="fas fa-bars"><span></i>Order Report</span></a>
    </div>
        <button class="dropdown-btn ">
            <a href="#"><i class="fas fa-bars"></i><span>Payment</span></a>
        </button>
        
          <div class="dropdown-container ">
            <a href="viewin"><i class="fas fa-bars"><span></i>View Invoice</span></a>
            <a href="pay"><i class="fas fa-bars"><span></i>Pay Online</span></a>
            <a href="payhistry1"><i class="fas fa-bars"><span></i>Payment History</span></a>
           
          </div>
          <button class="dropdown-btn" >
            <a href="collection"><i class="fas fa-bars"></i><span>Collection Center</span></a>
        </button>
        
          
          
        <button class="dropdown-btn">
          <a href="#"><i class="fas fa-bars"></i><span>Sales</span></a>
      </button>
      
        <div class="dropdown-container">
          <a href="newsale1"><i class="fas fa-bars"><span></i>New Sale</span></a>
          <a href="dailysale1"><i class="fas fa-bars"><span></i>Daily Sale</span></a>
          <a href="weeklysale"><i class="fas fa-bars"><span></i>Periodic Sale</span></a>
          <a href="editrate1"><i class="fas fa-bars"><span></i>Edit Rate</span></a>
          <a href="prediction1"><i class="fas fa-bars"><span></i>Prediction</span></a>
          
        </div>
        <button class="dropdown-btn" style="background-color: rgba(24, 23, 23, 0.8);">
          <a href="financial"><i class="fas fa-bars"></i><span>Financial Report</span></a>
      </button>
      
        
       
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="new">
            <div class="topnav">
              <a class="active" href="#home">Financial Report</a>
              <table padding-top="0px"; text-align="center">
                <tr>
                  <div class="btn-hlock" style="align:left; padding-bottom:13px; padding-right:10px; padding-left:10px;">
               <form action="<?php echo URLROOT; ?>/Outletpages/financial" method="post">
                
                 
                <td><button type="" style="font-size: 12px;">selected by month</button></td>
        
               
                <td><input type="month" name="month" required/></td>
                <td><button type="submit" style="font-size: 13px;">submit</button> </td>
              </div>
               </form></tr></table>
              </div>
             <div style="text-align: center;margin-top: 16px;font-size: 24px;"><b>FINANCIAL REPORT FOR MARCH IN 2021</b></div>
              <table id="customers">
               <tr>
    <th>Week         </th>
    <th>Money Received(Rs.)      </th>
    <th>Profit(Rs.)</th>
    
  </tr>
  <?php
  
  
  $c=0;
  $d='2021-12-01';
  $p=0;
  $t=0;
  $i=0;
   foreach ($data['financial'] as $financial):
    if($financial->date1==$d){
      if($financial->id==$i){
      $c=$c+$financial->money1;
    }else if($financial->id!=$i) {
      $c=$c+$financial->money1;
      $i=$financial->id;
    }
}
     else if($financial->date1!=$d){
        $p=$p+1;
      if($financial->id==$i){
      $c=$c+$financial->money1;
    }else if($financial->id!=$i){
      $c=$c+$financial->money1;
      $i=$financial->id;
    }
        $d=$financial->date1;
      }
      if($p==2){
        $t=$t+1;
      ?>
  <tr>
    <td>week <?php echo $t ?></td>
    <td>Rs:<?php echo $c ?>.00</td>
     <td></td>
    
   
  </tr>
<?php
$c=0;
$p=0;
}

endforeach; 


?>
              </table>
 <div style="margin-left: 200px;margin-top: 70px;font-size: 25PX;color:blue;">Total Amount : <var style="margin-left:110PX">Rs.1452,000</div></var>
  <div style="margin-left: 200px;margin-top: 10px;font-size: 25PX;color:blue;">Profit for whole month : <var style="margin-left:10px">Rs.50,000</div></var>    
            </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });

    var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
    </script>


  </body>
</html>