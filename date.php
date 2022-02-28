<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<title>Q2 date</title>
<body>
    <!--1st calendar-->
    <div class="col-sm-12 col-xl-4">



    </div>

    <?php
    $date = date("<text>d</text>/M/Y");
    echo $date;
    ?>


    <!--2st calendar-->

    <?php
    $date = date("d/M/Y");
    echo $date;
    ?>
    <!--3st calendar-->

    <?php
    $date = date("d/F/Y");
    echo $date;
    ?>
</body>

</html>