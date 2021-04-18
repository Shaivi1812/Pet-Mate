<?php 
session_start();
if(isset($_SESSION['userid'])){
    header("Location: user.php");
    exit;
}
?>
<!DOCTYPE html>
    <head>
        <meta charset='UTF-8'name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="/css/index.css">
        <link rel="stylesheet" href="/css/form.css">
        <link rel="stylesheet" href="/css/validation.css">
        <title>
            Pet Mate
        </title>
    </head>
<body>
    <?php include('navbar.php') ?>
	<div class="info">        
        <form id="account-form" action="signuser.php" method="post">
            <div class="form-control "> 
                <label  class="form-item" for=fname >FIRST NAME <span class="required">*</span></label>
                <input  class="form-item " type="text" id="fname" placeholder="Enter First Name" name="fname">
                <i class="fas fa-check-circle f2"></i>
                <i class="fas fa-exclamation-circle f2"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label  class="form-item" for=lname >LAST NAME <span class="required">*</span></label>
                <input  class="form-item " type="text" id="lname" placeholder="Enter Last Name" name="lname">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control"> 
                <label  class=form-item for="email" >EMAIL <span class="required">*</span></label>
                <input  class=form-item type="email" id="email"  placeholder="Enter email" name="email">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control"> 
                <label  class=form-item for="pass1">PASSWORD <span class="required">*</span></label>
                <input  class=form-item type="password" id="pass1" placeholder="Enter password" name="pass_word">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control"> 
                <label  class=form-item for="pass2">CONFIRM PASSWORD <span class="required">*</span></label>
                <input  class=form-item type="password" id="pass2" placeholder="Confirm password" required>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <button class=form-item  type="button"><i class="fa fa-sign-in "></i> Sign in</button>
        </form>
    </div>
        <form id='getuserform' style="visibility: hidden" method="GET" action="user.php">
<!--             <input type="text" name="userid" id=userid> -->
        </form>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="/js/user_validate.js"></script>
    <script src="/js/back_animations.js"></script>
    <?php 
if(isset($_POST['fname'])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["pass_word"];
    
    // echo "<script type='text/javascript'>console.log('$type,$name,$country,$region,$city,$address,$mail,$phone,$pass')</script>";
    $sql = "INSERT INTO petmate_users values(NULL,'$fname','$lname','$email','$password',DEFAULT);";
    $conn = mysqli_connect("localhost","petmateadmin","rubenNshaivi","petmatedb");
    if(!$conn){
        echo "<script type='text/javascript'>alert('DATABASE CONNECTIVITY ERROR:PLEASE RELOAD')</script>";
        exit;
    }
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "<script type='text/javascript'>alert('EMAIL AREADY USED PLS TRY AGAIN!!')</script>";
        echo "<script type='text/javascript'>console.log(\"$sql\")</script>";
        mysqli_close($conn);
        exit;
    }
    $sql = "SELECT MAX(user_id) as curr_user_id from petmate_users";
    $result = mysqli_query($conn,$sql);
    if($result===false){
        echo "<script type='text/javascript'>alert('Account COULD NOT BE retrieved PLS TRY AGAIN!!')</script>";
        echo "<script type='text/javascript'>console.log(\"$sql\")</script>";
        mysqli_close($conn);
        exit;
    }
    $numrows = $result->num_rows;
    if($numrows===0){
        echo "<script type='text/javascript'>alert('Account COULD NOT BE retrieved PLS TRY AGAIN!!')</script>";
        echo "<script type='text/javascript'>console.log(\"$sql\")</script>";
        mysqli_close($conn);
        exit;
    }
    $fetched = mysqli_fetch_all($result,MYSQLI_ASSOC);
    $curr_user_id = $fetched[0]['curr_user_id'];
    $_SESSION['userid'] = $curr_user_id;
    mysqli_free_result($result);
    mysqli_close($conn);
    echo "<script type='text/javascript'>console.log(\"$curr_user_id\")</script>\n";
    // echo "<script type='text/javascript'>$('#userid').val('$curr_user_id')</script>\n";
    echo "<script type='text/javascript'>$('#getuserform').submit()</script>";

    // header("Location:/petmate/account.php?accid=$curr_acc_id");
}
 ?>
</body>
</html>
