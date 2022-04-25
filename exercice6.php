<?php 

$n = [1,2,3,4,5,6,7,8,9,10,11,12,13];
$s = ["carreau", "trefle", "coeur", "pique"];
$deck = [];


for ( $i=0; $i < count($s); $i++){
    for($j=0; $j < count($n); $j++){
        $deck[]=$n[$j]." ".$s[$i];
    }
}

for ($i=0; $i<=51; $i++){
    if ($i<26) {
        $subdeck1[]= $deck[$i];
    } else {
        $subdeck2[]= $deck[$i];
    }
}

for ($j=0; $j<26; $j++) {
	$newDeck[] = $subdeck1[$j];
	$newDeck[] = $subdeck2[$j];
}

for ($r=0; $r<count($newdeck); $r++) {
    echo $newdeck[$r];
}









print_r($subdeck1);
echo "<br>";
print_r($subdeck2);
echo "<br><br>";
print_r($newDeck);
