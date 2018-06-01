<?php

session_start();
include 'dbconn.php';
if((!isset($_POST['uname']))  || (!isset($_POST['pwd']))){
    header ('Location: aindex.php');
}
else {
$username = $_POST['uname'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE username='$username' AND pwd='$pwd'";
$result = mysqli_query($conn,$sql);

if(!$row= mysqli_fetch_assoc($result)){
    echo "Your username or password is incorrect!";
} else {
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['lname'] = $row['lname'];
    $_SESSION['user']=$row['user'];
}
}

header("Location: aindex.php");

?>