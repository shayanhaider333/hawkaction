$('.addition01').click(function() {
    $(this).addClass('selected');
}), function() { 
    $(this).removeClass('selected');
};

var scene = document.getElementById('scene');
var parallax = new Parallax(scene);
/*
$(document).ready(function(){
    $(window).scroll(function(){
        var positionTop = $(document).scrollTop();
        console.log(positionTop);

        if((positionTop > 183) && (positionTop < 235)) {
            $('#gig-one').addClass('animated jackInTheBox');
            $('#gig-two').addClass('animated jackInTheBox');
            $('#gig-three').addClass('animated jackInTheBox');
            $('#gig-four').addClass('animated jackInTheBox');
        }

        if((positionTop > 500) && (positionTop < 640)) {
            $('#gig00').addClass('animated jackInTheBox');
            $('#gig01').addClass('animated jackInTheBox');
            $('#gig02').addClass('animated jackInTheBox');
            $('#gig03').addClass('animated jackInTheBox');
        }

        if((positionTop > 965) && (positionTop < 1000)) {
            $('#gigA').addClass('animated jackInTheBox');
            $('#gigB').addClass('animated jackInTheBox');
            $('#gigC').addClass('animated jackInTheBox');
            $('#gigD').addClass('animated jackInTheBox');
        }

        if((positionTop > 1100) && (positionTop < 1130)) {
            $('.view-more-col').addClass('animated shake');
        }
    });
});
*/