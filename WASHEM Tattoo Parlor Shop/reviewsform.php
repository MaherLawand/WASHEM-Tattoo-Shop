<?php
session_start();
    include 'db.php';

    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $userreview= $_POST['userreview'];
    $userrating = $_POST['rating'];
    $submit = $_POST['submit'];

    $file= $_FILES['file'];
    $filename=$_FILES['file']['name'];
    $tmpfilename=$_FILES['file']['tmp_name'];
    $filesize=$_FILES['file']['size'];
    $fileerror=$_FILES['file']['error'];
    $y="";
    $big="File Size Too Big!";
    $error = "OOPS Something Went Wrong!";
    $type = "You can't upload files of this type!";

    $fileExt = explode('.',$filename);
    $filefinalext=strtolower(end($fileExt));

   $allowedtype = array('jpg','jpeg','png');

    if(in_array($filefinalext, $allowedtype )){ 
        if($fileerror === 0){
            if($filesize<1000000){
                $filenamenew=uniqid("", true). ".". $filefinalext;
                $filedestination = 'uploads/' . $filenamenew;
                move_uploaded_file($tmpfilename,$filedestination);
                header("Location:reviews.php");
                $query =mysqli_query($conn,"SELECT user_email FROM review WHERE user_email='" .$email. "'");
                $sql = "INSERT INTO review(first_name , last_name , user_email, user_review, user_rating, user_imgurl) VALUES ('$firstname','$lastname','$email','$userreview','$userrating','$filedestination')";
                mysqli_query($conn, $sql);
                $_SESSION['y'] ="";
                header("Location: reviews.php");
            }else{
                $_SESSION['y'] = $big;
            }
        }else{
            $_SESSION['y'] = $error;
        }
    }else{
        $_SESSION['y'] = $type;
    }

  
        
        

        
        header("Location: reviews.php");
    

    
?>
    
