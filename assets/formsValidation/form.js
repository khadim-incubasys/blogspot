(function($,W,D)
{
    var JQUERY4U = {};
 
    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register-form").validate({
                rules: {
                    fname: "required",
                    lname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    pwd: {
                        required: true,
                        minlength: 5
                    },
                    cpwd: {
                        required: true,
                        minlength: 5
                    },
                    agree: "required"
                },
                messages: {
                    fname: "Please enter your firstname",
                    lname: "Please enter your lastname",
                    pwd: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    cpwd: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    email: "Please enter a valid email address",
                    agree: "Please accept our policy"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }
 
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
})(jQuery, window, document);


