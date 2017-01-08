(function ($) {
    $(function () {

        $('.button-collapse').sideNav();

    }); // end of document ready
})(jQuery); // end of jQuery name space

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
