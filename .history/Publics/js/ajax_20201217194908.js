function cours() {
    var data = "cours";
    $.ajax({
        url: "Controls/ajax.php",
        type: "POST",
        data: "chercher=" + data,
        datatype: "json",
        success: function(data) {
            // 
            if (data != '') {
                for (var i = 0; i < data.length; i++) {

                    //    ????????????
                }
            }
        }
    });
    // alert('cours');
    $("table").css("background-color", "yellow");
    $('.exercice').addClass('vide');
    $('.evaluation').addClass('vide');
}

function exercice() {
    // alert('cours');
    $("table").css("background-color", "green");
    $('.cours').addClass('vide');
    $('.evaluation').addClass('vide');
}

function evaluation() {
    // alert('cours');
    $("table").css("background-color", "blue");
    $('.cours').addClass('vide');
    $('.exercice').addClass('vide');
}