<?php
$n=247;
$end;
if($n>999 &&$n>99){
    $end=999;
}else if($n<=999 &&$n>99){
    $end=$n;
}else{
    echo("no");
    return;
}

for($i=100;$i<=$n;$i++){
    $firsDig=($i/100)%10;
    $secondDig=($i/10)%10;
    $thirdDig=$i%10;
    if($firsDig!=$secondDig&&$secondDig!=$thirdDig&&$firsDig!=$thirdDig){
        echo("$i \n");
    }
}
?>