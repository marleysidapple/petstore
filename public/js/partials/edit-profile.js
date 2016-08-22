// password field hide and show
$(document).on('click', '.buttons button:first-child', function () { 
    $(this).hide();
    $('.password').show();
    $('.buttons button:first-child + button').show();
    $('#editProfile input').removeAttr('readonly');
});