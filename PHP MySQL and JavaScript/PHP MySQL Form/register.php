<?php #register.php
//This script performs an INSERT query to add a record to the users table

$page_title = 'Register';
include ('includes/header.html');

//Check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    //Conneect to the database
    require ('../mysqli_connect.php');
    
    //Initialize an error array.
    $error  array();
    
    //Check for username
    if(empty($_POST['username'])) {
        $error[] = 'You forgot to enter yor username.';
    }else {
        $fn = mysqli_real_escape_string($dbc, trim($_POST['username']));
    }
    
    //Check for an email address
    if (empty($_POST['email'])) {
        $error[] = 'You forgot to enter your email address.';
    } else {
        $e = mysqli_real_escape_string($dbc, trim($_POST['email']));
    }
    
    //Chec for a pasword and math against the confirmed password
    if (!empty($_POST['pass1'])) {
        if ($_POST['pass1'] != $_POST['pass2']) {
            $error[] = 'Your password did not match the confirmed password.';
        }else {
            $p = mysqli_real_escape_string($db, trim($_POST['pass1']));
        }
    } else {
        $errors[] = 'You forgot to enter your password.';
    }
    
    //If everything is OK.
    if (empty($errors)) {
        //Make the query
        $q = "INSERT INTO users (username, email, pass, registration_date) VALUES
        ('$fn', '$ln', '$e', 'SHA1('$p'), NOW())";
        //Run the query
        $r = @mysqli_query ($dbc, $q);
        if ($r) {
            //Print a message
            echo '<h1>Thank You!</h1>
            <p>You are now registered.</p><p>
            <br /></p>';
            
        }else {
            //public message
            echo '<h1>System Error</h1>
            <p class="error">You could not be registered due to a system error. Apologize
            for te inconvience.</p>';
            
            //Debug message
            echo '<p>' .mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
        }//End of if ($r) IF
        
        //Close the database connection
        mysqli_close($dbc);
        
        //Include the footer and quit the script
        include ('includes/footer.html');
        exit();
    }else {
        //Report the errors
        echo '<h1>Error!</h1>
        <p class="error">The following error(s) occurred:<br />';
        foreach ($errors as $msg) {
            //Print each error
            echo " -$msg<br />\n";
        }
        echo '</p><p>Please try again. </p><p><br /></p>'
            
    } //end of if (empty($errors)) IF
    
    //Close the database connection
    mysqli_close($dbc);
} //End of the main Submit Conditional

?>


<h1>Register</h1>
<form action="register.php" method="post">
    <p>Username: <input type="text" name="username" size="10" maxlength="18" value="<?php if
    (isset($_POST['userame'])) echo $_POST['username']; ?>" /></p>
    
</form>