// backtopbtn
window.addEventListener("scroll", function () {
    var backtop = document.getElementById('back-top');
    if (window.pageYOffset > 100) {
        backtop.classList.add('show')
    } else {
        backtop.classList.remove('show')
    }

});

// var scroll = new SmoothScroll('a[href*="#"]');

// AOS
AOS.init();
