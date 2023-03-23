<?php
session_start();  
  include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="test.css">
<script src="https://kit.fontawesome.com/3c65dc2b50.js" crossorigin="anonymous"></script>
<script src="test.js" defer> </script>
<script src="nav.js" defer> </script>
<style> 
        <?php 
        include 'C:/xampp/htdocs/Maher-WebProject3/test.css';
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
<div class="wrap-of">
  <div id="bg-img">
    <div class="wrap-of-everything">
      <div id="moving">
        <p class="descs" id="desc1" style="opacity: 1;"> WASH'EM TATTOO provides unique and custom work
          and our reviews speak for themselves as one of the best rated tattoo </p>
          <p class="descs" id="desc2" style="opacity:0;position: absolute;"> WASH'EM TATTOO provides unique and custom work </p>
      </div>
      <div class="buttons">
        <div class="btns" id="button1"></div>
        <div class="btns" id="button2"></div>
      </div>
      <div class="cards">
        <div id="booking"> 
          <h1> Booking </h1>
          <button id="book-btn" value="Book"> Book </button>
        </div>
        <div id="reviews">
           <h1> Reviews </h1> 
        <a href="reviews.php"> <button id="reviews-btn"> Review </button> </a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>