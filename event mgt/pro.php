<?php
include "config.php"; // Using database connection file here

mysqli_select_db($con,'event');
	
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $country = $_POST['country'];
    echo "$country";
    $subject = $_POST['subject'];
   $sql ="INSERT INTO even VALUES ('','$fname', '$lname','$country','$subject')";
   mysqli_query($con,$sql);


?>