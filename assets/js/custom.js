/**
 * Created with JetBrains PhpStorm.
 * User: alejandroacevedo
 * Custom js functions
 */

$(document).ready(function () {

    // Invoke slider controller
    $("input.slider").slider();

    // Toggle the off canvas
    $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
        $('.sidebar-offcanvas').toggleClass('active');
    });

    // Clear the data from the modal as it keeps showing the same output
    $('#newModal').on('hidden.bs.modal',function(){
        $(this).removeData('bs.modal');
    })

    jQuery.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-z0-9_-]+$/i.test(value);
    }, "Please use only a-z0-9_-");
    $('#form-signin').validate({
        rules: {
            username: {
                minlength: 3,
                maxlength: 50,
                required: true,
                "email":true
            },
            password: {
                minlength: 3,
                maxlength: 15,
                required: true,
                lettersonly: true
            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.control-group').removeClass('has-error');
        }
    });
});
