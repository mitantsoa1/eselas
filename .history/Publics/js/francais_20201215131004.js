$(document).ready(function() {
    // $('#formFR').addClass('hide');

    $("#b").on('click', function() {
        $('#formFR').removeClass('hide');
    });
    $("#btnP").on('click', function() {
        $('#formFR').addClass('hide');
    });
});