<?php
$abc =12;
$total = 0;
$largest_so_far=0;
$firstname= "John";
$second ="Nzabagerageza";
$space = " ";
$names = $firstname.$space. $second;
print("<center> <h1><u><i>Just variables</i></u></h1>");
echo "<center><h1><i>$names</i></h1></center>";
echo "The integer value is $abc<br>";
echo "$total++ <br>";
echo "$largest_so_far <br>";
echo "<center> <h1><u><i>Variable name weirdness</i></u></h1></center>";
$x = 2;
$y = $x+5;
print $y;
//print "<hr>"
$z = 4;
$h = array("X"=>"Hello");
print $h[$z];

?>
