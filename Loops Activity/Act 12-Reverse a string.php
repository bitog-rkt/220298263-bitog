<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 12-Reverse a string</title>
</head>
<body>

    <?php
    $input = "chrysanthemum";
    $reversed = "";

    for ($i = strlen($input) - 1; $i >= 0; $i--) {
        $reversed .= $input[$i];
    }

    echo "Input: \"$input\"\n";
    echo "Output: \"$reversed\"\n";
    ?>
    
</body>
</html>