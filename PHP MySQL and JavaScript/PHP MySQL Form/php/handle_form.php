<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Form Feedback</title>
</head>
<body>
   <?php #handle_form.php 
    //Create a shorthand for the form data:
    
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $age = $_REQUEST['age'];
    $gender = $_REQUEST['gender'];
    $comments = $_REQUEST['comments'];
    
    //Create the $gender variable:
    if (isset($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];
    } else {
        $gender = NULL;
    }
    
    /* Not used:
    
    $_REQUEST['age']
    $_REQUEST['gender']
    $_REQEST['submit]
    
    */
    
    //Print the submitted information:
    echo "<p>Thank you, <b>$name</b>,
    for the following comments:<br />
    <tt>$comments</tt></p>
    <p>We will reply to you at: 
    <i>$email</i>.</p>\n
    <p>You are in the age bracket, <b>$age</b>, and a <b>$gender</b>";
        
    //Print a message based upon the gender value:
    if ($gender == 'M') {
        echo '<p><b> Good day, man!</b></p>';
        
    }elseif ($gender == 'F') {
        echo '<p><b>Good day, Miss!</b></p>';
    }else { // No gender selected.
        echo '<p><b>You forgot to enter gender</b></p>';
    }
    
    ?>
    
</body>
</html>