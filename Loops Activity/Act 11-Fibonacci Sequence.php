<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 11-Fibonacci Sequence</title>
</head>
<body>
    
    <?php
    $num1 = 0;
    $num2 = 1;
    $count = 0;

    echo "$num1 $num2 ";

    while ($count < 8) {
        $next = $num1 + $num2;
        echo "$next ";
    
        $num1 = $num2;
        $num2 = $next;
    
        $count++;
    }
    ?>

</body>
</html>