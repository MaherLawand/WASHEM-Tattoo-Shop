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
    <link rel="stylesheet" href="socials.css">
    <script src="https://kit.fontawesome.com/3c65dc2b50.js" crossorigin="anonymous"></script>
    <script src="socials.js" defer></script>
    <script src="nav.js" defer></script>
    <script type="text/javascript" src="home.js" defer> </script>
    <style> 
        <?php 
        include 'C:/xampp/htdocs/Maher-WebProject3/socials.css';
        include 'C:/xampp/htdocs/Maher-WebProject3/nav.css'; 
        ?> 
</style>
</head>
<body>
    <div id="bg"></div>

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
    <div class="wrap-of-wrap">
        <div class="icon-wrap"> 
        <div> <i class="fa-brands fa-instagram logo " id="insta"> </i> </div> 
        <div> <i class="fa-brands fa-twitter logo" id="twitter">    </i> </div>
        <div> <i class="fa-brands fa-facebook-f logo" id="facebook"> </i> </div>
        <div> <i class="fa-brands fa-tiktok logo" id="tiktok"> </i> </div>
        </div>
    </div>
</div>

</body>
</html>