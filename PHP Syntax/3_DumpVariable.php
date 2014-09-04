<?php

$string="hello";
$int=15;
$double=1.234;
$array=array(1,2,3);
$obj=(object)[2,34];


if(is_numeric($string)){
    echo(var_dump($string));
}else{
    echo(gettype($string ));
}
if(is_numeric($int)){
    echo(var_dump($int));
}else{
    echo(gettype($int));
}
if(is_numeric($double)){
    echo(var_dump($double));
}else{
    echo(gettype($double));
}
if(is_numeric($array)){
    echo(var_dump($array));
}else{
    echo(gettype($array) . "\n");
}
if(is_numeric($obj)){
    echo(var_dump($obj));
}else{
    echo(gettype($obj));
}
?>