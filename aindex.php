<?php
            session_start();
            include 'header.php';
            require 'logstatus.php';
        
        ?>
        
        
        <br>

           
      
    <aside>
        
        <br>
        <a href="aindex.php" class="active">Wheelbarrows</a>
        <br><br>
        <a href="GardenTools.php">Garden Tools</a>
        <br><br>
        <a href="">Lawnmowers(to come)</a>
        <br><br>
        <a href="">Garden Furniture(to come)</a>
        <br><br>
        <br>
    </aside>
    <div id="topdiv">Welcome one and all to Wheelbarrows and Things, the one stop shop for all your outer home requirements. As well as our unique and broad collection of the finest wheelbarrows, we have garden furniture and equipment to cater to all green-fingered and leisurely inclined people who want to make the most of the green space outside their door.<br>The Great Outdoors is where people spend the most relaxing hours of their life, enjoying the benefits that nature has to offer. With our new and vintage/ retro collection of wheelbarrows, your garden awaits- we also sell a host of other essentials for getting the most out of the greenery outside your abode.<br>From vital additions like lawnmowers, of which we have a great selection, to relaxing and aesthetically pleasing garden furniture. We also stock those little things you may need to tend the garden, or indeed mend the house.<br><strong>Have a browse below at some of the finest wheelbarrows in the land, our prices are good too</strong></div>
   
    <div id="front">
       
      <?php
      require 'awheels.php';
        
        ?>
    </div><br>
       <footer>
        <form action="cart.php"><button>Proceed To Checkout</button></form>
        
        </footer>
    </body>
</html>