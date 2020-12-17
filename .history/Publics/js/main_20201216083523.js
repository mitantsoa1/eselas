// $(document).ready(function() {
$('#select').change(function() {
    var id = '.input' + $(this).val();
    alert($('#select').val());
    // if ($('#select').val() == 1) {
    //     $('.input1').show();
    // } else {
    //     $('.input1').remove();
    // }

});
// });




// $('#btnConnecter').on('click', function() {
//         $('.containerFormP').remove();
//     });
// function appelFormP() {

//     if ($("#nom").val() != "" && $("#niveau").val() != "" && $("#mdp").val() != "" && $("#num_inscription").val() != "" != "") {
//         $nom = $("#nom").val().toUpperCase();
//         $prenom = $("#prenom").val();
//         $niveau = $("#niveau").val();
//         $mdp = $("#mdp").val();
//         $num_inscription = $("#num_inscription").val();

//         var data = "nom=" + $nom + "&prenom=" + $prenom + "&niveau=" + $niveau + "&mdp=" + $mdp + "&num_inscription=" + $num_inscription;
//         // alert(data);
//         $.ajax({
//             url: "Controls/ajax.php",
//             type: "POST",
//             data: data,
//             datatype: "json",
//             success: function(data) {
//                 if (data == "oui") {
//                     alert("data=" + data);
//                     // }
//                 } else {
//                     alert("dataN=" + data);
//                 }
//             }
//         })
//     }


// }