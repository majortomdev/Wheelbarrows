<?php 

    session_start();

    if(!isset($_SESSION['user'])){
        require ('logstatus.php');
    } else {
    $user = $_SESSION['user'];
    }

    if (empty($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }

   /* array_push($_SESSION['cart'], $_GET['id']);*/




    if(isset($_GET['id'])) {
        $id= $_GET['id'];
    } else {
        die();
    }
    require ('dbconn.php');

    $query = "SELECT * FROM tools WHERE ItemID = $id";
    $result = mysqli_query($conn, $query);
    $amt = mysqli_num_rows($result);
    if ($amt==1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        if(isset( $_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['quantity']++;
            echo '<p>Another '.$row['Item'].' has been added to your cart. Cost: $'.$row['Price'].'</p>';
        } else{
            $_SESSION['cart'][$id]= array('quantity' =>1, 'price' => $row['Price']);
            echo '<p>A '.$row['Item'].' has been added to your cart. Cost: $ '.$row['Price'].'</p>';
        }
    }
        echo '<br><br>';
    /*
    <p>Your Cart now contains '.$_SESSION['cart'].'<br><p>*/
    echo 'Return to our site:<br>
    <a href="aindex.php">Wheelbarrows</a> | <a href="GardenTools.php">Garden Tools</a> | <a
    href="">Lawnmowers</a> | <a href="">Garden Furniture</a> | <a href="cart.php">View Cart</a>';


 


    mysqli_close($conn);


?>