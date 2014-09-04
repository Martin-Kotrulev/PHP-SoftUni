<!DOCTYPE html>
<html>
<head>
    <title>HTML Table</title>
</head>
<style>
    td{
        padding: 5px;
        border: 1px solid #000;
        display: table-cell;
        vertical-align: inherit;
    }
    table{
        border-collapse: collapse;
    }
</style>
<body>
<?php
$name="Gosho";
$phone="0882-321-423";
$age=24;
$address="Hadji Dimitar";
?>
    <table>
        <tr >
            <td style="background: orange; font-weight: bold">Name</td>
            <td align="right"><?= $name ?></td>
        </tr>
        <tr>
            <td style="background: orange; font-weight: bold">Phone number</td>
            <td align="right"><?= $phone ?></td>
        </tr>
        <tr>
            <td style="background: orange; font-weight: bold">Age</td>
            <td align="right"><?= $age ?></td>
        </tr>
        <tr>
            <td style="background: orange; font-weight: bold">Address</td>
            <td align="right"><?= $address ?></td>
        </tr>

    </table>
</body>
</html>
