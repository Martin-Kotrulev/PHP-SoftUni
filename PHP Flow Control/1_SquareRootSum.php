<!DOCTYPE html>
<html>
<head>
    <title>Square Root Sum</title>
    <style>
        table,td,th{
            border:1px solid black;
        }
        td{
            padding: 5px;
        }
        .bold{
        font-weight: bold;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Number</th>
        <th>Square</th>
    </tr>
    <?php
    $sum=0;
    for($i=0;$i<=100;$i+=2):
        $sqrtRound=round(sqrt($i),2);
        $sum += sqrt($i);
        ?>
        <tr>
            <td><?=$i ?></td>
            <td><?= $sqrtRound ?></td>
        </tr>
    <?php endfor; ?>

    <tr>
        <td class="bold">Total:</td>
        <td><?= round($sum,2)?></td>
    </tr>
</table>
</body>
</html>