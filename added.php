<?php 

    session_start();

    if (empty($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }

    array_push($_SESSION['cart'], $_GET['id']);




    if(isset($_GET['id'])) {
        $id= $_GET['id'];
    } else {
        die();
    }
    require ('dbconn.php');

    $query = "SELECT * FROM wheels WHERE ItemID = $id";
    $result = mysqli_query($conn, $query);
    $amt = mysqli_num_rows($result);
    if ($amt==1){
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        if(isset( $_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]++;
            echo '<p>Another '.$row['Item'].' has been added to your cart</p>';
        } else{
            $_SESSION['cart'][$id]= array('quantity' =>1, 'price' => $row['Price']);
            echo '<p>A '.$row['item'].' has been added to your cart</p>';
        }
    }
    mysqli_close($conn);


?>