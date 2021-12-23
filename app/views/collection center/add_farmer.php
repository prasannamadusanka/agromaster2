<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <header style="height:60px">
       
        <div class="left_area">
          <h3>Agro <span>Master</span><span style="margin-left:24%;font-family: z;font-weight: 800 ;">Your reliable delivery partner</span></h3>
        </div>
        <div class="right_area">
          <a href="<?php echo URLROOT; ?>/pages/home" class="logout_btn">Home</a>
        </div>
       
      </header>
      <div style="background-color:#f0f2f5;height:1000px" class="row">
      <img src="<?php echo URLROOT; ?>/img/background.jpg" alt="Girl in a jacket" width=100% height=1300px style="margin-top:60px">
      <div style="margin-top:50px;left:30%;position:absolute;" class="col-md-5 mx-auto">
      <div class="card card-body bg-primary mt-5">
      <?php flash('register_success'); ?>
        <h2>Add new farmer</h2>
        <p>Please fill out this form to crete new farmer account</p>
        <form action="<?php echo URLROOT; ?>/users/register" method="post">
          <div class="form-group">
            <label for="name">Farmer name: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="address">Home address: <sup>*</sup></label>
            <input type="text" name="address" class="form-control form-control-lg <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['address']; ?>">
            <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
          </div>
          <div class="form-group">
            <p>Prefered vegetables<p>
          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> I have a bike</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> I have a car</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> I have a boat</label><br><br>
 
          </div>
          <div class="form-group">
            <label for="con_number">Contact number: <sup>*</sup></label>
            <input type="text" name="con_number" class="form-control form-control-lg <?php echo (!empty($data['con_number_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['con_number']; ?>">           
             <span class="invalid-feedback"><?php echo $data['con_number_err']; ?></span>
          </div>
       

          <div class="row">
            <div class="col">
              <input type="submit" value="Register" class="btn btn-dark btn-block">
            </div>
            <div class="col">
              <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Back</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </body>
</html>