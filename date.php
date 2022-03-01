<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Q2 date</title>

<body>
    <!-- <div class="d-lg-flex flex-row d-flex flex-row my-5">-->
    <!--1st calendar-->
    <div class="row">
        <div class="col-7 col-xl-3">
            <div id="date1 flex-sm-row" class="container text-center">
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

        </div>


        <!--2st calendar-->
        <div id="date2" class="container col-7 col-lg-3">
            <div class="h1 border border-dark text-center py-2 px-0 mx-5">
                <?php
                echo date("d");
                ?>
            </div>
            <div class="h6 text-uppercase border bg-dark text-white p-1 px-5 d-inline ">
                <?php
                echo date("M Y");
                ?>
            </div>


        </div>

        <!--3rd calendar-->
        <div id="date3" class="container-lg col-7 col-lg-3 text-center">
            <div class="h1 text-uppercase text-center py-3 d-cen">
                <?php
                echo "<strong>";
                echo date("d");
                echo "</strong>";
                ?>
                <sup>
                    <div class="h6 text-uppercase d-inline ">
                        <?php
                        echo date("M");
                        ?>
                    </div>

                    <div class="h6">
                        <p class="text-break">

                            <?php
                            echo date("Y");
                            ?>

                        </p>
                    </div>
                </sup>
            </div>
        </div>


    </div>
</body>

</html>