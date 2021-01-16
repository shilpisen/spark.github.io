<?php
$con =mysqli_connect('localhost','root');

if($con)
{
	echo "connect";
}else
{
	echo "not connect";
}

mysqli_select_db($con, 'databases');

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$mobile =$_POST['mobile'];
$subject =$_POST['subject'];

$query =" insert into event (fname, lname, mobile, subject) values ('$fname','$lname','$mobile','$subject')";
mysqli_query($con,$query);


header('location:index.php');





?>
