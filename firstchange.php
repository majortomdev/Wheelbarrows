<?php 


    session_start();
    require 'header.php';
    require 'dbconn.php';
    $newname = $_POST['first'];
    $newlast = $_POST['last'];
    $newuname = $_POST['uname'];
    $newpwd = $_POST['pwd'];


    if($_GET['xx']==1){
        $query = "UPDATE users SET fname='$newname' WHERE user = ".$_SESSION['user'];
        mysqli_query($conn,$query);
        header ('Location: userpage.php?change=1');
    }

   if($_GET['xx']==2){
        $query = "UPDATE users SET lname='$newlast' WHERE user = ".$_SESSION['user'];
        mysqli_query($conn,$query);
        header ('Location: userpage.php');
    }

   if($_GET['xx']==3){
        $query = "UPDATE users SET username='$newuname' WHERE user = ".$_SESSION['user'];
        mysqli_query($conn,$query);
        header ('Location: userpage.php');
    }

   if($_GET['xx']==4){
        $query = "UPDATE users SET pwd='$newpwd' WHERE user = ".$_SESSION['user'];
        mysqli_query($conn,$query);
        header ('Location: userpage.php');
    }






?>