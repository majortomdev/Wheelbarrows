<?php


    session_start();
    require 'header.php';
    $total = $_GET['total'];
    if(!isset($_SESSION['user'])){
        //require ('logstatus.php');
        
        //require ('dbconn.php');
        header("Location: purchaseCartform.php?total=$total");
        
        
        
        
        
        
        
        
        
        
        
    } else {
    $user= $_SESSION['user'];
        
//         require ('dbconn.php');
//        
//        $query= "INSERT INTO orders (total , orderDate) VALUES (".$_GET['total'].", NOW() )";
//        
//        $result = mysqli_query($conn,$query);
//        $order_id = mysqli_insert_id($conn);
        
        
        
// here i was looking at making a purchase route for non registered......        
        
        
        
        
        
        
        
        
    }
    if(isset ($_GET['total'])
      && ($_GET['total']>0)
       
       //&&(isset($_GET['userID']))
       
      && (!empty($_SESSION['cart']))){
        require ('dbconn.php');
        $query= "INSERT INTO orders (userID , total , orderDate) VALUES (".$_SESSION['user'].",".$_GET['total'].", NOW() )";
        $result = mysqli_query($conn,$query);
        $order_id = mysqli_insert_id($conn);
        
        $query = "SELECT * FROM wheels WHERE ItemID IN (";
        foreach($_SESSION['cart'] as $id => $value){
            $query .= $id.',';}
            $query = substr($query,0,-1) . ') ORDER BY ItemID ASC';
            $result = mysqli_query($conn,$query);
        
/*        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            //for if/when i want to add the orderContents table to my DB
        }*/
        mysqli_close($conn);
        echo "<p>Thanks for your order. We will dispatch it immediately. Your order number is #$order_id</p>";
        $_SESSION['cart']=NULL;
        }
        
        
     else {
        echo '<p>Theres nothing in your cart yet!</p>';
    }

    echo 
        '<a href="aindex.php">Wheelbarrows</a> | <a href="GardenTools.php">Garden Tools</a> | <a href="">Lawnmowers</a> | <a href="">Garden Furniture</a> | <a href="alogout.php">Log Out</a>';
    
    

    ?>
