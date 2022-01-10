<?php

// $x = "Hello" ==> string
// $x = 33 ==> integer
// $x = 33.44 ==> Float
// $x = true/false ==> Boolean
// $x = array("html","css", "js"); ==> array
// $x = new Myclass(); ==> Object
// $x = null ==> null;


$x = "Yahoo Baba";

echo $x . "<br>";
var_dump($x);
$y = 44;
echo "<br>". $y. "<br>";
var_dump($y);

$z = true;
echo "<br>".$z."<br>";
var_dump($z);
$arr = array("html","css", "js");
echo "<br>".$arr[0]."<br>";
var_dump($arr);
?>