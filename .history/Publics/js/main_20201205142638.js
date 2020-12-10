// $(document).ready(function() {
//     $('#btnConnecter').on('click', function() {
//         $('.containerFormP').remove();
//     });

// });
function appelFormP() {
    $('#btnConnecter').on('click', function() {
        if ($("#nom").val() != "" && $("#niveau").val() != "" && $("#mdp").val() != "" && $("#num_inscription").val() != "" != "") {
            $nom = $("#nom").val().toUpperCase();
            $prenom = $("#prenom").val();
            $niveau = $prenom = $("#niveau").val();
            $mdp = $prenom = $("#mdp").val();
            $num_inscription = $("#num_inscription").val();

            var data = "nom=" + $nom + "&prenom=" + $prenom + "&niveau=" + $niveau + "&mdp=" + $mdp + "&num_inscription=" + $num_inscription;
            alert(nom);
            //     $.ajax({
            //         url: "Controls/ajax.php",
            //         type: "POST",
            //         data: data,
            //         datatype: "json",
            //         success: function(data) {
            //             // if (data == "success") {
            //             alert(data);
            //             // }
            //         }
            //     })
            // } else {
            //     alert('Erreur');
        }

    });
}