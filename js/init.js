(function ($) {
    $(function () {

        $(document).ready(function () {
            $('.parallax').parallax();
        });




    }); // end of document ready
})(jQuery); // end of jQuery name space


$("#submitbtn").on("click", function (event) {
    event.preventDefault();
    swal({
            title: "Gelukt!",
            text: "Acount aangemaakt!",
            closeOnConfirm: false,
            type: "success"
        },
        function (isConfirm) {
            $("#regform").submit();
        });
});

$('.button-collapse').sideNav();
$('.button-collapse').sideNav({
    menuWidth: 300, // Default is 240
    edge: 'left', // Choose the horizontal origin
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true // Choose whether you can drag to open on touch screens
});