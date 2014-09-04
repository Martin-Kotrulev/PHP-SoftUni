<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Coloring Texts</title>
    <style>
        .red{
            color: red;
        }
        .blue{
            color: blue;
        }
        span{
            font-size: 24px;
        }
    </style>
</head>
<body>
<form method="post">
    <textarea cols="75" name="text">What a wonderful world!</textarea><br>
    <input type="submit" value="Color text"><br>
</form>
<?php
if(isset($_POST['text'])):
    $text=$_POST['text'];
    $split=preg_split("/\s*/", $text);
    foreach ($split as $char) :
        if($char!=" "):
            $value=ord("$char");
            if($value%2==0){
    ?>
                <span class="red"><?=$char." " ?></span>
            <?php }else{?>
                <span class="blue"><?=$char." " ?></span>
            <?php }?>
        <?php endif ?>
    <?php endforeach ?>
<?php endif ?>
</body>
</html>