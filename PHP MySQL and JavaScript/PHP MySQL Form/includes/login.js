//login.js
//This script is included by login.php
//Handles the validation of the
//form submission

//Makes an AJAX request of login_ajax.php

$(function() {
    //Hide all error messages
    $('.errorMessage').hide();
    
    //event handler to the form
    $('#login').submit(function() {
        
        //Variables
        var email, password;
        
        //Validate the email address
        if ($('#email').val().length >= 6 {
            
            //Get the email address
            email = $('#email').val();
            
            //Clear errors
            $('#emailP').removeClass('error');
            
            //Hide error message if visible
            $('#emailError').hide();
        
        }else {
            //Invalid email address
            //Add error class
            $('#emailP').addClass('error');
    
            //Show the error message
            $('#emailError').Show();
    
            //Validate password
            
                       
                       }
                      )
    })
    
})