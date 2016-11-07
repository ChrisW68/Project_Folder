<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chevy Electric Bill Calculator</title>
</head>
<body>
<?php # chevyVoltCalculator.php
    
    $page_title = "Chevy Electric Bill Calculator";
  
    
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
            $perkWh = number_format((float)($_POST['avgCostDaily'] / $_POST['avgkWhDaily']), 3, '.', '');
            $monthlyCost = $_POST['electricBillMonthly'];
     
            
        //Print the results
        echo '<h1>Total Estimated Cost</h1>
             <p>Cost per kiloWatts is: $' . $perkWh . ' daily.<br>With a monthly
             cost of charging the Volt being: $' . $monthlyCost . '<p>';
             
            
        } else {
            echo '<h1>Error</h1>
                <p class="error">Please try again</p>';
        }
    }  //End of main submission IF
    
    //Leave the PHP section and create the HTML form
 ?>
   
<h1>Electric Bill</h1>
   <form action="electric.php" method="post">
      <p>Electric Bill Cost: <input type="text" name="electricBillMonthly" /></p>
      <p>Avg Daily Temp: <input type="text" name="avgTemp" /></p>
      <p>Avg kWh per day: <input type="text" name="avgkWhDaily" /></p>
      <p>Avg cost per day: <input type="text" name="avgCostDaily" /></p>  
      <p>How many Service days: <input type="text" name="serviceDays" /></p>   
      <p><input type="submit" name="submit" value="Save!" /></p>
       
   </form>
    
    
</body>
</html>