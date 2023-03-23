<?php
    include 'db.php';

    $userfullname = $_POST['fullname'];
    $useremail = $_POST['useremail'];
    $usernumber = $_POST['phonenumber'];
    $userimage = $_POST['image'];
    $usermessage = $_POST['usermsg'];
    $submitform = $_POST['submit'];
    
    $value = mysqli_query($conn,"SELECT user_id FROM contact LIMIT 1");
    if($value === true){

    if(isset($submitform) === true ) { 
    $sqlcf = "INSERT INTO contact(user_fullname , user_email , user_phonenumber, user_image, user_message) VALUES ('$userfullname','$useremail','$usernumber','$userimage','$usermessage')";
        mysqli_query($conn, $sqlcf);

        header("Location: contacttestclone.php?messagereceived");
    }
}else{
    $sqltable = "CREATE TABLE contact (
        user_id INT(50) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        user_fullname VARCHAR(256) NOT NULL,
        user_email VARCHAR(256) NOT NULL,
        user_phonenumber VARCHAR(12) NOT NULL,
        user_image LONGBLOB NOT NULL,
        user_message VARCHAR(256) NOT NULL
    )";
    mysqli_query($conn,$sqltable);
    if(isset($submitform) === true ) { 
        $sqlcf = "INSERT INTO contact(user_fullname , user_email , user_phonenumber, user_image, user_message) VALUES ('$userfullname','$useremail','$usernumber','$userimage','$usermessage')";
            mysqli_query($conn, $sqlcf);
    
            header("Location: contacttestclone.php?messagereceived");
}
}
?>