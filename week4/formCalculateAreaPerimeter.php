<?php
function findCircleArea($radius)
{
    echo 3.14 * (int)$radius * (int)$radius;
}

function findCirclePerimeter($radius)
{
    echo 2 * 3.14 * (int)$radius;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>formCalculateAreaPerimeter</title>
</head>

<body>
    <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8 col-lg-4 mt-5">
        <form action="formCalculateAreaPerimeter.php" method="post">
        <div class="form-group row">
            Radius: <input type="text" name="radius" class="form-control">
            <input type="submit" class="btn btn-info btn-rounded mx-5">
            </div>
        </form>
    </div>
    </div>
    <div class="p-3 m-5 text-dark text-center">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $radius = $_POST['radius'];

            echo "Area of circle =";
            echo findCircleArea($radius);
            echo "<br>";
            echo "Perimeter of circle =";
            echo findCirclePerimeter($radius);
        }
        ?>
    </div>
</body>

</html>