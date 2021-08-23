// Prevent right click on the picture
document.getElementById("photo").addEventListener('contextmenu', event => event.preventDefault());

// Variables
const header = document.getElementById("header");
const company = document.getElementById("company");
const social = document.getElementById("social");

// Slowly show containers
header.classList.add("fadeIn");
header.style.visibility = "visible";

setTimeout(() => {
    company.classList.add("fadeIn");
    company.style.visibility = "visible";

    setTimeout(() => {
        social.classList.add("fadeIn");
        social.style.visibility = "visible";
    }, 1000);
}, 1000);