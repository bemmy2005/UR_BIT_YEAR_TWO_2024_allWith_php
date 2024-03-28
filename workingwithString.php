<?php
$vv ="Hello World!";
echo "First: ".strpos($vv,"He")."<br>";
echo "Second: ".strpos($vv,"Wo")."<br>";
echo "Third: ".strpos($vv,"zz")."<br>";
if(strpos($vv,"He")==FALSE) echo "Wrong A<br>";

$Hello =(strpos($vv,"He")==FALSE)? "Wrong B<br>":"True B<br>";
echo "$Hello";

?>