<?php
echo "<h1>Table One<h1>";
$ans=0;
 for ($i=1; $i <=6 ; $i++) { 
 	$ans =($i*6);
echo "<table>
<tr>
<td>$i</td>
<td>*</td>
<td>6</td>
<td>=</td>
<td>$ans</td>
</tr>
</table>";
}
echo "<h1>Table two<h1>";
for ($i=1; $i <=6 ; $i++) { 
 	$ans =($i*6);
echo "<table border='1'>
<tr>
<td>$i</td>
<td>*</td>
<td>6</td>
<td>=</td>
<td>".($i*6)."</td>
</tr>
</table>";
}
?>