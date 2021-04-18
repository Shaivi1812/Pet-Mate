<?php 
session_start();
if(isset($_SESSION['accid'])){
    header("Location: account.php");
    exit;
}
?>
<!DOCTYPE html>
    <head>
        <meta charset='UTF-8'name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.5/css/intlTelInput.min.css" integrity="sha512-yye/u0ehQsrVrfSd6biT17t39Rg9kNc+vENcCXZuMz2a+LWFGvXUnYuWUW6pbfYj1jcBb/C39UZw2ciQvwDDvg==" crossorigin="anonymous" />
        <link rel="stylesheet" href="/css/index.css">
        <link rel="stylesheet" href="/css/form.css">
        <link rel="stylesheet" href="/css/sign_acc.css">
        <link rel="stylesheet" href="/css/validation.css">
        <title>
            Pet Mate
        </title>
    </head>
<body>

	<?php include('navbar.php') ?>

	<div class="info">        
        <a href="login.php">Already have an account ?</a>
		
		<form id=account-form action="signacc.php" method="post">

		<p>*Reload The Page if Country,Region,City Is Not Set Automatically</p>
		<label for=type>WHAT ARE YOU?</label>
		<div id="type">
			<div><label for=type1>a pet-shop </label><pre> </pre><div class="radiostyle"> <input id=type1 type="radio" name="type" value="1" checked></div></div>
			<div><label for=type2>an animal welfare organisation  </label><pre> </pre><div class="radiostyle"> <input id=type2 type="radio" name="type" value="2"></div></div>
		</div>

		<div class="form-control">
	    	<label class="form-item" for="name">PET-SHOP/ORGANISATION NAME</label>
			<input class="form-item" id="name" type="text" name="name" >    
	        <i class="fas fa-check-circle"></i>
	        <i class="fas fa-exclamation-circle"></i>
	        <small>Error message</small>
        </div>
			
		
		<div class="form-control">
			<label class="form-item" for="country" >COUNTRY</label>
			<p>*COUNTRY,CITY,REGION Will Be Set Automatically from your IP</p>
			<input class="form-item" id="country" type="text" name="country">
	        <i class="fas fa-check-circle"></i>
	        <i class="fas fa-exclamation-circle"></i>
	        <small>Error message</small>
        </div>
		
		
		<input id="country_iso2" style="display:none" type="text" name="country_iso2" disabled>
		<!-- <input type="text" id = "country2"  name="country2" style="visibility: hidden;"> -->

		<div class="form-control">
			<label class="form-item" for="region" >REGION</label>
			<input class="form-item" type="text" name="region" id="region">
	        <i class="fas fa-check-circle"></i>
	        <i class="fas fa-exclamation-circle"></i>
	        <small>Error message</small>
        </div>
		<!-- <input type="text" id = "region2"  name="region2" style="visibility: hidden"> -->

		<div class="form-control">
			<label class="form-item" for="city">CITY</label>
			<input class="form-item" id="city" type="text" name="city">        
	        <i class="fas fa-check-circle"></i>
	        <i class="fas fa-exclamation-circle"></i>
	        <small>Error message</small>
        </div>
        <!-- <input type="text" id = "city2"  name="city2" style="visibility: hidden"> -->
		

		<div class="form-control">
	    	<label class="form-item" for="mail">EMAIL</label>
			<input class="form-item" id="mail" type="email" name="mail" >    
	        <i class="fas fa-check-circle"></i>
	        <i class="fas fa-exclamation-circle"></i>
	        <small>Error message</small>
        </div>
		

		<div class="form-control">
	    	<label class="form-item" for="phone">PHONE</label>
	    	<input class="form-item" type="tel" id="phone" name="phone">    
	        <i class="fas fa-check-circle"></i>
	        <i class="fas fa-exclamation-circle"></i>
	        <small>Error message</small>
        </div>
		
	    <input style="visibility: hidden" id="dial_code" type="text" name="dial_code">

	    <div class="form-control">
			<label class="form-item" for="address">ADDRESS</label>
			<p class="form-item">*address for users who plan on visiting you to get the mate you found for them</p>
			<textarea class="form-item" wrap="soft" id="address" name="address" rows=5 cols=20 ></textarea>	        
	        <i class="fas fa-check-circle"></i>
	        <i class="fas fa-exclamation-circle"></i>
	        <small>Error message</small>
        </div>
		

		<div class="form-control">
	    	<label class="form-item" for="pass">PASSWORD</label>
			<input class="form-item" id="pass" type="password" name="pass">    
	        <i class="fas fa-check-circle"></i>
	        <i class="fas fa-exclamation-circle"></i>
	        <small>Error message</small>
        </div>
		

		<div class="form-control">
	        <label class="form-item" for="repass">CONFIRM PASSWORD</label>
			<input class="form-item" id="repass" type="password" name="repass">
	        <i class="fas fa-check-circle"></i>
	        <i class="fas fa-exclamation-circle"></i>
	        <small>Error message</small>
        </div>

		<button class=form-item type=button value='created' name='create_acc'>Create Account!!</button>
		</form>
		<form id='getaccform' style="visibility: hidden" method="GET" action="account.php">
		</form>
    </div>
    <iframe src="" name="for_acc" style="display: none;"></iframe>
 	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
    <script src="/js/radio_paw.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.5/js/intlTelInput.min.js" integrity="sha512-P1duBYrnV48wVwdgs1SHIpqeFtNnez33h/bMdJOiAaK1A1Mu0NbgMtNm2AmDBh5PrkDiHoZ895B8aZsgnH894g==" crossorigin="anonymous"></script>
    <script src="/js/acc_validate.js"></script>
<script src="/js/back_animations.js"></script>
<?php 
if(isset($_POST['type'])){
	$type = $_POST["type"];
	$name = $_POST["name"];
	$country = $_POST["country"];
	$region = $_POST["region"];
	$city = $_POST["city"];
	$address = $_POST["address"];
	$mail = $_POST["mail"];
	$phone = $_POST["dial_code"].str_replace(' ','',$_POST["phone"]);
	$pass = $_POST["pass"];
	// echo "<script type='text/javascript'>console.log('$type,$name,$country,$region,$city,$address,$mail,$phone,$pass')</script>";
	$sql = "INSERT INTO account_info values(NULL,$type,'$name','$country','$region','$city','$address','$mail','$phone','$pass',DEFAULT)";

	$conn = mysqli_connect("localhost","petmateadmin","rubenNshaivi","petmatedb");
	if(!$conn){
		echo "<script type='text/javascript'>alert('DATABASE CONNECTIVITY ERROR:PLEASE RELOAD')</script>";
		exit;
	}
	$result = mysqli_query($conn,$sql);
	if(!$result){
		echo "<script type='text/javascript'>alert('EMAIL ALREADY USED PLS TRY AGAIN!!')</script>";
		echo "<script type='text/javascript'>console.log(\"$sql\")</script>";
		mysqli_close($conn);
		exit;
	}
	$sql = "SELECT MAX(acc_id) as curr_acc_id from account_info";
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
	$curr_acc_id = $fetched[0]['curr_acc_id'];
	mysqli_free_result($result);
	mysqli_close($conn);
	$_SESSION['accid']=$curr_acc_id;
	echo "<script type='text/javascript'>console.log(\"$curr_acc_id\")</script>\n";
	// echo "<script type='text/javascript'>$('#accid').val('$curr_acc_id')</script>\n";
	echo "<script type='text/javascript'>$('#getaccform').submit()</script>";
}
 ?>
</body>
</html>


