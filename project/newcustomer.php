<!DOCTYPE HTML>
<html>

<head>
    <title>PDO - Create a Record - PHP CRUD Tutorial</title>
    <!-- Latest compiled and minified Bootstrap CSS (Apply your Bootstrap here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- container -->
    <div class="container">
        <div class="page-header">
            <h1>New Customer</h1>
        </div>

        <?php

        if ($_POST) {

            // include database connection
            include 'database/connection.php';
            // posted values
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];
            $email = $_POST['email'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $dob = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];
            $gender = $_POST['gender'];

            $age = (int)date('Y') - (int)$_POST['year'];
            $error = "";


            if (empty($username) || empty($firstname) || empty($lastname) || empty($gender) || empty($email) || empty($password) || empty($confirmpassword)) {
            } else {
                if (!preg_match('/^((?:\s*[A-Za-z]\s*){6,})$/', $username)) {

                    if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{6,}$/', $password)) {
                    } else if ($password  != $confirmpassword) {

                        if ($age <= 18) {



                            try {
                                // insert query
                                $query = "INSERT INTO newcustomer SET 
                    username =:username, 
                    password =:password,
                    confirmpassword =:confirmpassword,
                    email =:email,
                    firstname =:firstname, 
                    lastname =:lastname, 
                    dob =:dob,
                    gender =:gender,
                    created=:created";


                                // prepare query for execution
                                $stmt = $con->prepare($query);

                                // bind the parameters
                                $stmt->bindParam(':username', $username);
                                $stmt->bindParam(':password', $password);
                                $stmt->bindParam(':confirmpassword', $confirmpassword);
                                $stmt->bindParam(':email', $email);
                                $stmt->bindParam(':firstname', $firstname);
                                $stmt->bindParam(':lastname', $lastname);
                                $stmt->bindParam(':dob', $dob);
                                $stmt->bindParam(':gender', $gender);


                                // specify when this record was inserted to the database
                                //date_default_timezone_set("Asia/Kuala_Lumpur");
                                //$dob = date('Y-m-d');
                                // Execute the query
                                if ($stmt->execute()) {
                                    echo "<div class='alert alert-success'>Record was saved.</div>";
                                } else {
                                    echo "<div class='alert alert-danger'>Unable to save record.</div>";
                                }
                            }
                            // show error
                            catch (PDOException $exception) {
                                die('ERROR: ' . $exception->getMessage());
                            }
                            $error = $error . "<div class='alert alert-danger'>Customer must be above 18 years old</div>";
                        }
                        $error = $error . "<div class='alert alert-danger'>Password and confirm password does not match</div>";
                    }
                    $error = $error . "<div class='alert alert-danger'>Password must be minimum 6 characters, contain at least a number, a capital letter and a small letter</div>";
                }
                $error = $error . "<div class='alert alert-danger'>Username must not contain space with minimum 6 characters</div>";

                $error = $error . "<div class='alert alert-danger'>Please fill in all the information</div>";
            }


            echo $error;
        }

        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type='text' name='username' class='form-control' />
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type='password' name='password' class='form-control' />
                    </td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type='password' name='confirmpassword' class='form-control' /></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type='text' name='email' class='form-control' /></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type='text' name='firstname' class='form-control' /></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type='text' name='lastname' class='form-control' /></td>
                </tr>
                <tr>

                    <div class="<d-flex flex-row mb-3">
                        <td>Date of Birth</td>
                        <td class="btn-group w-100">
                            <div class="w-30 p-2">
                                <label for="day">Day:</label>
                                <select name='day' class="form-control" id="day">
                                    <option selected>--- Choose day ---</option>

                                    <?php
                                    for ($day = 1; $day <= 31; $day++) {

                                        echo "<option>";
                                        echo $day;
                                        echo "</option>";
                                    }
                                    ?>

                                </select>
                            </div>

                            <div class="w-40 p-2">
                                <label for="month ">Month: </label>
                                <select name='month' class="form-control" id="month">
                                    <option selected>--- Choose month ---</option>
                                    <?php
                                    $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

                                    for ($x = 0; $x < 12; $x++) {

                                        echo "<option>";
                                        echo $month[$x];
                                        echo "</option>";
                                    }
                                    ?>

                                </select>
                            </div>

                            <div class="w-30 p-2">
                                <label for="year">Year:</label>
                                <select name='year' class="form-control" id="year">
                                    <option selected>--- Choose year ---</option>
                                    <?php

                                    for ($year = 1990; $year <= date("Y"); $year++) {
                                        echo "<option value='$year'>";
                                        echo $year;
                                        echo "</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                        </td>
                    </div>
                </tr>

                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <!-- must use id -->
                        <div class="pe-1">
                            <input class="form-check-input" type="radio" id="male" name="gender">
                            <label class="from-check-label" for="Radio1">
                                Male
                            </label>
                        </div>

                        <div class="pe-1">
                            <input class="form-check-input" type="radio" id="female" name="gender">
                            <label class="from-check-label" for="Radio2">
                                Female
                            </label>
                        </div>

                        <div class="pe-1">
                            <input class="form-check-input" type="radio" id="other" name="gender">
                            <label class="from-check-label" for="Radio3">
                                Other
                            </label>
                        </div>

                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type='submit' value='Save' class='btn btn-primary' />
                        <a href='index.php' class='btn btn-danger'>Back</a>
                    </td>
                </tr>
            </table>
        </form>


    </div>
    <!-- end .container -->
</body>

</html>