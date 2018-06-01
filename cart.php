<?php


    session_start();
    include 'header.php';
    
    

    if(!isset($_SESSION['user'])){
        require ('logstatus.php');
    }
    if(!$_SESSION['cart']){
        echo " yet";
    }


    if ($_SERVER['REQUEST_METHOD']== 'POST') {
        foreach($_POST['qty'] as $item_id => $item_qty){
            $id = (int) $item_id;
            $qty = (int) $item_qty;
            if ($qty == 0){
                unset($_SESSION['cart'][$id]);
            } elseif ($qty>0){
                $_SESSION['cart'][$id]['quantity']=$qty;
            }
        }
    }
    $total = 0;
    
    if(!empty($_SESSION['cart'])){
        require ('dbconn.php');

    $query = "SELECT * FROM wheels WHERE ItemID IN(";
    foreach($_SESSION['cart'] as $id => $value){
        $query.= $id.',';
    }
    $query = substr($query, 0, -1) . ') ORDER BY ItemID ASC';
        
      
    /*$query = "SELECT * FROM wheels WHERE ItemID IN (1,2,3) ORDER BY ItemID ASC";*/    
        
        
    $result = mysqli_query($conn,$query);
        
    echo '<form action="cart.php" method="POST"><table><tr><th colspan="5">Items in your cart</th></tr><tr>';
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $subtotal = $_SESSION['cart'][$row['ItemID']]['quantity']*$_SESSION['cart'][$row['ItemID']]['price'];
        $total += $subtotal;
       
    
    echo "<tr><td>{$row['Item']}</td><td>  {$row['Description']}</td>";
    echo "<td><input type=\"text\" size=\"3\" name=\"qty[{$row['ItemID']}]\" ";
    echo "value=\"{$_SESSION['cart'][$row['ItemID']]['quantity']}\"></td>";
        /*echo "value=\"{$_SESSION['cart'][$row['ItemID']]['quantity']}\"></td>";*/
    echo "<td>@ {$row['Price']}=</td><td> ".number_format($subtotal, 2)."</td></tr>";   
        
    }
    
    echo ' <tr><td colspan="5">Total = '.number_format($total,2).'</td></tr></table>';
    
      
        
    mysqli_close($conn);    
    
    }else{
        echo '<p>Your Cart is currently empty!</p>';
    }
   

    echo '<p><a href="aindex.php">Wheelbarrows</a> | <a href="checkout.php?total= '.$total.'">Checkout</a> |  <a href="GardenTools.php">Garden Tools</a>'; 


    ?>
