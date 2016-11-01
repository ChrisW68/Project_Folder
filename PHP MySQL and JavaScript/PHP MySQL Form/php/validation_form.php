<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css" title="text/css" media="all">
        /* -- If there is a error the code CSS will be in bold with RED letter color -- */
        .error {
            font-weight: bold;
            color: #C00;
        }
    </style>
    <title>Form Feedback</title>
</head>
<body>
   <?php #validation_form.php 
    //Print the submitted information
    if (!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email'])){
        echo "<p>Thank you, <b>{$_POST['name']}</b>,
         for the following comments: <br/>
         <tt>{$_POST['comments']}</tt></p>
         <p>we will reply to you at <i>{$_POST['email']}</i>.</p>\n";
    }else { //Missing form value
        echo '<p>Please go back and fill out the form again.</p>';
    }
    
    /*//Validate the name
    //Verify the variable name field is not empty
    //Else if the name variable is empty and echo comment
    if (!empty($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
    }else {
        $name = NULL;
        echo '<p class="error">You forgot to enter your name!</p>';
    }
    
    //Validate email
    //Verify the value is not empty
    //Else if the email field is empty echo comment
    if(!empty($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
    }else {
        $email = NULL;
        echo '<p class="error">You forgot your email!</p>';
    }
    
    //Validate comments
    //Verify if the value is not empty
    //Else if the comment is empty echo comment
    if(!empty($_REQUEST['comments'])) {
        $comments = $_REQUEST['comments'];
    }else {
        $comments = NULL;
        echo '<p class="error">You forgot to make a comment!</p>';
    }

    //Validate gender
    //If there is no value or not
    //If there is a value then verify if it is a male or female
    if (isset($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];
        
        if ($gender == 'M') {
            echo '<p><b>Good day, man!<b><p>';
        }elseif ($gender = 'F') {
            echo '<p><b>Hello, Miss<b><p>';
        }
    }else {
        $gender = NULL;
        echo '<p class="error">You forgot to decide on a gender!Maybe Transgender?!</p>';
    }
    
    //If everything is OK, print message
    if ($name && $email && $gender && $comments) {
        echo "<p>Thank you, <b>$name</b>, for the following comments:<br/>
        <tt>$comments</tt></p>
        <p>We will reply to you at <i>$email</i>.</p>\n";
    }else { //Missing form value
        echo'<p class="error">Please go back and fill out the form again.</p>';
    }*/
    ?>
</body>
</html>