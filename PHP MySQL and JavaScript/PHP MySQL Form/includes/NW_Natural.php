<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NW Natural Gas Bill Calculator</title>
</head>
<body>
<?php # NW_NaturalCalculator.php
    
    $page_title = "NW Natural Gas Bill Calculator";
  
    
    //Check for form submission
    if ($_SERVER['REQUEST_METHOD'] =='POST') {
        
        
        //Minimal form validation
        if (isset($_POST['gasBillMonthly'],
                 $_POST['avgTemp'], 
                 $_POST['serviceDays'],
                 $_POST['therms'],
                 $_POST['avgThermsDaily']) &&
                 is_numeric($_POST['gasBillMonthly']) &&
                 is_numeric($_POST['avgTemp']) &&
                 is_numeric($_POST['serviceDays']) &&
                 is_numeric($_POST['therms']) &&
                 is_numeric($_POST['avgThermsDays'])) {
            
        
            
         //Calculates the results
            $pertherms = number_format((float)($_POST['avgThermsDaily'] / $_POST['therms']), 3, '.', '');
            $monthlyCost = $_POST['gasBillMonthly'];
     
            
        //Print the results
        echo '<h1>Total Estimated Cost</h1>
              daily.<br>With a monthly
             cost being: $' . $monthlyCost . '<p>';
             
            
        } else {
            echo '<h1>Error</h1>
                <p class="error">Please try again</p>';
        }
    }  //End of main submission IF
    
    //Leave the PHP section and create the HTML form
 ?>
   
<h1>Electric Bill</h1>
   <form action="electric.php" method="post">
      <p>Natural Gas Bill Cost: <input type="text" name="gasBillMonthly" /></p>
      <p>Avg Daily Temp: <input type="text" name="avgTemp" /></p>
      <p>How many Service days: <input type="text" name="serviceDays" /></p>   
      <p>THERMS: <input type="text" name="therms" /></p>
      <p>Avg THERMS Day: <input type="text" name="avgThermsDaily" /></p>  
 
      <p><input type="submit" name="submit" value="Save!" /></p>
       
   </form>
    
    
</body>
</html>










