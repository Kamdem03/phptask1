<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
    Enter number:<input type ="text" name="a"><br>
    Enter number:<input type ="text" name="b"><br>
    <input type="submit" name = "submit">
    </form>

    <?php
    $a=$_POST['a'];
    $b=$_POST['b'];
        function sum($a,$b){
            $sum = $a + $b;
            return $sum;
        }
    echo "The sum is ".sum($a,$b);
    ?>

</body>
</html>