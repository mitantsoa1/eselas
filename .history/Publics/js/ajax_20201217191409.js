function cours(cours) {
    var data = "cours=" + cours;
    $.ajax({
        url: "Controls/ajax.php",
        type: "POST",
        data: data,
        datatype: "json",
        success: function(data) {
            if (data != " ") {
                for (var i = 0; i < data.length; i++) {
                    $('#reception').addClass('cours');
                    $('#reception').html(data[i].date + ' ' + data[i].titre + ' ' + data[i].contenu + ' ' + data[i].photo)
                }
            }
        }
    })
}