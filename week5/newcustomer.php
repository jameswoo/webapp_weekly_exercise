<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>PDO - Create a Record - PHP CRUD Tutorial</title>
    <!-- Latest compiled and minified Bootstrap CSS (Apply your Bootstrap here -->
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
            include 'week5/connection.php';
            // posted values
            $username = $_POST['username'];
            $password = $_POST['password'];

            $number = preg_match('@[0-9]@', $password);
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);

            $confirmpassword = $_POST['confirmpassword'];
            $email = $_POST['email'];
            $firstname = $_POST['firstname'];
            $price = $_POST['price'];
            $dateofbirth = $_POST['dateofbirth'];
            $gender = $_POST['gender'];

            try {
                // insert query
                $query = "INSERT INTO products SET 
                username=:username, 
                password=:password, 
                confirmpassword=:confirmpassword,
                email=:email,
                firstname=:firstname,
                lastname=:lastname,
                dateof birth=:dateofbirth,
                gender=:gender,
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
                $stmt->bindParam(':dateofbirth', $dateofbirth);
                $stmt->bindParam(':gender', $gender);
                // specify when this record was inserted to the database
                date_default_timezone_set("Asia/Kuala_Lumpur");
                $created = date('Y-m-d H:i:s');
                $stmt->bindParam(':created', $created);
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
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Username</td>
                    <td><input type='text' name='username' class='form-control' /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type='password' class='form-control'></textarea></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type='password' name='confirm password' class='form-control' /></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type='text' name='email' class='form-control' /></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type='text' name='first name' class='form-control' /></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type='text' name='last name' class='form-control' /></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type='button' name='date of birth' class='form-control' /></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name="gender" value="female" />Female</td>
                    <?php if (isset($gender) && $gender == "female") echo "checked"; ?>
                    <td><input type="radio" name="gender" value="male" />Male</td>
                    <?php if (isset($gender) && $gender == "male") echo "checked"; ?>
                    <td><input type="radio" name="gender" value="other" />Other</td>
                    <?php if (isset($gender) && $gender == "other") echo "checked"; ?>


                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type='submit' value='Save' class='btn btn-primary' />
                        <a href='index.php' class='btn btn-danger'>Back to read products</a>
                    </td>
                </tr>
            </table>
        </form>
        <!-- username validation -->

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $username = $_POST['username'];

            if (empty($username)) {
                echo '<span style="color:#FF0000;"> please enter username</span>';
            } elseif (preg_match("/[ ]/", $Password) == 1) {
                echo '<span style="color:#FF0000;">no spacing please!</span>';
            } elseif (strlen($username) < 6) {
                echo '<span style="color:#FF0000;">please only enter 6 characters!</span>';
            } elseif (strlen($username) < 6) {
                echo '<span style="color:#FF0000;">username must be unique!</span>';
            } else {
                echo $stmt->execute();
            }
        }

        ?>

        <!-- password validation -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];
            if (strlen($password) && strlen($confirmpassword) < 6 || !$number || !$uppercase || !$lowercase || !$specialChars) {
                echo "Password must be at least 6 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
            } else {
                echo "Your password is strong.";
            }
        }
        ?>
        <!-- date of birth validation -->
        
    </div>

    <!-- end .container -->
</body>

</html>