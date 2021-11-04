<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/non-listed-boughts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
    <style>
   
     .new{
        background-color: rgba(255,255,255, 0.3);
         
         border:1px solid #006b38ff;
         border-top:0px;
        
     }
     .topnav {
  overflow: hidden;
  background-color:#006b38ff;

}

.topnav a {
  float: left;
  display: block;
color: white;
  text-align: left;
  padding: 6px 16px;
  text-decoration: none;
  font-size: 20px;
  font-family: bevan;
  width:50%;
  box-sizing: border-box;
  
}




.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}
.content{
width: (100% - 250px); margin-top: 60px;padding: 20px;margin-left: 250px;background: url('<?php echo URLROOT; ?>/img/background.jpg') no-repeat;
  background-position: center;
  background-color: cyan;
  background-size: cover;
  transition: 0.5s;
 }  
    
    </style>
  </head>
  <body>

    <header>
       
        <div class="left_area">
          <h3>Agro <span>Master</span><span style="margin-left:22%;font-family: z;font-weight: 800 ;">Kothalawal collection center</span></h3>
        </div>
        <div class="right_area">
          <a href="#" class="logout_btn">Logout</a>
        </div>
      </header>
      
  
    <div class="sidebar">
      <div class="profile_info">
      <img src="<?php echo URLROOT; ?>/img/profile.jpg" class="profile_image" alt="">
        <h4>Kothalawala collection center</h4>
      </div>
      <button class="dropdown-btn" >
        <a href="<?php echo URLROOT; ?>/Collectioncenterpages/home"><i class="fas fa-bars"></i><span>Collections</span></a>
    </button>
  
    <button class="dropdown-btn" >
        <a  href="#"><i class="fas fa-bars"></i><span>Orders</span></a>
    </button>
    <div class="dropdown-container">
      <a href="<?php echo URLROOT; ?>/Collectioncenterpages/pendingorders" ><i class="fas fa-bars"><span></i>Pending orders</span></a>
      <a href="<?php echo URLROOT; ?>/Collectioncenterpages/completedorders"><i class="fas fa-bars"><span></i>Assigned orders</span></a>
      <a href="<?php echo URLROOT; ?>/Collectioncenterpages/deliveredorders"><i class="fas fa-bars"><span></i>Delivered orders</span></a>
    </div>
        <button class="dropdown-btn " >
            <a href="#"><i class="fas fa-bars"></i><span>Farmers</span></a>
        </button>
        
          <div class="dropdown-container drop-active">
          <a style="background-color: rgba(24, 23, 23, 0.8);" href="<?php echo URLROOT; ?>/Collectioncenterpages/farmers"><i class="fas fa-bars"><span></i>Farmer mangement</span></a>
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

    <div class="content">
        
            <div class="topnav">
                <a  href="#home">Payment management</a>
                <a  style="text-align: right;"href="#home">A.K.Sunil - #45</a>
               
              </div>
             
              <div class="cardBox">
                <div class="card">
                  <div class="front">
                  <img src="<?php echo URLROOT; ?>/img/invoice3.jpg">
                    <h3 style="font-size: medium;">Invoice number - #346</h3>
                    <p style="text-align:left;font-size:small">Issued Date - 2019/10/16</p>
                   <p style="text-align:left;font-size:small">Total amount - Rs.7656.00</p>
                   <p style="text-align:left;font-size:small">Payment status - Paid</p>
                  </div>
                  <div class="back">
                    <h3>Boughts</h3>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Carrot - 10kg(Rs.450.00)</p>
                   <hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Beans - 10kg(Rs.450.00)</p><hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Gralic - 10kg(Rs.450.00)</p><hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Beans - 10kg(Rs.450.00)</p><hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Beans - 10kg(Rs.450.00)</p><hr>
                  <button>Mark as Paid</button>
                  </div>
                </div>
              </div>
            
              <div class="cardBox">
                <div class="card">
                  <div class="front">
                  <img src="<?php echo URLROOT; ?>/img/invoice3.jpg">
                    <h3 style="font-size: medium;">Invoice number - #347</h3>
                    <p style="text-align:left;font-size:small">Issued Date - 2019/10/12</p>
                   <p style="text-align:left;font-size:small">Total amount - Rs.9656.00</p>
                   <p style="text-align:left;font-size:small">Payment status - Paid</p>
                  </div>
                  <div class="back">
                    <h3>Boughts</h3>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Carrot - 10kg(Rs.450.00)</p>
                   <hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Beans - 10kg(Rs.450.00)</p><hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Gralic - 10kg(Rs.450.00)</p><hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Beans - 10kg(Rs.450.00)</p><hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Beans - 10kg(Rs.450.00)</p><hr>
                  <button>Mark as Paid</button>
                  </div>
                </div>
              </div>
              <div class="cardBox">
                <div class="card">
                  <div class="front">
                  <img src="<?php echo URLROOT; ?>/img/invoice3.jpg">
                    <h3 style="font-size: medium;">Invoice number - #348</h3>
                    <p style="text-align:left;font-size:small">Issued Date - 2019/10/08</p>
                   <p style="text-align:left;font-size:small">Total amount - Rs.10656.00</p>
                   <p style="text-align:left;font-size:small">Payment status - Paid</p>
                  </div>
                  <div class="back">
                    <h3>Boughts</h3>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Carrot - 10kg(Rs.450.00)</p>
                   <hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Beans - 10kg(Rs.450.00)</p><hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Gralic - 10kg(Rs.450.00)</p><hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Beans - 10kg(Rs.450.00)</p><hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Beans - 10kg(Rs.450.00)</p><hr>
                  <button>Mark as Paid</button>
                  </div>
                </div>
              </div>
              <div class="cardBox">
                <div class="card">
                  <div class="front">
                  <img src="<?php echo URLROOT; ?>/img/invoice3.jpg">
                    <h3 style="font-size: medium;">Invoice number - #349</h3>
                    <p style="text-align:left;font-size:small">Issued Date - 2019/10/12</p>
                   <p style="text-align:left;font-size:small">Total amount - Rs.11656.00</p>
                   <p style="text-align:left;font-size:small">Payment status - Paid</p>
                  </div>
                  <div class="back">
                    <h3>Boughts</h3>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Carrot - 10kg(Rs.450.00)</p>
                   <hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Beans - 10kg(Rs.450.00)</p><hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Gralic - 10kg(Rs.450.00)</p><hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Beans - 10kg(Rs.450.00)</p><hr>
                   <p style="font-size: small;text-align: left;margin-bottom: 1px;">Beans - 10kg(Rs.450.00)</p><hr>
                  <button>Mark as Paid</button>
                  </div>
                </div>
             
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