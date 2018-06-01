<?php
    session_start();
    include 'header.php';
    require 'logstatus.php';
?>

<br>
  
    <aside>
        
        <br>
        <a href="aindex.php">Wheelbarrows</a>
        <br><br>
        <a href="GardenTools.php">Garden Tools</a>
        <br><br>
        <a href="">Lawnmowers(future)</a>
        <br><br>
        <a href="">Garden Furniture(future)</a>
        <br><br>
       <br>
    </aside>
    <div id="topdiv">Gardens and garden tools are our speciality. We provide the utensils to see to all ones horticultural requirements <br>The Great Outdoors is where people spend the most relaxing hours of their life, enjoying the benefits that nature has to offer. Taste what splendid and valued offers we have running in our friendly store. With our new and vintage/ retro collection of wheelbarrows, your garden awaits- we also sell a host of other essentials for getting the most out of the greenery outside your abode.  With our new and vintage/ retro collection of wheelbarrows, your garden awaits- we also sell a host of other essentials for getting the most out of the greenery outside your abode<br>From vital additions like lawnmowers, of which we have a great selection, to relaxing and aesthetically pleasing garden furniture. We also stock those little things you may need to tend the garden, or indeed mend the house.<br><strong>Have a browse below at some of the finest wheelbarrows in the land, our prices are good too</strong></div>
   
    <section id=front>
       
      <?php
      require 'tools.php';
        
        ?>
    </section>
           <footer>
        <form action="cart.php"><button>Proceed To Checkout</button></form>
        
        </footer>
    </body>
</html>