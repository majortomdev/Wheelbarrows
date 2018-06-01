<?php
    session_start();
    require 'header.php';
    require 'dbconn.php';
    $user = $_SESSION['user'];

?>




        <h3>Update your details</h3><br><p>To update any field, type in new value and press the relevant button</p><br>
    
       <?php 
      
        $query = "SELECT * FROM users WHERE user = ".$user."";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
        
        
       
        echo
            
            "<form action='firstchange.php?xx=1' method='post'><label for='first'>First Name in database currently is ".$row['fname']."</label>       <input type='text' name='first' placeholder=".$row['fname']."><button type='submit'>Change First Name</button></form><br><br>";
            
        echo    
            "<form action='firstchange.php?xx=2' method='post'><label for='last'>Last Name in database currently is ".$row['lname']."</label><input type='text' name='last' placeholder=".$row['lname']."><button type='submit'>Change Last Name</button></form><br><br>";
            
        echo    
            "<form action='firstchange.php?xx=3' method='post'><label for='uname'>User Name in database currently is ".$row['username']."</label><input type='text' name='uname' placeholder=".$row['username']."><button type='submit'>Change User Name</button></form><br><br>";
           
        echo    
            "<form action='firstchange.php?xx=4' method='post'><label for='pwd'>Password in database currently is ".$row['pwd']."</label><input type='text' name='pwd' placeholder=".$row['pwd']."><button type='submit'>Change Password</button></form><br><br><br><br><br><br>";
            
        }

    

    echo 
        '<a href="aindex.php">Wheelbarrows</a> | <a href="GardenTools.php">Garden Tools</a> | <a href="">Lawnmowers</a> | <a href="">Garden Furniture</a>';



   
        
         ?>
       <!-- <label for="uname">UserName:</label><input type="text" name="uname"/><br><br>-->
       <!-- <label for="pwd">Password:</label><input type="password" name="pwd" /><br><br>-->
        
        
         
    </form> 
</body>
</html>