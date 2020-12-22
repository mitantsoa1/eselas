function envoyer($id) {
    var data = "id_pub=" + $id;
    $.ajax({
        url: "Controls/ajax.php",
        type: "POST",
        data: data,
        datatype: "json",
        success: function(table) {
            console.log(table);
            if (table != '') {

                var commentaire = document.getElementById("commentaire");

                var lienComment = document.getElementById("lienComment");

                a = document.createElement("button");
                a.setAttribute("data-toggle", "modal");
                a.setAttribute("data-target", "#commentaireModal");
                a.className = "btn btn-info";
                a.innerHTML = "commenter";
                lienComment.appendChild(a);
                for (let i = 0; i < table.length; i++) {

                    divR = document.createElement("div");
                    divR.className = "commentaireClass";
                    divR.innerHTML = table[i].username + ' ' + table[i].contenu;
                    commentaire.appendChild(divR);
                    //         img = document.createElement("img");
                    //         img.setAttribute('src', "Publics/images/" + table[i].photo);
                    //         imgR.appendChild(img);
                }
            }
        }
    });

}

function cours() {
    showAll();
    $('.exercice').addClass('hide');
    $('.evaluation').addClass('hide');
}

function exercice() {
    showAll();
    $('.cours').addClass('hide');
    $('.evaluation').addClass('hide');
}

function evaluation() {
    showAll();
    $('.cours').addClass('hide');
    $('.exercice').addClass('hide');
}

function showAll() {
    $('.exercice').removeClass('hide');
    $('.cours').removeClass('hide');
    $('.evaluation').removeClass('hide');
}
// $('#btnCommenter').on('click', function() {
//     var data = "commentaire=" + $('#commentContent').val();
//     $.ajax({
//         url: "Controls/ajax.php",
//         type: "POST",
//         data: data,
//         datatype: "json",
//         success: function(table) {

//         }
//     })
// })
function envoyerCommenter($id, $values) {
    $values = $('#commentContent').val();
    var data = "$id_publication=" + $id + "&values=" + $values;
    $.ajax({
        url: "Controls/ajax.php",
        type: "POST",
        data: data,
        datatype: "json",
        success: function(table) {

        }
    })

}