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
    <link rel="stylesheet" href="faq.css">
    <script src="https://kit.fontawesome.com/3c65dc2b50.js" crossorigin="anonymous"></script>
    <script src="nav.js" defer></script>
    <script src="faq.js" defer> </script>
<style> 
        <?php 
        include 'C:/xampp/htdocs/Maher-WebProject3/faq.css';
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
    <div class="question-wrap">
        <div class="questions-wrap" id="question1-wrap">
            <div id="question1" class="questions">    
               <div> <i class="fa-solid fa-plus plus"  style="margin-left: 10px;"></i> <i class="fa-solid fa-minus minus"  style="display:none;margin-top: 15px;"></i> &nbsp;</div> 
               <div> <p> How old do i have to be? </p> </div>
                <!-- we dont accept people under the age of 18 -->
            </div>
            <div class="answers" id="answer1"> <p> we dont accept people under the age of 18 </p></div>
        </div>
        <div class="questions-wrap" id="question2-wrap">
            <div id="question2" class="questions">
                <div> <i class="fa-solid fa-plus plus"  style="margin-left: 10px;"></i> <i class="fa-solid fa-minus minus"  style="display:none;margin-top: 15px;"></i> &nbsp; </div>
                <div> <p> What forms of payment do you accept? </p> </div>
                <!-- We take debit, credit and cash. Cash is always preferred! -->
            </div>
            <div class="answers" id="answer2"> <p> We take debit, credit and cash. Cash is always preferred! </p></div>
        </div>
        <div class="questions-wrap" id="question3-wrap">
            <div id="question3" class="questions">
                <div> <i class="fa-solid fa-plus plus"  style="margin-left: 10px;"></i> <i class="fa-solid fa-minus minus"  style="display:none;margin-top: 15px;"></i> &nbsp; </div>
                <div> <p> Do I need to bring ID with me? </p> </div>
                <!-- Yes, in order to confirm your age, 
                we cant perform the tattoo not unless we are sure that you're above 18-->
            </div>
            <div class="answers" id="answer3"> <p> Yes, in order to confirm your age, 
                we cant perform the tattoo not unless we are sure that you're above 18 </p></div>
        </div>
        <div class="questions-wrap" id="question4-wrap" >
            <div id="question4" class="questions">
                <div> <i class="fa-solid fa-plus plus"  style="margin-left: 10px;"></i> <i class="fa-solid fa-minus minus"  style="display:none;margin-top: 15px;"></i> &nbsp; </div>
                <div>  <p> Does it hurt? </p> </div>
                <!-- Of course, but we will make it
                as comfortable as possible for you. -->
            </div>
            <div class="answers" id="answer4"> <p> Of course, but we will make it
                as comfortable as possible for you. </p></div>
        </div>
    </div>
</div>


</body>
</html>