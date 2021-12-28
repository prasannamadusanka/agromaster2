<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermediate Tranport Operator - Home Page</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/ito_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

  <?php include_once('header.php'); ?>
      
      
  
    <div class="sidebar">
      <div class="profile_info">
        <img src="<?php echo URLROOT; ?>/img/24.png" class="profile_image" alt="">
        <h4>Intermediate Transport Operator</h4>
      </div>
      <button class="dropdown-btn" onclick="window.location.href='<?php echo URLROOT; ?>/intermediateoperatorpages/iorder0';">
        <a href="#"><i class="fas fa-bars"></i><span>Intermediate Orders</span></a>
      </button>
     
      <button class="dropdown-btn" onclick="window.location.href='<?php echo URLROOT; ?>/intermediateoperatorpages/ccdetails';">
        <a href="#"><i class="fas fa-bars"></i><span>Collection Centers</span></a>
      </button>

      <button class="dropdown-btn" onclick="window.location.href='<?php echo URLROOT; ?>/intermediateoperatorpages/newdrivers';">
        <a href="#"><i class="fas fa-bars"></i><span>New Drivers</span></a>
      </button>

      <button class="dropdown-btn" onclick="window.location.href='<?php echo URLROOT; ?>/intermediateoperatorpages/driverdetails';">
        <a href="#"><i class="fas fa-bars"></i><span>Driver Details</span></a>
      </button>
       
    </div>
    <!--sidebar end-->

<style> 
.tabx {
	tab-size: 4;
}

.content{
  width: (100% - 350px); margin-top: 50px; margin-left: 250px; margin-bottom=0px; background: url('<?php echo URLROOT; ?>/public/img/background_fito.jpg') no-repeat; background-position: center; background-size: cover; height:92vh; transition: 0.5s;
}
</style>


  <style>
        .c{
        width: 20%;
        margin: 15px;
        box-sizing: border-box;
        float: left;
        text-align: center;
        border-radius:10px;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        padding-top: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: .4s;
        background-color:white;
        }
        .c:hover{
        box-shadow: 0 0 11px rgba(33,33,33,.2);
        transform: translate(0px, -8px);
        transition: .6s;
	      }
        .e{
        width: 90%;
        margin:4px;
        box-sizing: border-box;
        float: left;
        text-align: center;
        color: black;
        font-size: 20;
        border-radius:5px;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        padding-top: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-color:darkgreen;
        transition: .4s;
        background-color:darkgreen;
        }
        .content img{
        width: 100px;
        height: 100px;
        text-align: center;
        margin: 0 auto;
        display: block;
        }
        .content p{
        text-align: center;
        color: black;
        padding: 0 8px;
        }
        .content h6{
        font-size: 26px;
        text-align: center;
        color: #222f3e;
        margin: 0;
        }
     
        .content button{
        text-align: center;
        font-size: 16px;
        color: #fff;
        width: 100%;
        padding: 10px;
        border:0px;
        outline: none;
        cursor: pointer;
        color:white;
        background-color:#19B3D3;
        }
        .content button:hover{
          background-color:#19B3D3;
        }
        .content .button1{
          margin-bottom:0px;
          border-bottom:1px solid white;
        }
        .content .button2{
          border-bottom-right-radius:10px;
        
        }

        .gallery{
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        justify-content: left;
        align-items: center;
        margin: 0px 0;
        }
        .new{
         background-color:none;
         border-radius:100px;
        }
        .topnav {
        overflow: hidden;
        background-color:#19B3D3 ;
        }

       .topnav a {
       float: left;
       display: block;
       color: white;
       text-align: center;
       padding: 14px 16px;
       text-decoration: none;
       font-size: 25px;
       }
       .topnav input[type=text] {
       float: right;
       padding: 6px;
       margin-top: 8px;
       margin-right: 16px;
       border: none;
       font-size: 17px;
       }
    </style>
  </head>
  <body>

 
    <div class="content">
        <div class="new">
              
    <div class = "gallery">
    <div class="e">Available Drivers</div>
    <?php foreach($data['drivers1'] as $drivers1) : ?>
            <div class="c" onclick="window.location.href='<?php echo URLROOT; ?>/intermediateoperatorpages/driverdetails';">
              <img src="<?php echo URLROOT; ?>/img/employee.jpg">
              <table align="center"><tr><td><?php echo $drivers1->driver_id?></td></tr><tr><td><?php echo $drivers1->name?></td></tr><tr><td><?php echo $drivers1->status?></td></tr></table>
            </div> 
    <?php endforeach; ?>
    <div class="e">Not Available</div>   
    <?php foreach($data['drivers2'] as $drivers2) : ?>
                 <div class="c" onclick="window.location.href='<?php echo URLROOT; ?>/intermediateoperatorpages/ccdetails';">
                      <img src="<?php echo URLROOT; ?>/img/employee.jpg">
                      <table align="center"><tr><td><?php echo $drivers2->driver_id?></td></tr><tr><td><?php echo $drivers2->name?></td></tr><tr><td><?php echo $drivers2->status?></td></tr></table>
                  </div>
    <?php endforeach; ?>  
              </div>
      
            </div>
    </div>

    <!--script type="text/javascript">
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
    </script-->


  </body>
</html>
      