<?php #view_users.php

//This script grabs all the records from the users

$page_title = 'View the Current Users';
include ('includes/header.html');

//Page header
echo '<h1>Register Users</h1>';

require ('includes/mysqli_connect.php');
//Connect to the db

//Make the query

$q = "SELECT CONCAT(username) AS useranme, DATE_FORMAT
(registration_date, '%M %d, %Y') AS dr FROM users
ORDER BY registration_date ASC";

//Run the query
$r = @mysqli_query ($dbc, $q);

//Count the number of returned row
$num = mysqli_num_rows($r);
if ($num >0) { //If it ran OK, display the records
    //Print how many users there are
    echo "<p>There are currently $num registered users.</p>\n";
    
    //Table header
    echo '<table align="center" cellspacing="3" cellpadding="3"
    width="75%">
    <tr><td align="left"><b>UserName</b>
    </td><td align="left"><b>Date Registered</b></td></tr>';
    
    //Fetch and print all the record
    while ($row= mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        echo '<tr><td align="left">' . 
            $row['name'] . '</td><td align = "left">'
            . $row['dr'] . '</td></tr>';
    }
    
    //Close table
    echo '</table>';
    
    //Free up the resources
    mysqli_free_result ($r);
}else {
    //If no records were returned
    echo '<p class="error">there are currently no registered users.</p>';
    
}

//Close the database connection
mysqli_close($dbc); 

include ('includes/footer.html');

?>