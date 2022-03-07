<!DOCTYPE html>
<html>

<head>
    <title>formCalculate</title>
</head>

<body>

    <?php
    $radius = $_POST['radius'];
    $pi = 3.14;
    $area = $pi * $radius * $radius;
    $perimeter = 2 * $pi * $radius;

    if (isset($form_result)) {
        if (is_numeric($radius)) {

            echo "Area of circle = $area";
            echo "<br>";
            echo "Perimeter of circle = $perimeter";
        } else {
            echo 'Error: Please enter only numbers.Thank you';
        }
    }
    ?>

</body>

</html>