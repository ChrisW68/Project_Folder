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
        if (isset($_POST['electricBillMonthly'],
                 $_POST['avgTemp'], 
                 $_POST['avgkWhDaily'],
                 $_POST['avgCostDaily'],
                 $_POST['chargeTemp'],
                 $_POST['serviceDays']) &&
                 is_numeric($_POST['electricBillMonthly']) &&
                 is_numeric($_POST['avgTemp']) &&
                 is_numeric($_POST['avgkWhDaily']) &&
                 is_numeric($_POST['avgCostDaily']) &&
                 is_numeric($_POST['serviceDays']) &&
                 is_numeric($_POST['chargeTemp'])) {
            
        
            
         //Calculates the results
            $voltFullyCharged = 14.4;
            $voltDailyCommute = 9.8 + 9.8 + 5;
            $avgVoltRange = $_POST['chargeTemp'];
            $voltKwDailyUsed = ($voltDailyCommute / $avgVoltRange) * $voltFullyCharged;
            $avgCostkW = $_POST['avgCostDaily'] / $_POST['avgkWhDaily'];
            $avgDailyCost = number_format((float)($voltKwDailyUsed * $avgCostkW),2,'.', '');
            $avgMonthly = number_format((float)(($_POST['serviceDays']*.71) * $avgDailyCost), 2, '.', '');
            $leslieBill = number_format((float)((($_POST['electricBillMonthly'] - $avgMonthly) / 2) + $avgMonthly), 2,'.', '');
            
            
        //Print the results
        echo '<h1>Total Estimated Cost</h1>
             <p>The total cost per day of the Chevy Volt is: $' . $avgDailyCost . ' daily.<br>With a monthly
             cost of charging the Volt being: $' . $avgMonthly . '. <br>Which will make Leslies portion: $' . $leslieBill . '<p>';
             
            
        } else {
            echo '<h1>Error</h1>
                <p class="error">Please try again</p>';
        }
    }  //End of main submission IF
    
    //Leave the PHP section and create the HTML form
 ?>
   
<h1>Electric Bill</h1>
   <form action="chevyVoltCalculator.php" method="post">
      <p>Electric Bill Cost: <input type="text" name="electricBillMonthly" /></p>
      <p>Avg Daily Temp: <input type="text" name="avgTemp" /></p>
      <p>Avg kWh per day: <input type="text" name="avgkWhDaily" /></p>
      <p>Avg cost per day: <input type="text" name="avgCostDaily" /></p>  
      <p>How many Service days: <input type="text" name="serviceDays" /></p>   
      <p><input type="submit" name="submit" value="Save!" /></p>
       
   </form>
    
    
</body>
</html>