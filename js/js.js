$('.carousel').slick({
    arrows: false,
    responsive: [
        {
            breakpoint: 600,
            settings:{
                arrows: false
            }
        }
    ]
});

window.onload = function () {

    var scrolled;
    var timer;

    document.getElementById('scroll-btn').onclick = function () {
        scrolled = window.pageYOffset;
        scrollToTop();
        //window.scrollTo(0,0);
    }
    function scrollToTop() {
        if (scrolled > 0){
            window.scrollTo(0, scrolled);
            scrolled = scrolled - 200;//scroll speed
            timer = setTimeout(scrollToTop, 50);
        }
        else {
            clearTimeout(timer);
            window.scrollTo(0,0);
        }
    }
}