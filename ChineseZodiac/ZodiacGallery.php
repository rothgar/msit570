<?php
/*
 * Justin Garrison
 * MSIT570
 * Term Project
 * 2015-01-24
 */
$signs = array( 
  "monkey.png" => "monkey",
  "rooster.png" => "rooster",
  "dog.png" => "dog",
  "pig.png" => "pig", 
  "rat.png" => "rat", 
  "ox.png" => "ox", 
  "tiger.png" => "tiger", 
  "rabbit.png" => "rabbit", 
  "dragon.png" => "dragon", 
  "snake.png" => "snake", 
  "horse.png" => "horse", 
  "sheep.png" => "sheep"
);

foreach ( $signs as $image => $caption ) {
  $size = getimagesize("images/$image");
  //DEBUGGING print_r($size);
  echo '<a href="images/'.$image.'"><img src="images/'.$image.'" alt="'.$caption.'" height="75" width="75"></a>';
}
?>
