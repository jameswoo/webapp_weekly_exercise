<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>findCirclePerimeter</title>
</head>

<body>

    <div class="p-3 m-5 bg-info text-white text-center ">
        <?php
        $radius = 2;

        function findCirclePerimeter($radius)
        {
            echo 2 * 3.14 * $radius;
        }

        echo "Perimeter of circle =";
        echo findCirclePerimeter($radius);

        ?>
    </div>
    
</body>

</html>