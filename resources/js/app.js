import $ from "jquery";
window.$ = window.jQuery = $;
window.Swal = require("sweetalert2");
require("./bootstrap");

window.pesansukses = function () {
    Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
      )
}
window.pesandanger = function () {
    Swal.fire(
        'Error!',
        'You clicked the button!',
        'error'
      )
}
window.pesaninfo = function () {
    Swal.fire(
        'info!',
        'You clicked the button!',
        'info'
      )
}