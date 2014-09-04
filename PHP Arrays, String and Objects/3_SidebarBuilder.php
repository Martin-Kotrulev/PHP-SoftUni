<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sidebar Builder</title>
    <style>
        aside{
            border: 1px solid black;
            background: lightblue;
            width: 150px;
            border-radius: 20px;
            padding-left: 10px;
            margin-top: 20px;
        }
        h1{
            border-bottom: 1px solid black;
        }
        a{
            color: black;
        }
        ul{
            list-style-type: circle;
            margin-left: -5px;
        }
    </style>
</head>
<body>
<form method="post">
    <label>Categories: <input type="text"name="categories" value="Knitting, Cycling, Swimming, Dancing"></label><br>
    <label>Tags: <input type="text"name="tags" value="person, free time, love, peace, protest"></label><br>
    <label>Months: <input type="text"name="months" value="April, May, June, July"></label><br>
    <input type="submit" value="Generate"><br>

</form>
<?php
if(isset($_POST['categories'])):
    $categories=preg_split("/[, ]+/", $_POST['categories']);
    $tags=preg_split("/[, ]+/", $_POST['tags']);
    $months=preg_split("/[, ]+/", $_POST['months']);
    ?>
    <aside>
        <h1>Categories</h1>
        <ul>
    <?php foreach ($categories as $cat) : ?>
            <li><a href="#"><?=$cat?></a></li>
    <?php endforeach ?>
        </ul>
    </aside>
    <aside>
        <h1>Tags</h1>
        <ul>
            <?php foreach ($tags as $tag) : ?>
                <li><a href="#"><?=$tag?></a></li>
            <?php endforeach ?>
        </ul>
    </aside>
    <aside>
        <h1>Months</h1>
        <ul>
            <?php foreach ($months as $month) : ?>
                <li><a href="#"><?=$month?></a></li>
            <?php endforeach ?>
        </ul>
    </aside>
<?php endif ?>
</body>
</html>