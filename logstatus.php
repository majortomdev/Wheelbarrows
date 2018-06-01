<?php  
            
                
        if
            (isset($_SESSION['fname']) and isset($_SESSION['lname'])){
              
                    if($_SESSION['user']==1 || $_SESSION['user']==2 ){
                
                            header ('Location: admin.php');
                          }
                    
                    else{
                    
                echo  " <form action='alogout.php'>
                                    <button>LOG OUT</button>
                                </form> <form method='GET' action='userpage.php?uname=".$_SESSION['user']."'><button>Edit Login Info</button></form><span id='status'>Welcome back ".$_SESSION['fname']." ".$_SESSION['lname']."</span> ";
                        
                    }
                    
        }    else {
            
         echo " <form action='aenter.php' method='post'>
            <input type='text' name='uname' placeholder='User Name..'>
            <input type='password' name='pwd' placeholder='password...'>
            <button type='submit'>Login</button>
                    
            </form> <a href='aregister.php'><button>Register Here</button></a>
            <span id='status'>Not logged in</span>";
        }      
        
        
  ?>