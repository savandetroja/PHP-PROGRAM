<?php

    echo "Number using For : <br>";

 for ($i=5; $i <= 10 ; $i++) { 
    echo "Number :" .$i."<br>";
 }

 echo "<br> Number using ForEach :<br>";

 $Number = range(5,10);
 foreach($Number as $Num)
 {
    echo "Number : " .$Num."<br>";
 }

// // ?>