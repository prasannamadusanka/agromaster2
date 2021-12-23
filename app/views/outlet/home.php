<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/home.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
    <style>
         .c{
        width: 20%;
        margin: 15px;
        box-sizing: border-box;
        float: left;
        text-align: center;
        border-radius:8px;
       box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.8);
        padding-top: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: .4s;
      background-color: white;
      border-bottom: 1px solid #006b38ff;
      box-sizing: border-box;
     border-style: double;
  }  
        }
        .c:hover{
      box-shadow: 0 0 11px rgba(33,33,33,.2);
      transform: translate(0px, -8px);
      transition: .6s;
      }
      .content img{
      width: 190px;
      height: 170px;
      text-align: center;
      margin: 0 auto;
      display: block;
      }
      .content p{
      text-align: left;
      color: black;
      padding: 0 8px;
      font-family: rubik,sans-serif;
      }
      .content h6{
      font-size: 26px;
      text-align: center;
      color: #222f3e;
      margin: 0;
      font-family: rubik;
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
      background-color:#006b38ff;
      display: inline;
    
    
      
      }
      .content button:hover{
          background-color:#013220;
          
      }
      .content .button1{
        margin-bottom:0px;
        
        
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px;
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
        background-color: rgba(255,255,255, 0.1);
         border-radius:3px;
         border:1px solid #006b38ff
     }
     .topnav {
  overflow: hidden;
  background-color:#006b38ff;
  border-radius: 3px;
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
  width: (100% - 250px); margin-top: 60px;padding: 20px;margin-left: 250px;background: url('<?php echo URLROOT; ?>/img/background1.jpg') no-repeat;
      background-position: center;
      background-color: cyan;
      background-size: cover;
      
      transition: 0.5s;
}
  
    </style>
  </head>
  <body>

     <?php include_once('header.php'); ?>
    <div class="sidebar">
      <div class="profile_info">
        <img src="<?php echo URLROOT; ?>/img/profile1.jpg" class="profile_image" alt="">
        <a href="<?php echo URLROOT; ?>/users/register" > <h4>Hettipola Supermarket</h4></a>
      </div>
       <button class="dropdown-btn" style="background-color: rgba(24, 23, 23, 0.8);" >
        <a href="home"><i class="fas fa-bars"></i><span>Products</span></a>
    </button>
    
    <button class="dropdown-btn" >
        <a  href="#"><i class="fas fa-bars"></i><span>My Order</span></a>
    </button>
    <div class="dropdown-container">
      <a href="index2"><i class="fas fa-bars"><span></i>New Order</span></a>
      <a href="accsort"><i class="fas fa-bars"><span></i>Rejected Order</span></a>
      <a href="reportsort"><i class="fas fa-bars"><span></i>Order Report</span></a>
    </div>
        <button class="dropdown-btn ">
            <a href="#"><i class="fas fa-bars"></i><span>Payment</span></a>
        </button>
        
          <div class="dropdown-container ">
            <a href="viewin" ><i class="fas fa-bars"><span></i>View Invoice</span></a>
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
          <a href="weeklysale"><i class="fas fa-bars"><span></i>Weekly Sale</span></a>
          <a href="editrate1"><i class="fas fa-bars"><span></i>Edit Rate</span></a>
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
                <a class="active" href="#home">Products</a>
               
                <input type="text" placeholder="Search..">
              </div>
              
    <div class = "gallery">
           
            <div class="c">
                <img src="<?php echo URLROOT; ?>/img/image/mango.jpg">
                <h3 style="background-color: yellowgreen;border-radius: 7px;">Mango - PC55</h3>
                <p style="text-align: center;color: #006b38ff;"><b>Selling rate - 190.00/=</b></p>
               
             
            
            
            </div>
            <div class="c">
                <img src="<?php echo URLROOT; ?>/img/image/nurserylive-seeds-tomato-round-desi-vegetable-seeds-16969384296588_300x@2x.jpg">
                <h3 style="background-color: yellowgreen;border-radius: 7px;">Tomato - PC56</h3>
                <p style="text-align: center;color: #006b38ff;"><b>Selling rate - 190.00/=</b></p>
                
             
              
            </div>
           <div class="c">
                <img src="<?php echo URLROOT; ?>/img/image/Premiumpumpkin@2x.png">
                <h3 style="background-color: yellowgreen;border-radius: 7px;">Pumpkin - PC57</h3>
                <p style="text-align: center;color: #006b38ff;"><b>Selling rate - 300.00/=</b></p>
               
             
            </div>
            <div class="c">
                <img src="<?php echo URLROOT; ?>/img/image/istockphoto-673162168-612x612.jpg">
                <h3 style="background-color: yellowgreen;border-radius: 7px;">Cabbage - PC58</h3>
                <p style="text-align: center;color: #006b38ff;"><b>Selling rate - 190.00/=</b></p>
                
              
            </div>
            <div class="c">
                <img src="<?php echo URLROOT; ?>/img/image/big-onion.jpg">
                <h3 style="background-color: yellowgreen;border-radius: 7px;">Big-Onion - PC59</h3>
                <p style="text-align: center;color: #006b38ff;"><b>Selling rate - 300.00/=</b></p>
             
              
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