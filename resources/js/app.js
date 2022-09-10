require('./bootstrap');

require('@coreui/coreui/dist/js/coreui');

$(document).on('click', '.logout-btn', function (event) {
    event.preventDefault();
    $('#logoutForm').trigger('submit');
});
