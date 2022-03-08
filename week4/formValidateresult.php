<?php
function findCircleArea($radius)
{
    echo 3.14 * (int)$radius * (int)$radius;
}

function findCirclePerimeter($radius)
{
    echo 2 * 3.14 * $radius;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>formValidateResult</title>
</head>

<body>
    <form action="formValidateresult.php" method="post">
        Radius: <input type="text" name="radius"><br>
        
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <input type="submit" name="submit" value="Submit" class="btn btn-info">
            </div>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $radius = $_POST['radius'];
        $pi = 3.14;
        if (empty($radius)) {
            echo "please input radius";
        } elseif (!is_numeric($radius)) {
            echo "please only enter number";
        } else {

            echo "Area of circle =";
            echo findCircleArea($radius);
            echo "<br>";
            echo "Perimeter of circle =";
            echo findCirclePerimeter($radius);
        }
    }


    ?>

</body>

</html>