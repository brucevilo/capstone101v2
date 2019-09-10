$('#validationCustomPassword, #recheckValidationCustomPassword').on('keyup', function () {
    if ($('#validationCustomPassword').val() == $('#recheckValidationCustomPassword').val()) {
        $('#message').html('Match').css('color', 'green');
    } else
        $('#message').html('Not Match').css('color', 'red');
});