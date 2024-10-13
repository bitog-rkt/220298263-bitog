<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 10-Prime number checker</title>
</head>
<body>

    <?php
    echo "Enter a number: ";
    $number = intval(trim(fgets(STDIN)));
    $is_prime = true;

    if ($number <= 1) {
        $is_prime = false;
    } 
    else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $is_prime = false;
                break;
            }
        }
    }

    if ($is_prime) {
        echo "$number is a prime number.\n";
    } else {
        echo "$number is not a prime number.\n";
    }
    ?>
    
</body>
</html>