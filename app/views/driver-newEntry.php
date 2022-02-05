<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/driver/driver-newEntry.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="<?php echo URLROOT; ?>driver-newEntry.js"></script>
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
      <h4><?php echo $_SESSION['user_name']?></h4>
      </div>
    <button class="dropdown-btn">
        <a href="<?php echo URLROOT; ?>/Ddriverpages/cclist" method="post"><i class="fas fa-bars"></i><span>Collection Centers</span></a>
    </button>

    <!-- <button class="dropdown-btn">
        <a href="driver-outlet.html"><i class="fas fa-bars"></i><span>Outlets</span></a>
    </button> -->

    <button class="dropdown-btn">
        <a href="<?php echo URLROOT; ?>/Ddriverpages/orderlist" method="post"><i class="fas fa-bars"></i><span>Orders</span></a>
    </button>
    <div class="dropdown-container">
        <a href="<?php echo URLROOT; ?>/Ddriverpages/returnentry/<?php echo $data['id']; ?>" method="post" style="background-color : #08161E;"><i class="fas fa-bars"></i><span>Return Entry</span></a>
      </div>
    
    <button class="dropdown-btn">
        <a href="<?php echo URLROOT; ?>/Ddriverpages/availabilitycalender" method="post"><i class="fas fa-bars"></i><span>Availability</span></a>
    </button>

       <!-- <div class="dropdown-container">
        <a href="driver-newEntry.html" class="fas fa-bars">New Entry</a>
        <a href="driver-editEntry .html" class="fas fa-bars">Edit Entry</a>
      </div> -->
       
    </div>
    <!--sidebar end-->

    <div class="content">
      <!-- <img src="RHA.jpg" class="bellicon"> -->
      <div class="form">
      <!-- <input type="text" name="" placeholder="order id" id="id"><br><br><br> -->
      <h4>Order ID - <?php echo $data['id']; ?></h4>
      <input type="text" name="" placeholder="return entry id" id="id"><br><br><br>

        <table id="entry">
          <tr>
            <th>Product id</th>
            <th>Product name</th>
            <th>Quentity</th>
            <th><button>+</button></th>
          </tr>
          
          <?php foreach($data['order'] as $order) : ?>
          <tr>
            <td><?php echo $order-> item_id; ?></td>
            <td>carrot</td>
            <td><div contenteditable="true"><?php echo $order-> ordered_quantity; ?></td>
            <td><button>-</button></td>
          </tr>
        <?php endforeach; ?>
          <!-- <tr>
            <td><input type="text" name="" placeholder="product id" id="product"></td>
            <td><input type="text" name="" placeholder="Qty" id="qty"></td>
            <td><button>-</button></td>
          </tr>
          </tr>   -->
          
        </table>
        <br><button class="save">Save</button>
        
      </div>

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
      