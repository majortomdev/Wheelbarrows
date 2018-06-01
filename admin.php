<?php  
    session_start();
    require 'header.php';

?>

<h4>Administration Page</h4>



<?php

/*
            require 'dbconn.php';
            $query = "SELECT * FROM wheels";
            $result = mysqli_query($conn,$query); 
            if(mysqli_num_rows($result)>0){
                
                $cnt = mysqli_num_rows(mysql_query("SELECT * FROM wheels"));
                //echo $cnt;
                echo 'Wheelbarrows in Stock: '. $cnt;
                
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    
                    
                    
                    echo '<td ><h5 >'.$row['Item'].'</h5><br>'.
                        '<br><a href="itemprofile.php?id='.$row['ItemID'].'"> <br>$'.$row['Price'].'<br> </td>';
                }
                echo '</tr></table>';
                mysqli_close($conn);
}
*/


 echo 
        '<br><br><br><br><a href="aindex.php">Wheelbarrows</a> | <a href="GardenTools.php">Garden Tools</a> | <a href="">Lawnmowers</a> | <a href="">Garden Furniture</a> | <a href="alogout.php">Logout</a>';




?>