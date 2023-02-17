"<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>md5 hash</title>
</head>
<body>
    <form action="" method = "POST">
        Enter password : <input type ="text"  name="pass"><br>
                        <input type ="submit" value="Hash!">

    </form>
    <?php
     $pass1 =$_POST['pass'];
     $pass = md5($pass1);
     echo $pass; 
    ?>
</body>
</html>