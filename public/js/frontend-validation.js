$(document).ready(function () {
    $('.form-signin').on('submit', function (e) {
        $('.error-name').addClass('hidden');
        if ($('#name').val().length < 5 || $('#name').val() == 'Aleks') {
            //alert('Name should be more then 5 character and it should not be Aleks!');
            $('.error-name').removeClass('hidden');
            e.preventDefault();
        }
    });
});
