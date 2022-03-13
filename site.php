<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        echo "<h1>Hello world!</h1>";
        echo "<hr>";
        echo "<p>this is nice...</p>";
        echo "<hr>";

        // Variables
        $name = "Sam";
        $age = 25;     
        $come = "George";

        $add1 = 5;
        $add2 = 10;

        echo "There once was a man named $name ";
        echo "He was $age years old <br>";
        echo "He really liked the name $name <br>";
        echo "But didin't like being $age <br>";

        echo "Will " .$come. " come? <br>";
        echo $add1 + $add2;

        // Global scope variable
        $x = 5;
        $y = 10;

        function myTest() {
            $GLOBALS["y"] = $GLOBALS["x"] + $GLOBALS["y"];
        }

        myTest();
        echo $y;

        $isTrue = true;
        $isFalse = false;

        // Delete variable
        unset($isTrue);

        // Arithmetic
        $sum = 1+1; 
        $difference = 2-1;
        $product = 2*2;
        $quotient = 2/1;

        // Shorthand arithmetic
        $number = 0;
        $number += 1; // Increment $number by 1
        echo $number++; // Prints 1 and adds 1 to it
        // $number /= $float; // Divide and assign the quotient to $number

        $apples = "I have {$number} apples to eat today.";

        // Arrays
        $cars = array('Bmw', 'Mercedes', 'Audi');
        echo "I like cars " . $cars[2] . " is it good?";

    
    ?>
</body>
</html>