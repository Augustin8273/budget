<?php

include('config.php');

if(isset($_POST['submit'])){
	$description =$_POST['descript'];
	$amount=$_POST['amount'];
	$category=$_POST['catego'];
	
	$sql="INSERT INTO budgettable(Description,Amount,category) VALUES ('$description','$amount','$category')";
	$query=mysqli_query($con,$sql);

	if($query>0){
		header("location:index.php");
	}
}

 ?>