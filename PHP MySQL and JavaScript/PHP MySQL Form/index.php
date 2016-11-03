<?php #index.php
//Main page for the site

//Add the HTML header.html
include ('includes/header.html');

//The content of the page
//pulled from the database
echo $words['intro'];

//Include footer.html
include ('includes/footer.html');

?>