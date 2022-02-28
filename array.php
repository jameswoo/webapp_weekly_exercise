<html>
  <head>
  <link rel="stylesheet" href="style2.css">
    <title>Q2 array</title>
  </head>
  <body>
    <div class="circle">34</div>
    <div class="circle">4</div>
    <div class="circle">5</div>
    <div class="circle">-23</div>
    <div class="circle">45</div>
    <div class="circle">100</div>


    <?php
    $numbers = array("34", "4", "5", "-23", "45", "100");
    $quantity = count($numbers);
    for ($x = 0; $x < $quantity; $x++) {

        echo "<div class='col-lg-1 col-2 text-center border border-radius my-2 rounded-circle border-dark p-4 p-lg-5'>";
        echo $numbers[$x];
        echo "</div>";
    }

    $numbers[0] = "100";
    $numbers[5] = "34";

    for ($x = 0; $x < $quantity; $x++) {

        echo "<div class='col-lg-1 col-2 text-center border border-radius my-2 rounded-circle border-dark p-4 p-lg-5'>";
        echo $numbers[$x];
        echo "</div>";
    }
    ?>
  </body>
</html>