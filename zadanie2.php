<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=, initial-scale=1.0">
       <title>whatever</title>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="liczba">Podaj liczbe</label>
        <input type="text" id="liczba" name="liczba" >
        <input type="submit" value="Licz">
        </form>

        <?php
            echo"<br>";
            if (isset($_POST["liczba"])){
                $liczba=$_POST["liczba"];
                if($liczba>0) {
                    echo "Liczba jest dodatnia";
                }elseif($liczba<0){
                    echo "Liczba jest ujemna";
                }else{
                    echo "Liczba wynosi 0";
                }
            }

            else{
                echo "Niepodales liczby";
            }
?>
</body>
</html>