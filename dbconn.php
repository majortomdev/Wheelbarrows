<?php
    
$conn = mysqli_connect("localhost","root","usbw","whb");

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

