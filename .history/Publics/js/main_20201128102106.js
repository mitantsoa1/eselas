$('btnIndexV').on('click', function() {
    alert(data);
    var data = "btnIndexV";

    $.ajax({
        url: "Controls/ajax.php",
        type: "POST",
        data: data,
        datatype: "json",
        success: function(data) {
            alert(data);
        }
    })
})



























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