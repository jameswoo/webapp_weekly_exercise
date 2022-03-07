<!DOCTYPE html>
<html>

<head>
    <title>formCalculate</title>
</head>

<body>

    <?php
    $radius = $_POST['radius'];
    $pi = 3.14;

    function findCircleArea($radius, $pi)
    {
        echo $pi * $radius * $radius;
    }

    echo "Area of circle =";
    echo findCircleArea("$radius", "$pi");
    ?>



</body>

</html>