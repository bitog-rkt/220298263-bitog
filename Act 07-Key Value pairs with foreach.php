<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 07-Key Value pairs with foreach</title>
</head>
<body>
    
    <?php
    $student_info = [
        "Name" => "Rose",
        "Age" => 22,
        "Grade" => "D",
        "City" => "Baguio"];

    foreach ($student_info as $key => $value) {
        echo "$key: $value \n";
    }
    ?>
    
</body>
</html>