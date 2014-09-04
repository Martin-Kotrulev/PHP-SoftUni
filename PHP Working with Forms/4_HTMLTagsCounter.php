<!DOCTYPE html>
<html>
<head>
    <title>Most Frequent Tag</title>
</head>
<body>
<p>Enter HTML tags:</p>
<form action="" method="post">
    <input type="text" name="tag">
    <input type="submit">
</form><br>
<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
$tags=array("!DOCTYPE", "a" ,"abbr","acronym","address","applet","area","article","aside","audio","b","base","basefont","bdi","bdo","big","blockquote","body","br","button","canvas","caption","center","cite","code","col","colgroup","command","datalist","dd","del","details","dfn","dir","div","dl","dt","em","embed","fieldset","figcaption","figure","font","footer","form","frame","frameset","h1","h2","h3","h3","h4","h5","h6","head","header","hgroup","hr","html","i","iframe","img","input","ins","kbd","keygen","label","legend","li","link","map","mark","menu","meta","meter","nav","noframes","noscript","object","ol","optgroup","option","output","p","param","pre","progress","q","rp","rt","ruby","s","samp","script","section","select","small","source","span","strike","strong","style","sub","summary","sup","table","tbody","td","textarea","tfoot","th","thead","time","title","tr","track","tt","u","ul","var","video","wbr");
if(isset($_POST['tag'])){
    $tag=$_POST['tag'];
    if(in_array ($tag , $tags) ){
        echo("Valid HTML tag!" ."<br>");
        $_SESSION['count']++;
    }else{
        echo("Invalid HTML tag!"."<br>");
    }
    echo("Score: ". $_SESSION['count']);
}
?>
</body>
</html>