<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 06-Array Iteration with foreach</title>
</head>
<body>

    <?php
    $movie_name = [
        "The Shawshank Redemption",
        "Inception",
        "The Dark Knight",
        "Interstellar",
        "Parasite"];

    foreach ($movie_name as $index => $movie) {
        echo ($index + 1) . ". " . $movie . "\n";
    }
    ?>

    
</body>
</html>