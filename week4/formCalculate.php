<?php
function findCircleArea($radius)
{
    echo 3.14 * (int)$radius * (int)$radius;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>formCalculate</title>
</head>

<body>
    <div class="row justify-content-center">
        <form action="formCalculate.php" method="post">

            Radius: <input type="text" name="radius"><br>
            <input type="submit">
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST['radius'];

        echo "Area of circle =";
        echo findCircleArea($radius);
    }

    ?>



</body>

</html>