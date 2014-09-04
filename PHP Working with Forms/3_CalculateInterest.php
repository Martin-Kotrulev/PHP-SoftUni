<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Calculate Interest</title>
</head>
<body>
<form action="" method="post">
    <label>Enter Amount <input type="text" name="amount"></label><br>
    <label><input type="radio" name="currency" value="USD"> USD</label>
    <label><input type="radio" name="currency" value="EUR"> EUR</label>
    <label><input type="radio" name="currency" value="BGN"> BGN</label><br>
    <label>Compound Insterest Amount <input type="text" name="interest"></label><br>
    <select name="time">
        <option value="6">6 Months</option>
        <option value="12">1 Year</option>
        <option value="24">2 Year</option>
        <option value="60">5 Year</option>
    </select>
    <input type="submit" value="Calculate">
</form><br>
<?php
if(isset($_POST['amount'])){
    $percent=($_POST['interest']/12)+100;
    $startAmount=$_POST['amount'];
    $endAmount;
    for($i=1;$i<=(int)$_POST['time'];$i++){
        if($i==1){
            $endAmount=($startAmount*$percent)/100;
        }else{
            $endAmount=($endAmount*$percent)/100;
        }
    }
    $endAmount=round($endAmount,2);
    switch($_POST['currency']){
        case "USD": echo("$ $endAmount");break;
        case "EUR": echo("$endAmount &euro;");break;
        case "BGN": echo("$endAmount лв.");break;
        default: echo("$endAmount");break;

    }
}
?>
</body>
</html>