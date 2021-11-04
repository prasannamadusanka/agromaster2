<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/header.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/excess1.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/excess2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
    
    <script src="my.js"></script>
    <style>
     .item{
      background-color:#5bc0de;
    }
    .item:nth-child(odd){
      background-color: #5cb85c;
      ;
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

  <?php include_once('header.php'); ?>
    <div class="sidebar">
      <div class="profile_info">
        <img src="<?php echo URLROOT; ?>/img/profile.jpg" class="profile_image" alt="">
        <a href="<?php echo URLROOT; ?>/users/register" > <h4><?php echo $_SESSION['user_name']?></h4></a>
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
        
          <div class="dropdown-container">
          <a  href="<?php echo URLROOT; ?>/Collectioncenterpages/farmers"><i class="fas fa-bars"><span></i>Farmer mangement</span></a>
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
      <div class="dropdown-container drop-active">
        <a style="background-color: rgba(24, 23, 23, 0.8);" href="<?php echo URLROOT; ?>/Collectioncenterpages/orderNeccesity"><i class="fas fa-bars"><span></i>order</span></a>
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
       
        <div class="shopping-cart">
            <!-- Title -->
            <form>
            <div class="title">
              Order Neccesity
            </div>
            
            <!-- Product #1 -->
            <div class="item">
              <div class="buttons">
              <input type="checkbox">
              </div>
      
              <div class="image">
                <img width="120" height="80"src="<?php echo URLROOT; ?>/img/vegetables/carrot.jpg" alt="" />
              </div>
      
              <div class="description">
                <span>Carrot</span>
                <span>Vegetable</span>
                <span>Stock I.H. - 850kg</span>
              </div>
      
              <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                  <img src="plus.svg" alt="" />
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                  <img src="minus.svg" alt="" />
                </button>
              </div>
      
              <div class="total-price">Required quantity - 930kg</div>
            </div>
            <div class="item">
                <div class="buttons">
                <input type="checkbox">
                </div>
        
                <div class="image">
                  <img width="120" height="80" src="<?php echo URLROOT; ?>/img/vegetables/cabbage.jpg" alt="" />
                </div>
        
                <div class="description">
                  <span>Cabbage</span>
                  <span>vegetable</span>
                  <span>Stock I.H - 860kg</span>
                </div>
        
                <div class="quantity">
                  <button class="plus-btn" type="button" name="button">
                    <img src="plus.svg" alt="" />
                  </button>
                  <input type="text" name="name" value="1">
                  <button class="minus-btn" type="button" name="button">
                    <img src="minus.svg" alt="" />
                  </button>
                </div>
        
                <div class="total-price">Required quantity - 900kg</div>
              </div>
              <div class="item">
                <div class="buttons">
                <input type="checkbox">
                </div>
        
                <div class="image">
                  <img width="120" height="80"src="<?php echo URLROOT; ?>/img/vegetables/tomato.jpg" alt="" />
                </div>
        
                <div class="description">
                  <span>Tomato</span>
                  <span>vegetable</span>
                  <span>Stock I.H - 500kg</span>
                </div>
        
                <div class="quantity">
                  <button class="plus-btn" type="button" name="button">
                    <img src="plus.svg" alt="" />
                  </button>
                  <input type="text" name="name" value="0">
                  <button class="minus-btn" type="button" name="button">
                    <img src="minus.svg" alt="" />
                  </button>
                </div>
        
                <div class="total-price">Required quantity - 900kg</div>
              </div>
              <div class="item">
                <div class="buttons">
                <input type="checkbox">
                </div>
        
                <div class="image">
                  <img width="120" height="80"src="<?php echo URLROOT; ?>/img/vegetables/carrot.jpg" alt="" />
                </div>
        
                <div class="description">
                  <span>Common Projects</span>
                  <span>Bball High</span>
                  <span>White</span>
                </div>
        
                <div class="quantity">
                  <button class="plus-btn" type="button" name="button">
                    <img src="plus.svg" alt="" />
                  </button>
                  <input type="text" name="name" value="1">
                  <button class="minus-btn" type="button" name="button">
                    <img src="minus.svg" alt="" />
                  </button>
                </div>
        
                <div class="total-price">$549</div>
              </div>
            <!-- Product #2 -->
         
            <div style="margin-top: 20px;margin-bottom:30px;padding-left: auto;padding-right: auto;">
            <button id="save-but">Order now</button>
        </div>
        </form>
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
$('.minus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value > 1) {
    			value = value - 1;
    		} else {
    			value = 0;
    		}

        $input.val(value);

    	});

    	$('.plus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value < 100) {
      		value = value + 1;
    		} else {
    			value =value+1;
    		}

    		$input.val(value);
    	});

      $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
      });
    </script>


  </body>
</html>