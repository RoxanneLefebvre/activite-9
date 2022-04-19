<?php 
$n = [1,2,3,4,5,6,7,8,9,10,11,12,13];
$s = ["carreau", "trefle", "coeur", "pique"];
$deck = [];


for ( $i=0; $i < count($s); $i++){
    for($j=0; $j < count($n); $j++){
        $deck[]=$n[$j]." ".$s[$i];
    }
}

for ($i=0; $i<51; $i++){
    if ($i<26){
        $subdeck1[]= $s[$i];
    }else {
        $subdeck2[]= $n[$j];
    }
}
print_r($subdeck1);




