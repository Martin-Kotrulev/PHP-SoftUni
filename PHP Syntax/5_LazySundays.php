<?php
$curYear=date("Y");
$curMonth=date("m");
for($i=1;$i<=31;$i++){
    $date=date("l",strtotime("$curYear-$curMonth-$i"));
    if($date=="Sunday"){
        echo(date('jS F, Y',strtotime("$curYear-$curMonth-$i"))."\n");
    }
}
?>