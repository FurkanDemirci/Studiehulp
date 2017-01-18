(function ($) {
    $(function () {

        $('.button-collapse').sideNav();

    }); // end of document ready
})(jQuery); // end of jQuery name space

function searchFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function signup() {
    swal("Niet alles is ingevuld!", "Graag alles invullen", "warning");
}

function account() {
    swal("Account aangemaakt!", "U kunt meteen inloggen!", "success");
}

function loginWrong() {
    swal("Verkeerde gegevens!", "Het goede email en wachtwoord invullen", "error");
}

function preferenciesGelukt() {
    swal("Bijgewerkt!", "", "success");
}

function uitgelogd() {
    swal({
        title: "U bent uitgelogd!",
        type: "success",
        timer: 2000,
        showConfirmButton: false
    });
    setTimeout(function(){ window.location.replace("../../studiehulp"); }, 2000);
}

function emailBestaat() {
    swal("Email bestaat al!", "Al een account? Probeer in te loggen", "error");
}

function notFound() {
    swal("Niks gevonden", "Heeft u het goed opgeschreven?", "error");
}

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});
