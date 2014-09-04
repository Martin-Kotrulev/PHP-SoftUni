<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Form Data</title>
    <style>
        input[type="text"], label{
            display: block;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Name"/>
        <input type="text" name="age" placeholder="Age"/>
        <label for="Male"><input type="radio" name="sex" value="male" />Male</label>
        <label for="Male"><input type="radio" name="sex" value="Female" />Female</label>
        <input type="submit" name="submit" value="Изпращане" />
    </form>
    <?php
    if(isset($_POST['name'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $sex=$_POST['sex'];
        echo "My name is $name, I am $age years old. I am $sex.";
    }
    ?>
</body>
</html>