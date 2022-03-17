<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Q3 loop</title>

<body>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-4 mt-5">
            <div class="shadow p-5 bg-warning rounded text-secondary">

                <div class=" d-flex aligns-items-center justify-content-center">
                    <!--day-->

                    <?php
                    $selected_day = date('d'); //current day

                    echo '<select id="day" name="day">' . "\n";
                    for ($i_day = 1; $i_day <= 31; $i_day++) {
                        $selected = ($selected_day == $i_day ? ' selected' : '');
                        echo '<option value="' . $i_day . '"' . $selected . '>' . $i_day . '</option>' . "\n";
                    }
                    ?>


                    <ul class="dropdown-menu">
                        <?php
                        echo '</select>' . "\n";
                        ?>
                    </ul>
                    </button>


                    <!--month-->

                    <?php
                    $selected_month = date('m'); //current month

                    echo '<select id="month" name="month">' . "\n";
                    for ($i_month = 1; $i_month <= 12; $i_month++) {
                        $selected = ($selected_month == $i_month ? ' selected' : '');
                        echo '<option value="' . $i_month . '"' . $selected . '>' . date('F', mktime(0, 0, 0, $i_month)) . '</option>' . "\n";
                    }
                    echo '</select>' . "\n";
                    ?>


                    <!--year-->

                    <?php
                    $year_start  = 2022;
                    $year_end = date('Y'); // current Year
                    $user_selected_year = 2022;

                    echo '<select id="year" name="year">' . "\n";
                    for ($i_year = $year_start; $i_year >= 2010; $i_year--) {
                        $selected = ($user_selected_year == $i_year ? ' selected' : '');

                        echo '<option value="' . $i_year . '"' . $selected . '>' . $i_year . '</option>' . "\n";
                    }
                    echo '</select>' . "\n";
                    ?>


                </div>
            </div>
        </div>
    </div>

</body>

</html>