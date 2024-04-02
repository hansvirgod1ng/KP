"use strict";

let header = document.querySelector(".navbar");
let navbg = document.querySelector(".navbg");
let navtext = document.querySelector(".navtext");
let burger = document.querySelector(".burger");
let bars = document.querySelector(".bars");
let xmark = document.querySelector(".xmark");

window.addEventListener("scroll", () => {
    header.classList.toggle("fixed", window.scrollY > 0);
    header.classList.toggle("top-0", window.scrollY > 0);
    header.classList.toggle("left-0", window.scrollY > 0);
    header.classList.toggle("right-0", window.scrollY > 0);
    //   header.classList.toggle("bg-black/80", window.scrollY > 0);
    header.classList.toggle("bg-white", window.scrollY > 0);
    header.classList.toggle("transition-all", window.scrollY > 0);
    header.classList.toggle("shadow-md", window.scrollY > 0);
    header.classList.toggle("h-16", window.scrollY > 0);
    header.classList.toggle("text-black", window.scrollY > 0);
    navtext.classList.toggle("lg:text-black", window.scrollY > 0);
});

burger.addEventListener("click", () => {
    bars.classList.toggle("hidden");
    xmark.classList.toggle("hidden");
});
