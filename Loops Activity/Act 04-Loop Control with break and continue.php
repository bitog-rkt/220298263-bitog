<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 04-Loop Control with break and continue</title>
</head>
<body>
    
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            continue;
        }

        if ($i == 8) {
            break;
        }
        echo "$i ";
    }
?>

</body>
</html>