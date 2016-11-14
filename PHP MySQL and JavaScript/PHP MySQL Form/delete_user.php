<?php #delete_user.php
//This page is for deleting a user record
//This page is accessed through view_users.php

$page_title = "Delete a User";
include ('includes/header.html');
echo '<h1>Delete a User</h1>';

//Check for a valid user ID, through Get or POST
if((isset($_GET['id'])) && (is_numeric($_GET['id']))) {
    $id = $_GET['id'];
    
} elseif ((isset($_POST['id'])) && (is_numeric($_POST['id']))) {
    //form submission
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
    
    IF ($_POST['user'] == "YES") {
        //Delete the records
        
        //Make the query
        $q ="DELETE FROM users WHERE user_id = $id LIMIT 1";
        $r = @mysqli_query ($dbc, $q);
        if (mysqli_affected_rows($dbc) == 1) {
            //If it ran OK
            
            //Print a message
            echo '<p>The user has been deleted.</p>';
            
        } else {
            //If the query did not run OK
            echo '<p class="error">The user could not be deleted due to a system error.</p>';
            //public message
            
            echo '<p>' . mysqli_error($dbc) . '<br />Query: ' .$q . '</p>';
            //Debug message
        }
    }else {
        //No confirmation of deletion
        echo '<p>The user hasNOT been deleted.</p>';
    }
}else {
    //Show te form
    $q = "SELECT CONCAT(username) FROMM users WHERE user_id=$id";
    $r = @mysqli_query ($dbc, $q);
    
    if (mysqli_num_rows($r) == 1) {
        //Valid user ID, show the form
        
        //Get the user's information
        $row = mysqli_fetch_array ($r, MYSQLI_NUM);
        
        //Display the record being deleted
        echo "<h3>Name: $row[0]</h3> Are you sure you want to delete this user?";
        
        //Create the form
        echo '<form action="delete_user.php" method="post">
            <input type="radio" name="sure" value="YES" /> Yes
            <input type="radio" name="sure" value="No" checked = "checked" /> No
            <input type="submit" name="submit" value="Submit" />
            <input type="hidden" name="id" value="' . $id . '" /></form>';
    } else {
    //Not a valid user ID
    echo '<p class="error">This page has been accessed in error.</p>';
    }
}

//End of the main submission conditional

mysqli_close($dbc);

include ('includes/footer.html');
?>

