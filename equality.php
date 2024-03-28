<?php
if (123 =="124") {
print("Equality 1 is ok\n<br>");
}else{
	print("Not equal<br>");
}
if (123=="100"+23) {
echo("Equality 2<br>");
}else{
	print("Not equal<br>");
}
if (FALSE =="1") {
echo "Equality 3 <br>";
}else{
	print("Not equal<br>");
}
$msg=((5<6)=="2"-"1")?"Equality 4<br>":"Not equal<br>";
echo $msg;
$msg1=((5<6) ===TRUE) ? "Equality 5<br>":"Not equal<br>";
echo $msg1;
?>