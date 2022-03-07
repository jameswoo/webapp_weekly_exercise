<!DOCTYPE html>
<html>

<head>
    <title>formValidateResult</title>
</head>

<body>

    <?php
    $radius = $_POST['radius'];
    $pi = 3.14;

    function findCircleArea ($radius, $pi){
        echo $pi * $radius * $radius;
    }
    
    echo "Area of circle =";
    echo findCircleArea("$radius", "$pi");
    echo "<br>";
    ?>

<?php
    $radius = $_POST['radius'];
    $pi = 3.14;

    function findCirclePerimeter ($radius, $pi){
        echo 2 * $pi * $radius;
    }
    
    echo "Perimeter of circle =";
    echo findCirclePerimeter("$radius", "$pi");

    ?>
</body>
