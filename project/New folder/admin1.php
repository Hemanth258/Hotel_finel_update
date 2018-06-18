<?php
session_start(); //Start the session
define(ADMIN,$_SESSION['name']); //Get the user name from the previously registered super global variable

/*include("db.php");









/*$sql = "INSERT INTO stay2 ( fullname, email, phonenumber, datefrom, dateto ) 
VALUES ('hello',"hello@123.com", "8765443212", "08/22/2014", "08/24/2014")";




$res = mysqli_query($conn,$sql);*/
/*
 "INSERT INTO stay2 ( fullname, email, phonenumber, datefrom, dateto ) 
	VALUES ('$fullname', '$emailid', '$phonenumber', '$datefrom', '$dateto')");*/


/*if($res) {
  echo("Error description: " . mysqli_error($conn));
	header("Location: success.php");
	}


mysqli_close($conn);*/

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

/*echo "fullname: " . $fullname . "<br>";
echo "emailid: " . $emailid . "<br>";
echo "phonenumber: " . $phonenumber . "<br>";
echo "datefrom: " . $datefrom . "<br>";
echo "dateto: " . $dateto . "<br>";
*/

/*$sql = "INSERT INTO stay2 ( fullname, email, phonenumber, datefrom, dateto ) 
VALUES ('hello','hello@123.com', '8765443212', '08/22/2014', '08/24/2014')";*/

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


