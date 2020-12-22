function cours() {
    var data = "cours";
    $.ajax({
        url: "Controls/ajax.php",
        type: "POST",
        data: "chercher=" + data,
        datatype: "json",
        success: function(table) {
            // 
            if (table != '') {
                let showInfo = "";
                var reception = document.getElementById("reception");
                for (let i = 0; i < table.length; i++) {
                    divR = document.createElement("div");
                    divR.className = "divRecep";
                    divR.innerHTML = table[$i].date + table[$i].categorie + table[$i].titre + table[$i].contenu + table[$i].photo;
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