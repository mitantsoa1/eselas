function envoyer($id) {
    var data = "id_matiere=" + $id;
    $.ajax({
        url: "Controls/ajax.php",
        type: "POST",
        data: "chercher=" + data,
        datatype: "json",
        success: function(table) {
            console.log(table);
            if (table != '') {
                $('.exercice').addClass('hide');
                $('.evaluation').addClass('hide');
                var reception = document.getElementById("reception");
                var imgR = document.getElementById("imgR");
                for (let i = 0; i < table.length; i++) {

                    divR = document.createElement("div");
                    divR.className = "divRecep";
                    divR.innerHTML = table[i].date + ' ' + table[i].categorie + ' ' + table[i].titre + ' ' + table[i].contenu + ' ' + table[i].photo;
                    reception.appendChild(divR);
                    img = document.createElement("img");
                    img.setAttribute('src', "Publics/images/" + table[i].photo);
                    imgR.appendChild(img);
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