
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
    <?php
        $str = "";
        if(isset($_POST['shuffle'])){
            $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*_-?";
            $str = str_shuffle($str);
            $str = substr($str,0,12);
        }
    ?>
    <h2>Random Password Generator</h2>
    <form action="#" method="post">
        <input type="text"  value="<?php if(empty($str)){}else{echo $str;} ?>" placeholder="Generate">
        <input type="submit" value="Generate Password" name="shuffle">
    </form>
</body>
</html>