<html>

<head>
    <title>Zuri Arithmetic Operators Task</title>
</head>

<body>
    <p><b>Calculator Output:</b></p>
    
    <?php
    //The defined function for the calculator
    function calculator($num1, $num2)
    {
        //num 1 and num 2 represent the input values
        $add = $num1 + $num2;
        echo "The addition of both values is $add .<br>";

        $sub = $num1 - $num2;
        echo "The subtraction of both values is $sub . <br>";

        $mul = $num1 * $num2;
        echo "The multiplication of both values is $mul .<br>";

        $div = $num1 / $num2;
        echo "The division of both values is $div .<br>";

        $mod = $num1 % $num2;
        echo "The modulus of both values is $mod .<br>";
    }
    // Called the calculator function
    calculator(3, 4);

    ?>
</body>

</html>