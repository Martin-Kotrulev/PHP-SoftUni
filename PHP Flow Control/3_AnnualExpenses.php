<!DOCTYPE html>
<html>
<head>
    <title>Annual Expenses</title>
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
    <label>Enter number of years: <input type="text" name="number"></label>
    <input type="submit" value="Show cost">
    <?php
    if(isset($_POST['number']) && !empty($_POST['number'])):
        $number=$_POST['number'];
    ?>
        <table>
            <tr>
                <th>Year</th>
                <?php for($i=1;$i<=12;$i++):
                $monthName = date('F', mktime(0, 0, 0, $i, 10))
                ?>
                    <th><?=$monthName ?></th>

                <?php endfor ?>
                <th>Total:</th>
            </tr>
            <?php for($i=0;$i<$number;$i++):
            $year=date('o') - $i;
            $total=0;
            ?>

                <tr>
                    <td><?= $year?></td>
                    <?php for($a=1;$a<=12;$a++):
                    $random=rand(0,999);
                    $total+=$random;
                    ?>
                    <td><?=$random?></td>

                    <?php endfor; ?>
                    <td><?=$total ?></td>
                </tr>

            <?php endfor; ?>
        </table>
    <?php endif; ?>
</form>
</body>
</html>