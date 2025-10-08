<?php
echo "Using include:<br>";
include "Seven.php"; 

echo "This line still runs after include.<br><br>";

echo "Using require:<br>";
require "Seven.php"; 

echo "This line runs only if require was successful.<br>";
?>