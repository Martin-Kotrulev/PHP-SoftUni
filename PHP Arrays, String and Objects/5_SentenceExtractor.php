<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sentence Extractor</title>
</head>
<body>
<form method="post">
    <textarea cols="75" name="text">This is my cat! And this is my dog. We happily live in Paris – the most beautiful city in the world! Isn’t it great? Well it is :)</textarea><br>
    <input type="text" name="word" placeholder="Please enter word" value="is">
    <input type="submit" value="Generate"><br>
</form>
<?php
if(isset($_POST['text'])):
    $text= $_POST['text'];
    $word=$_POST['word'];
    $reg="/[^!,.?]*\s+($word)\s+[^!,.?]*[!,.?]/";
    $count=preg_match_all($reg,$text,$match);
    foreach ($match[0] as $sentence): ?>

        <p><?=$sentence?></p>

    <?php endforeach ?>
<?php endif ?>
</body>
</html>