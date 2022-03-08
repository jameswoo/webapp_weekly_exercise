<!DOCTYPE html>
<html>

<head>
    <title>formCalculate</title>
</head>

<body>

<form action="formCalculate.php" method="post">
        Radius: <input type="text" name="radius"><br>
        <input type="submit">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST['radius'];
        $pi = 3.14;

        echo "Area of circle =";
        echo findCircleArea($radius, $pi);
    }else {
        echo "please input radius";
    }
    function findCircleArea($radius, $pi)
    {
        echo $pi * $radius * $radius;
    }



    ?>



</body>

</html>