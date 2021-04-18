<?php
session_start();
if(isset($_SESSION['accid'])){
    header("Location: account.php");
    exit;
}
else if(isset($_SESSION['userid'])){
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
        <title>
            Pet Mate
        </title>
        <style type="text/css">
        	span.underline{
		    	display: block;
			    border: 0;
			    height: 3px;
			    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(255, 255, 255, 0.4), rgba(0, 0, 0, 0));
   		 	}
   		 	#aboutheading{
    			text-align: center;
                color: rgb(250,250,250);
    			text-shadow: 0px 0px 10px white;
    			font-size: 100px;
    			margin-top: 30vh;
    			padding-bottom: 30vh;
    		}
        </style>
    </head>
<body>
<?php include('navbar.php') ?>
<h1 id=aboutheading><i class="fas fa-paw"></i>PETMATE<span class=underline></span></h1>
<h6>Find one for you!</h6>
<script src="/js/back_animations.js"></script>
</body>
</html>