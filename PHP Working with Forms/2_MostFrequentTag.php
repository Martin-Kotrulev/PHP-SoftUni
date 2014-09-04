<!DOCTYPE html>
<html>
<head>
    <title>Most Frequent Tag</title>
</head>
<body>
<p>Enter Tags:</p>
<form action="" method="post">
    <input type="text" name="tags">
    <input type="submit">
</form><br>
<?php
if(isset($_POST['tags'])){
    $tag=explode(", ",$_POST['tags']);
    $tagCount;
    foreach($tag as $t){
        if(isset($tagCount[$t])){
            $tagCount[$t]++;
        }else{
            $tagCount[$t]=1;
        }
    }
    asort($tagCount);
    $tagCount=array_reverse($tagCount);
    $index=0;
    $most;
    foreach($tagCount as $key => $value){
        if($index==0){
            $most=$key;
            $index++;
        }
        echo("$key : $value  times "."<br>");
    }
    echo("<br>"."Most Frequent Tag is: $most");
}
?>
</body>
</html>