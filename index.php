<h3> ------- 1 Uzduotis ------- </h3>

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


<h3> ------- 2 Uzduotis ------- </h3>

<?php
$actorsName = 'mads';
$actorsLastName = 'MIKKELSEN';

echo strtoupper($actorsName) . '<br>';
echo strtolower($actorsLastName) . '<br>';
?>


<h3> ------- 3 Uzduotis ------- </h3>

<?php
$vardas = 'Milla';
$pavarde = 'Jovovich';
$firstLetters = $vardas[0] . $pavarde[0];
echo "$vardas $pavarde <br>";
echo $firstLetters . '<br>';
?>


<h3> ------- 4 Uzduotis ------- </h3>

<?php
$acName = 'Alice';
$acLastName = 'Braga';
$naujasStringas = substr($acName, 2, 4) . substr($acLastName, 2, 4);
echo $acName . '<br>' . $acLastName . '<br>';
echo $naujasStringas . '<br>';
?>


<h3> ------- 5 Uzduotis ------- <h3/>

<?php
$paris = "An American in Paris";
$whatReplace = ["a", "A"];
$replace = "*";
echo(str_replace($whatReplace, $replace, $paris)); //ka, kuo pakeisti ir is kur
?>


<h3> ------- 6 Uzduotis ------- <h3/>

<?php
$american = "An American in Paris";
$letterCount = substr_count($american, "a");
$letterCount += substr_count($american, "A");
echo $letterCount;
?>


<h3> ------- 7 Uzduotis ------- <h3/>

<?php
$title = "An American in Paris";
$title2 = "Breakfast at Tiffany's";
$title3 = "2001: A Space Odyssey";
$title4 = "It's a Wonderful Life";
$balses = array("A", "a", "E", "e", "I", "i", "O", "o", "U", "u", "Y", "y");
$remove = "";
echo(str_replace($balses, $remove, $title)) . '<br>'; //str_ireplace ?
echo(str_replace($balses, $remove, $title2)) . '<br>';
echo(str_replace($balses, $remove, $title3)) . '<br>';
echo(str_replace($balses, $remove, $title4)) . '<br>';
?>


<h3> ------- 8 Uzduotis ------- <h3/>

<?php
$stringas ='Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $stringas . '<br><br>';
$stringas = str_ireplace("Star Wars: Episode ", "", $stringas);
$stringas = str_ireplace(" - A New Hope", "", $stringas);
echo $stringas . '<br>';

preg_match("/([0-9]+)/", $stringas, $matches); //regex (Surasti ir atspausdinti epizodo numerį)
echo $matches[1];
echo '<br>';

//3variantas
echo 'III sprendimo variantas: ' . '<br>';
for ($i = 1; $i <= 9; $i++) {
    $temp = str_contains($stringas, $i);
    if ($temp) {
        echo "Episodas: $i";
        break;
    }
}

?>


<h3> ------- 9 Uzduotis ------- <h3/>

<?php
$movie = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$newString = explode(" ", $movie); //returns an array of string
$count = 0;

for ($i = 0; $i < count($newString); $i++) { //count all elements in array
    if(mb_strlen($newString[$i]) <= 5) { //get string length and multi-byte character is counted as 1
        $count++;
    }
}
echo $count . '<br>';

$movieName = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$newString2 = explode(" ", $movieName); //explode(separator, whatToSeperate)
$count2 = 0;

for ($i = 0; $i < count($newString2); $i++) {
    if(mb_strlen($newString2[$i]) <= 5) {
        $count2++;
    }
}
echo $count2 . '<br>';

?>


<h3> ------- 10 Uzduotis ------- <h3/>

<?php
$lotyniskosRaides = 'qwertyuiopasdfghjklzxcvbnm';
$ilgis = strlen($lotyniskosRaides) - 1;
echo $lotyniskosRaides[rand(0, $ilgis)] . $lotyniskosRaides[rand(0, $ilgis)] . $lotyniskosRaides[rand(0, $ilgis)];
echo '<br>';

$raides = str_shuffle($lotyniskosRaides); //keli kiti sprendimo budai
echo substr($raides, -3);
echo '<br>';

echo chr(rand(97, 122)) . chr(rand(97, 122)) . chr(rand(97, 122)); //viena eilute

?>