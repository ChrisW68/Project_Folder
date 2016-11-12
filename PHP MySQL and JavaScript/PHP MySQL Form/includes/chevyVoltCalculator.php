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
                 $_POST['serviceDays']) &&
                 is_numeric($_POST['electricBillMonthly']) &&
                 is_numeric($_POST['avgTemp']) &&
                 is_numeric($_POST['avgkWhDaily']) &&
                 is_numeric($_POST['avgCostDaily']) &&
                 is_numeric($_POST['serviceDays'])) {
            
            
         //Calculates the results
            
        if ($_POST['avgTemp'] >= 67) 
        {
            $chargeTemp = 38;
        }elseif ($_POST['avgTemp'] == 66) {
            $chargeTemp = 37;    
        }elseif ($_POST['avgTemp'] == 65) {
            $chargeTemp = 36;
        }elseif ($_POST['avgTemp'] == 64) {
            $chargeTemp = 35;
        }elseif ($_POST['avgTemp'] == 63) {
            $chargeTemp = 34;
        }elseif ($_POST['avgTemp'] == 62) {
            $chargeTemp = 33;
        }elseif ($_POST['avgTemp'] == 61) {
            $chargeTemp = 32;
        }elseif ($_POST['avgTemp'] == 60) {
            $chargeTemp = 31;
        }elseif ($_POST['avgTemp'] == 59) 
        {
            $chargeTemp = 30;
        }elseif ($_POST['avgTemp'] >= 25) {
            $chargeTemp = 29;
        }
            
        $voltFullyCharged = 14.4;
        $voltDailyCommute = 9.8 + 9.8 + 5;
        $avgVoltRange = $chargeTemp;
        $voltKwDailyUsed = ($voltDailyCommute / $avgVoltRange) * $voltFullyCharged;
        $avgCostkW = $_POST['avgCostDaily'] / $_POST['avgkWhDaily'];
        $avgDailyCost = number_format((float)($voltKwDailyUsed * $avgCostkW),2,'.', '');
        $avgMonthly = number_format((float)(($_POST['serviceDays']*.71) * $avgDailyCost), 2, '.', '');
        $voltShare = number_format((float)((($_POST['electricBillMonthly'] - $avgMonthly) / 2) + $avgMonthly), 2,'.', '');
            
        //Print the results
        echo '<h1>Total Estimated Cost</h1>
        <p>The total cost per day of the Chevy Volt is: $' . $avgDailyCost . ' daily.<br>With a monthly
             cost of charging the Volt being: $' . $avgMonthly . '. <br>Which will make Leslies portion: $' . $voltShare . '<p>';
            
            
        } else {
            echo '<h1>Error</h1>
                <p class="error">Please try again</p>';
        }
    }  //End of main submission IF
    
    //Leave the PHP section and create the HTML form
 ?>
   
<h1>Chevy Volt Cost</h1>
   <form action="chevyVoltCalculator.php" method="post">
      <p>Electric Bill Cost: <input type="text" name="electricBillMonthly" /></p>
      <p>Avg Daily Temp: <input type="text" name="avgTemp" /></p>
      <p>Avg kWh per day: <input type="text" name="avgkWhDaily" /></p>
      <p>Avg cost per day: <input type="text" name="avgCostDaily" /></p>  
      <p>How many Service days: <input type="text" name="serviceDays" /></p>
<!--
      <p>Average Temperature when charging: <span class="input">   
          <input type="radio" name="chargeTemp" value = "29" /> Under 45 F
          <input type="radio" name="chargeTemp" value = "32" /> Under 52 F
          <input type="radio" name="chargeTemp" value = "34" /> Beteen 57 F and 60 F
          <input type="radio" name="chargeTemp" value = "38" /> Above 60 F
      </span></p>
-->
      <p><input type="submit" name="submit" value="Calculate!" /></p>
       
   </form>
    
    
</body>
</html>
