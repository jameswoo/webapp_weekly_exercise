<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Q2 date</title>

<body>
    <div class="d-lg-flex flex-row d-flex flex-row my-5">
        <!--1st calendar-->
        <div id="date1 flex-sm-row" class="container col-7 col-lg-3 text-center">
            <div class=" container.col-12 col-xl-4 h1">
                <?php
                echo date("d");
                ?>
                <div class="border-top border-dark text-center">
                    <sup>
                        <div class="h6 text-uppercase d-inline">
                            <?php
                            echo date("M Y");
                            ?>
                        </div>
                    </sup>
                </div>

            </div>


        </div>


        <!--2st calendar-->
        <div id="date1" class="container col-7 col-lg-3 text-center">
            <div class=" container.col-12 col-xl-4 h1 border ">
                <?php
                echo date("d");
                ?>
                <br>
                <div class="h6 text-uppercase border p-1 px-3 d-inline ">
                    <?php
                    echo date("M Y");
                    ?>
                </div>
            </div>

        </div>

        <!--3rd date type-->
        <div id="date3" class="container-lg col-7 col-lg-3 text-center">
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
        </div>
</body>

</html>