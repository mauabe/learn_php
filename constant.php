<?php "<h2> Constants </h2>" ?>

<?php

define('name', 'Mauricio');

echo name;
# 'define' states a 'constant variable'

$var = "Mauricio2";
if(defined('name')) {
  echo "Mauricio2 is set";
}

?>