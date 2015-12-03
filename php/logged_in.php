<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = array(); // Initialize an error array.
    if (empty($_POST['email'])) {
        $errors[] = 'You forgot to enter your email address.';
    } else {
        $email = $_POST['email'];
    }
    if (empty($_POST['pass'])) {
        $errors[] = 'You forgot to enter your password.';
    } else {
        $password = $_POST['pass'];
    }
    if (empty($errors)) { // If everything's OK.
        require('mysqli_connect.php'); // Connect to the db.

        $query = "SELECT * FROM USERS222 WHERE email = '$email'";
        $result = @mysqli_query($dbc,$query);
        $numrows = mysqli_num_rows($result);
        if ($numrows != 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $db_email = $row['email'];
                $db_pass = $row['pass'];
            }
            if ($email == $db_email){
                echo '<p>your logged in</p>';
                echo '<p>';
                $_SESSION['email'] = $db_email;
                echo 'Welcome ' . $_SESSION['email'];
                echo '<a href="../html/index.html">Home Page</a>';
                echo '</p>';
            }
            else
                echo 'user does not exist in the database';
        }
        else {
            die("user does not exist!");
        }


    }

}