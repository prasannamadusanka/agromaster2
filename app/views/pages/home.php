<!DOCTYPE html> 
    <html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agro master</title>
        <link href="<?php echo URLROOT; ?>/css/header.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo  URLROOT; ?>/css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo  URLROOT; ?>/css/homepage.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    width: 100%;
}
.container {
    height: 80px;
    width: 100%;
    background-color:#262626;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    overflow: hidden;
    padding-left: 6px;
    padding-right: 8vw;
    z-index: 1;
      position: fixed;
      background: #22242A;
      padding: 20px;
      width: calc(100% - 0%);
      top: 0;
      height: 30px;
}

.container .logo {
    max-width: 250px;
    padding: 0 10px;
    overflow: hidden;
}

.container .logo a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 60px;
    text-decoration: none;
  
    font-size: 14px;
}


.container .navbar {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    padding: 0 10px;
    margin-left: 50%;
}

  
        </style>
    </head>
    <!-- END HEAD -->
        <body>
            <div class="page-wrapper">
                <?php include_once('header.php'); ?>
                <div class="intro-section" style="background-color:#00BFA5">
                    <div class="intro-section-content">
                        <p class="intro-section-header">Online platform for build strong connectivity with collection center and outlets</p>
                        <p class="intro-section-hint">Find help with manage yout transportion system <br>with just few clicks</p> 
                        <a href="#">GET STARTED</a>
                    </div>
                    <img src="<?php echo URLROOT; ?>/img/farmer.png" width=400px; height=400px; alt="image">
                </div>
                <div class="services-section" id="about-us"  >
                    <div class="wave"  >
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"  style="background-color:#00BFA5"></path>
                        </svg>
                    </div>
                    <div class="services-section-upper" style="text-color:rgb(23, 162, 184)">
                        <h2>Welcome to Agro Master</h2><hr>
                        <img src="<?php echo URLROOT; ?>/img/services.png" alt="image" width=500px; height=400px;>
                        <ul>
                            <li style="text-color:rgb(23, 162, 184)">Mange your vegetable transportation and deliver good quality products</li><br>
                            <li>Manage employees in the collection center</li><br>
                            <li>Increase the budjet and sales of your company</li><br>
                            <li>Chat, pay, tip and review all through one platform.</li>
                        </ul>
                    </div>
                </div>
              
              
                    <div class="clients-section-header">
                        <h1><i class="fa fa-quote-left fa-3x" aria-hidden="true"></i>&emsp; Our Main satisfaction is customers</h1><hr>
                    </div>
                    <div class="clients-section-slideshow">
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                                <img src="<?php echo  URLROOT; ?>/img/feedback1.jpeg" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                <img src="<?php echo  URLROOT; ?>/img/feedback2.jpeg" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                <img src="<?php echo URLROOT; ?>/img/feedback3.jpeg" style="width:100%">
                            </div>
                        </div>
                        <br>
                        <div style="text-align:center">
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                        </div>
                    </div>
                </div>
               
                <div class="contact-section" id="contact-us">
                    <div class="wave">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                        </svg>
                    </div>
                    <img src="<?php echo URLROOT; ?>/img/callback_image.png" alt="image">
                    <div class="contact-section-form">
                        <form action="action_page.php">
                            <input type="text" id="name" name="name" placeholder="Name">

                            <input type="text" id="email" name="email" placeholder="Email">

                            <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

                            <button type="submit">Send Message <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </div>
                <?php include_once('footer.php'); ?>
            </div>
            <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {slideIndex = 1}    
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                    setTimeout(showSlides, 5000); // Change image every 2 seconds
                }
            </script>
        </body>
    </html>