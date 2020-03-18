$(function() {

    $('.menu-opener').click(function() {
        var $this = $(this);
        setTimeout(function() {
            $this.find('textarea').focus();
            ($('body').addClass('is-menu-open'));
        }, 1);
        ($('body').addClass('is-menu-open'));

    });

    $('body').click(function(e) {
        var $target = $(e.target);
        if ($target.hasClass('.open') || $target.parents('.open').length) {
            return false;
        }else{
            $('body').removeClass('is-menu-open');
        }
    });

});