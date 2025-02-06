<?php

$names = array("Kakashi", "Naruto", "Magneto", "Gai", "Kenpachi", "Traniel");
$numbers = [1, 2, 3, 4, 5, 6];

function inspect($value)
{
  echo '<pre>';

  $names = array("Kakashi", "Naruto", "Magneto", "Gai", "Kenpachi", "Traniel");
  $numbers = [1, 2, 3, 4, 5, 6];


  // inspect($names);
  // inspect($numbers);


  // indexes start at 0 so $names[2] would be Magneto
  echo $names[2];
  echo $numbers[3];

  // Add element to array
  $numbers[] = 100;
  $numbers[] = 101;

  // unset is to remove an index
  unset($numbers[3]);
  var_dump($value);
  echo '<pre>';
}
inspect($names);

inspect($numbers);
