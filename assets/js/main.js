// Start
displayInfo();

// Prevent right click on the picture
document.getElementById("photo").addEventListener('contextmenu', event => event.preventDefault());

// Functions

// Slowly show the differents
async function displayInfo() {
    await showAfter(500).then(() => {
        document.getElementById("header").classList.add("fadeIn");
        document.getElementById("header").style.visibility = "visible";
    });

    await showAfter(1500).then(() => {
        document.getElementById("company").classList.add("fadeIn");
        document.getElementById("company").style.visibility = "visible";
    });

    await showAfter(1500).then(() => {
        document.getElementById("social").classList.add("fadeIn");
        document.getElementById("social").style.visibility = "visible";
    });
}

// Resolve a promise after the timeout is over
function showAfter(timeout) {
    return new Promise(resolve => {
        setTimeout(() => {
            resolve();
        }, timeout);
    });
};