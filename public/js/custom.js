var validatation_messages = {
    email: {
        required: "Email field is required.",
        email: "Please enter a valid email address.",
        regx: "Please enter a valid email address."
    }
};

var validation_rules = {
    email: {
        required: true,
        email: true,
        regx: /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    }
}

$(function() {
    //Admin login details validations
    $("#subscribe_form").validate({
        errorElement: 'span',
        errorClass: 'error-msg',
        rules: {
            email: validation_rules.email,
        },

        messages: {
            email: validatation_messages.email
        }
    })
});