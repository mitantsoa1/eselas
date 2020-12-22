function cours($categorie) {
    var data = "categorie=" + $categorie;
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