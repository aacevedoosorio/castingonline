/**
 * Created with JetBrains PhpStorm.
 * User: alejandroacevedo
 * Js file to handle the display if the raty images on the models list
 */

$(document).ready(function () {
    $('p[id*="star_readOnly_"]').each( function(){
        $(this).raty({
            score: function() {
                return $(this).attr('data-score');
            },
            readOnly: true
        });
    })

    $("#reset").click(function() {
        // Reset the fields
        $('#model_name').val("");

        // Submit form
        $('#form-search').submit();
    });
})
