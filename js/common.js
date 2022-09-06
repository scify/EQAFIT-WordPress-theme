var $ = window.jQuery;

$(window).scroll(function () {
    if ($(this).scrollTop() > 40) {
        $('header .menu').addClass("scrolled");
    } else {
        $('header .menu').removeClass("scrolled");
    }
});

var smoothScrollOnHashChange = function () {
    var hash = window.location.hash;

    if ($(hash).length > 0) {
        var top = $(hash).offset().top;
        console.log(top);
        window.scrollTo({
            top: top - 150,
            left: 0,
            behavior: 'smooth'
        });
        return false;
    }

}
window.onhashchange = smoothScrollOnHashChange;
window.onload = smoothScrollOnHashChange;


//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


