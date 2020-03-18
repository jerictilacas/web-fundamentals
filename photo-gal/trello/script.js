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

    var myImage = document.getElementsByClassName("img-responsive");

    var imageArray = ['clients/1.png', 'clients/2.png', 'clients/3.png', 'clients/4.png','clients/5.png','clients/6.png'];
    var x = 0;
    function changeImage(){
        myImage[0].setAttribute("src", imageArray[x]);
        x++;
        if (x >= imageArray.length){
            x = 0;
        }
    }
    var s = setInterval(changeImage, 3000);
    myImage[0].onclick =function () {
        clearInterval(s);
    };


});