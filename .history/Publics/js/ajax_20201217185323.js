function cours(cours) {
    var data = "categorie=" + cours;
    $.ajax({
        url: "Controls/ajax.php",
        type: "POST",
        data: data,
        datatype: "json",
        success: function(data) {
            if (data != " ") {

            }
        }
    })
}