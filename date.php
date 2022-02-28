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
<!--3rd date type-->
<div id="date3" class="container-lg col-8 col-lg-2 text-center">
            <div class="h1 text-uppercase text-center py-3 d-inline">
                <?php
                echo "<strong>";
                echo date("d");
                echo "</strong>";
                ?>
                <sup>
                    <div class="h6 text-uppercase d-inline">
                        <?php
                        echo date("M Y");
                        ?>
                    </div>
                </sup>
            </div>

        </div>
    ?>
</body>

</html>