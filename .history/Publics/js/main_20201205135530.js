// $(document).ready(function() {
//     $('#btnConnecter').on('click', function() {
//         $('.containerFormP').remove();
//     });

// });
function appelFormP() {
    if (isset($_POST['btnConnecter'])) {
        if ($_POST['nom'] != "" && $_POST['niveau'] != "" && $_POST['num_inscription'] != "") {
            $nom = htmlspecialchars(trim(strtoupper($_POST['nom'])));
            $prenom = ucwords(htmlspecialchars(trim($_POST['prenom'])));
            $niveau = htmlspecialchars(trim($_POST['niveau']));
            $mdp = htmlspecialchars(trim($_POST['mdp']));
            $num_inscription = htmlspecialchars(trim($_POST['num_inscription']));

            var data = "nom=" + $nom & "prenom=" + $prenom & "niveau=" + $niveau & "mdp=" + $mdp & "num_inscription=" + $num_inscription;
        }

    }
}