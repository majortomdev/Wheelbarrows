<?php
    session_start();
    require 'header.php';
?>




        <h3>Enter your details here</h3><br><br>
    <form action="asignup.php" method="post">
        <label for="first">First Name:</label><input type="text" name="first"/><br><br>
        <label for="last">Last Name:</label><input type="text" name="last"/><br><br>
        <label for="uname">UserName:</label><input type="text" name="uname"/><br><br>
        <label for="pwd">Password:</label><input type="password" name="pwd" /><br><br>
        <button type="submit">Sign Up</button>
    </form> 

    
        
 
                                           
    </body>
</html>