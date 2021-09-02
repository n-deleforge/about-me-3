// Call the main function
displayInfo();

// Prevent right click on the picture
document.getElementById("photo").addEventListener('contextmenu', event => event.preventDefault());

/**
 * Slowly show every elem classes
 **/

async function displayInfo() {
    const containers = document.querySelectorAll(".elem");

    for(let i = 0; i < containers.length; i++) {
        await showAfter(1000).then(() => {
            containers[i].classList.add("fadeIn");
            containers[i].style.visibility = "visible";
        });
    }
}

/**
 * Set a timeout and resolve the promise when it's over
 **/

function showAfter(timeout) {
    return new Promise(resolve => {
        setTimeout(() => { resolve() }, timeout);
    });
};