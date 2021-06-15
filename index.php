<?php
$page_title='Inventory';

if ($_SERVER['REQUEST_METHOD']=='POST') {

   if (($_POST['pname']) && is_numeric($_POST['qty']) && is_numeric($_POST['price']) && is_numeric($_POST['dis']) ) {

     $total=$_POST['qty']*$_POST['price'];
     $total = $total - ($total * ($_POST['dis']/100));
     $total=number_format($total,2);

     echo '<h1>Your Bill</h1>
     <p>Your Product is '.$_POST['pname'].' per one Product Price '.$_POST['price'].'  and Quantity is '.$_POST['qty'].' for Discount '.$_POST['dis'].' %
       and the Total Amount =  <b>'.$total.'
      </b></p>';
   }
   else {
     echo "<h1>Error</h1>
     <p>Plese enter valid details<p> ";
   }
}

 ?>
<h1>Product Details</h1>
<form action="inven.php" method="POST">
  <h3>Product Name: <input name="pname" type="text"></h3>
  <h3>Quantity: <input type="number" name="qty" min="1" max="20"></h3>
  <h3>Price: <input type="text" name="price"></h3>
  <h3>Discount: <span class="input">
    <input type="radio" name="dis" value="5">5%
    <input type="radio" name="dis" value="10">10%
    <input type="radio" name="dis" value="25">25%
  </span></h3>
<input type="submit" name="submit"  value="Submit">
</form>
<?php
?>
