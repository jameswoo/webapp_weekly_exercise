<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    $numbers = array("34", "4", "5", "-23", "45", "100");
    $quantity = count($numbers);
    for ($x = 0; $x < $quantity; $x++) {

        echo "<div class='col-lg-1 text-center border border-radius my-4 rounded-circle border-dark p-4 p-lg-5'>";
        echo $numbers[$x];
        echo "</div>";
    }
    ?>

  </br>
    <?php
    $numbers[0] = "100";
    $numbers[5] = "34";

    for ($x = 0; $x < $quantity; $x++) {

        echo "<div class='col-lg-1 text-center border border-radius my-4 rounded-circle border-dark p-4 p-lg-5'>";
        echo $numbers[$x];
        echo "</div>";
    }
    ?>

</body>
</html>