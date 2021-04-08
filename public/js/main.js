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
//lightbox
function lightbox() {
    document.getElementsByTagName("body")[0].setAttribute("style", "overflow:hidden");
}

$(document).on('click', '.lightbox', function () {
    document.getElementsByTagName("body")[0].setAttribute("style", "overflow:auto");
});
// AOS
AOS.init();
