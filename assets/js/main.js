// Call the main function
displayInfo();

// Prevent right click on the picture
get("#photo").addEventListener('contextmenu', event => event.preventDefault());

/**
 * Slowly show every elem classes
 **/

async function displayInfo() {
    const containers = get(".elem");

    for(let i = 0; i < containers.length; i++) {
        await wait(1000).then(() => {
            containers[i].classList.add("fadeIn");
            containers[i].style.visibility = "visible";
        });
    }
}