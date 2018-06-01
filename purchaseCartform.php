<?php

        session_start();

        $total = $_GET['total'];
        require 'dbconn.php';

/*        $query = "SELECT * FROM wheels WHERE ItemID = $id";
        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION["ItemAnon"]= $row['Item'];*/
    
        require 'header.php';
?>



<h2>Purchase Form</h2><br><br><br>
<form action="purchased.php" method="POST">
<label for="name">Name:    </label>
<input name="name"/><br><br><br>
<label for="add">Address:</label>
<input name="add"/><br><br><br>
<label for="cc">Credit/Debit Card:</label>
<input name="cc"/><br><br><br>

<?php

echo "You are paying for your shopping cart items, the total is $".$total;
    
    
    
    
    

?>

<br><br><br>
    <button type="submit">Proceed and Buy Cart Items</button></form>