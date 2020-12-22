function envoyer($id) {
    var data = "id_comment=" + $id;
    $.ajax({
        url: "Controls/ajax.php",
        type: "POST",
        data: data,
        datatype: "json",
        success: function(table) {
            console.log(table);
            if (table != '') {
                //     $('.exercice').addClass('hide');
                //     $('.evaluation').addClass('hide');
                var commentaire = document.getElementById("commentaire");
                //     var imgR = document.getElementById("imgR");
                var lienComment = document.getElementById("lienComment");
                a = document.createElement("a");
                // a.setAttribute('href', "commentaire");
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