<?php
$name = $_POST ['name'];
$pass = $_POST ['pass'];
if ($name = ["admin"] & $pass = ["admin"]) {
	session_register('name');
	session_register('pass');
	header('location: admin1.php');
}
else echo "something wrong dude . . .";
?>