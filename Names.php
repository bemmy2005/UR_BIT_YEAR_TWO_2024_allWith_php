<?php
	$fname="Marie Claudine";
	$lname ="Nyiranzamurererikimanayamumpereyishakakugeraho";
	$space =" ";
	$fullname =$fname.$space.$lname;
	echo $fullname."<br>";
	/*if(strpos($fullname,$lname)>=10){
		echo "Long name<br>";
	}else{
		echo "short name<br>";
	}*/
	$cond=(strpos($fullname,$lname)>=10)?"Long name<br>":"short name<br>";
	echo $cond;
?>