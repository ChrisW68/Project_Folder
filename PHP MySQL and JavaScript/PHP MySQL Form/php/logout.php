<?php #logout.php
//This page lets the user logout


//If no coookie is present, redirect the user
if (!isset($_COOKIE['user_id'])) {
    //Need the function
    require ('includes/login_function.inc.php');
    redirect_user();
}else {
    setcookie ('user_id', '', time()-3600,
              '/', '', 0, 0);
    setcookie ('username', '', time(0-3600), '/', '', 0, 0)
}

//Set the page title and include the HTML header
$page_title = 'Logged Out!';
include ('includes/header.html');

//Print a customized message
echo "<h1>Logged Out!</h1>
    <p>You are now logged out, {$_COOKIE ['username']}!</p>";

include ('includes/footer.html');

?>