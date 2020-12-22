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

                    $('#a').html(data[i].date);
                    $('#b').html(data[i].categorie);
                    $('#c').html(data[i].titre);
                    $('#d').html(data[i].contenu);
                    $('#e').html(data[i].photo);
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