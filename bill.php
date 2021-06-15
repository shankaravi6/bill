<html>
<head>
  <title>Invoice</title>
</head>
<body>
  <?php
  //Customer
  $date=$_REQUEST['date'];
  $name=$_REQUEST['name'];
  $gender=$_REQUEST['gender'];
  $town=$_REQUEST['town'];
  $number=$_REQUEST['num'];

  //Product
  $pname=$_REQUEST['pname'];
  $qty=$_REQUEST['qty'];
  $price=$_REQUEST['price'];
  //$tax=$_REQUEST['tax'];
  $dis=$_REQUEST['dis'];

  $total=$qty*$price;
  //$total=$total+($total*$tax);
  $total = $total - ($total * ($dis/100));
  $total=number_format($total,2);

  echo "$date<br><br>";
  echo "Your Given Details Are:<br>";
  echo "$name<br>$gender<br>$town<br>$number<br>";
  echo "<br>Bill Details:<br>";
  echo "Quantity: $qty<br> Price: $price<br> Discount: $dis<br>";
  echo "<h2>Total Amount = $total</h2>";


   ?>
</body>
</html>
