<?php  
session_start();
  include 'db.php';
  $value = mysqli_query($conn,"SELECT user_id FROM booking LIMIT 1");
    if($value === false){
        $sqlbtable = "CREATE TABLE booking (
            user_id INT(50) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            user_fullname VARCHAR(256) NOT NULL,
            user_email VARCHAR(256) NOT NULL,
            user_number VARCHAR(13) NOT NULL,
            user_time VARCHAR(100) NOT NULL,
            user_date DATE NOT NULL
            
        )";
        mysqli_query($conn,$sqlbtable);
        $sql = "INSERT INTO booking(user_fullname , user_email, user_number, user_time, user_date) VALUES ('0','0','0','0', '0')";
        mysqli_query($conn, $sql);
    }
    

    $x = mysqli_query($conn,"SELECT user_id FROM booking");
    if(mysqli_num_rows($x)===1){
        $y=0;
    }else{
        $y=1;
    }

    
    
    
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
        
            <form action="Bookingform.php" method="POST">
            <div class="booking-form">
            <?php if($y!==0){$t=$_SESSION['s']; if( !empty($t) ){ echo'<p style="color:red;font-weight:bold;"> Booking and Time Already taken </p>'; }}?>

                <div class="name-wrap">
                     <input type="text" name="fullname" id="name" placeholder="Full Name" required>
                </div>
                <div class="email-number-wrap">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="number" name="number" id="number"  placeholder="Phone Number" required>
                   
                </div>  
                <br>
                <div class="date-wrap">
                    <input type="date" id="date" <?php if($y!==0){ $s=$_SESSION['s']; if( !empty($s) ){ echo'style="border:1px solid red;"';}} ?> placeholder="Pick A Date" name="date" required>
                  <!--  <label for="date" id="label-date"> Pick a Day </label> <br> --> 
                    <select id="options" style="color:white;<?php if($y){ $f=$_SESSION['s']; if( !empty($f) ){ echo'border:1px solid red;';}} ?>" name="time" required>
                        <option style="color:black;"> --Pick A Time </option>
                        <option <?php if($y !==0){ $style=$_SESSION['a']; if( empty($style) ){ echo'style="color:white;"'; }else{ echo'style="color:red;"';}} ?>> 12:00 PM </option>
                        <option <?php if($y !==0){ $style1=$_SESSION['b']; if( empty($style1) ){ echo'style="color:white;"'; }else{ echo'style="color:red;"';}} ?>> 1:30 PM </option>
                        <option <?php if($y !==0){ $style2=$_SESSION['c']; if( empty($style2) ){ echo'style="color:white;"'; }else{ echo'style="color:red;"';}} ?>> 3:00 PM </option>
                        <option <?php if($y !==0){ $style3=$_SESSION['d']; if( empty($style3) ){ echo'style="color:white;"'; }else{ echo'style="color:red;"';}} ?>> 5:30 PM </option>
                        <option <?php if($y !==0){ $style4=$_SESSION['e']; if( empty($style4) ){ echo'style="color:white;"'; }else{ echo'style="color:red;"';}} ?>> 7:00 PM </option>
                        <option <?php if($y !==0){ $style5=$_SESSION['f']; if( empty($style5) ){ echo'style="color:white;"'; }else{ echo'style="color:red;"';}} ?>> 8:30 PM </option>
                    </select> 
                </div>
                <div class="btn">
                    <input type="submit" name="submit" id="submit-btn" value="Confirm Booking">
                </div>
            </div>    
            </form>
</div>
        

    </div>
</body>
</html>


