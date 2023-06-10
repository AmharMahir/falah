<?php  
$k=1;  
for($i=0;$i<4;$i++){  
for($j=0;$j<=$i;$j++){
$n=$k;
$n=$n*($n+1)/2;	
echo $n." ";  
$k++;  
}  
echo "<br>";  
}  
?> 