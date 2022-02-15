<?php
$tot = 0;
for($i=2;$i<=400000;$i++){
    $t = 0;
    $num = $i;
    while($num>0){
        $j = $num % 10;
        $num = $num/10;
        $t = $t+$j**5;
    }
    if($t == $i){
        $tot = $tot + $i;
        echo $i;
        echo "<br>";
    }
}
echo $tot;
?>