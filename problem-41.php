<?php
function pandig($str){
  $new = str_split($str);
  $sy = array_unique($new);
  sort($sy);
  $list = array("123","1234","12345","123456","1234567","12345678","123456789");
  $jum = count($sy);
  $new2 = implode($sy);
  if(count($sy) == count($new)){
    if($new2 == $list[$jum-3]){
        return true;
    } else{
        return false;
    }
  } else{
    return false;
  }
}
function prime($n){
    if ($n==2 || $n==3){
        return true;
    }
    if ($n<=1 || $n%2==0 || $n%3==0){
        return false;
    }
    for($i=5;$i**2<=$n;$i+=6){
        if($n%$i==0 || $n%($i+2)==0){
            return false;
        }
    }
    return true;
}
#pandigital yang prima hanya ketika 4 atau 7 digit
$largest = 0;
for($i=1000000;$i<10000000;$i++){
    if(prime($i)){
        $br = "$i";
        if(pandig($br)){
            echo "$br <br>";
            if($i>$largest){
                $largest = $i;
            }
        }
    }
}
echo "terbesar = $largest";
?>