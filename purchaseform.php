<?php

        session_start();

        $id = $_GET['id'];
        require 'dbconn.php';
        if ($id <=6){
        $query = "SELECT * FROM wheels WHERE ItemID = $id";
        }
        else {
        $query = "SELECT * FROM tools WHERE ItemID = $id";    
        }
        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION["ItemAnon"]= $row['Item'];
    
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

echo "You are buying a ".$row['Item']. ", at $".$row['Price'];

?>

<br><br><br>
    <button type="submit">Proceed and Buy Item</button></form>