<?php

include('config.php');
#insertion code 

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

#deletion code


if(isset($_GET['delete'])){
	$delete= $_GET['delete'];
	$sql="DELETE FROM budgettable WHERE id='$delete'";
	$query=mysqli_query($con,$sql);

	if($query>0){
		header("location:index.php");
	}
}

 ?>