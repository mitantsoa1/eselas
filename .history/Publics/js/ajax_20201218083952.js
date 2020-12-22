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
                for (let i = 0; i < table.length; i++) {
                    showInfo += `
                            <li class="list-group-item m-1">${table[$i].date}</li>
                            <li class="list-group-item m-1">${table[$i].categorie}</li>
                            <li class="list-group-item m-1">${table[$i].titre}</li>
                            <li class="list-group-item m-1">${table[$i].contenu}</li>
                            <li class="list-group-item m-1">${table[$i].photo}</li>
                    `;
                };
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