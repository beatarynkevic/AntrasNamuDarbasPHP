<h1> ------- 1 Uzduotis ------- </h1>

<?php
$name = 'Tom';
$lName = 'Hardy';
echo "Name: $name <br> LastName: $lName <br>";

if (strlen($name) < strlen($lName)) {
    echo $name . '<br>';
} else if(strlen($name) > strlen($lName)) {
    echo $lName . '<br>';
} else {
    echo 'Po tiek pat simboliu';
}
?>


<h1> ------- 2 Uzduotis ------- </h1>

<?php
$actorsName = 'mads';
$actorsLastName = 'MIKKELSEN';

echo strtoupper($actorsName) . '<br>';
echo strtolower($actorsLastName) . '<br>';
?>


<h1> ------- 3 Uzduotis ------- </h1>

<?php
$vardas = 'Milla';
$pavarde = 'Jovovich';
$firstLetters = $vardas[0] . $pavarde[0];
echo "$vardas $pavarde <br>";
echo $firstLetters . '<br>';
?>


<h1> ------- 4 Uzduotis ------- </h1>

<?php
$acName = 'Alice';
$acLastName = 'Braga';
$naujasStringas = substr($acName, 2, 4) . substr($acLastName, 2, 4);
echo $acName . '<br>' . $acLastName . '<br>';
echo $naujasStringas . '<br>';
?>


<h1> ------- 5 Uzduotis ------- <h1/>

<?php
$paris = "An American in Paris";
$whatReplace = array("a", "A");
$replace = "*";
echo(str_replace($whatReplace, $replace, $paris)); //ka, kuo pakeisti ir is kur
?>


<h1> ------- 6 Uzduotis ------- <h1/>

<?php
$american = "An American in Paris";
$letterCount = substr_count($american, "a");
$letterCount += substr_count($american, "A");
echo $letterCount;
?>


<h1> ------- 7 Uzduotis ------- <h1/>

<?php

?>


<h1> ------- 8 Uzduotis ------- <h1/>

<?php

?>


<h1> ------- 9 Uzduotis ------- <h1/>

<?php

?>


<h1> ------- 10 Uzduotis ------- <h1/>

<?php

?>


<h1> ------- 11 Uzduotis ------- <h1/>

<?php

?>