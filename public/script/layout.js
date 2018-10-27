$(document).ready(function() {

    var stickyNavTop = $('.navbar').offset().top; //topova pozicia navigatora

    var stickyNav = function(){
        var scrollTop = $(window).scrollTop(); // pozicia okna

        // ak sa prekryju tak sticky inak klasika
        if (scrollTop > stickyNavTop) {
            $('.navbar').addClass('sticky');
        } else {
            $('.navbar').removeClass('sticky');
        }
    };

    $(window).scroll(function() {
        stickyNav();
    });



    var myIndex = 0;
    carousel();


    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 5000); // Change image every 2 seconds
    }
});

