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
                let showInfo = "";
                for (let i = 0; i < data.length; i++) {
                    showInfo += `
                            <li class="list-group-item m-1">
                                <p class="display-4">${words[i]}<span class="float-right"><button value="${i}" onClick="removeName(this)"  class="btn btn-danger">X</button></span></p>
                            </li>
                    `;
                };
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