<!DOCTYPE html>
<html>
<head>
    <title>String Modifier</title>
</head>
<body>
<form method="POST">
    <input type="text" name="text">
    <input type="radio" name="modify" value="palindrome">Check Palindrome
    <input type="radio" name="modify" value="reverse">Reverse String
    <input type="radio" name="modify" value="split">Split
    <input type="radio" name="modify" value="hash">Hash String
    <input type="radio" name="modify" value="shuffle">Shuffle String
    <input type="submit" value="Show result"><br>
    <?php
    function Palindrome($text){
        $isPalindrome=true;
        for($i=0;$i<strlen($text)/2;$i++){
            if($text[$i]!=$text[strlen($text)-$i-1]){
                $isPalindrome=false;
                break;
            }
        }
        return $isPalindrome;
    }
    if(isset($_POST['text']) && !empty($_POST['text'])){
        $text=$_POST['text'];
        $modify=$_POST['modify'];
        switch($modify){
            case 'palindrome':
                echo($text);
                if(Palindrome($text)){
                    echo " is a palindrome!";
                }else{
                    echo " is not a palindrome!";
                }
                break;

            case 'reverse':
                echo(strrev($text));
                break;

            case 'split':
                $split=preg_split("/\W*/", $text);
                foreach ($split as $char) {
                    if($char!=" "){
                        echo($char." ");
                    }
                }
                break;

            case 'hash':
                echo(crypt($text));
                break;

            case 'shuffle':
                echo(str_shuffle($text));
                break;
        }
    }
    ?>
</form>
</body>
</html>