require('./bootstrap');

require('./sb-admin-2');

$(document).on('click', '.logout-btn', function (event) {
    event.preventDefault();
    $('#logoutForm').trigger('submit');
});
