<?php

$num = 5;
$location = 'tree';
$location2 = 'krumas';

$format = 'There are %d monkeys in the %s and the %s';

//%d -digit
//%s - string

echo sprintf($format, $num, $location, $location2);

echo md5('123'); //atspindis is 16 kodo

?>