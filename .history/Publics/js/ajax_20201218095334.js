function cours() {
    var data = "cours";
    $.ajax({
        url: "Controls/ajax.php",
        type: "POST",
        data: "chercher=" + data,
        datatype: "json",
        success: function(table) {
            console.log(table);
            if (table != '') {


                var reception = document.getElementById("reception");
                for (let i = 0; i < table.length; i++) {
                    var img = document.createElement("img");
                    img.src = 'Publics/images/'.$table[i].photo;

                    divR = document.createElement("div");
                    divR.className = "divRecep";
                    divR.innerHTML = table[i].date + ' ' + table[i].categorie + ' ' + table[i].titre + ' ' + table[i].contenu;

                    divR.appendChild(img);
                    reception.appendChild(divR);
                }
            }
        }
    });
    // alert('cours');
    // $("table").css("background-color", "yellow");
    // $('.exercice').addClass('vide');
    // $('.evaluation').addClass('vide');
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