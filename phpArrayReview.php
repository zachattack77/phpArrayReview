
<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 2/22/2018
 */
$animals = array("panda", "alpaca", "boa");
function printAnimals($animals)
{
    sort($animals);
    for($i = 0; $i < count($animals); $i++)
    {
        echo $animals[$i] . " ";
    }
}
function addAnimals($string, $animals)
{
    echo nl2br ("\n adding $string ... \n");
    $string = strtolower($string);
    if(!(in_array($string, $animals)))
    {
        array_push($animals, $string);
    }
    printAnimals($animals);
}
printAnimals($animals);
addAnimals("goat", $animals);
addAnimals("Boa", $animals);
$flavors = array(
    "grasshopper"=>"The Grasshopper",
    "maple"=>"Whiskey Maple Bacon",
    "carrot"=>"Carrot Walnut",
    "caramel"=>"Salted Caramel Cupcake",
    "velvet"=>"Red Velvet",
    "lemon"=>"Lemon Drop",
    "tiramisu"=>"Tiramisu",
);
echo nl2br ("\n\n\n");
foreach ($flavors as $flavor => $name)
{
    echo "<input type=\"checkbox\" name=\"flavors[]\" value=\"$flavor\"> $name<br>";
}