<?php 

session_start();
include 'dbconn.php';

//$user = $_POST['user'];
$first = $_POST['first'];
$last = $_POST['last'];
$username = $_POST['uname'];
$_SESSION['uname'] = $_POST['uname'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO users (fname,lname,username,pwd)
VALUES ('$first','$last','$username','$pwd')";
$result = mysqli_query($conn,$sql);

header("Location: aindex.php");


?>