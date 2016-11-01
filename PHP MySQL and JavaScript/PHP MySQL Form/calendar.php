<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calendar</title>
</head>
<body>
<form action="calendar.php" method="post">
   <?php #Calendar.php
    //This script will make three pull down menus
    //for an HTML form: months, days, years
    
    //Makes the month array
    $months = array(1 => 'January', 'February', 'March',
                   'April', 'May', 'June', 'July', 'August',
                   'September', 'October', 'November',
                   'December');
    //Makes arrays for days and year
    $days = range(1, 31);
    $years = range(2005, 2030);
    
    //Make the months pull-down menu
    echo '<select name="month">';
    foreach ($months as $key => $value) {
        echo "<option value=\"$key\">
        $value</option>\n";
    }
    echo '</select>';
    
    //Make the days pull-down menu
    echo '<select name="day">';
    foreach ($days as $value) {
        echo "<option value =\"$value\">
        $value</option>\n";
    }
    
    echo '</select>';
        
    //Make the years pull-down menu
    echo '<select name="year">';
    foreach ($years as $value) {
        echo "<option value =\"$value\">
        $value</option>\n";
    }
    
    echo '</select>';

?>
   
    
    
</form>
</body>
</html>