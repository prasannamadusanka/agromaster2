<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/home1.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/home.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/ordert.css">
   
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
    <style>
     body {
    background:url('<?php echo URLROOT; ?>/img/background.jpg') no-repeat;
    height: 100vh;
    vertical-align: middle;
    display: flex;
    font-family: Muli;
    font-size: 14px;
    background-position: center;
    background-size:cover;
}

    
    </style>
  </head>
  <body>

  <?php include_once('header.php'); ?>
    <div class="sidebar">
      <div class="profile_info">
        <img src="<?php echo URLROOT; ?>/img/profile.jpg" class="profile_image" alt="">
        <a href="<?php echo URLROOT; ?>/users/register" > <h4><?php echo $_SESSION['user_name']?></h4></a>
      </div>
    
    <button class="dropdown-btn" ">
        <a href="<?php echo URLROOT; ?>/Collectioncenterpages/home"><i class="fas fa-bars"></i><span>Collections</span></a>
    </button>
  
    <button class="dropdown-btn" >
        <a  href="#"><i class="fas fa-bars"></i><span>Orders</span></a>
    </button>
    <div class="dropdown-container drop-active">
      <a href="<?php echo URLROOT; ?>/Collectioncenterpages/pendingorders" ><i class="fas fa-bars"><span></i>Pending orders</span></a>
      <a  style="background-color: rgba(24, 23, 23, 0.8);" href="<?php echo URLROOT; ?>/Collectioncenterpages/completedorders"><i class="fas fa-bars"><span></i>Assigned orders</span></a>
      <a href="<?php echo URLROOT; ?>/Collectioncenterpages/deliveredorders"><i class="fas fa-bars"><span></i>Delivered orders</span></a>
    </div>
        <button class="dropdown-btn " >
            <a href="#"><i class="fas fa-bars"></i><span>Farmers</span></a>
        </button>
        
          <div class="dropdown-container ">
          <a href="<?php echo URLROOT; ?>/Collectioncenterpages/farmers"><i class="fas fa-bars"><span></i>Farmer mangement</span></a>
            <a href="<?php echo URLROOT; ?>/Collectioncenterpages/addfarmers"><i class="fas fa-bars"><span></i>Add farmer</span></a>
            <a href="<?php echo URLROOT; ?>/Collectioncenterpages/nonlistedboughts"><i class="fas fa-bars"><span></i>Un listed broughts</span></a>
</div>
          <button class="dropdown-btn" >
            <a href="#"><i class="fas fa-bars"></i><span>Employees</span></a>
        </button>
        
          <div class="dropdown-container ">
          <a href="<?php echo URLROOT; ?>/Collectioncenterpages/employee"><i class="fas fa-bars"><span></i>Employee mangement</span></a>
            <a href="<?php echo URLROOT; ?>/Collectioncenterpages/addemployee"><i class="fas fa-bars"><span></i>Add Employee</span></a>
            <a href="<?php echo URLROOT; ?>/Collectioncenterpages/employeeSalary"><i class="fas fa-bars"><span></i>Salary management</span></a>
          </div>
          
        <button class="dropdown-btn">
          <a href="#"><i class="fas fa-bars"></i><span>Excess</span></a>
      </button>
      
        <div class="dropdown-container">
          <a href="<?php echo URLROOT; ?>/Collectioncenterpages/addExcess"><i class="fas fa-bars"><span></i>Add Excess</span></a>
          <a href="<?php echo URLROOT; ?>/Collectioncenterpages/excessAssignment"><i class="fas fa-bars"><span></i>Excess assignment</span></a>
        </div>
        <button class="dropdown-btn">
          <a href="#"><i class="fas fa-bars"></i><span>Neccesity</span></a>
      </button>
      <div class="dropdown-container">
        <a href="<?php echo URLROOT; ?>/Collectioncenterpages/orderNeccesity"><i class="fas fa-bars"><span></i>order</span></a>
        <a href="<?php echo URLROOT; ?>/Collectioncenterpages/pendingNeccesity"><i class="fas fa-bars"><span></i>pending</span></a>
      </div>
      <button class="dropdown-btn">
        <a href="#"><i class="fas fa-bars"></i><span>Requests</span></a>
    </button>
    <div class="dropdown-container">
      <a href="<?php echo URLROOT; ?>/Collectioncenterpages/driverRequest"><i class="fas fa-bars"><span></i>Driver</span></a>
      <a href="<?php echo URLROOT; ?>/Collectioncenterpages/productRequest"><i class="fas fa-bars"><span></i>Product</span></a>
    </div>
    <button class="dropdown-btn">
        <a href="<?php echo URLROOT; ?>/Collectioncenterpages/expensesReport"><i class="fas fa-bars"></i><span>Expenses reports</span></a>
    </button>
    <button class="dropdown-btn">
          <a href="<?php echo URLROOT; ?>/Collectioncenterpages/reject"><i class="fas fa-bars"></i><span>Return management</span></a>
      </button>
     
        
       
    </div>
    <!--sidebar end-->

  
        <div class="card" style="margin-top:80px">
            <div class="title">Order Reciept</div>
            <div class="info">
              
                <div class="row">
                    <div class="columnhead"> <span id="heading">Ordered Date</span><br> <span id="details"> <?php echo $data['order'][0]->ordered_date?></span> </div>
                    <div class="columnhead"> <span id="heading">Order No.</span><br> <span id="details"><?php echo $data['order'][0]->id?></span> </div>
                    <div class="columnhead"> <span id="heading">Assigned date</span><br> <span id="details"><?php echo $data['order'][0]->assigned_date?></span> </div>
                    <div class="columnhead"> <span id="heading">Routed date</span><br> <span id="details"><?php echo $data['order'][0]->delivery_date?></span> </div>
                </div>
            </div>
            <div class="pricing">
            <div class="row head" style="font-weight: bold;
      font-size:large;
  }">
                  
                  <div class="column2"> <span id="name">Product name</span> </div>
                  <div class="column3"> <span id="price">Ordered quantity</span> </div>
                  <div class="column3"> <span id="price">Assigned quantity</span> </div>
              </div>
              <?php foreach ($data['order'] as $order):?>
                <div class="row">
                  
                    <div class="column2"> <span id="name"> <?php echo $order->product_name ?></span> </div>
                    <div class="column3"> <span id="price"> <?php echo $order->oredered_quantity ?></span> </div>
                    <div class="column3"> <span id="price"><?php echo $order->assigned_quantity ?> </span> </div>
                </div>
                <?php endforeach; ?>
               
            </div>  
            <form method="post"action="<?php echo URLROOT; ?>/collectioncenterpages/assigndriver">
            <input style="display:none"type="text" value = "<?php echo $data['order'][0]->id?>" name ="order_id">
            <div class="total">
                <div class="row">
                   
                    <div class="column3">
                      <select name="driver">
                      <option value="">Select Driver</option>
                        <option value="f">Driver 1</option>
                      </select>
                    </div>
                </div>
            </div>
           
            <div class="tracking">
                <div class="title">Tracking Order</div>
            </div>
            <div class="progress-track">
                <ul id="progressbar">
                    <li class="step0 active " id="step1">Ordered</li>
                    <li class="step0 active text-center" id="step2">Assigned</li>
                    <li class="step0 text-right" id="step3">Delivered</li>
                 
                </ul>
            </div>
            <div class="total">
                <div class="row">
                     <input style="width:150px;color:white;margin-left:auto;margin-right:auto;background-color:#006b38ff;padding:10px"type="submit" value="Save changes">
            </div>
        </div>
        </form>
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