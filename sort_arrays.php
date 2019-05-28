<?php "<h2> Sorting Arrays</h2>"?>


Sorting Arrays
<hr />

<?php 
$names = [
  'Kalob' => 27,
  'kalob' => 27,
  'Nathan' => 22,
  'Zephir' => 2,
  'Thor' => 1000,
];

// sort($names); //sort by name
// rsort($names); //sort inverse by name

// asort($names); // sort by value
// ksort($names); // sort by key
// arsort($names); //sort inverse by value
krsort($names); // sort inverse by key

var_dump($names);
?>