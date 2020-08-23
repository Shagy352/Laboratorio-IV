<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo "Ejercicio Numero 1 <br> <br>";
        $myNumber = 123;
        $numberString = "123";
        echo "La suma entre $myNumber (que es un numero) y $numberString (que es un string) es: ", $myNumber + $numberString, "<br>";
        echo "Si realizamos la misma suma pero al reves, obtenemos el siguiente resultado: ", $numberString + $myNumber, "<br>";
        echo "Ahora que pasa si usamos el operador punto (.): ", $myNumber.$numberString, "<br>";

        echo " <br> Ejercicio Numero 2 <br>";
        if (1 == "1")
        {
            echo " <br> 1 == '1' <br> It´s right <br>";
        }
        if (1 === "1")
        {
            echo " <br> 1 === '1' <br> It´s right <br>";
        }
        if (!null)
        {
            echo " <br> !null  <br> It´s right <br>";
        }
        if (!false)
        {
            echo " <br> !false  <br> It´s right <br>";
        }
        if ("")
        {
            echo " <br> '' <br> It´s right <br>";
        }
        if (" ")
        {
            echo " <br> ' ' <br> It´s right <br>";
        }
        if ("tested")
        {
            echo " <br> 'tested' <br> It´s right <br>";
        }
        if (1 - 1)
        {
            echo " <br> 1 - 1 <br> It´s right <br>";
        }

        


    ?>
</body>
</html>