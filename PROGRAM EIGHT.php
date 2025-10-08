<?php

// A = Print the values of array
echo "<br>Print the values of array <br>";
$Names = ["Araya","Denaerias","Joan","Khal"];

foreach($Names as $Name)
{
    echo $Name."<br>";
}

echo "<br>";

// B = Reverse an array
echo "<br>Reverse an array<br>";
$ReName = array_reverse($Names);

foreach ($ReName as $key) {
    echo $key."<br>";
}

// C = Merge 2 array
echo "<br>Merge 2 array <br>";
$num1 = [3,13,8,103,108];
$num2 = [5,4,8,102,107];

 
$Mearge = array_merge($num1,$num2);

sort($Mearge);

foreach($Mearge as $val)
{
    echo $val."<br>";
}

// D = ADD values of all elements of any array
echo "<br>ADD values of all elements of any array <br>";
$NewArray = [5,10,15,20,25,30];

foreach ($NewArray as $newAddedArray)
{
    echo $newAddedArray." = ".$newAddedArray + 5 ."<br>";
}

?> 