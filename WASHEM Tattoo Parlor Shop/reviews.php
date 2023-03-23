<?php
session_start();
    include_once 'db.php'; 
    $value = mysqli_query($conn,"SELECT user_id FROM review LIMIT 1");
    if($value === false){
        $sqltable = "CREATE TABLE review (
            user_id INT(50) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            first_name VARCHAR(256) NOT NULL,
            last_name VARCHAR(256) NOT NULL,
            user_email VARCHAR(256) NOT NULL,
            user_review VARCHAR(256) NOT NULL,
            user_rating INT(5) NOT NULL,
            user_imgurl VARCHAR(2000) NOT NULL
        )";
        mysqli_query($conn,$sqltable);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reviews.css">
    <script src="https://kit.fontawesome.com/3c65dc2b50.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="navforreview.js" defer> </script>
    <script type="text/javascript" src="home.js" defer> </script>
    <script type="text/javascript" src="reviews.js" defer> </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
    
    <style> 
        <?php 
        include 'C:/xampp/htdocs/Maher-WebProject3/reviews.css'; 
        include 'C:/xampp/htdocs/Maher-WebProject3/nav.css';
        ?> 
    </style>

</head>
<body>
<div class="row">
    <div class=col-md-12>
        <nav id="wrap">
            <div id=logo-contain>
                <div> WASH'EM TATTOO </div>
            </div>
            <div id="page-wrap" class="showup">
                <div class="pages" id="home"> Home </div>
                <div class="pages" id="about"> About </div>
                <div class="pages" id="blog"> Blog </div> 
                <div class="pages" id="contact"> Contact </div>
                <div class="pages" id="socials"> Socials </div>
                <div class="pages" id="faq"> FAQ </div>
            </div>
            <div id="icon" class="show one">
                 <i class="fa-solid fa-bars" id="bars"></i>
            </div>
            <div id="x" class="show">
                 <i class="fa-solid fa-xmark" style="font-size: 1.7rem;" id="xicon"> </i>
            </div>
        </nav>
    </div>
</div>
<?php
    $sqlnew = "SELECT * FROM review ORDER BY user_id DESC;";
    $resultnew = mysqli_query($conn, $sqlnew);
    $resultChecknew = mysqli_num_rows($resultnew);
    
    $sqlold = "SELECT * FROM review ORDER BY user_id ASC;";
    $resultold = mysqli_query($conn, $sqlold);
    $resultCheckold = mysqli_num_rows($resultold);
    
    $sqlavg = mysqli_query($conn,"SELECT AVG(user_rating) AS average FROM review;");
    $avgrow = mysqli_fetch_assoc($sqlavg);
    $resultavg = $avgrow['average'];
    


?>




<div class="row-wrap" style="width:100%;height:100%;margin-top:160px;">
   <div class="form-wrap"> 
    <div class="row" id="row-after-wrap" style="display:flex;align-items:center;justify-content:center;"> 
        <form action="reviewsform.php" method="POST" enctype="multipart/form-data" style="width:80%;">
            <div class="review-form" style="width:100%;display:flex;flex-direction:column;gap:5px;"> 
            <div>
                <?php 
                    if($resultChecknew===0){
                        echo ("<p> No reviews have been submitted yet! </p>");
                   }
                ?>
                <input type="text" name="firstname" id="first_name" required>
                <label for="firstname" id="firstname" style="color:white;"> First Name </label>
            </div>
                <br>
            <div>
                <input type="text" name="lastname" id="last_name" required>
                <label for="lastname" id="lastname" style="color:white;"> Last Name </label>
            </div>
                <br>
            <div>
                <input type="email" name="email" id="user_email" placeholder=" " required>
                <label for="email" id="email" style="color:white;"> Email </label>
            </div>
                <br>
            <div>
                <textarea id="review" name="userreview"> </textarea>
            </div>
                <div class="stars">
                    <i class="fa-solid fa-star" id="star1"></i>
                    <i class="fa-solid fa-star" id="star2"></i>
                    <i class="fa-solid fa-star" id="star3"></i>
                    <i class="fa-solid fa-star" id="star4"></i>
                    <i class="fa-solid fa-star" id="star5"></i>
                </div>
                <input type="hidden" name="rating" id="rating">      
                <input type="file" name="file">
                <?php if(isset($_SESSION['y'])){
                    $type=$_SESSION['y'];
                    ?> <p style="color:red;font-weight:bold;"> <?php echo $type ?> </p> <?php
                }
                 ?>
                <input type="submit" name="submit" id="submit-btn" value="Submit Review">
            </div>
        </form>
    </div>
</div>
    <br> <br>
<form method="POST">
    <div class="row" style="display:flex;justify-content:center;" id="filt">
        <div class=col-md-8 style="display:flex;justify-content:space-between;">
        <div id="avg-stars" style="width:30%;">
         <?php 
                    if(round($resultavg)==1){ ?>
                        Average Rating:
                        <i class="fa-solid fa-star" style="color:yellow;"></i>
                  <?php  } ?> <?php if(round($resultavg)==2){ ?>
                                    Average Rating:
                                        <i class="fa-solid fa-star" style="color:yellow;"></i>
                                        <i class="fa-solid fa-star" style="color:yellow;"></i>
                                        <?php } ?>  <?php if(round($resultavg)==3){ ?>
                                                        Average Rating:
                                                        <i class="fa-solid fa-star" style="color:yellow;"></i>
                                                        <i class="fa-solid fa-star" style="color:yellow;"></i>
                                                        <i class="fa-solid fa-star" style="color:yellow;"></i>
                                                            <?php } ?> <?php if(round($resultavg)==4){ ?>
                                                                Average Rating:
                                                                <i class="fa-solid fa-star" style="color:yellow;"></i>
                                                                <i class="fa-solid fa-star" style="color:yellow;"></i>
                                                                <i class="fa-solid fa-star" style="color:yellow;"></i>
                                                                <i class="fa-solid fa-star" style="color:yellow;"></i>
                                                        <?php } ?> <?php if(round($resultavg)==5){ ?>
                                                                        Average Rating:
                                                                        <i class="fa-solid fa-star" style="color:yellow;"></i>
                                                                        <i class="fa-solid fa-star" style="color:yellow;"></i>
                                                                        <i class="fa-solid fa-star" style="color:yellow;"></i>
                                                                        <i class="fa-solid fa-star" style="color:yellow;"></i>
                                                                        <i class="fa-solid fa-star" style="color:yellow;"></i>
                                                                    <?php } ?>  
                                                        </div>
        <div id="filter-div" style="width:25%;display:flex;">                              
            <select name="sorting" id="select-opt" style="width:100%;">
                <option> SORT BY </option>
                <option value="new" selected> Newest </option>
                <option value="old"> Oldest </option>
            </select>
            <button type="submit" name="filter" class="btn btn-primary" id="filter-btn" style="width:35%;"> Filter </button>
        </div>
        </div>
    </div>
</form>


<div class="row" style="display:flex;flex-direction:column;align-items:center;font-size:1rem;">
        <?php
        
        if( (isset($_POST['submit']) || isset($_POST['filter'])) && $_POST['sorting']== "old"){
            if($resultCheckold>0){
                while($row= mysqli_fetch_assoc($resultold)){
?>
                    <div class=col-md-8 id=content style="width:70%;"> 
                         <div id=firstrow>
                                <div> 
                                  <?php echo ucfirst($row['first_name']) ?>
                                  <?php echo ucfirst($row['last_name']) ?>
                                  <?php echo ":" ?> 
                                </div>  
                                <div id="starreviews"> 
                                    <?php
                                        if($row['user_rating']==1){ ?>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                    <?php  } ?> 
                                    <?php if($row['user_rating']==2){ ?>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                    <?php } ?> 
                                    <?php if($row['user_rating']==3){ ?>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                    <?php  } ?> <?php 
                                          if($row['user_rating']==4){ ?>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                    <?php } ?> 
                                    <?php if($row['user_rating']==5){ ?>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                            <i class="fa-solid fa-star" class="reviewstar"></i>
                                    <?php    } ?>
                                     
                                </div> 
                            </div>  
                            <div style="display:flex;justify-content:space-between;align-items:center;box-sizing:border-box;padding-bottom:15px;">
        <p id=userreview>  &#8221; <?php echo ucfirst($row['user_review']) ?>  &#8221; </p>
        <img src="<?php echo $row['user_imgurl'] ?>" style="width:200px;height:200px;"> </div> 
                 </div>
    <?php      }
      }else{
          echo "none";
      }
}else{ 
    if($resultChecknew>0){
        while($rows= mysqli_fetch_assoc($resultnew)){
    ?>
    <div class=col-md-8 id=content> 
    <div id="firstrow" style="box-sizing:border-box;padding-bottom:20px;">
           <div> 
             <?php echo ucfirst($rows['first_name']) ?>
             <?php echo ucfirst($rows['last_name']) ?>
             <?php echo ":" ?> 
           </div>  
           <div id="starreviews"> 
               <?php
                   if($rows['user_rating']==1){ ?>
                       <i class="fa-solid fa-star" class="reviewstar"></i>
                <?php  } ?> 
                <?php if($rows['user_rating']==2){ ?>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                <?php } ?> 
                <?php if($rows['user_rating']==3){ ?>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                <?php  } ?>
                <?php if($rows['user_rating']==4){ ?>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                <?php } ?> 
                <?php if($rows['user_rating']==5){ ?>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                        <i class="fa-solid fa-star" class="reviewstar"></i>
                <?php    } ?>
                
           </div> 
    </div>  
    <div style="display:flex;justify-content:space-between;align-items:center;box-sizing:border-box;padding-bottom:15px;">
        <p id=userreview>  &#8221; <?php echo ucfirst($rows['user_review']) ?>  &#8221; </p>
        <img src="<?php echo $rows['user_imgurl'] ?>" style="width:200px;height:200px;"> </div>
    </div>
<?php      }
    }
}
        


        ?>
</div>

</div>   
</body>
</html>