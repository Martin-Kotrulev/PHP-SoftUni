<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Word Mapping</title>
    <style>
        table,td{
            border:1px solid black;
            background: lightgray;
        }
        td{
            padding: 3px;
        }
    </style>
</head>
<body>
<form method="post">
    <textarea cols="75" name="text">The quick brows fox.!!! jumped over..// the lazy dog.!</textarea><br>
    <input type="submit" value="Count words"><br>
</form>
<?php
    if(isset($_POST['text'])):
        $text=strtolower($_POST['text']);
        $words=str_word_count($text, 1);
        $result=[];
        foreach ($words as $word) {
            if(isset($result[$word])){
                $result[$word]++;
            }else{
                $result[$word]=1;
            }
        }
?>
<table>
    <?php foreach ($result as $key => $value) :?>
        <tr>
            <td><?=$key?></td>
            <td><?=$value?></td>
        </tr>
    <?php endforeach ?>
</table>
<?php endif ?>
</body>
</html>