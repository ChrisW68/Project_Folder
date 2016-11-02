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
        if (isset($_POST['timeCharge'], 
                 $_POST['hours_charged'],
                 $_POST['costPerHour']) &&
                 is_numeric($_POST['timeCharge']) &&
                 is_numeric($_POST['hours_charged']) &&
                 is_numeric($_POST['costPerHour'])) {
            
         //Calculates the results
        $totalCost = $_POST['costPerHour'] * $_POST['hours_charged'];
        $costPerMile = 1.50 / 35;
        $commutePerDay = 10 * 2;
        $costPerDay = $costPerMile * $commutePerDay;
        $chargeRateHour = 1.44;
        $kwToFull = 14;
        $timeToCharge = 14 / 1.4; 
        $estimatedKwPerMile = 38 / $costPerDay;
        $dayToWork = 4;
            
        //Print the results
        echo '<h1>Total Estimated Cost</h1>
             <p>The total cost per day of the Chevy Volt is: ' .  $costPerDay . '<p>';
            
            
        } else {
            echo '<h1>Error</h1>
                <p class="error">Please try again</p>';
        }
    }  //End of main submission IF
    
    //Leave the PHP section and create the HTML form
 ?>
   
<h1>Chevy Volt Cost</h1>
   <form action="calculator.php" method="post">
      <p>Distance to commute (in miles): <input type="text" name="distance" /></p>
      <p>Average Temperature when charging: <span class="input">
          <input type="radio" name="Winter" value = "40 F." /> 30
          <input type="radio" name="Spring and Fall" value = "55 F." /> 50
          <input type="radio" name="Summer" value = "Above 60 F." /> 60
      </span></p>
      <p><input type="submit" name="submit" value="Calculate!" /></p>
       
   </form>
    
    
</body>
</html>