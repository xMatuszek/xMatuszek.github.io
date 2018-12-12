var hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function () {
    document.querySelector(".navigation-all").classList.toggle("open-nav");
}, false);