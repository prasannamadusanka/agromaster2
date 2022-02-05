<?php 
    class calender{
        private $month;
        private $year;
        private $days_of_week;
        private $num_days;
        private $date_info;
        private $day_of_week;

        public function __construct($month,$year,$days_of_week=array('SUN','MON','TUE','WED','THU','FRI','SAT')){
            $this->month=$month;
            $this->year=$year;
            $this->days_of_week=$days_of_week;
            $this->num_days=cal_days_in_month(CAL_GREGORIAN,$this->month,$this->year);
            $this->date_info=getdate(strtotime('first day of',mktime(0,0,0,$this->month,1,$this->year)));
            $this->day_of_week=$this->date_info['wday'];
        }

        public function show(){
            //month and year caption
            $output='<div class="current-date"> <h1>'.$this->date_info['month'].'     '.$this->year.'</h1> </div>';
            $output.='<table class="calender">';
            
            $output.='<tr>';

            //days of the week header
            foreach($this->days_of_week as $day){
                $output.='<th class="header">'.$day.'</th>';
            }

            //close header row and open first row of days
            $output.='</tr><tr>';

            //if first day of a month does not fall on a sunday then we need to fill bigining space using colspan
            if($this->day_of_week>0){
                $output.='<td colspan="'.$this->day_of_week.'"></td>';
            }

            //start num_day counter
            $current_day=1;

            //loop and build days
            while($current_day <= $this->num_days){
                //reset 'day of week' counter and clear each row if end of row
                if($this->day_of_week == 7){
                    $this->day_of_week=0;
                    $output.='</tr><tr>';
                }

                //make date as one variable
                $day = $this->year."-".$this->month."-";
                $day = $day.$current_day;

                //build each day cell
                
                if($current_day == date("d")){
                  $output.='<td class="today" align="center"><a href="'. URLROOT .'/Ddriverpages/availabilityview/'.$day.'" method="post">'.$current_day.'</a></td>';
                }else{
                  if($current_day > date("d")){
                    $output.='<td class="day" align="center"><a href="'. URLROOT .'/Ddriverpages/availabilityview/'.$day.'" method="post">'.$current_day.'</td>';
                  }else{
                    $output.='<td class="day" align="center">'.$current_day.'</td>';
                  }
                  
                }

                //increment counters
                $current_day++;
                $this->day_of_week++;
            }

            //once num_days counter stops,if day of week counter is not 7,then we need to fill the remaining space on the  row using colspan
            if($this->day_of_week != 7){
                $remaining_days=7-$this->day_of_week;
                $output.='<td colspan="'.$remaining_days.'"></td>';
            }

            //close final row and table
            $output.='</tr>';
            $output.='</table>';

            //output this ish
            echo $output;

        }


    }



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/driver/driver-availability-calender.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

  
      
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
    
      <button class="dropdown-btn">
        <a href="<?php echo URLROOT; ?>/Ddriverpages/availabilitycalender" method="post" style="background-color : #08161E;"><i class="fas fa-bars"></i><span>Availability</span></a>
      </button>
    
      
       <!-- <div class="dropdown-container">
        <a href="driver-newEntry.html" class="fas fa-bars">New Entry</a>
        <a href="driver-editEntry .html" class="fas fa-bars">Edit Entry</a>
      </div> -->
       
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="container">
        <div class="calendee_display">
          <div class="front">
            <?php 
                $calender=new calender(date("m"),date("Y"));
                $calender->show();
            ?>
          </div>
        </div>
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
      