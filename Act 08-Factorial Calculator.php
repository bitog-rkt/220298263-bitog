<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 08-Factorial Calculator</title>
</head>
<body>

    <?php
    $number = 5; 
    $factorial = 1;

    for ($i = $number; $i > 0; $i--) {
        $factorial *= $i;
    }

    echo "Factorial of $number is: $factorial \n";
    ?>

    
</body>
</html>