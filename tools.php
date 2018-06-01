<?php

            require 'dbconn.php';
            $query = "SELECT * FROM tools";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                
                echo '<table border="5"><tr>';
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo '<td><h5 >'.$row['Item'].'</h5><br>'.$row['Description'].
                        '<br><a href="item2profile.php?id='.$row['ItemID'].'"><img height="230" width="220" src='.$row['Image'].'></a><br>$'.$row['Price'].'<br><a href="added2.php?id='.$row['ItemID'].'">Add To Cart</a></td>';
                }
                echo '</tr></table>';
                mysqli_close($conn);
                
            } else {
                echo '<p>There are currently no items in the shop.</p>';
            }
        
?>