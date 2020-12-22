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

                    $('#a').html(data[i].nom);
                    $('#b').html(data[i].prenom);
                    $('#c').html(data[i].adresse);
                    $('#d').html(data[i].marque);
                    $('#e').html(data[i].matricule);
                    $('#f').html(data[i].place);
                    $('#g').html(data[i].couleur);
                    $('#h').html(data[i].id_personne);

                    var table = $('<table></table>').addClass('foo');

                    $('#resultat').append(table);
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