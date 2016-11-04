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
        
        }else {l
            //Invalid email address
            //Add error class
            $('#emailP').addClass('error');
    
            //Show the error message
            $('#emailError').Show();
    
            //Validate password
            if ($('#password').val().length > 0) {
                password = $('#password').val();
                $('#passwordP').removeClass
                ('error');
                $('#passwordError').hide();
            }else {
                $('#passwordP').addClass
                ('error');
                $('#passwordError').show();
            }
            
            //If O.K. perform AJAX request
            Ajax request:
            if (email && password) {
                //Create a object
                form data:
                var data = new Object();
                data.email = email;
                data.password = password;
                
                //Create an object of Ajax options
                options:
                var options = new Object();
                
                //Establish each setting
                options.data = data;
                options.dataType = 'text';
                options.type = 'get';
                options.success = function(response) {
                    if (response == 'CORRECT') {
                        $('#login').hide();
                    
                    //show a message
                    $('#results').removeClass('error');
                    $('#results').text('You are now logged in!');
                        
                    }else if (response == 'INCORRECT') {
                        $('#results').text('The email and password don\'t match those on file');
                        $('#results').addClass('error');
                        
                    }else if (response == 'INCOMPLETE') {
                        $('results').text('Please enter an email address and a password');
                        $('results').addClass('error');
                    }else if (response == 'INVALID_EMAIL') {
                        $('results').text('Please provide email address!');
                        $('results').addClass('error');
                    }
                }; //End of success
                option.url = 'login_ajax.php';
                
                //Perform the request
                $.ajax(options);
                
            }  //End of email && password IF
    
               //Return false to prevent an actual form submission
            return false;
    
    });  //End of form submission
}); // End of document ready