<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
    <style>
   
     .new{
        background-color: rgba(255,255,255, 0.6);
         
         border:3px solid black;
         border-top:0px
        border-radius:30px;
        border:5px solid #006b38ff;
         border-top:0px;
         width:75%;
         margin-left:auto;
         margin-right:auto;
         margin-bottom: 300px;
         border-radius:10px;
     }
     .topnav {
  overflow: hidden;
  background-color:#006b38ff;

}
.content{
   margin-top: 60px;padding: 20px;margin-left: 250px;background: url('<?php echo URLROOT; ?>/img/background1.jpg') no-repeat;
      background-position: center;
      background-color: cyan;
      background-size: cover;
      width: 81%;
      transition: 0.5s;
}
.topnav a {
  float: left;
  display: block;
color: white;
  text-align: center;
  padding: 8px 16px;
  text-decoration: none;
  font-size: 25px;
  font-family: bevan;
  width:75%;
  box-sizing: border-box;
  
}
.active{
    background-color: #013220;
}



.topnav input[type=date] {
  float: right;
  padding: 12px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}
.topnav input[type=text] {
  float: right;
  padding: 5px;
  margin-top: 10px;
  margin-right: 20px;
  border: none;
  font-size: 12px;
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
        
          <div class="dropdown-container">
            <a href="viewin" ><i class="fas fa-bars"><span></i>View Invoice</span></a>
            <a href="pay"><i class="fas fa-bars"><span></i>Pay Online</span></a>
            <a href="payhistry"><i class="fas fa-bars"><span></i>Payment History</span></a>
           
          </div>
          <button class="dropdown-btn" >
            <a href="collection"><i class="fas fa-bars"></i><span>Collection Center</span></a>
        </button>
        
          
          
        <button class="dropdown-btn drop-active" style="background-color: rgba(24, 23, 23, 0.8);">
          <a href="#"><i class="fas fa-bars"></i><span>Sales</span></a>
      </button>
      
        <div class="dropdown-container" style="display:block;">
          <a href="newsale1"><i class="fas fa-bars"><span></i>New Sale</span></a>
          <a href="dailysale1"><i class="fas fa-bars"><span></i>Daily Sale</span></a>
          <a href="weeklysale"><i class="fas fa-bars"><span></i>Periodic Sale</span></a>
          <a href="editrate1" style="background-color: rgba(24, 23, 23, 0.8);"><i class="fas fa-bars" ><span></i>Edit Rate</span></a>
          <a href="prediction1"><i class="fas fa-bars"><span></i>Prediction</span></a>
          
        </div>
        <button class="dropdown-btn">
          <a href="financial"><i class="fas fa-bars"></i><span>Financial Report</span></a>
      </button>
     
        
       
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="new">
          <div class="topnav">
                <a class="active" href="#home">Edit Rate</a>
                <input type="text" placeholder="Search here">
               
              </div>
           
             



  
              <table id="customers">
                <tr>
    <tr>
    
    <th>Product Name      </th>
    <th>Current Rate</th>
    <th>Edit Rate</th>
    <th></th>

    
  </tr>
  <?php foreach($data['edit'] as $products) : ?>
    <form action="<?php echo URLROOT; ?>/Outletpages/assignment" method="post">
  <tr>
    <input type="hidden" name="product_id" value ="<?php echo $products->id?>">
    <td><?php echo $products->name?></td>
    <td><?php echo $products->rate?></td>
    <td><input type="number" name="selling_rate" value="<?php echo $products->rate?>"></td>
     <td><div class="btn-block">
               <button type="submit">Done</button>
              </div></td>
   
  </tr>
  </form>
   <?php endforeach; ?>
  
              </table>
  
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