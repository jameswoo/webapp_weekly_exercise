<!DOCTYPE html>
<html>

<head>
    <title>findCircleArea</title>
</head>

<body>


    <?php
    $radius = 2;
    $pi = 3.14;

    function findCircleArea ($radius, $pi){
        echo $pi * $radius * $radius;
    }
    
    echo "Area of circle =";
    echo findCircleArea("$radius", "$pi");

    ?>
</body>

</html>