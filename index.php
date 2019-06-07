<?php

$array = [1,3,5,6,7,8,10,11,12];
//1 iki n

function find($array)
{   $i = 1;
    $x = 0;
    foreach($array as $value) {
        if($value != $i) {
            echo $value - 1;
            $i++;
            $x = 1;
            echo '<br>';
        }
        $i++;
    }
    if($x == 0){
        $value = end($array)+1;
        echo $value;
    }
}

echo find($array);


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Teisingas, Turulio variantas
for($i = 1; $i <= count($array) + 1; $i++){
   if(!in_array($i, $array)){
       echo $i;
       echo '<br>';
   }
}

?>