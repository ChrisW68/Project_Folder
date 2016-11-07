<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chevy Volt Calculator</title>
</head>
<body>
<?php # chevyVoltCalculator.php
    
    $page_title = "Chevy Volt Calculator";
  
    
    //Check for form submission
    if ($_SERVER['REQUEST_METHOD'] =='POST') {
        
        
        //Minimal form validation
        if (isset($_POST['commuteDays'],
                  $_POST['avgCostkW'],
                 $_POST['fullWeeks']) &&
                 is_numeric($_POST['commuteDays']) &&
                 is_numeric($_POST['avgCostkW']) &&
                 is_numeric($_POST['fullWeeks'])) {
            
        
            
         //Calculates the results
            $voltFullyCharged = 14.4;
            $voltDailyCommute = 9.8 + 9.8 + 5;
            $avgCostkW = $_POST['avgCostkW'];
            $avgVoltRange = $_POST['chargeTemp'];
            $voltKwDailyUsed = ($voltDailyCommute / $avgVoltRange) * $voltFullyCharged;
            //$avgCostkW = $_POST['avgCostDaily'] / $_POST['avgkWhDaily'];
            $avgDailyCost = number_format((float)($voltKwDailyUsed * $avgCostkW),2,'.', '');
            //$avgMonthly = number_format((float)(($_POST['serviceDays']*.71) * $avgDailyCost), 2, '.', '');
            //$leslieBill = number_format((float)((($_POST['electricBillMonthly'] - $avgMonthly) / 2) + $avgMonthly), 2,'.', '');
            $voltCommuteTotal = $_POST['commuteDays'] + $_POST['fullWeeks'];
    
            
            
        //Print the results
        echo '<h1>Total Estimated Cost</h1>
             <p>The total cost per day of the Chevy Volt is: $' . $voltCommuteTotal . '<p>';
             
            
        } else {
            echo '<h1>Error</h1>
                <p class="error">Please try again</p>';
        }
    }  //End of main submission IF
    
    //Leave the PHP section and create the HTML form
 ?>
   
<h1>Chevy Volt Cost</h1>
   <form action="chevyVoltCalculator.php" method="post">
      <p>How many days a week commuting: <input type="text" name="commuteDays" /></p>
      <p>How many Service days: <input type="text" name="fullWeeks" /></p> 
      <p>What was the average cost per kiloWatts this mongy: <input type="text" name="avgCostkW" /></p>  
          <input type="radio" name="chargeTemp" value = "29" /> Under 45 F
          <input type="radio" name="chargeTemp" value = "31" /> Beteen 50 F and 52 F
          <input type="radio" name="chargeTemp" value = "34" /> Beteen 55 F and 57 F
          <input type="radio" name="chargeTemp" value = "38" /> Above 60 F
      <p><input type="submit" name="submit" value="Calculate!" /></p>
       
   </form>
    
    
</body>
</html>