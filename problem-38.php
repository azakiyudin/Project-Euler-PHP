<?php
function pandig($str){
    $new = str_split($str);
    $sy = array_unique($new);
    sort($sy);
    $list = "123456789";
    $new2 = implode($sy);
    if($new2 == $list){
        return true;
    } else{
        return false;
    }
}
for($i=981273645; $i<987654321;$i++){
    if(pandig("$i")){
        echo "$i <br>";
    }
}
?>