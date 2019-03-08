<?php

include('db.php');

$name=$_POST['name'];
$email=$_POST['email'];
$query=$_POST['comment'];

$subquery="INSERT INTO user (name, email, query) values ('$name', '$email','$query')";
$result=mysqli_query($con, $subquery);
if($result)
{
	echo '<script>alert("data inserted")</script>';
}
else
{
	echo '<script>alert("data not inserted")</script>';
}


?>