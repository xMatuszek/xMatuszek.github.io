window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        document.getElementById("navigation").style.position = "fixed";

        document.getElementById("navigation").style.top = "0";

        document.getElementById("navigation").style.background = "#222";
    } else {
        document.getElementById("navigation").style.position = "absolute";

        document.getElementById("navigation").style.background = "none";

    }
}