<?php

$num = 5;
$location = 'tree';
$location2 = '5krumas';

$format = 'There are %3$d monkeys in the %2$s and the %1$s';

//%d -digit
//%s - string

echo sprintf($format, $num, $location, $location2);
echo '<br><br>';

echo md5('123'); //atspindis is 16 kodo

?>