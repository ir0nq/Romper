<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sum = 0;

        for($i = 0; $i <=9; $i++) {
            $rand = rand(100,200);
            $sum += $rand;
            echo($rand . "<br>");
        }

        echo("Suma jest rowna: " . $sum . "<br>");
        echo("Srednia jest rowna: " . $sum/10);
    ?>
</body>
</html>