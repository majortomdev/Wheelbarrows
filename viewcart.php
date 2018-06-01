<?php
// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Cart - PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <link rel="stylesheet">
    <style>
    .container{padding: 50px;}
    input[type="number"]{width: 20%;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Shopping Cart</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>

        <?php
        if($cart->total_items() > 0)

        {
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
<tr>
<td><?php echo $item["name"]; ?></td>
<td><?php echo '€'.$item["price"].' EURO'; ?></td>
<td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>"></td>
<td><?php echo '€'.$item["subtotal"].' EURO'; ?></td>
<td>
<!--<a href="cartAction.php?action=updateCartItem&id=" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>-->
<a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
</td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Your cart is empty.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>


<tr>
<td><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
<td colspan="2"></td>


<?php if($cart->total_items() > 0){ ?>
<td class="text-center"><strong>Total <?php echo '€'.$cart->total().' EURO'; ?></strong></td>
<td><a href="checkout.php" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
<?php } ?>
        </tr>
    </tfoot>
    </table>
</div>
</body>
</html>