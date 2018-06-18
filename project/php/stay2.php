<?php


if(isset($_POST['submit'])) {



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



$fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
$emailid = mysqli_real_escape_string($conn,$_POST['email']);
$phonenumber = mysqli_real_escape_string($conn,$_POST['phonenumber']);
$datefrom = mysqli_real_escape_string($conn,$_POST['datefrom']);
$dateto = mysqli_real_escape_string($conn,$_POST['dateto']);


$sql = "INSERT INTO stay2 ( fullname, email, phonenumber, datefrom, dateto ) 
	VALUES ('$fullname', '$emailid', '$phonenumber', '$datefrom', '$dateto')";

   

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>



