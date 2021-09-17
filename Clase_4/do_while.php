<html>

<head>
    <title>
        Uso del ciclo do...while
    </title>
</head>

<body>
    <h1>
        Uso del ciclo do...while
    </h1>
    <?php
        $variable = 1;
        do {
            echo "Ahora \$variable contiene: ", $variable, "<br>";
            $variable++;
        } while ($variable < 10)
    ?>
</body>

</html>