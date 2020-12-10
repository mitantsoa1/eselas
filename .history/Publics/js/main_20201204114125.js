function effacer($id) {
    var data = "id=" + $id;
    $.ajax({
        url: "Controls/ajax.php",
        type: "POST",
        data: data,
        datatype: "json",
        success: function(data) {
            if (data == "success") {
                alert(data);
            }
        }
    })

}

function supprimer($id) {
    var data = "idV=" + $id;
    $.ajax({
        url: "Controls/ajax.php",
        type: "POST",
        data: data,
        datatype: "json",
        success: function(data) {
            if (data == "success") {
                alert(data);
            }
        }
    })

}

function modifierP($idP) {
    var data = "idP=" + $idP;
    // alert("ETO");
    $.ajax({
        url: "Controls/ajax.php",
        // url: "Controls/ajax.php",
        type: "POST",
        data: data,
        datatype: "json",
        success: function(data) {
            $('#formP').removeClass('hide');
            $('.tab').addClass('hide');
            $('#nomP').val(data[0].nom);
            $('#idP').val(data[0].id);
            $('#prenomP').val(data[0].prenom);
            $('#adresseP').val(data[0].adresse);
        }
    })
}

function modifierVoiture($idVoit) {
    var data = "idVoit=" + $idVoit;
    $.ajax({
        url: "Controls/ajax.php",
        type: "POST",
        data: data,
        datatype: "json",
        success: function(data) {
            $('.formV').removeClass('hide');
            $('.tab').addClass('hide');
            $('#idVoit').val(data[0].id);
            $('#marqueVoit').val(data[0].marque);
            $('#matriculeVoit').val(data[0].matricule);
            $('#couleurVoit').val(data[0].couleur);
            $('#placeVoit').val(data[0].place);
            $('#proprietaireVoit').val(data[0].proprietaire);
        }
    })
}


// $('#modifierP').on('click', function() {

//     var data = "idP=" + $idP;
//     // alert("ETO");
//     // $.ajax({
//     //     url: "Controls/ajax.php",
//     //     type: "POST",
//     //     data: data,
//     //     datatype: "json",
//     //     success: function(data) {
//     //         alert(data);
//     //     }
//     // })
// })


// function modifierVoit($id) {
//     var data = "id=" + $id;
//     $.ajax({
//         url: "Views/modifier.php",
//         type: "POST",
//         data: data,
//         datatype: "json",
//         success: function(data) {
//             if (data == "success") {
//                 alert(data);
//             }
//         }
//     })

// }












// $('#btnIndexV').on('click', function() {

//     var data = "btnV";

//     $.ajax({
//         url: "Controls/ajax.php",
//         type: "POST",
//         data: data,
//         datatype: "json",
//         success: function(data) {
//             alert(data);
//         }
//     })
// })

// $('#btnS').on('click', function() {
//     var $nom = $('#nom').val();
//     var $prenom = $('#prenom').val();
//     var $adresse = $('#adresse').val();
//     var data = "nom=" + $nom + "&prenom=" + $prenom + "&adresse=" + $adresse;

//     $.ajax({
//         url: "Controls/ajax.php",
//         type: "POST",
//         data: data,
//         datatype: "json",
//         success: function(data) {
//             alert(data);
//         }
//     })
// })



























// // $("#efface").on('click', function() {
// //     alert('id');
// // });

// function effacer($id) {

//     var data = "id=" + $id;
//     $.ajax({
//         url: "Controls/ajax.php",
//         type: "POST",
//         data: data,
//         datatype: "json",
//         success: function(data) {
//             if (data == "success") {
//                 alert(data);
//             }
//         }
//     })

// }

// function supprimer($matricule) {

//     var data = "matricule=" + $matricule;
//     $.ajax({
//         url: "Controls/ajax.php",
//         type: "POST",
//         data: data,
//         datatype: "json",
//         success: function(data) {
//             if (data == "deleteV") {
//                 alert(data);
//             }
//         }
//     })
// }

// function modifier($id_p) {
//     var data = "id_p=" + $id_p;
//     $.ajax({
//         url: "Controls/ajax.php",
//         type: "POST",
//         data: data,
//         datatype: "json",
//         success: function(data) {
//             if (data == "success_p") {
//                 alert(data);
//             }

//         }
//     })

// }

// $('#btnS').on('click', function() {
//     var $nom = $('#nom').val();
//     var $prenom = $('#prenom').val();
//     var $adresse = $('#adresse').val();
//     var data = "nom=" + $nom + "&prenom=" + $prenom + "&adresse=" + $adresse;
//     $.ajax({
//         url: "Controls/ajax.php",
//         type: "POST",
//         data: data,
//         datatype: "json",
//         success: function(data) {
//             alert(data);
//         }
//     })
// })
// $('#btnE').on('click', function() {
//     var $marque = $('#marque').val();
//     var $matricule = $('#matricule').val();
//     var $couleur = $('#couleur').val();
//     var $place = $('#place').val();
//     var $proprietaire = $('#proprietaire').val();
//     var data = "marque=" + $marque + "&matricule=" + $matricule + "&couleur=" + $couleur + "&place=" + $place + "&proprietaire=" + $proprietaire;
//     $.ajax({
//         url: "Controls/ajax.php",
//         type: "POST",
//         data: data,
//         datatype: "json",
//         success: function(data) {
//             // alert("data= " + data);
//             header("location:affichage.php");

//         }
//     })
// })