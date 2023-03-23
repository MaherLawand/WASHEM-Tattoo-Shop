<?php  
  include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contacttestclone.css">
    <script src="https://kit.fontawesome.com/3c65dc2b50.js" crossorigin="anonymous"></script>
    <script src="nav.js" defer></script>
    <script type="text/javascript" src="home.js" defer> </script>

<style> 
        <?php 
            include 'C:/xampp/htdocs/Maher-WebProject3/contacttestclone.css'; 
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

    <div class="map-contact-wrap">
        <div class="map">   <iframe src="https://my.atlistmaps.com/map/a2dd1c02-c2c9-48cf-b0be-9f9f8f17493f?share=true"
             allow="geolocation"
              width="100%"
               height="600px"
                frameborder="0"
                 scrolling="no"
                  allowfullscreen
                  id="map";
                  ></iframe>
        </iframe>
        <div class="contacts">
        <div id="address-wrap">   <div id="address" style="box-sizing:border-box;padding:10px;padding-top:0;"> <h2> Address </h2>  <br> <p>  Hamra Adonis Street </p>  <p> Next To Captain's Cabin </p> </div> </div> 
        <div id="email-wrap">   <div id="our-email" style="box-sizing:border-box;padding:10px;padding-top:0;">  <h2> Email </h2> <br> <p> INKREDIBLE@gmail.com </p></div> </div> 
        <div id="number-wrap">   <div id="our-number" style="box-sizing:border-box;padding:10px;padding-top:0;"> <h2> Number </h2> <br> <p> 70300981 </p> <p> 01945934 </p></div> </div> 
        </div>
        </div>      
    </div>

    <div id="form-wrap-row"> 
            <div id="form">
                <div> 
                    <h1> YOUR MESSAGE HAS BEEN DELIVERED!</h1> 
                </div>
                <div>
                    <h2>WE WILL GET BACK TO YOU SHORTLY! </h2>
                </div>
                <div> 
                    <i class="fa-solid fa-check" style="color:green;font-size:2rem;"></i> 
                </div>
            </div>
    </div>
</body>
</html>