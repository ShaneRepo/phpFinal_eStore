

            <?php
            // Check for form submission:
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $errors = array(); // Initialize an error array.

                // Check for a first name:
                if (empty($_POST['first_name'])) {
                    $errors[] = 'You forgot to enter your first name.';
                } else {
                    $fn = trim($_POST['first_name']);
                }

                // Check for a last name:
                if (empty($_POST['last_name'])) {
                    $errors[] = 'You forgot to enter your last name.';
                } else {
                    $ln = trim($_POST['last_name']);
                }

                // Check for an email address:
                if (empty($_POST['email'])) {
                    $errors[] = 'You forgot to enter your email address.';
                } else {
                    $e = trim($_POST['email']);
                }

                // Check for a password and match against the confirmed password:
                if (!empty($_POST['pass1'])) {
                    if ($_POST['pass1'] != $_POST['pass2']) {
                        $errors[] = 'Your password did not match the confirmed password.';
                    } else {
                        $p = trim($_POST['pass1']);
                    }
                } else {
                    $errors[] = 'You forgot to enter your password.';
                }

                if (empty($errors)) { // If everything's OK.

                    // Register the user in the database...

                    require('mysqli_connect.php'); // Connect to the db.

                    // Make the query:
                    $q = "INSERT INTO users222 (first_name, last_name, email, pass, registration_date) VALUES ('$fn', '$ln', '$e', SHA1('$p'), NOW() )";
                    $r = @mysqli_query($dbc, $q); // Run the query.
                    if ($r) { // If it ran OK.

                        // Print a message:
                        echo '<h1>Thank you!</h1>
		<p>You are now registered and can log in!</p><p><br /></p>';
                        echo '<li><a href="../html/log_in.html">Log In</a> </li>';

                    } else { // If it did not run OK.

                        // Public message:
                        echo '<h1>System Error</h1>
	    <p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';

                        // Debugging message:
                        echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';

                    } // End of if ($r) IF.

                    mysqli_close($dbc); // Close the database connection.
                    exit();

                } else { // Report the errors.

                    echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
                    foreach ($errors as $msg) { // Print each error.
                        echo " - $msg<br />\n";
                    }
                    echo '</p><p>Please try again.</p><p><br /></p>';
                }
            }

            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Halloween Store</title>
                <link rel="shortcut icon" href="../images/favicon.ico">
                <link rel="stylesheet" href="../css/normalize.css">
                <link rel="stylesheet" href="../css/create_account.css">
            </head>
            <body>
            <header>
                <picture>
                    <img src="../images/pumpkin.gif" alt="Pumpkin logo">
                </picture>
                <h2>
                    The Halloween Store
                </h2>
                <h3>
                    For the little Goblin in all of us!
                </h3>
            </header>
            <nav id="navTop">
                <ul>
                    <li><a href="../html/index.html">Home</a> </li>
                    <li><a href="../html/index.html">Product List</a> </li>
                    <li><a href="../html/index.html">Personal</a> </li>
                    <li><a href="../html/index.html" class="current">Account</a>
                        <ul>
                            <li><a href="../html/log_in.html">Log In</a> </li>
                            <li><a href="../html/create_account.html">Create Account</a> </li>
                            <li><a href="../html/index.html">Cart</a> </li>
                            <li><a href="../html/index.html">Log Out</a> </li>
                        </ul>
                    </li>
                    <li class="lastItem"><a href="../html/index.html">Join Email</a> </li>
                </ul>
            </nav>
            <main>
                <section>

    </section>
</main>

<footer>
    <p>&copy; 2015 MyStore</p>
</footer>
</body>
</html>

