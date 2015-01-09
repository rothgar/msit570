<!DOCTYPE html>
<html>
<head></head>
<style>
td {
	min-width:80px;
}
.cost, .subtotal {
	text-align:right;
}

</style>
<body>

<?php
// set item variables
// item,avail,cost,desc
// Using named arrays to avoid nested for loops
$items = array
  (
    "1" => array(
    "name" => "Sony PS4",
    "avail" => "50",
    "cost" => "400",
    "desc" => "Next generation gaming console from Sony"
  ),
  "2" => array(
    "name" => "Microsoft Xbox One",
    "avail" => "500",
    "cost" => "500",
    "desc" => "Next generation gaming console from Microsoft"
  ),
  "3" => array(
    "name" => "Nintendo WiiU",
    "avail" => "309",
    "cost" => "200",
    "desc" => "Last generation gaming console from Nintendo"
  ),
  "4" => array(
    "name" => "Playstation Vita",
    "avail" => "240",
    "cost" => "200",
    "desc" => "Handheld gaming system from Sony"
  ),
  "5" => array(
    "name" => "Nintendo 3DS",
    "avail" => "50",
    "cost" => "150",
    "desc" => "Handheld gaming system from Nintendo"
  ),
  "6" => array(
    "name" => "Steam Machine",
    "avail" => "5",
    "cost" => "600",
    "desc" => "Video game console from Valve"
  ),
  "7" => array(
    "name" => "Apple iPad",
    "avail" => "500",
    "cost" => "500",
    "desc" => "Tablet from Apple"
  )
);

// initialize variables
$action = '';
$total = 0;

// get the action variable for future tests
if (isset($_POST['action'])) {
  $action = $_POST['action'];
}

// handle setting item quantity on post
if (isset($_POST)) {
  foreach ($_POST as $item=>$quantity) {
    // ignore action item in the $_POST array
    if ($item != 'action') {
      $items[$item]['quantity'] = $quantity;
    }
  }
  if ( $action == "update") {

  } elseif ($action == "order") {
      echo "<h1>Thank you for your order</h1>";
      date_default_timezone_set('America/Los_Angeles');
      $file = date(Y.m.d.His);
      file_put_contents("OnlineOrders/".$file , serialize($items));
  }
}
?>

<form method="POST" >
<table border=1> 
<tr><th>Quantity</th><th>Item</th><th>Available</th><th>Price</th><th>Description</th><th>Subtotal</th></tr>
<?php
// print items table
foreach ($items as $id=>$item) {
  echo "<tr>";
  // show the quantity submitted in the form
  echo "<td><input type=number size=100 min=0 max='".$item['avail']."' step=1 name='".$id."' value='".$item['quantity']."'></td>";
  foreach ($item as $label=>$value) {
    switch ($label) {
      case "cost":
        $value = money_format('$%i', $value);
        break;
      default:
    }
    // show the rest of the values
    if ($label != 'quantity') {
      echo "<td class='".$label."'>".$value."</td>";
    }
  }
  $subtotal = $item['quantity'] * $item['cost'];
  echo "<td class='subtotal'>".money_format('$%i' ,$subtotal)."</td";
  $total = $total + $subtotal;
  echo "</tr>";
}
?>

<tr><td style='text-align:right;' colspan=5><b>Total:</b></td><td style='text-align:right;'><?php echo money_format('$%i',$total);?></td></tr>
</table>

<?php
print_r($_POST);
print($total);
if ($action != "order") {
?>

<button type="submit" name="action" value="update">Update Order</button>
<button type="submit" name="action" value="order">Place Order</button>

<?php
}
?>

</body>
</html>

