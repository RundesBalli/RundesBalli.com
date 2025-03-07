"use strict";

let toggleMenu = function(){
    document.getElementById("nav").classList.toggle("responsive");
};

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("toggleElement").addEventListener("click", toggleMenu);
});

// Thanks to NullDev <3
