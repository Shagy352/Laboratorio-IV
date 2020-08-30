<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico 3</title>
</head>
<body>
    <?php
        echo "<h3>Ejercicio Numero 1</h3>";
        $myNumber = 123;
        $numberString = "123";
        echo "La suma entre $myNumber (que es un numero) y $numberString (que es un string) es: ", $myNumber + $numberString, "<br>";
        echo "Si realizamos la misma suma pero al reves, obtenemos el siguiente resultado: ", $numberString + $myNumber, "<br>";
        echo "Ahora que pasa si usamos el operador punto (.): ", $myNumber.$numberString, "<br>";

        echo " <br> <h3>Ejercicio Numero 2</h3>";
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

        echo "<br> <h3>Ejercicio Numero 3</h3>";

        function suma($num1, $num2)
        {
            echo "La suma entre $num1 y $num2 es: ", $num1 + $num2;
        }

        function multiplicacion($var1, $var2)
        {
            echo "La multiplicacion entre $var1 y $var2 es: ", $var1 * $var2; 
        }

        suma(11.5,"35");
        echo "<br>";
        multiplicacion(11.5, "-3");

        echo "<br><br> <h3>Ejercicio Numero 4</h3>";

        $array = [  
            1     => "first value",
            "1"  => "second value",    
            1.2  => "tirth value",    
            true => "fourth value",    
            1+0.2 => "fifth value",    
            false !== null => "sixth value", 
        ];

        $largo = count($array);
        echo "<br>El largo del arreglo es de: $largo <br>Y su contenido es: ", var_dump($array);

        echo "<br><br> <h3>Ejercicio Numero 5</h3>";

        $people = [ 
            ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
            ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
            ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
            ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
            ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
            ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
            ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
        ];

        function mayoresEdad($people)
        {
            $cont = 0;
            foreach($people as $people2)
            {
                foreach($people2 as $key => $value)
                {
                    if($key == 'age')
                    {
                        if($value >= 18)
                        {
                            $cont++;
                        }
                    }
                }
            }
            echo "$cont personas son mayores de edad";
        }

        function mujerMenorEdad($people)
        {
            $sex = 0;
            $edad = 0;
            $ambos = 0;
            foreach($people as $people2)
            {
                foreach($people2 as $key => $value)
                {                    
                    if($key == 'sex')
                    {
                        if($value == 'f')
                        {
                            $sex++;
                        }
                    }
                    if($key == 'age')
                    {
                        if($value < 18)
                        {
                            $edad++;
                        }
                    }
                    if($edad == 1 && $sex == 1)
                    {
                        $ambos++;
                        $sex = 0;
                        $edad = 0;
                    }
                }
            }
            echo "$ambos personas son mujeres menores de edad";
        }

        function tablaValores($people)
        {
            $s = '<table border="1">';
            foreach ( $people as $people2 ) 
            {
                $s .= '<tr>';
                foreach ( $people2 as $value ) 
                {
                    $s .= '<td>'.$value.'</td>';
                }
                $s .= '</tr>';
            }
            $s .= '</table>';
            echo $s;
        }
        mayoresEdad($people);
        echo "<br>";
        mujerMenorEdad($people);
        echo "<br><br>";
        tablaValores($people);

        echo "<br><br> <h3>Ejercicio Numero 6</h3>";

    ?>
</body>
</html>