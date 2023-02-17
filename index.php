<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Arithmetic operation in php</title>
</head>
<body>
   <form action="" method = "post">

   Enter frst number:<input type ="text" name ="num1" required/><br></br>
   Enter second number:<input type ="text" name ="num2" required/><br></br>

   <label for="operator">Select an operation:</label>

   <select name="dropdown">

      <option value="Addition">Addition</option>
      <option value="Substraction">Substraction</option>
      <option value="Multiplication">Multiplication</option>
      <option value="Division">Division</option>
      <option value="Modulus">Modulus</option>

   </select> <br></br>

   <input type ="submit"  name="Submit"><br></br>
   
   </form>

   <?php
   function compute(){
      $a = $_POST['num1'];
      $b = $_POST['num2'];

      switch($_POST['dropdown']){
         case "Addition";
         $sum = $a + $b;
         return $sum;
         break;

         case "Substraction";
         $minus = $a - $b;
         return $minus;
         break;

         case "Multiplication";
         $mul = $a * $b;
         return $mul;
         break;

         case "Division";
         $div = $a / $b;
         return $div;
         break;

         case "Modulus";
         $mod = $a % $b;
         return $mod;
         break;

         default:
            echo  "invalid Operation";
      }
   
   }
         echo "The result is " .compute();
   ?>

</body>
</html>