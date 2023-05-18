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
        <label for="znak">Podaj znak</label>
        <input type="text" id="znak" name="znak" >
        <input type="submit" value="Sprawdz">
        </form>

        <?php
            echo"<br>";
            if (isset($_POST["znak"])){
                $znak=$_POST["znak"];
                if(ctype_upper($znak)) {
                    echo "To jest duza litera";
                }elseif(ctype_lower($znak)){
                    echo "To jest mala litera";
                }elseif(ctype_xdigit($znak)){
                    echo "To jest liczba";
                }else
                    echo "To jest inny znak";
            }

            else{
                echo "Niepodales czegokolwiek";
            }
?>
</body>
</html>