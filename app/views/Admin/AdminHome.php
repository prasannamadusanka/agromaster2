<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin/AdminHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

  <header>
      <div class="left_area">
        <h3>Agro <span>Master</span></h3>
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn">Logout</a>
      </div>
    </header>
      
    <?php include_once('header.php'); ?>
    <div class="sidebar">
      <div class="profile_info">
        <img src="<?php echo URLROOT; ?>/images/usericon.jpg" class="profile_image" alt="">
        <h4>Administrator</h4>
      </div>
    <button class="dropdown-btn">
        <a href="#"><i class="fas fa-bars"></i><span>Major Addings</span></a>
    </button>
      <div class="dropdown-container">
        <a href="<?php echo URLROOT; ?>/Adminpagesfi/intermediate" method="post">Intermediate Transport Operator</a>
        <a href="<?php echo URLROOT; ?>/Adminpagesfi/financial" method="post">Financial Operator</a>
      </div>

    <button class="dropdown-btn">
        <a href="<?php echo URLROOT; ?>/Adminpagesd/driveraddrequest" method="post"><i class="fas fa-bars"></i><span>Driver Adding Requests</span></a>
    </button>

    <button class="dropdown-btn">
        <a href="<?php echo URLROOT; ?>/Adminpagescc/cclist" method="post"><i class="fas fa-bars"></i><span>Collection Centers</span></a>
    </button>
    
    <button class="dropdown-btn">
        <a href="<?php echo URLROOT; ?>/Adminpagesoutlet/outletlist" method="post"><i class="fas fa-bars"></i><span>Outlets</span></a>
    </button>
       
    </div>
    <!--sidebar end-->

    <div class="content">
      <table>
        <tr>
          <td></td>
          <td> <b><h2>SYSTEM ACTORS</h2></b> </td>
          <td></td>
        </tr>
        <tr>
          <td><img src="<?php echo URLROOT; ?>/images/cc.jpg" class="images" alt=""></td>
          <td><img src="<?php echo URLROOT; ?>/images/intermediate.jpg" class="images" alt=""></td>
          <td><img src="<?php echo URLROOT; ?>/images/outlet.jpg" class="images" alt=""></td>
        </tr>
        <tr>
          <td><b>Collection Center<br></b></td>
          <td><b>Intermediate Transport Operator<br></b></td>
          <td><b>Outlet<br></b></td>
        </tr>
        <tr>
          <td><img src="<?php echo URLROOT; ?>/images/financial.jpg" class="images" alt=""></td>
          <td></td>
          <td><img src="<?php echo URLROOT; ?>/images/driver.jpg" class="images" alt=""></td>
        </tr>
        <tr>
          <td><b>Financial Operator<br></b></td>
          <td></td>
          <td><b>Driver<br></b></td>
        </tr>
      </table>
    </div>

    <!-- <footer>
      <p>© 2021 All rights reserved by CSG31</p>
    </footer>  -->

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
      