
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/driver/driver-orderlist.css">
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
        <a href="<?php echo URLROOT; ?>/Ddriverpages/driverhome" method="post" class="name"><span><h4><?php echo $_SESSION['user_name']?></h4></span></a>
      </div>

    <button class="dropdown-btn">
        <a href="<?php echo URLROOT; ?>/Ddriverpages/cclist" method="post"><i class="fas fa-bars"></i><span>Collection Centers</span></a>
    </button>

    <!-- <button class="dropdown-btn">
        <a href="driver-outlet.html"><i class="fas fa-bars"></i><span>Outlets</span></a>
    </button> -->

    <button class="dropdown-btn">
        <a href="<?php echo URLROOT; ?>/Ddriverpages/orderlist" method="post" style="background-color : #08161E;"><i class="fas fa-bars"></i><span>Orders</span></a>
    </button>
    
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
        <div class="tables">
        <h1>Ordres</h1>

<table id="external">
  <tr>
    <th>FROM</th>
    <th>TO</th>
  </tr>

  <tr>
    <td>
      <table id="orders">
        <tr>
          <th>Order ID</th>
          <th>Name</th>
          <th>Address</th>
          <th>Contact number</th>
          <th>Location</th>
          <!-- 
          <th>Name</th>
          <th>Address</th>
          <th>Contact number</th>
          <th>Location</th>
          <th>details</th>-->
        </tr>



        <tr>
          <?php foreach($data['orders'] as $order) : ?>
          <td> <?php echo $order-> id; ?> </td>
          <td> <?php echo $order-> ccn; ?> </td>
          <td> <?php echo $order-> cca; ?> </td>
          <td> <?php echo $order-> ccc; ?> </td>
          <td align="center"><a href="<?php echo URLROOT; ?>/Adminpagescc/cclocation">location</a></td> 

          <!--<td> <?php echo $order-> oun; ?> </td>
          <td> <?php echo $order-> oua; ?> </td>
          <td> <?php echo $order-> ouc; ?> </td>
    
          <td align="center"><a href="<?php echo URLROOT; ?>/Adminpagescc/cclocation">location</a></td> 
          <td align="center"><a href="<?php echo URLROOT; ?>/Ddriverpages/orderdisplay/<?php echo $order-> id; ?>" method="post">details</a></td>-->
        </tr>
        <?php endforeach; ?>

      </table>

    </td>
    <td>
      <table id="orders">
        <tr>
          <!--<th>Order ID</th>
          <th>Name</th>
          <th>Address</th>
          <th>Contact number</th>
          <th>Location</th>-->
          <!-- -->
          <th>Name</th>
          <th>Address</th>
          <th>Contact number</th>
          <th>Location</th>
          <th>details</th>
        </tr>



        <tr>
          <?php foreach($data['orders'] as $order) : ?>
          <!--<td> <?php echo $order-> id; ?> </td>
          <td> <?php echo $order-> ccn; ?> </td>
          <td> <?php echo $order-> cca; ?> </td>
          <td> <?php echo $order-> ccc; ?> </td>
          <td align="center"><a href="<?php echo URLROOT; ?>/Adminpagescc/cclocation">location</a></td> -->

          <td> <?php echo $order-> oun; ?> </td>
          <td> <?php echo $order-> oua; ?> </td>
          <td> <?php echo $order-> ouc; ?> </td>
    
          <td align="center"><a href="<?php echo URLROOT; ?>/Ddriverpages/location">location</a></td> 
          <td align="center"><a href="<?php echo URLROOT; ?>/Ddriverpages/orderdisplay/<?php echo $order-> id; ?>" method="post">details</a></td>
        </tr>
        <?php endforeach; ?>

      </table>
    <td>
      
    </td>

    

  </tr>
  
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
      