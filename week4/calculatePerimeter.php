<!DOCTYPE html>
<html>

<head>
    <title>findCirclePerimeter</title>
</head>

<body>


    <?php
    $radius = 2;
    $pi = 3.14;

    function findCirclePerimeter ($radius, $pi){
        echo 2 * $pi * $radius;
    }
    
    echo "Perimeter of circle =";
    echo findCirclePerimeter("2", "3.14");

    ?>
</body>

</html>