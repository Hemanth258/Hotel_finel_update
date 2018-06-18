<?php
session_start(); 
define(ADMIN,$_SESSION['name']); 

if(isset($_POST['submit'])) {
header("Location:html.php");


$conn=mysqli_connect("localhost","root","","project");
    if (mysqli_connect_errno($conn))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      else
      {
      	echo "successfully to connect to MySQL: ";

      }



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




$emailid = mysqli_real_escape_string($conn,$_POST['email']);
$psw = mysqli_real_escape_string($conn,$_POST['psw']);



$sql = "INSERT INTO admin1 (  email, psw ) 
	VALUES ( '$emailid', '$psw')";

   

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>


