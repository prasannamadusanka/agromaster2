<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
   
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/home1.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/home.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/header.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/expenses.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
    <style>
 .content{
width: (100% - 250px); margin-top: 60px;padding: 20px;margin-left: 250px;background: url('<?php echo URLROOT; ?>/img/background.jpg') no-repeat;
  background-position: center;
  background-color: cyan;
  background-position: center;
  transition: 0.5s;
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
     
      <button class="dropdown-btn" style="background-color: rgba(24, 23, 23, 0.8);">
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

    <div class="content">
    
    <div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Expense Report Genaration</h1>
    </div>
    <div class="form-content">
      <form method="POST" action="<?php echo URLROOT; ?>/collectioncenterpages/expensesReport">
        <div class="form-group">
          <label for="year">Year</label>
          <input id="year" type="text" name="year" required="required"/>
        </div>
        <div class="form-group">
          <label for="month">Month</label>
          <input list="month"  type="text" id="month"name="month" >
            <datalist id="month">
              <option value="January">
              <option value="February">
              <option value="March">
              <option value="April">
              <option value="May">
              <option value="June">
              <option value="July">
              <option value="August">
              <option value="September">
              <option value="Octomber">
              <option value="November">
              <option value="December">
            </datalist>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea id="description" style="background-color:rgba(0, 0, 0, 0.1)" name="description" rows="7" cols="60" required="required">
</textarea>
        </div>
        <div class="form-group">
          <label for="total">Total expense(Rs.)</label>
          <input id="total" type="number" name="total" step="any" min="0" max="1000000" required="required">
</textarea>
        </div>
        <div class="form-group">
          <label class="form-remember">
            <input type="checkbox"/>Remember Me
          </label><a class="form-recovery" href="<?php echo URLROOT; ?>/collectioncenterpages/previousReports">Previous Reports</a>
        </div>
        <div class="form-group">
          <button type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <div class="form-panel two">
  
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

function myFunction() {
  var input, filter, gallery, tr, td, i, txtValue;
  input = document.getElementById("searchterm");
  console.log(input.value)
  //filter = input.value.toUpperCase();
  gallery = document.getElementsByTagName("form");
  tr = document.getElementsByTagName("form");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("h3").value;
    console.log(td);
    if (td) {
      txtValue = td;
     
    }       
  }
}

    </script>


  </body>
</html>