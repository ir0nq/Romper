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

            if (isset($_POST["liczba"])){
                $pierwsza=$_POST["liczba"];
                if($pierwsza<2){
                    echo "Liczba nie jest pierwsza";
                }else{
                    $dzielniki=0;
                    for($i=2; $i<$pierwsza; $i++){
                        if($pierwsza%$i==0){
                            $dzielniki+=1;
                        }
                    }
                    if($dzielniki>0){
                        echo "Liczba nie jest pierwsza";
                    }else{
                        echo "Liczba jest pierwsza";
                    }
                }
            }
            else{
                echo "Niepodales liczby";
            }
?>
</body>
</html>