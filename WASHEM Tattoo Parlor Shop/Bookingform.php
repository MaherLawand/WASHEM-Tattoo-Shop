<?php
session_start();
    include 'db.php';

    $fullname=htmlspecialchars($_POST["fullname"]);
    $email=htmlspecialchars($_POST["email"]);
    $number=(int)$_POST["number"];
    $date= date("Y-m-d", strtotime($_POST['date']));
    $time =$_POST["time"];
    $book =$_POST["submit"];
    $style=0;
    $style1=0;
    $style2=0;
    $style3=0;
    $style4=0;
    $style5=0;
    $_SESSION['s']=0; 
    $_SESSION['a']=0;
    $_SESSION['b']=0;
    $_SESSION['c']=0;
    $_SESSION['d']=0;
    $_SESSION['e']=0;
    $_SESSION['f']=0;
    $_SESSION['num']=0;
            $sqlcheck=mysqli_query($conn,"SELECT * FROM booking WHERE user_time= '$time' AND user_date='$date' ");
            if(mysqli_num_rows($sqlcheck) > 0 ){
                $s='fdg';
                $_SESSION['s']=$s; 
                $checktime=mysqli_query($conn,"SELECT user_time FROM booking WHERE user_date='$date' ");
                $resultchecktime = mysqli_num_rows($checktime);
                if($resultchecktime>0){
                    $_SESSION['a']=$style;
                    $_SESSION['b']=$style1;
                    $_SESSION['c']=$style2;
                    $_SESSION['d']=$style3;
                    $_SESSION['e']=$style4;
                    $_SESSION['f']=$style5;
                while($row= mysqli_fetch_assoc($checktime)){
                    $data=$row['user_time'];
                if(!empty($date)){               
                if($data === "12:00 PM"){
                    $style='style="color:red;"';       
                    $_SESSION['a']=$style;
                }
                if($data === "1:30 PM"){
                    $style1='style="color:red;"';
                    $_SESSION['b']=$style1;
                }
                if($data === "3:00 PM"){
                    $style2='style="color:red;"';
                    $_SESSION['c']=$style2;
                }
                if($data === "5:30 PM"){
                    $style3='style="color:red;"';
                    $_SESSION['d']=$style3;
                }
                if($data === "7:00 PM"){
                    $style4='style="color:red;"';
                    $_SESSION['e']=$style4;
                }
                if($data === "8:30 PM"){
                    $style5='style="color:red;"';
                    $_SESSION['f']=$style5;
                }
               
            }
        }  
    } 
    header("Location:Booking.php");
                //echo "<script> alert('Booking date and time have already been taken!') </script>";
                    }
            else{
                $_SESSION['s']=0; 
    $_SESSION['a']=0;
    $_SESSION['b']=0;
    $_SESSION['c']=0;
    $_SESSION['d']=0;
    $_SESSION['e']=0;
    $_SESSION['f']=0;
    $_SESSION['num']=0;
                
        $sql = "INSERT INTO booking(user_fullname , user_email, user_number, user_time, user_date) VALUES ('$fullname','$email','$number','$time', '$date')";
        mysqli_query($conn, $sql);

        header("Location: bookingtest.php");
        ?>
      
          <?php  }
   
 ?>

