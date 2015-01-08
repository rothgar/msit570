<!DOCTYPE html>
<html>
<head></head>
<body>

<?php
// set item variables
// item,avail,cost,desc
// Using named arrays to avoid nested for loops
$items = array
  (
    array(
      "name" => "Sony PS4",
      "avail" => "50",
      "cost" => "400",
      "desc" => "Next generation gaming console from Sony"
    ),
    array(
      "name" => "Microsoft Xbox One",
      "avail" => "500",
      "cost" => "500",
      "desc" => "Next generation gaming console from Microsoft"
    ),
    array(
      "name" => "Nintendo WiiU",
      "avail" => "309",
      "cost" => "200",
      "desc" => "Last generation gaming console from Nintendo"
    ),
    array(
      "name" => "Playstation Vita",
      "avail" => "240",
      "cost" => "200",
      "desc" => "Handheld gaming system from Sony"
    ),
    array(
      "name" => "Nintendo 3DS",
      "avail" => "50",
      "cost" => "150",
      "desc" => "Handheld gaming system from Nintendo"
    ),
    array(
      "name" => "Steam Machine",
      "avail" => "5",
      "cost" => "600",
      "desc" => "Video game console from Valve"
    ),
    array(
      "name" => "Apple iPad",
      "avail" => "500",
      "cost" => "500",
      "desc" => "Tablet from Apple"
    )
  );
?>

<form name=orders method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table border=1> 
<?php
// print items
for ($i = 0; $i < count($items); $i++) {
  $tmp_qty=strtolower(preg_replace("/[\s]/", "-", $items[$i][name]))."_qty";
  echo "<tr>";
  echo '<td> <input type=number min=0 step=1 name="'.strtolower(preg_replace("/[\s]/", "-", $items[$i][name])). '_qty" value="'. $tmp_qty .'" </td>';
 // echo strtolower(preg_replace("/[\s]/", "-", $items[$i][name]));
  echo "<td>".$items[$i][name]."</td>";
  echo "<td>".$items[$i][avail]."</td>";
  echo "<td>".$items[$i][desc]."</td>";
  echo "<td>".$items[$i][cost]."</td>";
  // subtotal
  echo "<td>". $item[$i][cost]*$tmp_qty;
  echo "</tr>";
}
?>
</table>
<input type="submit" name="update_order" value="Update Order">
<input type="submit" name="submit_order" value="Place Order">

</body>
</html>

