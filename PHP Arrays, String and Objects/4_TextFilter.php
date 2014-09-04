<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Text Filter</title>
</head>
<body>
<form method="post">
    <textarea cols="75" name="text">It is not Linux, it is GNU/Linux. Linux is merely the kernel, while GNU adds the functionality. Therefore we owe it to them by calling the OS GNU/Linux!
        Sincerely, a Windows client</textarea><br>
    <input type="text" name="banList" placeholder="Please enter ban List" value="Linux, Windows">
    <input type="submit" value="Generate"><br>
</form>
<?php
if(isset($_POST['text'])):
    $text= $_POST['text'];
    $bans=preg_split("/[, :;]+/", $_POST['banList']);
    $ast="******************************************************************************************************************************************************************";
    foreach ($bans as $ban){
        $replace=substr($ast,0,strlen($ban));
        $text=str_replace($ban,$replace,$text);
    }
    ?>
    <p><?=$text?></p>
<?php endif ?>
</body>
</html>