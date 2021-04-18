<?php
$user_id = $_POST["userid"]; 
$pet_id = $_POST["petid"];

if($pet_id <0){
	$pet_id = -1*$pet_id;
	$conn = mysqli_connect("localhost","petmateadmin","rubenNshaivi","petmatedb"); 
	if(!$conn){
	echo "<script type='text/javascript'>alert('RELOAD:DATABASE CONNECTIVITY ERROR');</script>\n";
	}else{
	$sql = "DELETE FROM saves where user_id=$user_id and pet_id=$pet_id";
	echo "<script type='text/javascript'>console.log(\"$sql\");</script>";
	$result = mysqli_query($conn,$sql);
	mysqli_close($conn);
	if(!$result){
		echo "<script type='text/javascript'>alert('ERROR :COULD NOT REMOVE PETS FROM SAVES DUE TO DATABASE ISSUE');</script>";
	}else{
		echo "<script type='text/javascript'>alert('YOUR PET WITH ID=$pet_id WAS REMOVED FROM SAVES');</script>\n";
	}
}
}
else if($pet_id>0){
	$pet_id = -1*$pet_id;
	$conn = mysqli_connect("localhost","petmateadmin","rubenNshaivi","petmatedb"); 
	if(!$conn){
	echo "<script type='text/javascript'>alert('RELOAD:DATABASE CONNECTIVITY ERROR');</script>\n";
	}else{
	$sql = "INSERT INTO saves where user_id=$user_id and pet_id=$pet_id";
	echo "<script type='text/javascript'>console.log(\"$sql\");</script>";
	$result = mysqli_query($conn,$sql);
	mysqli_close($conn);
	if(!$result){
		echo "<script type='text/javascript'>alert('ERROR :COULD NOT ADD PETS TO SAVES DUE TO DATABASE ISSUE');</script>";
	}else{
		echo "<script type='text/javascript'>alert('PET WITH ID=$pet_id WAS PUT IN YOUR SAVED PETS');</script>\n";
	}	
}
}
?>