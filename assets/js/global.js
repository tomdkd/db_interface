function add_message(status, message) {
    $('body').prepend('<div class="alert alert-' + status + '" role="alert">' + message + '</div>');
    $('.alert').addClass('pop-top');

    setTimeout(function(){
        $('.alert').removeClass('pop-top').addClass('unpop-top');
        setTimeout(function(){
            $('.alert').remove();
        }, 1000);
    }, 3000);
}