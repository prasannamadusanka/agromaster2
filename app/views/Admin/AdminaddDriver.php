<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin/AdminaddDriver.css">
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
        <a href="<?php echo URLROOT; ?>/Adminpagesd/driveraddrequest" method="post" style="background-color : #08161E;"><i class="fas fa-bars"></i><span>Driver Adding Requests</span></a>
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
      <!-- <img src="RHA.jpg" class="bellicon"> -->

      <div class="form">
        <form action="<?php echo URLROOT; ?>/Adminpagesd/driveraddrequest" method="post">
          <h4>From - Intermediate Transport Operator</h4>
          <!-- <div>
            <label>Name - </label> <input type="text" name="name" size="55" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>"><br><br>
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div>
          <label>Age - </label> <input type="text" name="age" size="55" class="form-control form-control-lg <?php echo (!empty($data['age_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['age']; ?>"><br><br>
            <span class="invalid-feedback"><?php echo $data['age_err']; ?></span>
          </div>
          <div>
          <label>Address - </label> <input type="text" name="address" size="55" class="form-control form-control-lg <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['address']; ?>"><br><br>
            <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
          </div>
          <div>
          <label>Contact number - </label> <input type="text" name="con_number" size="55" class="form-control form-control-lg <?php echo (!empty($data['con_number_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['con_number']; ?>"><br><br>
            <span class="invalid-feedback"><?php echo $data['con_number_err']; ?></span>
          </div>
          <div>
          <label>E-mail - </label> <input type="email" name="email" size="55" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>"><br><br>
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div>
          <label>Initial Username - </label> <input type="text" name="init_username" size="55" class="form-control form-control-lg <?php echo (!empty($data['init_username_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['init_username']; ?>"><br><br>
            <span class="invalid-feedback"><?php echo $data['init_username_err']; ?></span>
          </div>
          <div>
          <label>Initial Password - </label> <input type="password" name="init_password" size="55" class="form-control form-control-lg <?php echo (!empty($data['init_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['init_password']; ?>"><br><br>
            <span class="invalid-feedback"><?php echo $data['init_password_err']; ?></span>
          </div>
          <div>
          <div class="col"> 
            <input type="submit" value="ADD" class="btn btn-success btn-block">
          </div>
          <button>Reject</button> -->

          <table id="edit">
            <tr>
              <td>Name -</td>
              <td><div contenteditable="true"><?php echo $data['outlet']-> center_name; ?></div></td>
            </tr>
            <tr>
              <td>Address - </td>
              <td><div contenteditable="true"><?php echo $data['outlet']-> address; ?></div></td>
            </tr>
            <tr>
              <td>Contact number - </td>
              <td><div contenteditable="true"><?php echo $data['outlet']-> Contact_Number; ?></div></td>
            </tr>
            <tr>
              <td>E-mail - </td>
              <td><div contenteditable="true"><?php echo $data['outlet']-> email; ?></div></td>
            </tr>
            <tr>
              <td>Manager - </td>
              <td><div contenteditable="true"><?php echo $data['outlet']-> requester_name; ?></div></td>
            </tr>
          </table>
<br>

          <div class="col"> 
            <table>
              <tr>
                <td align="center">
                <input type="submit" value="ADD" class="add">
                </td>
              </tr>
              <tr>
                <td align="center">
                <input type="submit" value="Reject" class="add">
                </td>
              </tr>
              
            </table>
            
            <!-- <a href="<?php echo URLROOT; ?>/Adminpagesoutlet/outletlist" class="btn btn-light btn-block"></a> -->
          </div> 
          <!-- <button onclick="sendRejectionMail()" action="<?php echo URLROOT; ?>/Adminpagesoutlet/oaddrequest"  method="post">Reject</button> -->
        </form>

        <!-- <button onclick="sendRejectionMail()" action="<?php echo URLROOT; ?>/Adminpagesoutlet/oaddrequest"  method="post">Reject</button> -->
        <!-- <script>
        function sendRejectionMail() {
            $to = $data['outlet']->email;
            $subject = 'regarding adding outlet request';
            $message = "your request rejected. Please check the details and retry.";
            $headers = 'From: [your_gmail_account_username]@gmail.com' . "\r\n" .
                        'MIME-Version: 1.0' . "\r\n" .
                        'Content-type: text/html; charset=utf-8';
            // $mailResult = mail($to, $subject, $message, $headers);
            // if($mailResult){
            //   echo "Email sent";
            // }else{
            //   echo "Email sending failed";
            // }
            mail($to, $subject, $message, $headers);
	          
        }
        </script> -->
          
        </form>
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
      