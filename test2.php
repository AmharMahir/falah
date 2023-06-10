<?php 
echo "<table>";
echo "<tr>";
echo "<th>","Sequence/Number","</th>"; 
echo "<th>","Triangular Number","</th>";
echo "</tr>";
for ($i=1;$i<11;$i++) 
{
$j=$i*($i+1)/2; 
echo "<tr>";
echo "<td>",$i,"</td>"; 
echo "<td>",$j,"</td>"; 
echo "</tr>";
}
echo "</table>";
?>