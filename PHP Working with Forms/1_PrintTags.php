<!DOCTYPE html>
<html>
<head>
    <title>Print Tags</title>
</head>
<body>
    <p>Enter Tags:</p>
    <form action="" method="post">
    <input type="text" name="tags">
    <input type="submit">
    </form><br>
    <?php
    if(isset($_POST['tags'])){
        $index=0;
        $tag=explode(", ",$_POST['tags']);
        foreach($tag as $t){
            echo("$index: $t <br>");
            $index++;
        }
    }
    ?>
</body>
</html>