<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 02-Password Validator</title>
</head>
<body>

    <?php
        $correct_password="password123";

        do{
            echo "Please enter the password: ";
            $input_password = trim(fgets(STDIN));

            if($input_password != $correct_password){
                echo "Incorrect password. \n";
            }
        }while ($input_password != $correct_password);
        echo "Access Granted.";
    ?>
    
</body>
</html>