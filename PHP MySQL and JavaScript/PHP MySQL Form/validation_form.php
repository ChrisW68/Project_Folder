<!DOCTYPE html PUBLIC "-//W3C/.DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhmtl1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css" title="text/css" media="all">
    label {font-weight: bold; color: #3000ACC;}
    </style>
</head>
<body>
<!-- Script 2.1 - form.html -->
<form action="/php/validation_form.php" method="post">
    <fieldset><leg end>
        Enter your information in the form below:
    </legend>
    <p><label>
        Name: <input type="text" name="name" size="15" maxlength="40" />
    </label></p>
    
    <p><label>
        Email address: <input type="text" name="email" size="26" maxlength="45" />
    </label></p>
    
    <p><label for="gender">
        Gender: 
    </label>
       <input type="radio" name="gender" value="M" /> Male 
       <input type="radio" name="gender" value="F" /> Female
       </p>
    
    <p><label>
        Age:
        <select name="age" background-color="grey">
            <option value="18-25"> Between 18-25</option>
            <option value="26-30">Between 26-30</option>
            <option value="31-35">Between 31-35</option>
            <option value="36-40">Between 35-40</option>
        </select>
    </label></p>
      
        <p><label>Comment: <textarea name="comments" row="3" cols="40"></textarea></label></p>         
    </fieldset>
    <p align="center"><input type="submit" name="submit" value="Submit" /></p>
</form>
</body>
</html>