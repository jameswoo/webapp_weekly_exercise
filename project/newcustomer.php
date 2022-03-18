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
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];
            $dob = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];


            if (!empty($username) && !empty($firstname) && !empty($lastname) && !empty($gender) && !empty($email) && !empty($password) && !empty($confirmpassword)) {

                //A-Z,a-z,more than 6
                if (preg_match('/^((?:\s*[A-Za-z]\s*){6,})$/', $username)) {


                    //0-9, A-Z,a-z,more than 6 word
                    if (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,}$/', $password)) {

                        if ($_POST["password"] == $_POST["confirm_password"]) {

                            if (date('Y') - $_POST['year'] >= 18) {

                                try {
                                    // insert query
                                    $query = "INSERT INTO customer SET 
                                    username =:username, 
                                    firstname =:firstname, 
                                    lastname =:lastname, 
                                    dob =:dob,
                                    gender =:gender,
                                    email =:email,
                                    password = :password";

                                    // prepare query for execution
                                    $stmt = $con->prepare($query);

                                    // bind the parameters
                                    $stmt->bindParam(':username', $username);
                                    $stmt->bindParam(':firstname', $firstname);
                                    $stmt->bindParam(':lastname', $lastname);
                                    $stmt->bindParam(':dob', $dob);
                                    $stmt->bindParam(':gender', $gender);
                                    $stmt->bindParam(':email', $email);
                                    $stmt->bindParam(':password', $password);


                                    // specify when this record was inserted to the database
                                    //date_default_timezone_set("Asia/Kuala_Lumpur");
                                    //$dob = date('Y-m-d');
                                    //
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
                            } else {
                                echo "<div class='alert alert-danger'>Customer must be above 18 years old</div>";
                            }
                        } else {
                            echo "<div class='alert alert-danger'>Password and confirm password does not match.</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger'>Password must be minimum 6 characters, contain at least a number, a capital letter and a small letter</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'>Username must not contain space with minimum 6 characters</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Please fill in all the information</div>";
            }
        }

        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type='text' name='username' class='form-control' pattern='^((?:\s*[A-Za-z]\s*){6,})$' />
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type='text' name='password' class='form-control' pattern="(?=.*\d)(?=.*][a-z)(?=.*[A-Z]).{6,}" />
                    </td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type='text' name='confirmpassword' class='form-control' pattern="$_POST['password']" /></td>
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
                    <td>Date of Birth</td>
                    <td>
                        <div class="<d-inline-flex p-2">
                            <label for="sel1">Day:</label>
                            <select name='day' class="form-control" id="sel1">

                                <?php
                                for ($day = 1; $day <= 31; $day++) {
                                    echo "<option>";
                                    echo $day;
                                    echo "</option>";
                                }
                                ?>
                        </div>
                        </select>

                        <div class="d-inline-flex p-2">
                            <label for="sel2 ">Month: </label>
                            <select name='month' class="form-control" id="sel1">
                                <?php
                                $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

                                for ($x = 0; $x < 12; $x++) {
                                    echo "<option>";
                                    echo $month[$x] . "<br>";
                                    echo "</option>";
                                }
                                ?>
                        </div>
                        </select>
                        <div class="d-inline-flex p-2">
                            <label for="sel3">Year:</label>
                            <select name='year' class="form-control" id="sel1">
                                <?php
                                for ($year = 1990; $year <= date("Y"); $year++) {
                                    echo "<option>";
                                    echo $year;
                                    echo "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </td>
                </tr>
                </td>

                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input class="form-check-input" type="radio" value="male" name="gender">
                        <label class="from-check-label" for="inlineRadio1">
                            Male
                        </label>

                        <input class="form-check-input" type="radio" value="female" name="gender">
                        <label class="from-check-label" for="inlineRadio2">
                            Female
                        </label>

                        <input class="form-check-input" type="radio" value="other" name="gender">
                        <label class="from-check-label" for="inlineRadio3">
                            Other
                        </label>


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