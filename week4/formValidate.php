<!DOCTYPE html>
<html>

<head>
    <title>formValidate</title>
</head>

<body>

    <?php
    $radius = $_POST['radius'];
    $pi = 3.14;

    function findCircleArea($radius, $pi)
    {
        echo $pi * $radius * $radius;
    }

    if (is_numeric($radius)) {

        echo "Area of circle =";
        echo findCircleArea("$radius", "$pi");
        echo "<br>";
    } else {
        echo 'Error: Please enter only numbers.Thank you';
    }
    ?>

    <?php
    $radius = $_POST['radius'];
    $pi = 3.14;

    function findCirclePerimeter($radius, $pi)
    {
        echo 2 * $pi * $radius;
    }


    if (is_numeric($radius)) {
        echo "Perimeter of circle =";
        echo findCirclePerimeter("$radius", "$pi");
    } else {
        echo '';
    }
    ?>

</body>

</html>