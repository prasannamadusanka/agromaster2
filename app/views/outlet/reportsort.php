<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/reportsort1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
    <style>
   
     .new{
        background-color: rgba(255,255,255, 0.1);
         
         border:1px solid #006b38ff;
         border-top:0px
         width: 1000px;
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

.content{
  width: 81%; margin-top: 60px;padding: 20px;margin-left: 250px;background: url('<?php echo URLROOT; ?>/img/background1.jpg') no-repeat;
      background-position: center;
      background-color: cyan;
      background-size: cover;
      height: 900px;
      transition: 0.5s;
}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}
input[type=submit],input[type=reset]{

          background-color: #006b38ff;
          border: none;
          color: white;
          cursor: pointer;
         }
         input[type=submit]:hover {
    background-color: #0666a3;
    }
    .btn-block {
    margin-top: 5px;
    text-align: left;
    font-size:15px;
    }
    .btn-hlock {
    margin-top: 20px;
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
    background-color:#013220;
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
    
    <button class="dropdown-btn" style="background-color: rgba(24, 23, 23, 0.8);">
        <a  href="#"><i class="fas fa-bars"></i><span>My Order</span></a>
    </button>
    <div class="dropdown-container drop-active" style="display:block">
      <a href="index2"><i class="fas fa-bars"><span></i>New Order</span></a>
      <a href="accsort"><i class="fas fa-bars"><span></i>Rejected Order</span></a>
      <a href="reportsort" style="background-color: rgba(24, 23, 23, 0.8);"><i class="fas fa-bars"><span></i>Order Report</span></a>
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
           
             




<table padding-top="0px">
      <tr> 
        <td>
        <div class="btn-hlock" style="align:left; padding-bottom:13px; padding-right:10px; padding-left:10px;">
                <button type="select" href="/" disabled>Sorted By</button> </div><td width="1020px">
                
</td>

<td>
        <div class="btn-hlock" style="align:left; padding-bottom:13px; padding-right:10px; padding-left:10px;">
                <button type="select" href="/" disabled style="font-size:13px">Payment Status</button> </div><td width="1020px">
                <select>
                  <option value="">Not Paid</option>
                  <option value="1">Done</option>
                  
                </select>
</td>
       

<td>
        <div class="btn-hlock" style="align:left; padding-bottom:13px; padding-right:10px; padding-left:30px;">
    <button type="sort" href="/" disabled>Date</button></div><td width="620px" padding-left="20px">
               <input type="date" name="name" required/>
                <i class="fas fa-calendar-alt"></i>
</td>
            
</td>

      </tr>
    </table>


              <table id="customers">
                <tr>
    <tr>
    <th>Invoice No         </th>
    <th>Ordered Date      </th>
   <th>Delivered Date</th>
    <th></th>
  </tr>
  <tr>
    <td> 42011</td>
    <td>29/11/2021</td>
    <td>-</td>
     <td><a style="background-color:#006b38ff;border-radius: 7px" href="rep1">more</a></td>
   
  </tr>
  <tr>
    <td> 45214</td>
    <td>14/11/2021</td>
   <td>-</td>
     <td><a style="background-color:#006b38ff;border-radius: 7px" href="rep">more</a></td>
    
  </tr>
 
  <tr>
    <td> 56218</td>
    <td>05/11/2021</td>
   <td>08/11/2021</td>
     <td><a style="background-color:#006b38ff;border-radius: 7px" href="rep">more</a></td>
    
  </tr>

   <tr>
    <td> 65424</td>
    <td>28/10/2021</td>
    <td>05/11/2021</td>
     <td><a style="background-color:#006b38ff;border-radius: 7px" href="rep">more</a></td>
    
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