<?php  
$count =1;
while ($count<10) {
		echo "<h1>Multiplication table of ".$count."<h1>";
for ($i=1; $i <=10 ; $i++) { 
 	$ans =($i*$count);
echo "<table border='1'>
<tr>
<td>$i</td>
<td>*</td>
<td>$count</td>
<td>=</td>
<td>$ans</td>
</tr>
</table>";
}
$count+=1;
	}
?>