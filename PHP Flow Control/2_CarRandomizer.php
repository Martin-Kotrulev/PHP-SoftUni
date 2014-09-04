<!DOCTYPE html>
<html>
<head>
    <title>Car Randomizer</title>
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
        <label>Enter cars <input type="text" name="text"></label>
        <input type="submit" value="Show result">
        <?php
            if(isset($_POST['text']) && !empty($_POST['text'])):
            $cars=preg_split("/[ ,]+/", $_POST['text']);
            $colors=['red','yellow','blue','black','silver','white','orange','brown','green'];
            ?>
        <table>
            <tr>
                <th>Car</th>
                <th>Color</th>
                <th>Count</th>
            </tr>
            <?php foreach ($cars as $car) :
            $count= rand(1,5);
            $index=array_rand($colors);
            ?>

            <tr>
                <td><?= $car?></td>
                <td><?=$colors[$index] ?></td>
                <td><?=$count ?></td>
            </tr>

            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </form>
</body>
</html>