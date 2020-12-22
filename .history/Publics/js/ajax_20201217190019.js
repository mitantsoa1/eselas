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
                        $('#reception').append( < tr >
                            <
                            td > data[i].date < /td> <
                            td > data[i].titre < /td> <
                            td > data[i].contenu < /td> <
                            td > data[i].photo < /td> <
                            /tr>)
                        }
                    }
                }
            })
    }