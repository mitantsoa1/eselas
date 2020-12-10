// $(document).ready(function() {
//     $('#btnConnecter').on('click', function() {
//         $('.containerFormP').remove();
//     });

// });
function appelFormP() {
    $('#btnConnecter').on('click', function() {
        if ($("#nom").val() != "" && $("#niveau").val() != "" && $("#mdp").val() != "" && $("#num_inscription").val() != "" != "") {
            $nom = htmlspecialchars(trim(strtoupper($_POST['nom'])));
            $prenom = ucwords(htmlspecialchars(trim($_POST['prenom'])));
            $niveau = htmlspecialchars(trim($_POST['niveau']));
            $mdp = htmlspecialchars(trim($_POST['mdp']));
            $num_inscription = htmlspecialchars(trim($_POST['num_inscription']));

            var data = "nom=" + $nom & "prenom=" + $prenom & "niveau=" + $niveau & "mdp=" + $mdp & "num_inscription=" + $num_inscription;
            $.ajax({
                url: "Controls/ajax.php",
                type: "POST",
                data: data,
                datatype: "json",
                success: function(data) {
                    // if (data == "success") {
                    alert(data);
                    // }
                }
            })
        } else {
            alert('Erreur');
        }

    });
}