<!DOCTYPE html>
<html>
<head>
    <title>Prime Range</title>
</head>
<body>
<form method="POST">
    <label>Starting Index: <input type="text" name="start"></label>
    <label>End: <input type="text" name="end"></label>
    <input type="submit" value="Submit"><br>
    <?php
    function isPrime($number){
        $prime=true;
        for($a=2;$a<$number/2+1;$a++){
            if($number%$a==0){
                $prime=false;
            }
        }
        return $prime;
    }
    if(isset($_POST['start']) && !empty($_POST['start']) &&isset($_POST['end']) && !empty($_POST['end'])){
    $start=$_POST['start'];
    $end=$_POST['end'];
        for($i=$start;$i<=$end;$i++){
            if(isPrime($i)){
                echo('<b>' . $i );
                if(!($i==$end)){
                    echo (", ". '</b>' );
                }
            }else{
                echo $i;
                if(!($i==$end)){
                    echo (", ");
                }
            }
        }
    }
    ?>
</form>
</body>
</html>