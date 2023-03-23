<?php
session_start();
  include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Booking.css">
    <script src="https://kit.fontawesome.com/3c65dc2b50.js" crossorigin="anonymous"></script>
    <script src="nav.js" defer></script>
    <script type="text/javascript" src="home.js" defer> </script>

<style> 
        <?php 
        include 'C:/xampp/htdocs/Maher-WebProject3/Booking.css'; 
        include 'C:/xampp/htdocs/Maher-WebProject3/nav.css';
        ?> 
</style>
</head>
<body>
    <nav id="wrap">
        <div id=logo-contain>
            <div> WASH'EM TATTOO  </div>
        </div>
        <div id="page-wrap" class="showup">
            <div class="pages" id="home"> Home </div>
            <div class="pages" id="about"> About </div>
            <div class="pages" id="blog"> Blog </div> 
            <div class="pages" id="contact"> Contact </div>
            <div class="pages" id="socials"> Socials </div>
            <div class="pages" id="faq"> FAQ </div>
         </div>
         <div id="icon" class="show one"> <i class="fa-solid fa-bars" id="bars"></i> </div>
         <div id="x" class="show"> <i class="fa-solid fa-xmark" style="font-size: 1.7rem;" id="xicon"></i> </div>
    </nav>
    <div class="booking-form-wrap"> 
        <div class="wrap-of">
        
            <div class="booking-form" style="background: rgba(255, 255, 255, 0.5);
                            border-radius: 16px;
                            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                            backdrop-filter: blur(5.2px);
                            -webkit-backdrop-filter: blur(5.2px);
                            border: 1px solid rgba(255, 255, 255, 0.3);">
                <h1 style="color:black;">  Succesfully booked </h1>
                <p style="color:black;"> Can't Wait To See You! </p>
                </div>
            </div>    
</div>
        

    </div>
</body>
</html>