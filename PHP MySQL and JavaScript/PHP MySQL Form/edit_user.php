ss cla<?php  # edit_user.php
//This page is for editing a user record
//This page is accessing through view_users.php

$page_tile = 'Edit a User';
include ('includes/header.html');
echo '<h1>Edit a User</h1>';

//Check for a valid user ID, through GET or POST
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) {
    //From view_users.php
    $id = $_GET['id'];
    
}elseif ((isset($_POST['id'])) && 
        (is_numeric($_POST['id'])) ) {
    //Form submission
    $id = $_POST['id'];
}else {
    //No Valid ID, kill the script
    echo '<p class="error">This page has been accessed in error.</p>';
    include ('includes/footer.html');
    exit();
}

require_once ('../mysqli_connect.php');

//Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ERRORS = ARRAY();
    
    //cHECK FOR A FIRST NAME:
    if (empty($_POST['username'])) {
        $errors[] = 'You forgot to enter your username.';
    }else {
        $fn = mysqli_real_escape_string($dbc, trim($_POST['username']));
    }
    
    
    //Check for an email address
    if (empty($_POST['email'])) {
        $errors[] = 'You forgot to enter your email address.';
    }else {
        $e = mysqli_real_escape_string
            ($dbc, trim($_POST['email']));
    }
    
    if (empty($error)) {
        //If everything is OK
        //Test for unique email address
        
        $q = "SELECT user_id FROM users
        where email='$e' AND user_id != $id"
        
        $r = @mysqli_query($dbc, $q);
        if (mysqli_num_rows($r) == 0) {
            
            //Make the query
            $q = "UPDATE users SET username='$fn', email='$e' WHERE user_id=$id LIMIT 1";
            $r = @mysqli_query ($dbc, $q);
            if (mysqli_affected_rows($dbc) == 1) {
                //If it ran OK
                
                //Print a message 
                echo '<p>The user has been edited.</p>';
            }else {
                //If it did not run OK
                echo '<p class="error">The user could not be edited due to a system error. We apologize for any inconvenience.</p>';
                //public message
                echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; 
                //Debug message
            }else {
                //Already registered
                echo '<p class="error">The email address has already been registered.</p>';
                
            }else {
                //Report the errors
                echo '<p class="error">The following error(s) occurred:<br />';
                foreach ($errors as $msg) {
                    //Print each error
                    echo " - $msg<br />\n"
                }
                echo '</p><p>Please try again.</p>';
            }//End of if (empty($errors)) IF
        }//End of submit conditional
        //Always show the form...
        //Retrieve the user's information
        $q = "SELECT username, email FROM users WHERE user_id=$id";
        $r = @mysqli_query ($dbc, $q);
        
        if (mysqli_num_rows($r) == 1) {
            //Valid user ID, show the form
            
            //Get the user's information
            $row = mysqli_fetch_array ($r, MYSQLI_NUM);
            
            //Create the form
            echo '<form action="edit_user.php" method="post">
            <p>Username: <input type="text" name="username" size="15" maxlength="20" value="' . $row[0] . '" /></p>
            <p>Email Address: <input type="text" name="email" size="20" maxlength="30" 
            value="' . $row[2]. '" /></p>
            
            <p><input type="submit" name="submit" value="Submit" /></p>
            <input type="hidden" name="id" value="'
            $id . '" />
            </form>';
            
            
    } else {
            //Not a valid user ID
            echo '<p class="error">This page has been accessed in error.</p>';
            
        }
mysqli_close($dbc);

include ('includes/footer.html');
        
?>