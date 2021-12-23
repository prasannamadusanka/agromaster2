<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/editrate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  
<style type="text/css">.content{
  width: (100% - 250px); margin-top: 60px;padding: 20px;margin-left: 250px;background: url('<?php echo URLROOT; ?>/img/background1.jpg') no-repeat;
      background-position: center;
      background-color: cyan;
      background-size: cover;
      
      transition: 0.5s;
}</style>
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
        <a  href="#"><i class="fas fa-bars"></i><span>My Order</span></a>
    </button>
    <div class="dropdown-container drop-active">
      <a href="index2"><i class="fas fa-bars"><span></i>New Order</span></a>
      <a href="accsort"><i class="fas fa-bars"><span></i>Rejected Order</span></a>
      <a href="reportsort"><i class="fas fa-bars"><span></i>Order Report</span></a>
    </div>
        <button class="dropdown-btn ">
            <a href="#"><i class="fas fa-bars"></i><span>Payment</span></a>
        </button>
        
          <div class="dropdown-container ">
            <a href="viewin.html"><i class="fas fa-bars"><span></i>View Invoice</span></a>
            <a href="pay.html"><i class="fas fa-bars"><span></i>Pay Online</span></a>
            <a href="payhistry1"><i class="fas fa-bars"><span></i>Payment History</span></a>
           
          </div>
          <button class="dropdown-btn" >
            <a href="collection.html"><i class="fas fa-bars"></i><span>Collection Center</span></a>
        </button>
        
          
          
        <button class="dropdown-btn" style="background-color: rgba(24, 23, 23, 0.8);">
          <a href="#"><i class="fas fa-bars"></i><span>Sales</span></a>
      </button>
      
        <div class="dropdown-container drop-active" style="display:block;">
          <a href="newsale1"><i class="fas fa-bars"><span></i>New Sale</span></a>
          <a href="dailysale1"><i class="fas fa-bars"><span></i>Daily Sale</span></a>
          <a href="weeklysale"><i class="fas fa-bars"><span></i>Weekly Sale</span></a>
          <a href="editrate1" style="background-color: rgba(24, 23, 23, 0.8);"><i class="fas fa-bars"><span></i>Edit Rate</span></a>
          <a href="prediction1"><i class="fas fa-bars"><span></i>Prediction</span></a>
          
        </div>
        <button class="dropdown-btn">
          <a href="financial"><i class="fas fa-bars"></i><span>Financial Report</span></a>
      </button>
       
       
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="testbox">
            <form action="">
              <h1 style="text-align: center;color: #006b38ff;">Edit Rate</h1>
              <div class="item">
                
                <div class="item">
                    <p>Product no</p>
                    <select>
                      <option value="">P 02</option>
                      <option value="1">P 24</option>
                      <option value="2">P 12</option>
                    
                    </select>
                  </div>
              </div>
              
              <div class="item">
                <p>Product Name</p>
                <select>
                      <option value="">Carrot</option>
                      <option value="1">BeetRoot</option>
                      <option value="2">Pumpkin</option>
                    
                    </select>
              </div>

              
                <p>Current Rate for 1kg</p>
                <p style="font-size: 14px;color: blue;">Rs:120.00</p>
             
              
            
              <div class="item">
                <p>New rate(Rs:)</p>
                <input type="number" name="price"/>
              </div>
             
              
             
             
              <div class="btn-block">
                <a href="home"><button type="submit">Done</button> </a>
              </div>
            </form>
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
      