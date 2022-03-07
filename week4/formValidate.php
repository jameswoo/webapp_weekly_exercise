<!DOCTYPE html>
<html>

<head>
    <title>formValidate</title>
</head>

<body>

    <form action="formValidateresult.php <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Radius: <input type="text" name="radius"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    $radius = "";
    $radiusErr = "";
//
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ((empty($_POST['radius'])) or (!is_numeric($radius))) {
            $radiusErr = "Please enter only number";
        }
        
        
    }
    ?>

</body>

</html>