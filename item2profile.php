<?php

    session_start();
    require 'header.php';
    $id = $_GET['id'];
    require 'dbconn.php';

    
    $query = "SELECT * FROM tools WHERE ItemID = $id";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


    echo "<br><table><tr><td><h2>".$row['Item']."</h2></td></tr><tr><td><img height='375' width='315' src=".$row['Image'].">".$row['Description']."</td></tr><tr><td><h3>$". $row['Price']."</td></tr></table>";


    echo "<br>
    <a href='aindex.php'>Wheelbarrows</a> | <a href='GardenTools.php'>Garden Tools</a> | <a
    href=''>Lawnmowers</a> | <a href=''>Garden Furniture</a> | <a href=''>DIY Equipment</a> | <a href='cart.php'>View Cart</a>";
        
    if (!isset($_SESSION['fname'])){
    echo
    " | <a href='purchaseform.php?id=".$id."'>PURCHASE NOW</a>";   
    }


?>
       <footer>
        <form action="cart.php"><button>Proceed To Checkout</button></form>
        
        </footer>










