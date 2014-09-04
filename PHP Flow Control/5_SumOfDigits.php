<!DOCTYPE html>
<html>
<head>
    <title>Sum of Digits</title>
    <style>
        table,td,th{
            border:1px solid black;
        }
        td{
            padding: 5px;
        }
    </style>
</head>
<body>
<form method="POST">
    <label>Input string: <input type="text" name="text"></label>
    <input type="submit" value="Show result">
    <?php
    if(isset($_POST['text']) && !empty($_POST['text'])):
        $numbers=preg_split("/[ ,]+/", $_POST['text']);
        ?>
        <table>
            <?php foreach ($numbers as $number) :
                $sum=0;
                if(is_numeric($number)){
                    $num=preg_split("/\W*/", $number);
                    foreach ($num as $n) {
                        $sum +=$n;
                    }
                ?>
                <tr>
                    <td><?= $number?></td>
                    <td><?=$sum ?></td>
                </tr>
                <?php }else{ ?>
                <tr>
                    <td><?= $number?></td>
                    <td>I cannot sum that</td>
                </tr>
                <?php } ?>

            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</form>
</body>
</html>