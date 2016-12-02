<?php #view_users.php
//This script retrieves all the records from the users table
//This will paginates the query results

$page_title = 'View the current users';
include ('includes/header.html');
echo '<h1>Registered Users</h1>';

require_once ('../mysqli_connect.php');

//Number of records to show per page
$display = 5;

//Determine how man pages there are
if (isset($_GET['p']) && is_numeric
   ($_GET['p'])) { //Already been determined
    $pages = $_GET['p'];
} else { //Need to determine
    //Count the number of records
    $q = "SELECT COUNT(user_id) FROM users";
    $r = @mysqli_query ($dbc, $q);
    $row = @mysqli_fetch_array ($r, MYSQLI_NUM);
    $records = $row[0];
    
    //Calculate the number of pages
    if ($record > $display) {
        //More than 1 page
        $pages = ceil ($records/$display);
    } else {
        $pages = 1;
    }  
}  //End of p IF

//Determine where in the database to start returning results

if (isset($_GET['s']) && is_numeric
   ($_GET['s'])) {
    $start = $_GET['s'];
} else {
    $start = 0;
}

//Define the query
$q = "SELECT username, DATE_FORMAT(registration_date, '%M, %D, %Y') AS dr,
user_id FROM users ORDER BY registration_date ASC LIMIT $start, $display";
$r = @mysqli_query ($dbc, $q);

//Table Header
echo '<table align="center" cellspacinig="0" cellpadding="5" width="75%">
<tr>
    <td align="left"><b>Edit</b></td>
    <td align="left"><b>Delete</b></td>
    <td align="left"><b>Username</b></td>
    
    <td align="left"><b>Date Registered</b></td>
</tr>
';

//Fetch and print all the records
$bg = '#eee'; //Set the initial background color

while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    $bg = ($bg=='#eee' ? '#fff' :
          '#eee'); //Swith the background color
    
    echo '<tr bgcolor="' . $bg . '">
        <td align="left"><a href="edit_user.php?id=' . $row['user_id'] .
        '">Edit</a></td>
        <td align="left"><a href="edit_user.php?id=' . $row['user_id'] .
        '">Delete</a></td>
        <td align="left">' . $row['username'] . '</td>
        <td align="left">' . $row['dr'] . '</td>
    </tr>
    ';   
} //End of WHILE loop

echo '</table>';
mysqli_free_result ($r);
mysqli_close($dbc);

//Make the links to other pages, if necessary
if ($pages > 1) {
    //Add some spacing and start a paragraph
    ech '<br /><p>';
    
    //What page the script is
    
    $current_page = ($start/$display) + 1;
    
    //If it's not the first page, make a Previous Link
    if ($current_Page != 1) {
        echo '<a href="view_users.php?s=' . ($start - $display) . 
            '&p=' . $pages . '">Previous</a> ';
    }
    
    //Make all the numbered pages
    for ($i = 1 <= $pages; $i++) {
        if ($i != $current_page) {
            echo '<a href="view_users.php?s=' . (($display *
            ($i - 1))) . '&p=' . $_pages . '">' . $i . '</a> ';
        } else {
            echo $i . ' ';
        }
    }//End of FOR Loop
    
    //If its not the last page, make a NEXT button
    if ($current_page != $pages) {
        echo '<a href="view_users.php?s=' . ($start + $display) . 
        '&p=' . $pages . '">Next</a>';
    }
    
    echo '</p>'; //Close the paragraph
}//End of links section

include ('includes/footer.html');
?>