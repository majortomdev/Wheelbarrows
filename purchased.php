<?php

session_start();


require 'header.php';



$Name = $_POST['name']; //echo $Name;

$Address = $_POST['add']; //echo $Address;
$CDCard = $_POST['cc']; //echo $CDCard;
$Item = $_SESSION['ItemAnon'];
  
        
require 'dbconn.php';
$query = "INSERT INTO anonorders (aname,address,cardNo,Item) VALUES("."$Name".","."$Address".","."$CDCard".","."$Item".")";

/*require 'dbconn.php';
$query = "INSERT INTO anonorders (aname,address,cardNo,Item) VALUES(".$_POST['name'].",".$_POST['add'].",".$_POST['cc'].",".$_SESSION['ItemAnon'].")";*/


//$result = mysqli_query($conn,$query);
mysqli_query($conn,$query);

$order_id = mysqli_insert_id($conn);



//$query2 = "SELECT id FROM anonorders WHERE Item = ".$_SESSION['ItemAnon']." ";
//$result = mysqli_query($conn,$query2);
//$order_id
?>
<br><br><br>
<?php

echo $Name.", You have just purchased a ".$_SESSION['ItemAnon']." your order id is # ".$order_id;

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
    echo 
        '<a href="aindex.php">Wheelbarrows</a> | <a href="GardenTools.php">Garden Tools</a> | <a href="">Lawnmowers</a> | <a href="">Garden Furniture</a>';


?>



