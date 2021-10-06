
/**
* Theme: Moltran Admin Template
* Author: Coderthemes
* Form Validator
*/

!function($) {
    "use strict";

    var FormValidator = function() {
        this.$commentForm = $("#commentForm"), //this could be any form, for example we are specifying the comment form
        this.$signupForm = $("#signupForm");
    };

    //init
    FormValidator.prototype.init = function() {
        //validator plugin
        $.validator.setDefaults({
            submitHandler: function() { alert("submitted!"); }
        });

        // validate the comment form when it is submitted
        this.$commentForm.validate();

        // validate signup form on keyup and submit
        this.$signupForm.validate({
            rules: {
                name: "required",
                number: "required",
                city: "required",
                experience: "required",
                salary: "required",
                photo: "required",
                password: {
                    required: true,
                    minlength: 6
                },
                confirm_password: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                address: "required"
            },
            messages: {
                name: "Please enter Name",
                number: "Please enter Phone Number",
                city: "Please enter City",
                experience: "Please Select Experience",
                salary: "Please enter Salary Amount",
                number: "Please Select Photo",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 6 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 6 characters long",
                    equalTo: "Please enter the same password as above"
                },
                email: "Please enter a valid email address",
                address: "Address is required"
            }
        });

        // propose username by combining first- and lastname


        //code to hide topic selection, disable for demo


    },
    //init
    $.FormValidator = new FormValidator, $.FormValidator.Constructor = FormValidator
}(window.jQuery),


//initializing
function($) {
    "use strict";
    $.FormValidator.init()
}(window.jQuery);
