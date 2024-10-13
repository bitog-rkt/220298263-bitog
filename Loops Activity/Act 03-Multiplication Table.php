<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 03-Multiplication Table</title>
</head>
<body>

    <?php
        $num = 7;
        for($i = 1; $i <= 10; $i++){
            $product = $num * $i;
            echo "$num x $i = $product \n";
        }
    ?>
    
</body>
</html>