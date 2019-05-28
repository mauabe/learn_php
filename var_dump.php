<?php echo "<h1>make these bad people disapear</h1>"; ?>

<?php

$badpeople = array(
  'Julie', 'Stella', 'Keilani', 'Luiza'
);

$age = "12";
$name = 'Mauricio';
# echo $badpeople;

print_r($badpeople);
/*
Array ( [0] => Julie [1] => Stella [2] => Keilani [3] => Luiza )
*/
var_dump($badpeople);

/*
/var/www/html/var_dump.php:13:
array (size=4)
  0 => string 'Julie' (length=5)
  1 => string 'Stella' (length=6)
  2 => string 'Keilani' (length=7)
  3 => string 'Luiza' (length=5)
*/

var_dump($age);
$name = (bool) $name;
var_dump($name);

?>