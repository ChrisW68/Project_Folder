<? # password.php

//This page lets a user change their password

$page_title = 'Change your password';
include ('includes/header.html');

//Check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    //connect to database
    require ('../mysqli_connect.php');
    
    //Initialize an error array
    $errors = array();
    
    //Check for email address
    if (empty($_POST['email'])) {
        $error[] = 'You forgot to enter your email address';
    }else {
        $e = mysqli_real_escape_string
            ($dbc, trim($_POST['email']));
    }
    
    //Check for the current password
    if (empty($_POST['pass'])) {
        $error[] = 'You orgot to enter your current password';
        
    }else {
        $p = mysqli_real_escape_string
            ($dbc, trim($_POST['pass']));
    }
    
    //Check for a new password and match against the confirmed password
    
    if(!empty($_POST['pass1'])) {
        if ($_POST['pass1'] != $_POST['pass2']) {
            $error[] = 'Your ew password did not match the confirmed password';
        } else {
            $np = mysqli_real_escape_string($dbc, trim($_POST'pass1'));
        }
    } else {
        $errors[] = 'You forgot to enter your new password';
    }
    
    if (empty($errors)) {
        
        //Checkthat they'vd entered the right email address/password combination
        $q = "SELECT user_id FROM users WHERE (email='$e' AND pass=SHA1('$p''))";
        $r = @mysqli_query($dbc, $q);
        $num = @mysqli_num_rows($r);
        //Match was made
        if ($num == 1) {
            
            //Get the user_id
            $row = mysqli_fetch_array($r, MYSQLI_NUM);
            
            //Make the UPDATE query
            $q = "UPDATE users SET pass=SHA1('$np') WHERE user_id=$row[0]";
            $r = @mysqli_query($dbc, $q);
            
            if(mysqli_affected_rows($dbc) == 1) {
                //If it ran OK
                
                //Print a message
                echo '<h1>Thank You !</h1>
                <p>Your password has been updated.</p><p><br /></p>';
                
            } else {
                //If it did not run OK
                
                //Public message
                echo '<h1> System error</h1>
                <p class="error">Your password could not be changed due to a system error.
                Apologize for any inconvience.</p>';
                
                //Debugging message
                echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
            }
            
            //Close the database connection
            mysqli_close($dbc);
            
            //Include the footer and quit the script (to not show the form)
            include ('includes/footer.html');
            exit();
        
        } else {
            //Invalid email address and/or password
            echo '<h1>Error</h1>
            <p class="error">The email address and password do not match those on file.</p>';
        }
    } else {
        //Report the errors
        
        echo '<h1>Error!</h1>
        <p class="error">The followig error(s) occurred:<br />';
        foreach ($errors as $msg) {
            //Print each error
            echo " - $msg<br />\n";
            
        }
        
        echo '</p><p>Please try again.</p><p><br /></p>';
        
    } //End of if (empty($errors)) IF
    
    //Close the database connection
    mysqli_close($dbc);
    
}//End of the main Submit conditional 
?>
<h1>Change your Password</h1>
<form action="password.php">
    <p>Email Address: <input type="text" name="email" size="18" maxlength="25" value="<?php if (isset($_POST['emal'])) echo $_POST['emal']; ?>" /></p>
    <p>Current Password: <input type="password" name="pass" size="10" maxlength="20" value="<?php if(isset($_POST['pass'])) echo $_POST['pass']; ?>" /></p>
    <p>Confirm Password: <input type="password" name="pass2" size="10" maxlength="20" value="<?php if(isset($_POST['pass2'])) echo $_POST['pass2']; ?>" /></p>
    <p><input type="submit" name="submit" value="Change Password" /></p> 
</form>
<?php include ('includes/footer.html');

?>